<?php
// Intro: qué buscan los dealers en un fabricante.
$needs = array('Dependable manufacturing', 'Broad product portfolio', 'Responsive support', 'Everyday & specialized applications');
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container grid gap-14 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-6">
      <h2 class="eyebrow text-brand-600">A manufacturing partner</h2>
      <p class="mt-6 text-2xl leading-snug font-medium tracking-tight text-slate-900 lg:text-3xl">
        Premium works with dealers and distributors who need a dependable manufacturing partner, a broad product portfolio, responsive support, and products that can serve both everyday and more specialized applications.
      </p>
    </div>

    <div <?php echo pwd_reveal(1); ?> class="self-center lg:col-span-5 lg:col-start-8">
      <p class="font-mono text-[11px] uppercase tracking-[0.2em] text-slate-500">What dealers need</p>
      <ul class="mt-4 grid gap-px overflow-hidden rounded-sm border border-slate-200 bg-slate-200 sm:grid-cols-2">
        <?php foreach ($needs as $need) : ?>
          <li class="flex items-center gap-3 bg-white px-4 py-3.5 text-sm font-medium text-slate-800">
            <?php echo pwd_icon('badge-check', 'size-4 shrink-0 text-brand-600'); ?>
            <?php echo esc_html($need); ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
