<?php
// Sección: fabricante establecido.
// Reemplazar $image por una foto real de la planta o del equipo (el brief pide evitar imágenes de stock).
$image = '';

$facts = array(
  array('value' => '2001', 'label' => 'Manufacturing since'),
  array('value' => '5', 'label' => 'Product series'),
  array('value' => 'Vinyl & Aluminum', 'label' => 'Product lines'),
  array('value' => 'Corona, CA', 'label' => 'Manufacturing facility'),
);
?>
<section class="bg-slate-50 py-20 lg:py-28">
  <div class="site-container grid items-center gap-12 lg:grid-cols-2 lg:gap-20">
    <div <?php echo pwd_reveal(); ?> class="lg:order-2">
      <p class="eyebrow text-brand-600">Established manufacturing</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Manufacturing windows and doors since 2001.</h2>
      <p class="mt-6 text-lg leading-relaxed text-slate-600">
        Premium Windows &amp; Doors combines custom manufacturing, product versatility, and hands-on project support from its facility in Corona, California. From replacement applications to new construction and larger developments, every product is built around consistent execution and the requirements of the project.
      </p>

      <dl class="mt-10 grid grid-cols-2 gap-x-8 gap-y-6 border-t border-slate-200 pt-8">
        <?php foreach ($facts as $fact) : ?>
          <div>
            <dt class="text-sm text-slate-500"><?php echo esc_html($fact['label']); ?></dt>
            <dd class="mt-1 text-xl font-semibold tracking-tight text-brand-800"><?php echo esc_html($fact['value']); ?></dd>
          </div>
        <?php endforeach; ?>
      </dl>
    </div>

    <div <?php echo pwd_reveal(1, 150); ?> class="lg:order-1">
      <?php echo pwd_media($image, 'Premium Windows & Doors manufacturing facility in Corona, California', 'aspect-[4/3] w-full rounded-sm'); ?>
    </div>
  </div>
</section>
