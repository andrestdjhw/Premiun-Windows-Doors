<?php
// Estilos de ventana del brief.
// 'series': series compatibles por estilo (brief: "based on the verified product matrix").
// Fuente provisional: productos publicados en premiumwindows.com (revisado 2026-09-28).
// PENDIENTE: confirmar con el cliente contra la matriz de producto oficial.
// Special Shape: el sitio actual no muestra productos, se deja vacío (la línea no se muestra).
// Slugs: zenith, timeless, serene, elegance, aluminum.
$styles = array(
  array('diagram' => 'picture', 'title' => 'Picture', 'text' => 'Fixed windows for views and natural light.', 'href' => '/windows/picture-windows/', 'series' => array('zenith', 'timeless', 'serene', 'elegance', 'aluminum')),
  array('diagram' => 'casement', 'title' => 'Casement & Awning', 'text' => 'Hinged sashes that open outward, from the side or the top.', 'href' => '/windows/casement-awning-windows/', 'series' => array('zenith', 'serene', 'aluminum')),
  array('diagram' => 'horizontal-sliding', 'title' => 'Horizontal Sliding', 'text' => 'Sashes that glide side to side.', 'href' => '/windows/horizontal-sliding-windows/', 'series' => array('zenith', 'timeless', 'serene', 'elegance', 'aluminum')),
  array('diagram' => 'single-hung', 'title' => 'Single Hung', 'text' => 'A fixed upper sash and a bottom sash that slides up.', 'href' => '/windows/single-hung-windows/', 'series' => array('zenith', 'timeless', 'serene', 'elegance', 'aluminum')),
  array('diagram' => 'double-hung', 'title' => 'Double Hung', 'text' => 'Upper and lower sashes that both slide.', 'href' => '/windows/double-hung-windows/', 'series' => array('zenith', 'serene')),
  array('diagram' => 'arch', 'title' => 'Arch', 'text' => 'A single fixed, non-venting opening with a curved or half-circle top.', 'href' => '/windows/arch-special-shape-windows/', 'series' => array('timeless', 'elegance')),
  array('diagram' => 'special-shape', 'title' => 'Special Shape', 'text' => 'Angled shapes that maximize natural light in angled ceiling areas.', 'href' => '/windows/arch-special-shape-windows/', 'series' => array()),
);
$series_names = array('zenith' => 'Zenith', 'timeless' => 'Timeless', 'serene' => 'Serene', 'elegance' => 'Elegance', 'aluminum' => 'Aluminum');
?>
<section id="window-styles" class="scroll-mt-28 bg-white py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
      <p class="eyebrow text-brand-600">Window styles</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Explore by style</h2>
    </div>

    <ul class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
      <?php foreach ($styles as $i => $style) : ?>
        <li <?php echo pwd_reveal($i % 4); ?>>
          <a href="<?php echo esc_url(home_url($style['href'])); ?>" data-tilt class="group flex h-full flex-col rounded-sm border border-slate-200 bg-white transition-colors hover:border-brand-600">
            <span class="flex items-center justify-center border-b border-slate-200 bg-slate-50 py-10 text-slate-400 transition-colors group-hover:text-brand-600">
              <?php echo pwd_window_diagram($style['diagram'], 'h-28 w-auto'); ?>
            </span>
            <span class="flex flex-1 flex-col p-7">
              <span class="text-xl font-semibold tracking-tight text-slate-900"><?php echo esc_html($style['title']); ?></span>
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
                View <?php echo esc_html($style['title']); ?>
                <?php echo pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1'); ?>
              </span>
            </span>
          </a>
        </li>
      <?php endforeach; ?>
      <li <?php echo pwd_reveal(3); ?>>
        <a href="<?php echo esc_url(home_url('/series/#compare')); ?>" class="group flex h-full flex-col justify-between rounded-sm bg-brand-900 p-7 text-white transition-colors hover:bg-brand-800">
          <span>
            <span class="block text-xl font-semibold tracking-tight">Not sure which style?</span>
            <span class="mt-2 block leading-relaxed text-white/70">Start with the series and compare materials, performance and applications.</span>
          </span>
          <span class="mt-8 inline-flex items-center gap-2 text-sm font-medium">
            Compare Series
            <?php echo pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1'); ?>
          </span>
        </a>
      </li>
    </ul>
  </div>
</section>
