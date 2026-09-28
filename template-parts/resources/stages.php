<?php
// Recursos por etapa: evaluar, especificar, instalar y dar servicio (texto del hero del brief).
$stages = array(
  array('title' => 'Evaluate', 'links' => array('Brochures & Literature' => '/resources/brochures/', 'Compare Series' => '/series/#compare')),
  array('title' => 'Specify', 'links' => array('Detail Drawings' => '/resources/technical/?type=detail-drawing', 'Certifications' => '/resources/technical/?type=certification', 'Performance' => '/resources/technical/?type=performance')),
  array('title' => 'Install', 'links' => array('Installation Guides' => '/resources/technical/?type=installation-guide')),
  array('title' => 'Service', 'links' => array('Warranty' => '/warranty/', 'Service Request' => '/service-request/', 'FAQs' => '/faqs/')),
);
?>
<section class="bg-brand-950 py-20 text-white lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
      <p class="eyebrow text-brand-100">By stage</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight lg:text-4xl">What you need at each step</h2>
    </div>

    <ol class="mt-14 grid gap-px overflow-hidden rounded-sm bg-white/10 sm:grid-cols-2 lg:grid-cols-4">
      <?php foreach ($stages as $i => $stage) : ?>
        <li <?php echo pwd_reveal($i); ?> class="bg-brand-950 p-8">
          <span class="font-mono text-sm text-brand-500"><?php echo esc_html(sprintf('%02d', $i + 1)); ?></span>
          <h3 class="mt-4 text-2xl font-semibold tracking-tight"><?php echo esc_html($stage['title']); ?></h3>
          <ul class="mt-6 space-y-2.5">
            <?php foreach ($stage['links'] as $label => $path) : ?>
              <li>
                <a href="<?php echo esc_url(home_url($path)); ?>" class="group inline-flex items-center gap-2 text-white/75 transition-colors hover:text-white">
                  <?php echo esc_html($label); ?>
                  <?php echo pwd_icon('arrow-right', 'size-3.5 text-brand-500 transition-transform group-hover:translate-x-1'); ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>
