<?php
// Sección: información para profesionales antes de comprometer el proyecto.
$audiences = array(
  array(
    'icon' => 'truck',
    'title' => 'Dealers & Distributors',
    'text' => 'Product breadth, support, recurring relationships, iQuote access.',
    'links' => array('Dealer Program' => '/professionals/dealer-program/', 'iQuote Login' => '/iquote/', 'Become a Dealer' => '/professionals/become-a-dealer/'),
  ),
  array(
    'icon' => 'drafting-compass',
    'title' => 'Architects & Specifiers',
    'text' => 'Technical drawings, certifications, configurations, performance documentation.',
    'links' => array('Technical Resources' => '/resources/technical/', 'Specifications' => '/professionals/specifications/', 'Finish & Glass Options' => '/professionals/finish-glass-options/'),
  ),
  array(
    'icon' => 'hard-hat',
    'title' => 'Developers & General Contractors',
    'text' => 'Project support, documentation, manufacturing capability, schedule and coordination.',
    'links' => array('Project Support' => '/professionals/project-support/', 'Multifamily Solutions' => '/solutions/multifamily/', 'Commercial Solutions' => '/solutions/commercial/'),
  ),
);
?>
<section class="relative isolate overflow-hidden bg-brand-900 py-20 text-white lg:py-28">
  <div aria-hidden="true" class="absolute inset-0 -z-10 bg-[radial-gradient(ellipse_at_top_right,var(--color-brand-600),transparent_60%)] opacity-60"></div>
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
      <div class="max-w-2xl">
        <p class="eyebrow text-brand-100">For professionals</p>
        <h2 class="mt-4 text-3xl font-semibold tracking-tight lg:text-4xl">The information you need to evaluate Premium before the project is committed.</h2>
      </div>
      <div class="shrink-0">
        <?php echo pwd_button('Work With Premium', home_url('/professionals/'), 'outline-light'); ?>
      </div>
    </div>

    <div class="mt-12 grid gap-6 md:grid-cols-3">
      <?php foreach ($audiences as $i => $audience) : ?>
        <div <?php echo pwd_reveal($i); ?> data-tilt class="flex flex-col rounded-sm bg-white p-8 text-slate-900 shadow-xl shadow-brand-950/30">
          <span class="flex size-12 items-center justify-center rounded-sm bg-brand-800 text-white">
            <?php echo pwd_icon($audience['icon'], 'size-6'); ?>
          </span>
          <h3 class="mt-6 text-xl font-semibold tracking-tight text-slate-900"><?php echo esc_html($audience['title']); ?></h3>
          <p class="mt-3 leading-relaxed text-slate-600"><?php echo esc_html($audience['text']); ?></p>
          <ul class="mt-6 border-t border-slate-200 pt-4">
            <?php foreach ($audience['links'] as $label => $path) : ?>
              <li>
                <a href="<?php echo esc_url(home_url($path)); ?>" class="group flex items-center justify-between py-2 text-sm font-medium text-slate-800 transition-colors hover:text-brand-700">
                  <?php echo esc_html($label); ?>
                  <?php echo pwd_icon('arrow-right', 'size-4 text-brand-700 transition-transform group-hover:translate-x-1'); ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
