<?php
// Design + technical fit: cada decisión de personalización afecta más que la apariencia.
$choices = array('Frame type', 'Glazing', 'Hardware', 'Operation', 'Reinforcement', 'Configuration');
$impacts = array('Installation', 'Performance', 'Appearance', 'Project coordination');
?>
<section class="bg-brand-950 py-20 text-white lg:py-28">
  <div class="site-container grid gap-14 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-5">
      <p class="eyebrow text-brand-100">Design + technical fit</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight lg:text-4xl">Customization is not only aesthetic.</h2>
      <p class="mt-4 text-lg leading-relaxed text-white/70">
        Frame type, glazing, hardware, operation, reinforcement, and configuration can affect installation, performance, appearance, and project coordination.
      </p>
    </div>

    <div class="grid items-center gap-6 sm:grid-cols-[1fr_auto_1fr] lg:col-span-7">
      <div <?php echo pwd_reveal(1); ?>>
        <p class="font-mono text-[11px] uppercase tracking-[0.2em] text-white/50">Each choice</p>
        <ul class="mt-4 space-y-2">
          <?php foreach ($choices as $choice) : ?>
            <li class="rounded-sm border border-white/10 bg-white/5 px-4 py-3 font-medium"><?php echo esc_html($choice); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <span aria-hidden="true" class="flex justify-center text-brand-500">
        <?php echo pwd_icon('arrow-right', 'size-8 rotate-90 sm:rotate-0'); ?>
      </span>

      <div <?php echo pwd_reveal(2); ?>>
        <p class="font-mono text-[11px] uppercase tracking-[0.2em] text-white/50">Can affect</p>
        <ul class="mt-4 space-y-2">
          <?php foreach ($impacts as $impact) : ?>
            <li class="flex items-center gap-3 rounded-sm bg-brand-600 px-4 py-3 font-semibold">
              <?php echo pwd_icon('badge-check', 'size-5 shrink-0'); ?>
              <?php echo esc_html($impact); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
