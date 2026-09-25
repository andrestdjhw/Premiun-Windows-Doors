<?php
// Intro: en proyectos comerciales todo entra en la misma decisión.
$factors = array('Performance', 'Appearance', 'Specification', 'Documentation', 'Procurement', 'Coordination');
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container grid gap-14 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-6">
      <h2 class="eyebrow text-brand-600">One decision, many requirements</h2>
      <p class="mt-6 text-2xl leading-snug font-medium tracking-tight text-slate-900 lg:text-3xl">
        Commercial projects bring performance, appearance, specification, documentation, procurement, and coordination into the same decision.
      </p>
      <p class="mt-6 text-lg leading-relaxed text-slate-600">
        Premium supports project teams with made-to-order product options and product-specific technical information.
      </p>
    </div>

    <div <?php echo pwd_reveal(1); ?> class="self-center lg:col-span-5 lg:col-start-8">
      <p class="font-mono text-[11px] uppercase tracking-[0.2em] text-slate-500">In the same decision</p>
      <ul class="mt-4 grid grid-cols-2 gap-px overflow-hidden rounded-sm border border-slate-200 bg-slate-200">
        <?php foreach ($factors as $factor) : ?>
          <li class="flex items-center gap-3 bg-white px-4 py-3.5 text-sm font-medium text-slate-800">
            <?php echo pwd_icon('badge-check', 'size-4 shrink-0 text-brand-600'); ?>
            <?php echo esc_html($factor); ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
