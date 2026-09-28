<?php
// "Facility and automation".
// IMPORTANTE (brief): mostrar tamaño de la planta y automatización SOLO con cifras y descripciones
// aprobadas por el cliente. No inventar volumen de producción ni capacidad.
// Mientras $facts esté vacío, la sección no se muestra.
$facts = array(
  // array('value' => '', 'label' => ''),   // ej. superficie de la planta (dato aprobado)
);
$text = ''; // Descripción aprobada de la planta y la automatización.
$image = ''; // Foto real de la planta (ruta en uploads).

if (!$facts && !$text) return;
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container grid items-center gap-12 lg:grid-cols-2 lg:gap-20">
    <div <?php echo pwd_reveal(); ?>>
      <p class="eyebrow text-brand-600">Facility and automation</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Inside our Corona facility</h2>
      <?php if ($text) : ?>
        <p class="mt-6 text-lg leading-relaxed text-slate-600"><?php echo esc_html($text); ?></p>
      <?php endif; ?>
      <?php if ($facts) : ?>
        <dl class="mt-10 grid grid-cols-2 gap-x-8 gap-y-6 border-t border-slate-200 pt-8">
          <?php foreach ($facts as $fact) : ?>
            <div>
              <dt class="text-sm text-slate-500"><?php echo esc_html($fact['label']); ?></dt>
              <dd class="mt-1 text-2xl font-semibold tracking-tight text-brand-800"><?php echo esc_html($fact['value']); ?></dd>
            </div>
          <?php endforeach; ?>
        </dl>
      <?php endif; ?>
    </div>
    <div <?php echo pwd_reveal(1, 150); ?>>
      <?php echo pwd_media($image ? pwd_upload_url($image) : '', 'Premium Windows & Doors manufacturing facility in Corona, California', 'aspect-[4/3] w-full rounded-sm'); ?>
    </div>
  </div>
</section>
