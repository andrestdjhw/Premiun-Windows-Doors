<?php
// Why it matters: cuándo la capacidad de manufactura tiene valor comercial.
$outcomes = array('Consistency', 'Responsiveness', 'Product breadth', 'Technical readiness', 'Repeatability');
?>
<section class="bg-brand-950 py-20 text-white lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-3xl">
      <p class="eyebrow text-brand-100">Why it matters</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight lg:text-4xl">Capability that shows up in the project.</h2>
      <p class="mt-4 text-lg leading-relaxed text-white/70">
        Manufacturing capability becomes commercially valuable when it creates consistency, responsiveness, product breadth, technical readiness, and repeatability.
      </p>
    </div>

    <ul class="mt-14 grid grid-cols-2 gap-px overflow-hidden rounded-sm bg-white/10 sm:grid-cols-3 lg:grid-cols-5">
      <?php foreach ($outcomes as $i => $outcome) : ?>
        <li <?php echo pwd_reveal($i); ?> class="bg-brand-950 p-6 lg:p-8">
          <?php echo pwd_icon('badge-check', 'size-6 text-brand-500'); ?>
          <p class="mt-5 text-xl font-semibold tracking-tight"><?php echo esc_html($outcome); ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
