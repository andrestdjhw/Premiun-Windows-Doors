<?php
// Formulario configurable enviado con EmailJS (src/scripts/forms.js), con columna de contexto a la izquierda.
// $args:
//   id            id de la sección (ancla) y prefijo de los campos
//   eyebrow, title, text
//   points        array opcional de textos (lista con check en la columna izquierda)
//   aside         HTML opcional bajo la lista (ya escapado), ej. datos de contacto
//   form_name     nombre que llega en el correo ({{form_name}})
//   template      constante de EmailJS; si no está definida se usa PWD_EMAILJS_GENERAL_TEMPLATE_ID
//   success       mensaje al enviar
//   submit        texto del botón
//   groups        array de fieldsets: array('legend' => '', 'fields' => array(campo, ...))
//   campo:        name, label, type (text|email|tel|select|checkboxes|textarea), required (bool),
//                 options (select/checkboxes), full (ocupa las dos columnas), placeholder, autocomplete
$form = wp_parse_args($args, array(
  'id' => 'form', 'eyebrow' => '', 'title' => '', 'text' => '', 'points' => array(), 'aside' => '',
  'form_name' => '', 'template' => 'PWD_EMAILJS_GENERAL_TEMPLATE_ID', 'success' => 'Thank you. Your message was sent and our team will follow up shortly.',
  'submit' => 'Send', 'groups' => array(),
));
$input = 'mt-2 block w-full rounded-sm border border-slate-300 bg-white px-4 py-3 text-[15px] text-slate-900 outline-none transition-colors placeholder:text-slate-400 focus:border-brand-600 focus:ring-2 focus:ring-brand-600/20';
$label = 'block text-sm font-medium text-slate-900';
$required = ' <span class="text-brand-600">*</span>';

