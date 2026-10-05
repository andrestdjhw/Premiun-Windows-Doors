<?php
// Opciones de color por serie (una fila por serie) a partir de pwd_series_options().
// $args: eyebrow, title, text, rows (array de etiqueta => clave de pwd_series_options(); listas de colores
// o arrays nombre => colores para hardware/grids), bg (white|slate).
$block = wp_parse_args($args, array('eyebrow' => '', 'title' => '', 'text' => '', 'rows' => array(), 'bg' => 'white'));
$chip = function ($color) {
  printf(
    '<li class="flex items-center gap-2 text-sm text-slate-700"><span class="size-5 shrink-0 rounded-full border border-slate-300" style="background:%s"></span>%s</li>',
    esc_attr(pwd_color_swatch($color)),
    esc_html($color)
  );
};
?>
<section class="<?php echo $block['bg'] === 'slate' ? 'bg-slate-50' : 'bg-white'; ?> py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
      <p class="eyebrow text-brand-600"><?php echo esc_html($block['eyebrow']); ?></p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl"><?php echo esc_html($block['title']); ?></h2>
      <?php if ($block['text']) : ?><p class="mt-4 text-lg leading-relaxed text-slate-600"><?php echo esc_html($block['text']); ?></p><?php endif; ?>
    </div>

    <ul class="mt-12 divide-y divide-slate-200 border-y border-slate-200">
      <?php foreach (pwd_series_data() as $slug => $series) :
        $options = pwd_series_options($slug);
        if (!array_filter(array_map(function ($key) use ($options) { return $options[$key]; }, $block['rows']))) continue; ?>
        <li <?php echo pwd_reveal(); ?> class="grid gap-6 py-8 lg:grid-cols-12">
          <div class="lg:col-span-3">
            <a href="<?php echo esc_url(home_url('/series/' . $slug . '/')); ?>" class="text-xl font-semibold tracking-tight text-slate-900 hover:text-brand-700"><?php echo esc_html($series['name']); ?></a>
            <p class="mt-1 text-sm text-slate-500"><?php echo esc_html($series['material']); ?></p>
          </div>
          <dl class="grid gap-6 sm:grid-cols-2 lg:col-span-9">
            <?php foreach ($block['rows'] as $label => $key) :
              $value = $options[$key];
              if (!$value) continue; ?>
              <div>
                <dt class="text-sm font-medium text-slate-900"><?php echo esc_html($label); ?></dt>
                <dd class="mt-3">
                  <?php if (array_keys($value) === range(0, count($value) - 1)) : ?>
                    <ul class="flex flex-wrap gap-x-5 gap-y-2"><?php array_map($chip, $value); ?></ul>
                  <?php else : ?>
                    <ul class="space-y-3">
                      <?php foreach ($value as $name => $colors) : ?>
                        <li>
                          <p class="text-sm text-slate-600"><?php echo esc_html($name); ?></p>
                          <ul class="mt-2 flex flex-wrap gap-x-5 gap-y-2"><?php array_map($chip, $colors); ?></ul>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
                </dd>
              </div>
            <?php endforeach; ?>
          </dl>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
