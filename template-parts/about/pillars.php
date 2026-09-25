<?php
// "What defines Premium". Para agregar un pilar, añade un elemento al arreglo
// (iconos disponibles en pwd_icon(): factory, layers, award, shield-check, file-badge, file-text, badge-check).
$pillars = array(
  array(
    'icon' => 'factory',
    'title' => 'Manufacturing',
    'text' => 'The company’s identity begins with making the product—not presenting itself as a generic installation contractor.',
  ),
  array(
    'icon' => 'layers',
    'title' => 'Product breadth',
    'text' => 'Windows and doors across multiple series, materials, styles, configurations, and project applications.',
  ),
);
?>
<section class="bg-slate-50 py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
      <p class="eyebrow text-brand-600">Our identity</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">What defines Premium</h2>
    </div>

    <ul class="mt-12 grid gap-6 md:grid-cols-2 <?php echo count($pillars) > 2 ? 'lg:grid-cols-3' : ''; ?>">
      <?php foreach ($pillars as $i => $pillar) : ?>
        <li <?php echo pwd_reveal($i); ?> data-tilt class="rounded-sm border border-slate-200 bg-white p-8 lg:p-10">
          <span class="flex size-14 items-center justify-center rounded-full bg-brand-50 text-brand-700">
            <?php echo pwd_icon($pillar['icon'], 'size-7'); ?>
          </span>
          <h3 class="mt-8 text-2xl font-semibold tracking-tight text-slate-900"><?php echo esc_html($pillar['title']); ?></h3>
          <p class="mt-3 text-lg leading-relaxed text-slate-600"><?php echo esc_html($pillar['text']); ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