$render = function ($field) use ($form, $input, $label, $required) {
  $field = wp_parse_args($field, array('type' => 'text', 'required' => false, 'options' => array(), 'full' => false, 'placeholder' => '', 'autocomplete' => ''));
  $id = $form['id'] . '-' . $field['name'];
  $attrs = sprintf(
    'id="%s" name="%s" data-label="%s"%s%s%s',
    esc_attr($id),
    esc_attr($field['name']),
    esc_attr($field['label']),
    $field['required'] ? ' required' : '',
    $field['placeholder'] ? ' placeholder="' . esc_attr($field['placeholder']) . '"' : '',
    $field['autocomplete'] ? ' autocomplete="' . esc_attr($field['autocomplete']) . '"' : ''
  );
  $wrap = $field['full'] || in_array($field['type'], array('textarea', 'checkboxes'), true) ? 'sm:col-span-2' : '';

  if ($field['type'] === 'checkboxes') {
    printf('<fieldset class="%s"><legend class="%s">%s%s</legend><div class="mt-3 flex flex-wrap gap-2">', $wrap, $label, esc_html($field['label']), $field['required'] ? $required : '');
    foreach ($field['options'] as $option) {
      printf(
        '<label class="inline-flex cursor-pointer items-center gap-2 rounded-sm border border-slate-300 bg-white px-3.5 py-2 text-sm text-slate-700 transition-colors has-checked:border-brand-600 has-checked:bg-brand-50 has-checked:text-brand-800"><input type="checkbox" name="%s" value="%s" data-label="%s" class="size-4 accent-brand-700">%s</label>',
        esc_attr($field['name']),
        esc_attr($option),
        esc_attr($field['label']),
        esc_html($option)
      );
    }
    echo '</div></fieldset>';
    return;
  }

  printf('<div class="%s"><label for="%s" class="%s">%s%s</label>', $wrap, esc_attr($id), $label, esc_html($field['label']), $field['required'] ? $required : '');
  if ($field['type'] === 'select') {
    printf('<select %s class="%s"><option value="">Select…</option>', $attrs, $input);
    // value fijo en inglés: el correo llega igual aunque el visitante vea la página en español.
    foreach ($field['options'] as $option) printf('<option value="%s">%s</option>', esc_attr($option), esc_html($option));
    echo '</select>';
  } elseif ($field['type'] === 'textarea') {
    printf('<textarea %s rows="5" class="%s"></textarea>', $attrs, $input);
  } else {
    printf('<input type="%s" %s class="%s">', esc_attr($field['type']), $attrs, $input);
  }
  echo '</div>';
};
?>
<section id="<?php echo esc_attr($form['id']); ?>" class="scroll-mt-28 bg-white py-20 lg:py-28">
  <div class="site-container grid gap-14 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-4">
      <?php if ($form['eyebrow']) : ?>
        <p class="eyebrow text-brand-600"><?php echo esc_html($form['eyebrow']); ?></p>
      <?php endif; ?>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl"><?php echo esc_html($form['title']); ?></h2>
      <?php if ($form['text']) : ?>
        <p class="mt-4 text-lg leading-relaxed text-slate-600"><?php echo esc_html($form['text']); ?></p>
      <?php endif; ?>
      <?php if ($form['points']) : ?>
        <ul class="mt-8 space-y-3 text-sm text-slate-700">
          <?php foreach ($form['points'] as $point) : ?>
            <li class="flex items-start gap-3"><?php echo pwd_icon('badge-check', 'mt-0.5 size-4 shrink-0 text-brand-600') . esc_html($point); ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
      <?php echo $form['aside']; ?>
    </div>

    <form <?php echo pwd_emailjs_attrs($form['template'], $form['form_name'], $form['success']); ?> <?php echo pwd_reveal(1); ?> class="rounded-sm border border-slate-200 bg-slate-50 p-6 sm:p-10 lg:col-span-8">
      <?php foreach ($form['groups'] as $i => $group) : ?>
        <fieldset class="<?php echo $i ? 'mt-10' : ''; ?>">
          <?php if (!empty($group['legend'])) : ?>
            <legend class="font-mono text-[11px] uppercase tracking-[0.2em] text-slate-500"><?php echo esc_html($group['legend']); ?></legend>
          <?php endif; ?>
          <div class="mt-5 grid gap-5 sm:grid-cols-2">
            <?php foreach ($group['fields'] as $field) $render($field); ?>
          </div>
        </fieldset>
      <?php endforeach; ?>

      <?php // Honeypot: oculto para personas, los bots suelen llenarlo. ?>
      <div aria-hidden="true" class="absolute -left-[9999px]">
        <label for="<?php echo esc_attr($form['id']); ?>-website">Website</label>
        <input id="<?php echo esc_attr($form['id']); ?>-website" name="website" type="text" tabindex="-1" autocomplete="off">
      </div>

      <label class="mt-8 flex items-start gap-3 text-sm leading-relaxed text-slate-600">
        <input type="checkbox" name="consent" value="Yes" required class="mt-1 size-4 shrink-0 accent-brand-700">
        <span>
          I agree to be contacted about this request and to the
          <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" class="font-medium text-brand-700 underline underline-offset-2">Privacy Policy</a>.
        </span>
      </label>

      <div class="mt-8 flex flex-col gap-4 sm:flex-row sm:items-center">
        <button type="submit" class="btn-sweep group inline-flex justify-center rounded-sm bg-brand-800 px-7 py-3.5 text-[15px] font-medium text-white shadow-sm disabled:cursor-wait disabled:opacity-60">
          <span class="inline-flex items-center gap-2">
            <?php echo esc_html($form['submit']); ?>
            <?php echo pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1'); ?>
          </span>
        </button>
        <p data-form-status role="status" aria-live="polite" hidden class="text-sm font-medium data-[type=error]:text-red-700 data-[type=info]:text-slate-600 data-[type=success]:text-emerald-700"></p>
      </div>
    </form>
  </div>
</section>
