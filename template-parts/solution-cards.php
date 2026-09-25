<?php
// Cards con foto de Residential, Multifamily y Commercial (Home y /solutions/).
// La descripción se despliega al hover en escritorio y se muestra siempre en pantallas táctiles.
// $args: eyebrow, title, text (opcional), background (clase de fondo).
$block = wp_parse_args($args, array('eyebrow' => 'Solutions', 'title' => 'Solutions by project type', 'text' => '', 'background' => 'bg-white'));
$solutions = array(
  array(
    'title' => 'Residential',
    'tagline' => 'Beautiful spaces. Lasting value.',
    'text' => 'Made-to-order windows and doors for replacement and new construction, with design, glass, color, hardware, and configuration options across vinyl and aluminum product lines.',
    'href' => home_url('/solutions/residential/'),
    'image' => array('1024' => '2026/09/Residential-1024x683.jpg', '1536' => '2026/09/Residential-1536x1024.jpg'),
    'alt' => 'Modern two-story California home at dusk with black-framed windows',
  ),
  array(
    'title' => 'Multifamily',
    'tagline' => 'Built for scale. Backed by expertise.',
    'text' => 'Product consistency, technical documentation, repeatable configurations, project support, and manufacturing built for larger scopes and recurring requirements.',
    'href' => home_url('/solutions/multifamily/'),
    'image' => array('1024' => '2026/09/Multifamily-1024x650.jpg', '1536' => '2026/09/Multifamily-1536x975.jpg'),
    'alt' => 'Apartment building facade with repeating windows and balcony doors',
  ),
  array(
    'title' => 'Commercial',
    'tagline' => "Performance for what's next.",
    'text' => 'Window and door solutions for projects where specification, performance, documentation, appearance, and coordination matter as much as the product itself.',
    'href' => home_url('/solutions/commercial/'),
    'image' => array('1024' => '2026/09/Commercial--1024x768.jpg', '1536' => '2026/09/Commercial--1536x1152.jpg'),
    'alt' => 'Commercial building with a curved glass facade at twilight',
  ),
);
?>
<section class="<?php echo esc_attr($block['background']); ?> py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
      <p class="eyebrow text-brand-600"><?php echo esc_html($block['eyebrow']); ?></p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl"><?php echo esc_html($block['title']); ?></h2>
      <?php if ($block['text']) : ?>
        <p class="mt-4 text-lg leading-relaxed text-slate-600"><?php echo esc_html($block['text']); ?></p>
      <?php endif; ?>
    </div>

    <ul class="mt-12 grid gap-4 md:grid-cols-3">
      <?php foreach ($solutions as $i => $solution) : ?>
        <li <?php echo pwd_reveal($i); ?>>
          <a
            href="<?php echo esc_url($solution['href']); ?>"
            data-tilt
            class="group block h-[420px] overflow-hidden rounded-sm bg-brand-950 lg:h-[520px]"
          >
            <img
              src="<?php echo esc_url(pwd_upload_url($solution['image']['1024'])); ?>"
              srcset="<?php echo esc_attr(pwd_upload_url($solution['image']['1024']) . ' 1024w, ' . pwd_upload_url($solution['image']['1536']) . ' 1536w'); ?>"
              sizes="(min-width: 768px) 33vw, 100vw"
              alt="<?php echo esc_attr($solution['alt']); ?>"
              loading="lazy"
              decoding="async"
              class="absolute inset-0 size-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
            >
            <span class="absolute inset-0 bg-linear-to-t from-brand-950/95 via-brand-950/40 via-50% to-transparent"></span>

            <span class="absolute inset-x-0 bottom-0 p-7 text-white lg:p-9">
              <span class="block text-3xl font-semibold tracking-tight"><?php echo esc_html($solution['title']); ?></span>
              <span class="mt-2 inline-flex items-center gap-2 text-lg text-white/85">
                <?php echo esc_html($solution['tagline']); ?>
                <?php echo pwd_icon('arrow-right', 'size-4 shrink-0 transition-transform group-hover:translate-x-1'); ?>
              </span>
              <span class="grid transition-[grid-template-rows] duration-500 ease-out pointer-fine:grid-rows-[0fr] pointer-fine:group-hover:grid-rows-[1fr] pointer-fine:group-focus-visible:grid-rows-[1fr]">
                <span class="overflow-hidden">
                  <span class="block pt-4 text-[15px] leading-relaxed text-white/75"><?php echo esc_html($solution['text']); ?></span>
                </span>
              </span>
            </span>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
