<?php
// Intro + categorías de opciones. Todo es específico de serie y producto: la disponibilidad
// varía por modelo y se confirma en la página de cada producto (brief).
// Los elementos sin 'href' todavía no tienen página propia.
$options = array(
  array('icon' => 'file-badge', 'title' => 'Color', 'href' => '/capabilities/finishes-colors/'),
  array('icon' => 'badge-check', 'title' => 'Glass', 'href' => '/capabilities/glass-options/'),
  array('icon' => 'layers', 'title' => 'Grids', 'href' => ''),
  array('icon' => 'shield-check', 'title' => 'Hardware', 'href' => '/capabilities/hardware/'),
  array('icon' => 'factory', 'title' => 'Frame systems', 'href' => '/series/#compare'),
  array('icon' => 'file-text', 'title' => 'Configurations', 'href' => '/products/'),
  array('icon' => 'award', 'title' => 'Selected upgrades', 'href' => ''),
);
$card = 'flex h-full items-center gap-4 rounded-sm border border-slate-200 bg-white p-5';
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container grid gap-14 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-5">
      <h2 class="eyebrow text-brand-600">Series- and product-specific options</h2>
      <p class="mt-6 text-2xl leading-snug font-medium tracking-tight text-slate-900 lg:text-3xl">
        Premium offers series- and product-specific options across color, glass, grids, hardware, frame systems, configurations, and selected upgrades.
      </p>

      <div class="mt-8 flex gap-4 rounded-sm border-l-4 border-brand-600 bg-brand-50 p-5">
        <?php echo pwd_icon('file-text', 'mt-0.5 size-5 shrink-0 text-brand-700'); ?>
        <p class="text-[15px] leading-relaxed text-slate-700">
          <strong class="font-semibold text-slate-900">Availability varies by model.</strong>
          Exact options should always be confirmed on the product page.
        </p>
      </div>
    </div>

    <ul class="grid gap-4 self-center sm:grid-cols-2 lg:col-span-7">
      <?php foreach ($options as $i => $item) : ?>
        <li <?php echo pwd_reveal($i % 2); ?>>
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
