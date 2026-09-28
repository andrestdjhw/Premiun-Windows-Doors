<?php
// Intro: la especificación ocurre antes del pedido; la página acorta cada paso.
$steps = array(
  array('title' => 'Understand product fit', 'href' => '/solutions/'),
  array('title' => 'Compare series', 'href' => '/series/#compare'),
  array('title' => 'Review technical details', 'href' => '/professionals/specifications/'),
  array('title' => 'Locate project documentation', 'href' => '/resources/technical/'),
);
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container grid gap-14 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-6">
      <h2 class="eyebrow text-brand-600">Before the order</h2>
      <p class="mt-6 text-2xl leading-snug font-medium tracking-tight text-slate-900 lg:text-3xl">
        Specification decisions happen before the order.
      </p>
      <p class="mt-6 text-lg leading-relaxed text-slate-600">
        Find what you need to understand product fit, compare series, review technical details, and locate the documentation required for your project&mdash;in less time.
      </p>
    </div>

    <ol class="self-center lg:col-span-5 lg:col-start-8">
      <?php foreach ($steps as $i => $step) : ?>
        <li <?php echo pwd_reveal($i + 1); ?>>
          <a href="<?php echo esc_url(home_url($step['href'])); ?>" class="group flex items-center gap-5 border-b border-slate-200 py-5 transition-colors hover:text-brand-700">
            <span class="font-mono text-sm text-brand-600"><?php echo esc_html(sprintf('%02d', $i + 1)); ?></span>
            <span class="flex-1 text-lg font-medium text-slate-900 transition-colors group-hover:text-brand-700"><?php echo esc_html($step['title']); ?></span>
            <?php echo pwd_icon('arrow-right', 'size-4 text-brand-700 transition-transform group-hover:translate-x-1'); ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>
