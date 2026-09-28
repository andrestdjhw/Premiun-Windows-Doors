<?php
// "Go deeper than product availability": el valor está en todo el ciclo, no solo en el producto.
$cycle = array('Quote', 'Explain', 'Document', 'Order', 'Service', 'Repeat');
?>
<section class="bg-brand-950 py-20 text-white lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-3xl">
      <p class="eyebrow text-brand-100">Beyond product availability</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight lg:text-4xl">Not only what Premium makes, but how Premium supports the relationship.</h2>
      <p class="mt-4 text-lg leading-relaxed text-white/70">
        A dealer relationship becomes more valuable when the products are easy to quote, explain, document, order, service, and repeat.
      </p>
    </div>

    <ol class="mt-14 grid grid-cols-2 gap-px overflow-hidden rounded-sm bg-white/10 sm:grid-cols-3 lg:grid-cols-6">
      <?php foreach ($cycle as $i => $step) : ?>
        <li <?php echo pwd_reveal($i); ?> class="bg-brand-950 p-6 lg:p-8">
          <span class="font-mono text-sm text-brand-500"><?php echo esc_html(sprintf('%02d', $i + 1)); ?></span>
          <p class="mt-4 text-xl font-semibold tracking-tight">Easy to <?php echo esc_html(strtolower($step)); ?></p>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>
