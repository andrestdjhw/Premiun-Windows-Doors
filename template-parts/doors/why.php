<?php
// Why doors matter: una puerta afecta mucho más que el paso.
$factors = array('Sightlines', 'Circulation', 'Indoor-outdoor connection', 'Hardware', 'Glazing', 'Security', 'Installation conditions', 'Opening performance');
?>
<section class="bg-brand-950 py-20 text-white lg:py-28">
  <div class="site-container grid gap-14 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-5">
      <p class="eyebrow text-brand-100">Why doors matter</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight lg:text-4xl">A door is not only a passage.</h2>
      <p class="mt-4 text-lg leading-relaxed text-white/70">
        It affects sightlines, circulation, indoor-outdoor connection, hardware, glazing, security, installation conditions, and the way the entire opening performs. Choose the series and configuration that fit the project, not only the look.
      </p>
    </div>

    <ul class="grid grid-cols-2 gap-px self-center overflow-hidden rounded-sm bg-white/10 lg:col-span-6 lg:col-start-7">
      <?php foreach ($factors as $i => $factor) : ?>
        <li <?php echo pwd_reveal($i % 2); ?> class="flex items-center gap-3 bg-brand-950 p-5 font-medium">
          <?php echo pwd_icon('badge-check', 'size-5 shrink-0 text-brand-500'); ?>
          <?php echo esc_html($factor); ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
