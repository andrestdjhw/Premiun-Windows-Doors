<?php
// Sección: las cinco series de producto en un carrusel 3D automático (src/scripts/carousel3d.js).
// Sin JS se muestra como grilla normal.
$series = pwd_series_data();
$interval = 5000; // ms por serie
?>
<section class="overflow-x-clip bg-brand-50 py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
      <div class="max-w-2xl">
        <p class="eyebrow text-brand-600">Series</p>
        <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Five product series.</h2>
        <p class="mt-4 text-lg leading-relaxed text-slate-600">Different materials, aesthetics, performance priorities, and applications. Compare them side by side to identify the right fit for the project.</p>
      </div>
      <div class="shrink-0">
        <?php echo pwd_button('Compare Series', home_url('/series/#compare'), 'outline'); ?>
      </div>
    </div>

    <div
      data-carousel3d
      data-reveal
      role="region"
      aria-roledescription="carousel"
      aria-label="Product series"
      style="--c3d-interval: <?php echo esc_attr($interval); ?>ms"
      class="mt-12 lg:mt-16"
    >
      <ul data-c3d-track class="c3d-track grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
        <?php $n = 0; foreach ($series as $slug => $item) : $n++; ?>
          <li data-c3d-item aria-roledescription="slide" aria-label="<?php echo esc_attr(sprintf('%d of %d', $n, count($series))); ?>" class="c3d-item">
            <a href="<?php echo esc_url(home_url('/series/' . $slug . '/')); ?>" class="group relative block overflow-hidden rounded-sm bg-slate-900 shadow-xl shadow-brand-950/20">
              <?php echo pwd_media(pwd_upload_url($item['image']), $item['name'] . ' Series home exterior', 'aspect-[4/3] w-full transition-transform duration-700 group-hover:scale-105'); ?>
              <span aria-hidden="true" class="absolute inset-0 bg-linear-to-t from-brand-950/90 via-brand-950/25 to-transparent"></span>
              <span class="absolute inset-x-0 bottom-0 flex items-end justify-between gap-4 p-5 text-white sm:p-7">
                <span>
                  <span class="block font-mono text-[11px] tracking-[0.2em] text-white/70 uppercase"><?php echo esc_html(sprintf('%02d / %s', $n, $item['material'])); ?></span>
                  <span class="mt-2 block text-xl font-semibold tracking-tight sm:text-2xl"><?php echo esc_html($item['name']); ?> Series</span>
                  <span class="c3d-meta mt-1 block text-sm text-white/80"><?php echo esc_html($item['tagline']); ?></span>
                </span>
                <span class="c3d-meta flex size-10 shrink-0 items-center justify-center rounded-full border border-white/40 transition-colors group-hover:border-white group-hover:bg-white group-hover:text-brand-950">
                  <?php echo pwd_icon('arrow-right', 'size-4'); ?>
                </span>
              </span>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>

      <div data-c3d-controls hidden class="mt-10 flex items-center justify-center gap-3">
        <button type="button" data-c3d-prev aria-label="Previous series" class="flex size-11 items-center justify-center rounded-full border border-slate-300 text-slate-700 transition-colors hover:border-brand-700 hover:bg-brand-700 hover:text-white">
          <?php echo pwd_icon('arrow-right', 'size-4 rotate-180'); ?>
        </button>

        <ol class="flex items-center gap-2 px-2">
          <?php $n = 0; foreach ($series as $item) : ?>
            <li>
              <button type="button" data-c3d-dot="<?php echo esc_attr($n++); ?>" aria-current="false" aria-label="<?php echo esc_attr('Show ' . $item['name'] . ' Series'); ?>" class="group relative block h-1.5 w-1.5 overflow-hidden rounded-full bg-slate-300 transition-all duration-300 aria-current:w-10">
                <span data-c3d-bar class="c3d-bar absolute inset-0 origin-left scale-x-0 rounded-full bg-brand-600"></span>
              </button>
            </li>
          <?php endforeach; ?>
        </ol>

        <button type="button" data-c3d-next aria-label="Next series" class="flex size-11 items-center justify-center rounded-full border border-slate-300 text-slate-700 transition-colors hover:border-brand-700 hover:bg-brand-700 hover:text-white">
          <?php echo pwd_icon('arrow-right', 'size-4'); ?>
        </button>

        <button type="button" data-c3d-toggle aria-pressed="false" aria-label="Pause carousel" class="ml-2 flex size-11 items-center justify-center rounded-full text-slate-500 transition-colors hover:text-brand-700">
          <svg data-c3d-icon-pause viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="size-4"><rect x="6" y="5" width="4" height="14" rx="1" /><rect x="14" y="5" width="4" height="14" rx="1" /></svg>
          <svg data-c3d-icon-play hidden viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="size-4"><path d="M7 4.5v15a1 1 0 0 0 1.5.86l12.5-7.5a1 1 0 0 0 0-1.72L8.5 3.64A1 1 0 0 0 7 4.5Z" /></svg>
        </button>
      </div>
    </div>
  </div>
</section>
