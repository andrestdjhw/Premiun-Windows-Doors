<?php
// Sección: capacidad de manufactura (proceso conectado de selección a entrega).
// Fondo: foto real del piso de producción. Timeline horizontal en desktop y vertical en móvil; la línea se dibuja al entrar en pantalla (.timeline-line en src/index.css).
// PENDIENTE: confirmar con operaciones la descripción de cada paso.
$steps = array(
  array('icon' => 'drafting-compass', 'title' => 'Product development', 'text' => 'Five series developed around different materials, aesthetics and performance.'),
  array('icon' => 'sliders', 'title' => 'Custom configurations', 'text' => 'Sizes, operations, finishes and glass built to each order.'),
  array('icon' => 'badge-check', 'title' => 'Quality control', 'text' => 'Checks along the line for consistent results.'),
  array('icon' => 'package', 'title' => 'Packaging', 'text' => 'Protected for the trip from Corona to the jobsite.'),
  array('icon' => 'headset', 'title' => 'Support', 'text' => 'Project and dealer support through delivery.'),
);
?>
<section class="relative isolate overflow-hidden bg-brand-950 py-20 text-white lg:py-28">
  <img src="<?php echo esc_url(pwd_upload_sized(pwd_plant_photos()['floor']['image'], '2048x1536')); ?>" alt="" loading="lazy" decoding="async" class="absolute inset-0 -z-10 size-full object-cover opacity-25">
  <div aria-hidden="true" class="absolute inset-0 -z-10 bg-linear-to-b from-brand-950/80 via-brand-950/90 to-brand-950"></div>

  <div class="site-container">
    <div class="grid gap-8 lg:grid-cols-2 lg:items-end lg:gap-20">
      <div <?php echo pwd_reveal(); ?>>
        <p class="eyebrow text-brand-100">Manufacturing capability</p>
        <h2 class="mt-4 text-3xl font-semibold tracking-tight lg:text-4xl">Built in Corona. Built around consistency.</h2>
      </div>
      <div <?php echo pwd_reveal(1); ?>>
        <p class="text-lg leading-relaxed text-white/70">
          Premium&rsquo;s manufacturing operation brings product development, custom configurations, quality control, packaging, and support into one connected process, helping customers move from selection to delivery with greater clarity.
        </p>
        <div class="mt-8">
          <?php echo pwd_button('Explore Manufacturing', home_url('/capabilities/'), 'light'); ?>
        </div>
      </div>
    </div>

    <div data-reveal class="relative mt-16 lg:mt-20">
      <span aria-hidden="true" class="absolute top-7 bottom-7 left-7 w-px bg-white/15 lg:top-7 lg:right-[10%] lg:bottom-auto lg:left-[10%] lg:h-px lg:w-auto">
        <span class="timeline-line absolute inset-0 bg-linear-to-b from-brand-500 to-brand-100 lg:bg-linear-to-r"></span>
      </span>

      <ol class="relative grid gap-10 lg:grid-cols-5 lg:gap-6">
        <?php foreach ($steps as $i => $step) : ?>
          <li <?php echo pwd_reveal($i + 1, 150); ?> class="group flex gap-6 lg:flex-col lg:items-center lg:gap-0 lg:text-center">
            <span class="relative flex size-14 shrink-0 items-center justify-center rounded-full bg-brand-900 ring-1 ring-white/20 transition-colors duration-300 group-hover:bg-brand-600 group-hover:ring-brand-500">
              <?php echo pwd_icon($step['icon'], 'size-6'); ?>
              <span class="absolute -top-1 -right-1 flex size-5 items-center justify-center rounded-full bg-brand-500 font-mono text-[10px] font-semibold"><?php echo esc_html($i + 1); ?></span>
            </span>
            <div class="pt-1 lg:mt-6 lg:pt-0">
              <h3 class="text-lg font-semibold tracking-tight"><?php echo esc_html($step['title']); ?></h3>
              <p class="mt-2 text-sm leading-relaxed text-white/60 lg:mx-auto lg:max-w-60"><?php echo esc_html($step['text']); ?></p>
            </div>
          </li>
        <?php endforeach; ?>
      </ol>

      <p <?php echo pwd_reveal(count($steps) + 1, 150); ?> class="mt-12 flex items-center gap-3 font-mono text-[11px] tracking-[0.2em] text-brand-100/70 uppercase lg:justify-center">
        <span class="h-px w-8 bg-brand-100/40"></span>
        From selection to delivery
        <span class="h-px w-8 bg-brand-100/40"></span>
      </p>
    </div>
  </div>
</section>
