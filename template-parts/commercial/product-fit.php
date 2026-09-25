<?php
// Product fit: Aluminum Series y sistemas de vinilo aplicables SOLO donde los requisitos del proyecto lo permitan.
// Importante (brief): no dar a entender que todas las series sirven para cualquier aplicación comercial.
?>
<section class="bg-slate-50 py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-3xl">
      <p class="eyebrow text-brand-600">Product fit</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">The right system for the project&rsquo;s requirements.</h2>
      <p class="mt-4 text-lg leading-relaxed text-slate-600">
        The Aluminum Series and applicable vinyl systems are used where the project requirements support them. Product fit is confirmed against each project&rsquo;s specification, not assumed.
      </p>
    </div>

    <div class="mt-12 grid gap-6 lg:grid-cols-12">
      <a
        href="<?php echo esc_url(home_url('/series/aluminum/')); ?>"
        <?php echo pwd_reveal(); ?>
        data-tilt
        class="group grid overflow-hidden rounded-sm border border-slate-200 bg-white sm:grid-cols-2 lg:col-span-8"
      >
        <?php echo pwd_media(pwd_upload_url('2026/09/Aluminum_Series-768x512.jpg'), 'Modern building with Aluminum Series windows', 'h-64 w-full sm:h-full'); ?>
        <span class="flex flex-col p-8 lg:p-10">
          <span class="font-mono text-[11px] uppercase tracking-[0.2em] text-brand-600">Aluminum product line</span>
          <span class="mt-4 text-2xl font-semibold tracking-tight text-slate-900">Aluminum Series</span>
          <span class="mt-1 text-slate-600">Strength in Form</span>
          <span class="mt-auto inline-flex items-center gap-2 pt-8 font-medium text-brand-700">
            Explore Aluminum
            <?php echo pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1'); ?>
          </span>
        </span>
      </a>

      <a
        href="<?php echo esc_url(home_url('/compare-series/')); ?>"
        <?php echo pwd_reveal(1); ?>
        data-tilt
        class="group flex flex-col rounded-sm border border-slate-200 bg-white p-8 lg:col-span-4 lg:p-10"
      >
        <span class="font-mono text-[11px] uppercase tracking-[0.2em] text-brand-600">Where requirements support them</span>
        <span class="mt-4 text-2xl font-semibold tracking-tight text-slate-900">Applicable vinyl systems</span>
        <span class="mt-3 leading-relaxed text-slate-600">Compare the series to see which vinyl systems align with the project&rsquo;s performance and specification needs.</span>
        <span class="mt-auto inline-flex items-center gap-2 pt-8 font-medium text-brand-700">
          Compare Series
          <?php echo pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1'); ?>
        </span>
      </a>
    </div>
  </div>
</section>
