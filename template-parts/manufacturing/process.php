<?php
// "From requirement to finished product".
// IMPORTANTE (brief): usar solo pasos confirmados por operaciones. Estos son los pasos que
// lista el brief; confirmar con operaciones y quitar/ajustar los que no apliquen.
$steps = array(
  'Product selection & configuration',
  'Materials & components',
  'Fabrication & assembly',
  'Glazing',
  'Quality control',
  'Packaging',
  'Release & delivery',
);
?>
<section class="bg-slate-50 py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
      <p class="eyebrow text-brand-600">Our process</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">From requirement to finished product</h2>
    </div>

    <ol class="relative mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-7 lg:gap-4">
      <span aria-hidden="true" class="absolute inset-x-0 top-5 hidden h-px bg-slate-300 lg:block"></span>
      <?php foreach ($steps as $i => $step) : ?>
        <li <?php echo pwd_reveal($i); ?> class="relative flex gap-5 lg:flex-col lg:gap-0">
          <span class="relative flex size-10 shrink-0 items-center justify-center rounded-full border border-brand-100 bg-white font-mono text-sm font-medium text-brand-700 ring-8 ring-slate-50">
            <?php echo esc_html(sprintf('%02d', $i + 1)); ?>
          </span>
          <p class="pt-2 text-lg font-semibold leading-snug tracking-tight text-slate-900 lg:pt-6 lg:text-base"><?php echo esc_html($step); ?></p>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>
