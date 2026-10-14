<?php
// Hero con slideshow de fondo + franja de confianza.
// CTA principal: productos; secundario: profesionales.
// Fotos reales: obra (pwd_project_photos()) alternada con la planta en Corona (pwd_plant_photos()).
// Versiones redimensionadas por WordPress: los originales del dron miden 8192px.
$slides = array(
  array('image' => '2026/10/foto_01_sin_marca.jpg', 'label' => 'Apartment Community'),
  array('image' => '2026/10/DJI_20261008113058_0172_D-2048x1536.jpg', 'label' => 'Corona, California facility'),
  array('image' => '2026/10/foto_06_sin_marca.jpg', 'label' => 'Townhome Community'),
  array('image' => '2026/10/DJI_20261008140855_0274_D-2048x1536.jpg', 'label' => 'Production floor'),
  array('image' => '2026/10/DJI_20261008113720_0183_D-2048x1536.jpg', 'label' => 'Corona facility from above'),
);
$interval = 6000; // ms por slide

$trust = array(
  array('icon' => 'factory', 'title' => 'Manufacturing in Corona, CA', 'label' => 'Since 2001'),
  array('icon' => 'shield-check', 'title' => 'A+ BBB Accredited', 'label' => 'Trusted business'),
  array('icon' => 'file-badge', 'title' => 'AAMA & NFRC Certifications', 'label' => 'Depending on series'),
  array('icon' => 'award', 'title' => 'Transferable Lifetime Warranty', 'label' => 'Built to last'),
);
?>
<section
  data-hero-slider
  data-interval="<?php echo esc_attr($interval); ?>"
  style="--slide-interval: <?php echo esc_attr($interval); ?>ms"
  class="relative isolate flex min-h-[560px] items-center overflow-hidden bg-slate-900 lg:min-h-[640px]"
>
  <div aria-hidden="true" class="absolute inset-0 -z-10">
    <?php foreach ($slides as $i => $slide) : ?>
      <div data-slide <?php echo $i === 0 ? 'data-active' : ''; ?> class="group absolute inset-0 opacity-0 transition-opacity duration-[1500ms] ease-in-out data-active:opacity-100">
        <img
          src="<?php echo esc_url(pwd_upload_url($slide['image'])); ?>"
          alt=""
          <?php echo $i === 0 ? 'fetchpriority="high"' : 'loading="lazy"'; ?>
          decoding="async"
          class="size-full object-cover transition-transform duration-[7000ms] ease-linear group-data-active:scale-110 motion-reduce:transition-none motion-reduce:group-data-active:scale-100"
        >
      </div>
    <?php endforeach; ?>
    <div class="absolute inset-0 bg-slate-950/65 lg:bg-transparent lg:bg-linear-to-r lg:from-slate-950/85 lg:via-slate-950/55 lg:via-50% lg:to-slate-950/10"></div>
    <div class="absolute inset-0 bg-linear-to-t from-slate-950/40 via-transparent to-transparent"></div>
  </div>

  <div class="site-container py-20">
    <div class="max-w-2xl">
      <p <?php echo pwd_reveal(); ?> class="font-mono text-xs uppercase tracking-[0.35em] text-brand-100">Engineered for a brighter tomorrow</p>
      <h1 <?php echo pwd_reveal(1); ?> data-i18n="home.hero.title" class="mt-7 text-[40px] leading-[1.05] tracking-tight text-white sm:text-5xl xl:text-[64px]">
        <span class="font-light">High-Performance</span>
        <span class="block font-bold text-brand-300">Windows &amp; Doors.</span>
        <span class="block font-medium">Manufactured in California.</span>
      </h1>
      <p <?php echo pwd_reveal(2); ?> class="mt-7 max-w-xl text-lg leading-relaxed text-white/85">
        Custom solutions for residential, commercial and multifamily projects, backed by over two decades of manufacturing expertise.
      </p>
      <div <?php echo pwd_reveal(3); ?> class="mt-9 flex flex-col gap-4 sm:flex-row">
        <?php echo pwd_button('Explore Products', home_url('/products/'), 'light'); ?>
        <?php echo pwd_button('For Professionals', home_url('/professionals/'), 'outline-light'); ?>
      </div>
    </div>
  </div>

  <ol class="absolute right-5 top-1/2 hidden -translate-y-1/2 flex-col gap-3 md:flex xl:right-10 2xl:right-12">
    <?php foreach ($slides as $i => $slide) : ?>
      <li>
        <button
          type="button"
          data-slide-to="<?php echo esc_attr($i); ?>"
          aria-current="<?php echo $i === 0 ? 'true' : 'false'; ?>"
          aria-label="<?php echo esc_attr(sprintf('Show slide %d: %s', $i + 1, $slide['label'])); ?>"
          class="group flex items-center gap-4 py-1 text-sm font-medium text-white/60 drop-shadow transition-colors hover:text-white aria-[current=true]:text-white"
        >
          <?php echo esc_html(sprintf('%02d', $i + 1)); ?>
          <span class="relative h-9 w-0.5 overflow-hidden bg-white/35">
            <span class="absolute inset-0 origin-top scale-y-0 bg-white group-aria-[current=true]:animate-slide-progress motion-reduce:group-aria-[current=true]:animate-none motion-reduce:group-aria-[current=true]:scale-y-100"></span>
          </span>
        </button>
      </li>
    <?php endforeach; ?>
  </ol>
</section>

<section aria-label="Why Premium" class="bg-linear-to-r from-brand-950 via-brand-900 to-brand-700 text-white">
  <ul class="site-container grid grid-cols-1 divide-y divide-white/15 sm:grid-cols-2 sm:divide-y-0 lg:grid-cols-4 lg:divide-x">
    <?php foreach ($trust as $i => $item) : ?>
      <li <?php echo pwd_reveal($i); ?> class="flex items-center gap-5 py-7 sm:py-8 lg:justify-center lg:px-6 lg:first:justify-start lg:first:pl-0 lg:last:justify-end lg:last:pr-0">
        <span class="flex size-14 shrink-0 items-center justify-center rounded-full bg-white/10 ring-1 ring-white/20">
          <?php echo pwd_icon($item['icon'], 'size-7 text-white'); ?>
        </span>
        <div>
          <p class="max-w-[12rem] text-[17px] leading-snug font-medium text-white"><?php echo esc_html($item['title']); ?></p>
          <p class="mt-2 font-mono text-[11px] uppercase tracking-[0.2em] text-brand-100/70"><?php echo esc_html($item['label']); ?></p>
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
</section>
