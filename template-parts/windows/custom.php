<?php
// Custom manufacturing: las opciones varían por serie y producto; cada página de producto
// muestra las opciones exactas y los documentos técnicos de ese modelo (brief).
$options = array('Frame type', 'Glazing', 'Grids', 'Hardware', 'Color', 'Configuration');
?>
<section class="bg-brand-950 py-20 text-white lg:py-28">
  <div class="site-container grid gap-14 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-6">
      <p class="eyebrow text-brand-100">Custom manufacturing</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight lg:text-4xl">Made to order, confirmed by model.</h2>
      <p class="mt-4 text-lg leading-relaxed text-white/70">
        From frame type and glazing to grids, hardware, color, and configuration, available options vary by series and product. Each product page shows the exact options and technical documents that apply to that model.
      </p>
      <div class="mt-10 flex flex-col gap-4 sm:flex-row">
        <?php echo pwd_button('Customization Options', home_url('/capabilities/customization/'), 'light'); ?>
        <?php echo pwd_button('Window Documents', home_url('/resources/technical/?product=window'), 'outline-light'); ?>
      </div>
    </div>

    <ul class="grid grid-cols-2 gap-px self-center overflow-hidden rounded-sm bg-white/10 lg:col-span-5 lg:col-start-8">
      <?php foreach ($options as $i => $option) : ?>
        <li <?php echo pwd_reveal($i % 2); ?> class="flex items-center gap-3 bg-brand-950 p-5 font-medium">
          <?php echo pwd_icon('badge-check', 'size-5 shrink-0 text-brand-500'); ?>
          <?php echo esc_html($option); ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
