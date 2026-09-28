<?php
// Estilos de puerta del brief.
// 'series': series por estilo. Fuente provisional: productos publicados en premiumwindows.com
// (revisado 2026-09-28; "Infinite Series" = Elegance). PENDIENTE: confirmar con la matriz oficial.
$styles = array(
  array('diagram' => 'patio-sliding', 'title' => 'Patio Sliding', 'text' => '1 or 2 operable panels in multiple configuration options.', 'href' => '/doors/patio-sliding-doors/', 'series' => array('zenith', 'timeless', 'serene', 'elegance', 'aluminum')),
  array('diagram' => 'french-swing', 'title' => 'French Swing', 'text' => '1 or 2 panels that swing outward or inward, from the left or right.', 'href' => '/doors/french-swing-doors/', 'series' => array('zenith', 'serene', 'elegance', 'aluminum')),
  array('diagram' => 'multi-slide', 'title' => 'Multiple Sliding', 'text' => 'Multiple sliding panels for larger panoramic views and openings.', 'href' => '/doors/multiple-sliding-doors/', 'series' => array('serene', 'aluminum')),
  array('diagram' => 'multi-fold', 'title' => 'Multiple Folding', 'text' => 'Two or more folding panels for maximum outdoor connection when fully open.', 'href' => '/doors/multiple-folding-doors/', 'series' => array('serene', 'aluminum')),
);
$series_names = array('zenith' => 'Zenith', 'timeless' => 'Timeless', 'serene' => 'Serene', 'elegance' => 'Elegance', 'aluminum' => 'Aluminum');
?>
<section id="door-styles" class="scroll-mt-28 bg-white py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
      <p class="eyebrow text-brand-600">Door styles</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Explore by style</h2>
    </div>

    <ul class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
      <?php foreach ($styles as $i => $style) : ?>
        <li <?php echo pwd_reveal($i); ?>>
          <a href="<?php echo esc_url(home_url($style['href'])); ?>" data-tilt class="group flex h-full flex-col rounded-sm border border-slate-200 bg-white transition-colors hover:border-brand-600">
            <span class="flex items-center justify-center border-b border-slate-200 bg-slate-50 py-10 text-slate-400 transition-colors group-hover:text-brand-600">
              <?php echo pwd_door_diagram($style['diagram'], 'h-24 w-auto'); ?>
            </span>
            <span class="flex flex-1 flex-col p-7">
              <span class="text-xl font-semibold tracking-tight text-slate-900"><?php echo esc_html($style['title']); ?> Doors</span>
              <span class="mt-2 leading-relaxed text-slate-600"><?php echo esc_html($style['text']); ?></span>
              <?php if ($style['series']) : ?>
                <span class="mt-5 block">
                  <span class="font-mono text-[11px] uppercase tracking-[0.2em] text-slate-500">Available in</span>
                  <span class="mt-2 flex flex-wrap gap-1.5">
                    <?php foreach ($style['series'] as $slug) : ?>
                      <span class="rounded-sm bg-brand-50 px-2 py-0.5 text-xs font-medium text-brand-800"><?php echo esc_html($series_names[$slug] ?? $slug); ?></span>
                    <?php endforeach; ?>
                  </span>
                </span>
              <?php endif; ?>
              <span class="mt-auto inline-flex items-center gap-2 pt-6 text-sm font-medium text-brand-700">
                View <?php echo esc_html($style['title']); ?> Doors
                <?php echo pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1'); ?>
              </span>
            </span>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
