<?php
// Intro: la calidad del producto es solo una parte del riesgo.
$risks = array('Schedule', 'Documentation', 'Coordination', 'Consistency', 'Service response', 'Repeated requirements');
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container grid gap-14 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-6">
      <h2 class="eyebrow text-brand-600">Beyond product quality</h2>
      <p class="mt-6 text-2xl leading-snug font-medium tracking-tight text-slate-900 lg:text-3xl">
        For a developer or general contractor, product quality is only one part of the risk.
      </p>
      <p class="mt-6 text-lg leading-relaxed text-slate-600">
        Schedule, documentation, coordination, consistency, service response, and the ability to support repeated requirements across a project also matter.
      </p>
    </div>

    <div <?php echo pwd_reveal(1); ?> class="self-center lg:col-span-5 lg:col-start-8">
      <p class="font-mono text-[11px] uppercase tracking-[0.2em] text-slate-500">Also part of the risk</p>
      <ul class="mt-4 grid grid-cols-2 gap-px overflow-hidden rounded-sm border border-slate-200 bg-slate-200">
        <?php foreach ($risks as $risk) : ?>
          <li class="flex items-center gap-3 bg-white px-4 py-3.5 text-sm font-medium text-slate-800">
            <?php echo pwd_icon('badge-check', 'size-4 shrink-0 text-brand-600'); ?>
            <?php echo esc_html($risk); ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
