<?php
// Bloque final de CTAs en cards azules.
// $args: title, ctas (array de label, text, href relativo al home).
$block = wp_parse_args($args, array('title' => '', 'ctas' => array()));
?>
<section class="bg-slate-50 py-20 lg:py-24">
  <div class="site-container">
    <h2 <?php echo pwd_reveal(); ?> class="text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl"><?php echo esc_html($block['title']); ?></h2>

    <ul class="mt-10 grid gap-4 md:grid-cols-3">
      <?php foreach ($block['ctas'] as $i => $cta) : ?>
        <li <?php echo pwd_reveal($i); ?>>
          <a href="<?php echo esc_url(home_url($cta['href'])); ?>" data-tilt class="group flex h-full flex-col rounded-sm bg-brand-900 p-8 text-white transition-colors hover:bg-brand-800">
            <span class="flex items-center justify-between gap-4 text-xl font-semibold tracking-tight">
              <?php echo esc_html($cta['label']); ?>
              <?php echo pwd_icon('arrow-right', 'size-5 shrink-0 transition-transform group-hover:translate-x-1'); ?>
            </span>
            <span class="mt-3 text-sm leading-relaxed text-white/70"><?php echo esc_html($cta['text']); ?></span>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
