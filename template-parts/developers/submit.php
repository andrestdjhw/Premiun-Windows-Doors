<?php
// Project submission: formulario de intake enviado con EmailJS.
// Captura tipo de proyecto, ubicación, alcance, plazo, productos y rol para enrutar la consulta.
$select_options = array(
  'role' => array('Developer', 'General Contractor', 'Project Manager', 'Purchasing', 'Architect / Specifier', 'Dealer', 'Other'),
  'project_type' => array('Multifamily', 'Commercial', 'Residential', 'Mixed-use', 'Other'),
  'scope' => array('Under 50 openings', '50–250 openings', '250–1,000 openings', '1,000+ openings', 'Not sure yet'),
  'timeframe' => array('Bidding / pre-construction', 'Within 3 months', '3–6 months', '6–12 months', '12+ months'),
);
$products = array('Windows', 'Sliding patio doors', 'Swing doors', 'Multi-slide / multi-fold doors', 'Not sure yet');

$input = 'mt-2 block w-full rounded-sm border border-slate-300 bg-white px-4 py-3 text-[15px] text-slate-900 outline-none transition-colors placeholder:text-slate-400 focus:border-brand-600 focus:ring-2 focus:ring-brand-600/20';
$label = 'block text-sm font-medium text-slate-900';

$field = function ($name, $text, $type = 'text', $required = true, $autocomplete = '') use ($input, $label) {
  printf(
    '<div><label for="pi-%1$s" class="%5$s">%2$s%6$s</label><input id="pi-%1$s" name="%1$s" type="%3$s" %4$s %7$s class="%8$s"></div>',
    esc_attr($name),
    esc_html($text),
    esc_attr($type),
    $required ? 'required' : '',
    $label,
    $required ? ' <span class="text-brand-600">*</span>' : '',
    $autocomplete ? 'autocomplete="' . esc_attr($autocomplete) . '"' : '',
    $input
  );
};

$select = function ($name, $text) use ($input, $label, $select_options) {
  printf('<div><label for="pi-%1$s" class="%3$s">%2$s <span class="text-brand-600">*</span></label><select id="pi-%1$s" name="%1$s" required class="%4$s"><option value="">Select…</option>', esc_attr($name), esc_html($text), $label, $input);
  foreach ($select_options[$name] as $option) {
    printf('<option>%s</option>', esc_html($option));
  }
  echo '</select></div>';
};
?>
<section id="submit-project" class="scroll-mt-28 bg-white py-20 lg:py-28">
  <div class="site-container grid gap-14 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-4">
      <p class="eyebrow text-brand-600">Project submission</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Submit a project</h2>
      <p class="mt-4 text-lg leading-relaxed text-slate-600">
        Tell us about the project and your role. We use these details to route your inquiry to the right team.
      </p>
      <ul class="mt-8 space-y-3 text-sm text-slate-700">
        <?php foreach (array('Project type and location', 'Expected scope and timeframe', 'Products of interest', 'Your role on the project') as $item) : ?>
          <li class="flex items-center gap-3">
            <?php echo pwd_icon('badge-check', 'size-4 shrink-0 text-brand-600'); ?>
            <?php echo esc_html($item); ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <form <?php echo pwd_emailjs_attrs('PWD_EMAILJS_PROJECT_TEMPLATE_ID', 'Project submission — Developers & GCs'); ?> <?php echo pwd_reveal(1); ?> class="rounded-sm border border-slate-200 bg-slate-50 p-6 sm:p-10 lg:col-span-8">
      <fieldset>
        <legend class="font-mono text-[11px] uppercase tracking-[0.2em] text-slate-500">About you</legend>
        <div class="mt-5 grid gap-5 sm:grid-cols-2">
          <?php
          $field('name', 'Full name', 'text', true, 'name');
          $field('company', 'Company', 'text', true, 'organization');
          $field('email', 'Email', 'email', true, 'email');
          $field('phone', 'Phone', 'tel', false, 'tel');
          $select('role', 'Your role on the project');
          ?>
        </div>
      </fieldset>

      <fieldset class="mt-10">
        <legend class="font-mono text-[11px] uppercase tracking-[0.2em] text-slate-500">About the project</legend>
        <div class="mt-5 grid gap-5 sm:grid-cols-2">
          <?php
          $select('project_type', 'Project type');
          $field('location', 'Project location (city, state)');
          $select('scope', 'Expected scope');
          $select('timeframe', 'Timeframe');
          ?>
        </div>

        <fieldset class="mt-6">
          <legend class="<?php echo $label; ?>">Products of interest</legend>
          <div class="mt-3 flex flex-wrap gap-2">
            <?php foreach ($products as $product) : ?>
              <label class="inline-flex cursor-pointer items-center gap-2 rounded-sm border border-slate-300 bg-white px-3.5 py-2 text-sm text-slate-700 transition-colors has-checked:border-brand-600 has-checked:bg-brand-50 has-checked:text-brand-800">
                <input type="checkbox" name="products" value="<?php echo esc_attr($product); ?>" class="size-4 accent-brand-700">
                <?php echo esc_html($product); ?>
              </label>
            <?php endforeach; ?>
          </div>
        </fieldset>

        <div class="mt-6">
          <label for="pi-details" class="<?php echo $label; ?>">Project details</label>
          <textarea id="pi-details" name="details" rows="4" placeholder="Number of units or buildings, series of interest, performance requirements…" class="<?php echo $input; ?>"></textarea>
        </div>
      </fieldset>

      <?php // Honeypot: oculto para personas, los bots suelen llenarlo. ?>
      <div aria-hidden="true" class="absolute -left-[9999px]">
        <label for="pi-website">Website</label>
        <input id="pi-website" name="website" type="text" tabindex="-1" autocomplete="off">
      </div>

      <label class="mt-8 flex items-start gap-3 text-sm leading-relaxed text-slate-600">
        <input type="checkbox" name="consent" value="Yes" required class="mt-1 size-4 shrink-0 accent-brand-700">
        <span>
          I agree to be contacted about this project and to the
          <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" class="font-medium text-brand-700 underline underline-offset-2">Privacy Policy</a>.
          This form is delivered through EmailJS.
        </span>
      </label>

      <div class="mt-8 flex flex-col gap-4 sm:flex-row sm:items-center">
        <button type="submit" class="btn-sweep group inline-flex justify-center rounded-sm bg-brand-800 px-7 py-3.5 text-[15px] font-medium text-white shadow-sm disabled:cursor-wait disabled:opacity-60">
          <span class="inline-flex items-center gap-2">
            Submit Project
            <?php echo pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1'); ?>
          </span>
        </button>
        <p data-form-status role="status" aria-live="polite" hidden class="text-sm font-medium data-[type=error]:text-red-700 data-[type=info]:text-slate-600 data-[type=success]:text-emerald-700"></p>
      </div>
    </form>
  </div>
</section>
