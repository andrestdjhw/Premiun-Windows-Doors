<?php
// "What Premium should prove": la evidencia que reduce la incertidumbre de ejecución.
$proof = array(
  array('icon' => 'factory', 'title' => 'Manufacturing capability', 'text' => 'In-house production in Corona, California.', 'href' => '/capabilities/'),
  array('icon' => 'layers', 'title' => 'Product fit', 'text' => 'The right series and configurations for the application.', 'href' => '/solutions/'),
  array('icon' => 'badge-check', 'title' => 'Technical readiness', 'text' => 'Drawings, specifications and certifications available early.', 'href' => '/resources/technical/'),
  array('icon' => 'file-text', 'title' => 'Documentation', 'text' => 'Consistent documents from submittal to closeout.', 'href' => '/resources/'),
  array('icon' => 'file-badge', 'title' => 'Project communication', 'text' => 'A project-support process with clear points of contact.', 'href' => '/professionals/project-support/'),
  array('icon' => 'shield-check', 'title' => 'Warranty & service process', 'text' => 'Defined warranty terms and service requests.', 'href' => '/warranty/'),
  array('icon' => 'award', 'title' => 'Project evidence', 'text' => 'Completed work across residential, multifamily and commercial.', 'href' => '/projects/'),
);
?>
<section class="bg-slate-50 py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
      <p class="eyebrow text-brand-600">What Premium proves</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Manufacturing capability, translated into lower execution risk.</h2>
    </div>

    <ul class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
      <?php foreach ($proof as $i => $item) : ?>
        <li <?php echo pwd_reveal($i % 4); ?>>
          <a href="<?php echo esc_url(home_url($item['href'])); ?>" data-tilt class="group flex h-full flex-col rounded-sm border border-slate-200 bg-white p-7 transition-colors hover:border-brand-600">
            <span class="flex size-12 items-center justify-center rounded-full bg-brand-50 text-brand-700">
              <?php echo pwd_icon($item['icon'], 'size-6'); ?>
            </span>
            <span class="mt-6 text-lg font-semibold tracking-tight text-slate-900"><?php echo esc_html($item['title']); ?></span>
            <span class="mt-2 text-sm leading-relaxed text-slate-600"><?php echo esc_html($item['text']); ?></span>
            <span class="mt-auto inline-flex items-center gap-2 pt-6 text-sm font-medium text-brand-700">
              Learn more
              <?php echo pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1'); ?>
            </span>
          </a>
        </li>
      <?php endforeach; ?>
      <li <?php echo pwd_reveal(3); ?>>
        <a href="#submit-project" class="group flex h-full flex-col justify-between rounded-sm bg-brand-900 p-7 text-white transition-colors hover:bg-brand-800">
          <span class="text-lg font-semibold tracking-tight">Have a project in development?</span>
          <span class="mt-6 inline-flex items-center gap-2 text-sm font-medium">
            Submit a Project
            <?php echo pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1'); ?>
          </span>
        </a>
      </li>
    </ul>
  </div>
</section>
