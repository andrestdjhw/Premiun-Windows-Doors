<?php
// Sección: explorar productos (por tipo de producto o por requerimiento).
// Cada producto muestra su icono de operación (pwd_operation_icon); 'shift' mueve la hoja en hover.
$categories = array(
  array(
    'title' => 'Windows',
    'href' => home_url('/windows/'),
    'cols' => 'grid-cols-2 sm:grid-cols-3',
    'links' => array(
      array('label' => 'Picture', 'path' => '/windows/picture-windows/', 'icons' => array('picture')),
      array('label' => 'Casement & Awning', 'path' => '/windows/casement-awning-windows/', 'icons' => array('casement', 'awning')),
      array('label' => 'Horizontal Sliding', 'path' => '/windows/horizontal-sliding-windows/', 'icons' => array('horizontal-sliding'), 'shift' => '-140px 0'),
      array('label' => 'Single-Hung', 'path' => '/windows/single-hung-windows/', 'icons' => array('single-hung'), 'shift' => '0 -140px'),
      array('label' => 'Double-Hung', 'path' => '/windows/double-hung-windows/', 'icons' => array('double-hung'), 'shift' => '0 -40px'),
      array('label' => 'Arch & Special Shape', 'path' => '/windows/arch-special-shape-windows/', 'icons' => array('arch', 'special-shape')),
    ),
  ),
  array(
    'title' => 'Doors',
    'href' => home_url('/doors/'),
    'cols' => 'grid-cols-2',
    'links' => array(
      array('label' => 'Patio Sliding', 'path' => '/doors/patio-sliding-doors/', 'icons' => array('patio-sliding'), 'shift' => '-200px 0'),
      array('label' => 'French Swing', 'path' => '/doors/french-swing-doors/', 'icons' => array('french-swing')),
      array('label' => 'Multi-Slide', 'path' => '/doors/multiple-sliding-doors/', 'icons' => array('multi-slide'), 'shift' => '-120px 0'),
      array('label' => 'Multi-Fold', 'path' => '/doors/multiple-folding-doors/', 'icons' => array('multi-fold')),
    ),
  ),
);

$requirements = array(
  array('icon' => 'gauge', 'title' => 'Performance', 'text' => 'Energy efficiency, sound control, coastal and high-wind.', 'href' => home_url('/capabilities/')),
  array('icon' => 'layers', 'title' => 'Material', 'text' => 'Compare vinyl and aluminum series side by side.', 'href' => home_url('/series/#compare')),
  array('icon' => 'palette', 'title' => 'Design', 'text' => 'Finishes, colors, glass and hardware options.', 'href' => home_url('/capabilities/finishes-colors/')),
);
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
      <p class="eyebrow text-brand-600">Products</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Explore products</h2>
      <p class="mt-4 text-lg leading-relaxed text-slate-600">Choose the product first, or start with the performance, material, and design requirements of your project.</p>
    </div>

    <div class="mt-12 grid gap-6 lg:grid-cols-2">
      <?php foreach ($categories as $i => $category) : ?>
        <div <?php echo pwd_reveal($i); ?> class="flex flex-col rounded-sm border border-slate-200 bg-white p-6 sm:p-8">
          <div class="flex items-end justify-between gap-4 border-b border-slate-200 pb-6">
            <div>
              <p class="font-mono text-[11px] uppercase tracking-[0.2em] text-slate-500"><?php echo esc_html(sprintf('%02d operation styles', count($category['links']))); ?></p>
              <h3 class="mt-2 text-2xl font-semibold tracking-tight text-slate-900"><?php echo esc_html($category['title']); ?></h3>
            </div>
            <?php echo pwd_arrow_link('View all', $category['href'], 'shrink-0 text-sm text-brand-700 hover:text-brand-900'); ?>
          </div>

          <ul class="mt-6 grid flex-1 gap-3 <?php echo esc_attr($category['cols']); ?>">
            <?php foreach ($category['links'] as $link) : ?>
              <li>
                <a
                  href="<?php echo esc_url(home_url($link['path'])); ?>"
                  <?php if (!empty($link['shift'])) printf('style="--op-shift: %s"', esc_attr($link['shift'])); ?>
                  class="group flex h-full flex-col justify-between gap-6 rounded-sm bg-brand-50 p-5 ring-1 ring-transparent transition-all duration-200 ring-inset hover:-translate-y-0.5 hover:bg-white hover:shadow-lg hover:shadow-brand-950/10 hover:ring-brand-600"
                >
                  <span class="flex h-14 items-end gap-2 text-slate-800 transition-colors group-hover:text-brand-950">
                    <?php foreach ($link['icons'] as $icon) echo pwd_operation_icon($icon, 'h-full w-auto'); ?>
                  </span>
                  <span class="flex items-center justify-between gap-2 text-[15px] leading-snug font-medium text-slate-900">
                    <?php echo esc_html($link['label']); ?>
                    <?php echo pwd_icon('arrow-right', 'size-4 shrink-0 -translate-x-1 text-brand-700 opacity-0 transition-all group-hover:translate-x-0 group-hover:opacity-100'); ?>
                  </span>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>

    <p data-reveal class="mt-14 text-sm font-semibold text-slate-900">Or start with your requirements</p>
    <div class="mt-4 grid gap-4 md:grid-cols-3">
      <?php foreach ($requirements as $i => $item) : ?>
        <a href="<?php echo esc_url($item['href']); ?>" <?php echo pwd_reveal($i); ?> data-tilt class="group flex items-start gap-5 rounded-sm border border-slate-200 bg-white p-6 transition-colors hover:border-brand-600">
          <span class="flex size-11 shrink-0 items-center justify-center rounded-sm bg-brand-50 text-brand-700 transition-colors group-hover:bg-brand-700 group-hover:text-white">
            <?php echo pwd_icon($item['icon'], 'size-5'); ?>
          </span>
          <span class="flex-1">
            <span class="block font-semibold text-slate-900"><?php echo esc_html($item['title']); ?></span>
            <span class="mt-1 block text-sm text-slate-600"><?php echo esc_html($item['text']); ?></span>
          </span>
          <?php echo pwd_icon('arrow-right', 'mt-1 size-4 shrink-0 text-brand-700 transition-transform group-hover:translate-x-1'); ?>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
