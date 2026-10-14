<?php
// Sección: información para profesionales antes de comprometer el proyecto.
// Toda la card lleva a la página de la audiencia ('href', stretched link en el título);
// los links de abajo quedan por encima (relative z-10) y funcionan por separado.
$audiences = array(
  array(
    'icon' => 'truck',
    'title' => 'Dealers & Distributors',
    'href' => '/professionals/dealers-distributors/',
    'text' => 'Product breadth, support, recurring relationships, iQuote access.',
    'links' => array('Dealer Program' => '/professionals/dealer-program/', 'iQuote Login' => '/iquote/', 'Become a Dealer' => '/professionals/become-a-dealer/'),
  ),
  array(
    'icon' => 'drafting-compass',
    'title' => 'Architects & Specifiers',
    'href' => '/professionals/architects-specifiers/',
    'text' => 'Technical drawings, certifications, configurations, performance documentation.',
    'links' => array('Technical Resources' => '/resources/technical/', 'Specifications' => '/professionals/specifications/', 'Finish & Glass Options' => '/professionals/finish-glass-options/'),
  ),
  array(
    'icon' => 'hard-hat',
    'title' => 'Developers & General Contractors',
    'href' => '/professionals/developers-general-contractors/',
    'text' => 'Project support, documentation, manufacturing capability, schedule and coordination.',
    'links' => array('Project Support' => '/professionals/project-support/', 'Multifamily Solutions' => '/solutions/multifamily/', 'Commercial Solutions' => '/solutions/commercial/'),
  ),
);
?>
<section class="relative isolate overflow-hidden bg-surface py-20 lg:py-28">
  <?php echo pwd_brand_mark('bottom-right', 'light'); ?>
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
      <div class="max-w-2xl">
        <p class="eyebrow text-brand-600">For professionals</p>
        <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">The information you need to evaluate Premium before the project is committed.</h2>
      </div>
      <div class="shrink-0">
        <?php echo pwd_button('Work With Premium', home_url('/professionals/'), 'outline'); ?>
      </div>
    </div>

    <div class="mt-12 grid gap-6 md:grid-cols-3">
      <?php foreach ($audiences as $i => $audience) : ?>
        <div <?php echo pwd_reveal($i); ?> data-tilt class="group/card relative flex flex-col rounded-sm border border-slate-200 bg-white p-8 transition-colors hover:border-brand-600">
          <span class="flex size-12 items-center justify-center rounded-sm bg-brand-800 text-white transition-colors group-hover/card:bg-brand-600">
            <?php echo pwd_icon($audience['icon'], 'size-6'); ?>
          </span>
          <h3 class="mt-6 text-xl font-semibold tracking-tight text-slate-900">
            <a href="<?php echo esc_url(home_url($audience['href'])); ?>" class="inline-flex items-center gap-2 transition-colors after:absolute after:inset-0 after:content-[''] group-hover/card:text-brand-700">
              <?php echo esc_html($audience['title']); ?>
              <?php echo pwd_icon('arrow-right', 'size-4 shrink-0 -translate-x-1 text-brand-700 opacity-0 transition-all group-hover/card:translate-x-0 group-hover/card:opacity-100'); ?>
            </a>
          </h3>
          <p class="mt-3 leading-relaxed text-slate-600"><?php echo esc_html($audience['text']); ?></p>
          <ul class="relative z-10 mt-6 border-t border-slate-200 pt-4">
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
