<?php
// What to show: la evidencia que la página pone al alcance del equipo del proyecto.
// Los elementos sin 'href' todavía no tienen página propia.
$evidence = array(
  array('icon' => 'factory', 'title' => 'Manufacturing capability', 'href' => '/capabilities/'),
  array('icon' => 'layers', 'title' => 'Compatible series', 'href' => '/compare-series/'),
  array('icon' => 'file-text', 'title' => 'Documentation', 'href' => '/resources/'),
  array('icon' => 'badge-check', 'title' => 'Project-support process', 'href' => '/professionals/project-support/'),
  array('icon' => 'file-text', 'title' => 'Drawings', 'href' => '/resources/technical-drawings/'),
  array('icon' => 'award', 'title' => 'Certifications', 'href' => '/resources/certifications/'),
  array('icon' => 'shield-check', 'title' => 'Warranty', 'href' => '/warranty/'),
  array('icon' => 'file-badge', 'title' => 'Packaging & delivery', 'href' => ''),
  array('icon' => 'layers', 'title' => 'Case studies', 'href' => '/projects/'),
);
$card = 'flex h-full items-center gap-4 rounded-sm border border-slate-200 bg-white p-5';
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container grid gap-12 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-4">
      <p class="eyebrow text-brand-600">Project evidence</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Everything the project team needs to evaluate.</h2>
      <div class="mt-8">
        <?php echo pwd_button('Request Project Support', home_url('/professionals/project-support/')); ?>
      </div>
    </div>

    <ul class="grid gap-4 sm:grid-cols-2 lg:col-span-8 xl:grid-cols-3">
      <?php foreach ($evidence as $i => $item) : ?>
        <li <?php echo pwd_reveal($i % 3); ?>>
          <?php if ($item['href']) : ?>
            <a href="<?php echo esc_url(home_url($item['href'])); ?>" data-tilt class="group <?php echo $card; ?> transition-colors hover:border-brand-600">
          <?php else : ?>
            <div class="<?php echo $card; ?>">
          <?php endif; ?>
            <span class="flex size-11 shrink-0 items-center justify-center rounded-full bg-brand-50 text-brand-700">
              <?php echo pwd_icon($item['icon'], 'size-5'); ?>
            </span>
            <span class="flex-1 font-medium text-slate-900"><?php echo esc_html($item['title']); ?></span>
          <?php if ($item['href']) : ?>
              <?php echo pwd_icon('arrow-right', 'size-4 text-brand-700 transition-transform group-hover:translate-x-1'); ?>
            </a>
          <?php else : ?>
            </div>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
