<?php
// Grid de subpáginas de manufactura (mismas rutas del mega menú Capabilities → Manufacturing).
$capabilities = array(
  array('icon' => 'layers', 'title' => 'Custom Sizes & Shapes', 'text' => 'Made-to-order sizes, shapes and configurations for each opening.', 'href' => '/capabilities/customization/'),
  array('icon' => 'file-badge', 'title' => 'Finishes & Colors', 'text' => 'Frame colors and finishes to match the architecture.', 'href' => '/capabilities/finishes-colors/'),
  array('icon' => 'badge-check', 'title' => 'Glass Options', 'text' => 'Glazing options for performance, comfort and appearance.', 'href' => '/capabilities/glass-options/'),
  array('icon' => 'shield-check', 'title' => 'Hardware & Accessories', 'text' => 'Hardware and accessories to complete each configuration.', 'href' => '/capabilities/hardware/'),
);
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
      <p class="eyebrow text-brand-600">Manufacturing capabilities</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Configured for the project</h2>
    </div>

    <ul class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
      <?php foreach ($capabilities as $i => $item) : ?>
        <li <?php echo pwd_reveal($i); ?>>
          <a href="<?php echo esc_url(home_url($item['href'])); ?>" data-tilt class="group flex h-full flex-col rounded-sm border border-slate-200 bg-white p-7 transition-colors hover:border-brand-600">
            <span class="flex size-12 items-center justify-center rounded-full bg-brand-50 text-brand-700">
              <?php echo pwd_icon($item['icon'], 'size-6'); ?>
            </span>
            <span class="mt-6 text-lg font-semibold tracking-tight text-slate-900"><?php echo esc_html($item['title']); ?></span>
            <span class="mt-2 text-sm leading-relaxed text-slate-600"><?php echo esc_html($item['text']); ?></span>
            <span class="mt-auto inline-flex items-center gap-2 pt-6 text-sm font-medium text-brand-700">
              Learn more
              <?php echo pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1'); ?>
            </span>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
