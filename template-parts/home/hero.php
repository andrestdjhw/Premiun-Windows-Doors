<?php
// Hero con slideshow de fondo + franja de confianza.
// CTA principal: productos; secundario: profesionales.
$slides = array(
  array('image' => '2026/09/ZENITH_Series.jpg', 'label' => 'Zenith Series'),
  array('image' => '2026/09/Timeless_Series.jpg', 'label' => 'Timeless Series'),
  array('image' => '2026/09/Serene_Series.jpg', 'label' => 'Serene Series'),
  array('image' => '2026/09/Elegance_Series.jpg', 'label' => 'Elegance Series'),
  array('image' => '2026/09/Aluminum_Series.jpg', 'label' => 'Aluminum Series'),
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
  class="relative isolate flex min-h-[560px] items-center overflow-hidden bg-slate-200 lg:min-h-[640px]"
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
    <div class="absolute inset-0 bg-white/75 lg:bg-transparent lg:bg-linear-to-r lg:from-white/95 lg:via-white/65 lg:via-45% lg:to-transparent"></div>
  </div>

  <div class="site-container py-20">
    <div class="max-w-2xl">
      <p <?php echo pwd_reveal(); ?> class="font-mono text-xs uppercase tracking-[0.35em] text-slate-700">Engineered for a brighter tomorrow</p>
      <h1 <?php echo pwd_reveal(1); ?> class="mt-7 text-[40px] leading-[1.05] tracking-tight text-slate-900 sm:text-5xl xl:text-[64px]">
        <span class="font-light">High-Performance</span>
        <span class="block font-bold text-brand-500">Windows &amp; Doors.</span>
        <span class="block font-medium">Manufactured in California.</span>
      </h1>
      <p <?php echo pwd_reveal(2); ?> class="mt-7 max-w-xl text-lg leading-relaxed text-slate-800">
        Custom solutions for residential, commercial and multifamily projects &mdash; backed by over two decades of manufacturing expertise.
      </p>
      <div <?php echo pwd_reveal(3); ?> class="mt-9 flex flex-col gap-4 sm:flex-row">
        <?php echo pwd_button('Explore Products', home_url('/products/')); ?>
        <?php echo pwd_button('For Professionals', home_url('/professionals/'), 'outline'); ?>
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

<section aria-label="Why Premium" class="border-b border-slate-200 bg-slate-50">
  <ul class="site-container grid grid-cols-1 divide-y divide-slate-200 sm:grid-cols-2 sm:divide-y-0 lg:grid-cols-4 lg:divide-x">
    <?php foreach ($trust as $i => $item) : ?>
      <li <?php echo pwd_reveal($i); ?> class="flex items-center gap-5 py-7 sm:py-8 lg:justify-center lg:px-6 lg:first:justify-start lg:first:pl-0 lg:last:justify-end lg:last:pr-0">
        <?php echo pwd_icon($item['icon'], 'size-11 shrink-0 text-slate-700'); ?>
        <div>
          <p class="max-w-[12rem] text-[17px] leading-snug text-slate-900"><?php echo esc_html($item['title']); ?></p>
          <p class="mt-2 font-mono text-[11px] uppercase tracking-[0.2em] text-slate-500"><?php echo esc_html($item['label']); ?></p>
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
</section>
