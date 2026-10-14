<?php
// Recursos por etapa: evaluar, especificar, instalar y dar servicio (texto del hero del brief).
// Imágenes de stock de Pexels (licencia Pexels: uso comercial gratuito, sin atribución obligatoria),
// guardadas en assets/images/stock/. Origen: pexels.com/photo/{id}:
//   evaluate 7641917 (Alena Darmel) · specify 6615235 (Tima Miroshnichenko)
//   install 5691544 y service 5768107 (Ksenia Chernaya)
$stages = array(
  array('title' => 'Evaluate', 'image' => 'stage-evaluate.jpg', 'links' => array('Brochures & Literature' => '/resources/brochures/', 'Compare Series' => '/series/#compare')),
  array('title' => 'Specify', 'image' => 'stage-specify.jpg', 'links' => array('Detail Drawings' => '/resources/technical/?type=detail-drawing', 'Certifications' => '/resources/technical/?type=certification', 'Performance' => '/resources/technical/?type=performance')),
  array('title' => 'Install', 'image' => 'stage-install.jpg', 'links' => array('Installation Guides' => '/resources/technical/?type=installation-guide')),
  array('title' => 'Service', 'image' => 'stage-service.jpg', 'links' => array('Warranty' => '/warranty/', 'Service Request' => '/service-request/', 'FAQs' => '/faqs/')),
);
?>
<section class="bg-brand-gradient py-20 text-white lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
      <p class="eyebrow text-brand-100">By stage</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight lg:text-4xl">What you need at each step</h2>
    </div>

    <ol class="mt-14 grid gap-px overflow-hidden rounded-sm bg-white/10 sm:grid-cols-2 lg:grid-cols-4">
      <?php foreach ($stages as $i => $stage) : ?>
        <li <?php echo pwd_reveal($i); ?> class="group flex flex-col bg-brand-950/60">
          <div class="relative overflow-hidden">
            <img
              src="<?php echo esc_url(get_theme_file_uri('/assets/images/stock/' . $stage['image'])); ?>"
              alt=""
              loading="lazy"
              decoding="async"
              width="1200"
              height="900"
              class="aspect-[4/3] w-full object-cover transition-transform duration-700 group-hover:scale-105"
            >
            <span aria-hidden="true" class="absolute inset-0 bg-linear-to-t from-brand-950/80 via-brand-950/10 to-transparent"></span>
            <span class="absolute bottom-4 left-6 font-mono text-sm text-white/80"><?php echo esc_html(sprintf('%02d', $i + 1)); ?></span>
          </div>
          <div class="p-6 lg:p-8">
            <h3 class="text-2xl font-semibold tracking-tight"><?php echo esc_html($stage['title']); ?></h3>
            <ul class="mt-5 space-y-2.5">
              <?php foreach ($stage['links'] as $label => $path) : ?>
                <li>
                  <a href="<?php echo esc_url(home_url($path)); ?>" class="group/link inline-flex items-center gap-2 text-white/75 transition-colors hover:text-white">
                    <?php echo esc_html($label); ?>
                    <?php echo pwd_icon('arrow-right', 'size-3.5 text-brand-300 transition-transform group-hover/link:translate-x-1'); ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>
