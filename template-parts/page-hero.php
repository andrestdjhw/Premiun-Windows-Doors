<?php
// Hero de páginas internas: foto de fondo oscurecida, H1 en varios pesos y CTAs opcionales.
// $args:
//   eyebrow  string
//   title    array de líneas array(texto, estilo) con estilo: light | accent | medium
//   text     string opcional
//   image    array ancho => archivo de uploads (el primero es el src por defecto)
//   buttons  array opcional de array(label, href, variante de pwd_button)
$hero = wp_parse_args($args, array('eyebrow' => '', 'title' => array(), 'text' => '', 'image' => array(), 'buttons' => array()));
$line_styles = array(
  'light' => 'font-light',
  'accent' => 'font-bold text-brand-500',
  'medium' => 'font-medium',
);
?>
<section class="relative isolate overflow-hidden bg-brand-950">
  <?php if ($hero['image']) : ?>
    <img
      src="<?php echo esc_url(pwd_upload_url(reset($hero['image']))); ?>"
      srcset="<?php echo esc_attr(implode(', ', array_map(function ($w, $file) { return pwd_upload_url($file) . ' ' . $w . 'w'; }, array_keys($hero['image']), $hero['image']))); ?>"
      sizes="100vw"
      alt=""
      fetchpriority="high"
      decoding="async"
      class="absolute inset-0 -z-10 size-full object-cover opacity-40"
    >
  <?php endif; ?>
  <div aria-hidden="true" class="absolute inset-0 -z-10 bg-linear-to-r from-brand-950 via-brand-950/80 to-brand-900/30"></div>

  <div class="site-container py-24 lg:py-36">
    <div class="max-w-3xl">
      <p <?php echo pwd_reveal(); ?> class="font-mono text-xs uppercase tracking-[0.35em] text-brand-100"><?php echo esc_html($hero['eyebrow']); ?></p>
      <h1 <?php echo pwd_reveal(1); ?> class="mt-7 text-[40px] leading-[1.05] tracking-tight text-white sm:text-5xl xl:text-[64px]">
        <?php foreach ($hero['title'] as $line) : ?>
          <span class="block <?php echo esc_attr($line_styles[$line[1]]); ?>"><?php echo esc_html($line[0]); ?></span>
        <?php endforeach; ?>
      </h1>
      <?php if ($hero['text']) : ?>
        <p <?php echo pwd_reveal(2); ?> class="mt-7 max-w-2xl text-lg leading-relaxed text-white/80"><?php echo esc_html($hero['text']); ?></p>
      <?php endif; ?>
      <?php if ($hero['buttons']) : ?>
        <div <?php echo pwd_reveal(3); ?> class="mt-10 flex flex-col gap-4 sm:flex-row sm:flex-wrap">
          <?php foreach ($hero['buttons'] as $button) echo pwd_button($button[0], $button[1], $button[2]); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
