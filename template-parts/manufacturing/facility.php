<?php
// "Facility and automation": galería de fotos reales de la planta (pwd_plant_photos()).
// IMPORTANTE (brief): mostrar tamaño de la planta y automatización SOLO con cifras y descripciones
// aprobadas por el cliente. No inventar volumen de producción ni capacidad.
// $facts y $text quedan vacíos hasta tener datos aprobados; la galería se muestra sin cifras.
$facts = array(
  // array('value' => '', 'label' => ''),   // ej. superficie de la planta (dato aprobado)
);
$text = ''; // Descripción aprobada de la planta y la automatización.

$plant = pwd_plant_photos();
// Primera foto: la grande (2×2 en desktop, posición absoluta para que no estire las filas).
// Las dos últimas ocupan media fila cada una. 'img': clases de proporción (por defecto 4:3).
$gallery = array(
  array('key' => 'floor', 'size' => '1536x1152', 'class' => 'col-span-2 lg:row-span-2', 'img' => 'aspect-[4/3] lg:absolute lg:inset-0 lg:h-full lg:aspect-auto'),
  array('key' => 'welding', 'size' => '768x576', 'class' => ''),
  array('key' => 'assembly', 'size' => '768x576', 'class' => ''),
  array('key' => 'finished', 'size' => '768x576', 'class' => ''),
  array('key' => 'staged', 'size' => '768x576', 'class' => ''),
  array('key' => 'aerial', 'size' => '1024x768', 'class' => 'col-span-2', 'img' => 'aspect-[2/1]'),
  array('key' => 'shipping', 'size' => '1024x768', 'class' => 'col-span-2', 'img' => 'aspect-[2/1]'),
);
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container">
    <div class="grid gap-8 lg:grid-cols-2 lg:items-end lg:gap-20">
      <div <?php echo pwd_reveal(); ?>>
        <p class="eyebrow text-brand-600">Facility and automation</p>
        <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Inside our Corona facility</h2>
      </div>
      <p <?php echo pwd_reveal(1); ?> class="text-lg leading-relaxed text-slate-600">
        <?php echo esc_html($text ?: 'Fabrication, assembly, quality control, and packaging come together in one connected operation in Corona, California.'); ?>
      </p>
    </div>

    <?php if ($facts) : ?>
      <dl class="mt-10 grid grid-cols-2 gap-x-8 gap-y-6 border-t border-slate-200 pt-8 lg:grid-cols-4">
        <?php foreach ($facts as $fact) : ?>
          <div>
            <dt class="text-sm text-slate-500"><?php echo esc_html($fact['label']); ?></dt>
            <dd class="mt-1 text-2xl font-semibold tracking-tight text-brand-800"><?php echo esc_html($fact['value']); ?></dd>
          </div>
        <?php endforeach; ?>
      </dl>
    <?php endif; ?>

    <ul class="mt-12 grid grid-cols-2 gap-3 lg:grid-cols-4">
      <?php foreach ($gallery as $i => $tile) : $photo = $plant[$tile['key']]; ?>
        <li <?php echo pwd_reveal($i % 4); ?> class="<?php echo esc_attr($tile['class']); ?>">
          <figure class="group relative h-full overflow-hidden rounded-sm bg-slate-200">
            <img
              src="<?php echo esc_url(pwd_upload_sized($photo['image'], $tile['size'])); ?>"
              alt="<?php echo esc_attr($photo['caption'] . ', Premium Windows & Doors'); ?>"
              loading="lazy"
              decoding="async"
              class="<?php echo esc_attr($tile['img'] ?? 'aspect-[4/3]'); ?> w-full object-cover transition-transform duration-700 group-hover:scale-105"
            >
            <figcaption class="absolute inset-x-0 bottom-0 bg-linear-to-t from-slate-950/75 to-transparent px-4 pt-10 pb-3 text-sm font-medium text-white"><?php echo esc_html($photo['caption']); ?></figcaption>
          </figure>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
