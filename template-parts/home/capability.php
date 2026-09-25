<?php
// Sección: capacidad de manufactura (proceso conectado de selección a entrega).
$steps = array('Product development', 'Custom configurations', 'Quality control', 'Packaging', 'Support');
?>
<section class="bg-brand-950 py-20 text-white lg:py-28">
  <div class="site-container grid gap-14 lg:grid-cols-2 lg:gap-20">
    <div <?php echo pwd_reveal(); ?>>
      <p class="eyebrow text-brand-100">Manufacturing capability</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight lg:text-4xl">Built in Corona. Built around consistency.</h2>
      <p class="mt-6 text-lg leading-relaxed text-white/70">
        Premium&rsquo;s manufacturing operation brings product development, custom configurations, quality control, packaging, and support into one connected process&mdash;helping customers move from selection to delivery with greater clarity.
      </p>
      <div class="mt-10">
        <?php echo pwd_button('Explore Manufacturing', home_url('/capabilities/'), 'light'); ?>
      </div>
    </div>

    <ol class="self-center border-l border-white/15">
      <?php foreach ($steps as $i => $step) : ?>
        <li <?php echo pwd_reveal($i + 1); ?> class="relative flex items-baseline gap-6 py-4 pl-8">
          <span class="absolute -left-[5px] top-1/2 size-2.5 -translate-y-1/2 rounded-full bg-brand-500"></span>
          <span class="text-sm font-semibold text-brand-500"><?php echo esc_html(sprintf('%02d', $i + 1)); ?></span>
          <span class="text-xl font-medium tracking-tight"><?php echo esc_html($step); ?></span>
        </li>
      <?php endforeach; ?>
      <li <?php echo pwd_reveal(count($steps) + 1); ?> class="py-4 pl-8 text-sm text-white/50">From selection to delivery.</li>
    </ol>
  </div>
</section>
