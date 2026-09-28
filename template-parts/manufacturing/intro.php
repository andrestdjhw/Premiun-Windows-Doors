<?php
// Intro: experiencia de manufactura desde 2001 (mismos datos que Home y About).
$facts = array(
  array('value' => '2001', 'label' => 'Manufacturing since'),
  array('value' => 'Corona, CA', 'label' => 'Manufacturing facility'),
  array('value' => 'Made to order', 'label' => 'Windows and doors'),
  array('value' => 'Vinyl & Aluminum', 'label' => 'Product lines'),
);
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container grid gap-14 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-7">
      <h2 class="eyebrow text-brand-600">Since 2001</h2>
      <p class="mt-6 text-2xl leading-snug font-medium tracking-tight text-slate-900 lg:text-3xl">
        Since 2001, Premium Windows &amp; Doors has built its manufacturing experience around made-to-order window and door products for residential, commercial, and multifamily applications.
      </p>
    </div>

    <dl class="grid grid-cols-2 gap-px self-center overflow-hidden rounded-sm border border-slate-200 bg-slate-200 lg:col-span-5">
      <?php foreach ($facts as $i => $fact) : ?>
        <div <?php echo pwd_reveal($i + 1); ?> class="bg-white p-6">
          <dt class="text-sm text-slate-500"><?php echo esc_html($fact['label']); ?></dt>
          <dd class="mt-1 text-xl font-semibold tracking-tight text-brand-800"><?php echo esc_html($fact['value']); ?></dd>
        </div>
      <?php endforeach; ?>
    </dl>
  </div>
</section>
