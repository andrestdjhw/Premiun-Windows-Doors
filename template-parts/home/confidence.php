<?php
// Sección: confianza verificable (certificaciones, BBB y garantía).
$proofs = array(
  array('icon' => 'award', 'title' => 'AAMA Certified', 'text' => 'Certifications or labels depending on series, model, and configuration.', 'href' => home_url('/resources/certifications/'), 'external' => false),
  array('icon' => 'file-text', 'title' => 'NFRC Rated', 'text' => 'Energy performance ratings documented for each qualifying product.', 'href' => home_url('/resources/certifications/'), 'external' => false),
  array('icon' => 'badge-check', 'title' => 'BBB A+ Rating', 'text' => 'BBB Accredited Business with an A+ rating.', 'href' => 'https://www.bbb.org/us/ca/corona/profile/door-manufacturers/premium-windows-1126-850101245', 'external' => true),
  array('icon' => 'shield-check', 'title' => 'Transferable Lifetime Warranty', 'text' => 'Subject to current terms and conditions.', 'href' => home_url('/warranty/'), 'external' => false),
);
?>
<section class="border-t border-slate-200 bg-brand-50 py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-3xl">
      <p class="eyebrow text-brand-600">Verifiable confidence</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Performance supported by documentation.</h2>
      <p class="mt-4 text-lg leading-relaxed text-slate-600">
        Product performance should be supported by the documentation behind it. Premium products carry AAMA and NFRC certifications or labels depending on series, model, and configuration; Premium is also a BBB Accredited Business with an A+ rating and offers a transferable lifetime warranty subject to current terms and conditions.
      </p>
    </div>

    <ul class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
      <?php foreach ($proofs as $i => $proof) : ?>
        <li <?php echo pwd_reveal($i); ?>>
          <a
            data-tilt
            href="<?php echo esc_url($proof['href']); ?>"
            <?php if ($proof['external']) echo 'target="_blank" rel="noopener noreferrer"'; ?>
            class="group flex h-full flex-col rounded-sm border border-brand-100 bg-white p-7 transition-colors hover:border-brand-600"
          >
            <span class="flex size-12 items-center justify-center rounded-full bg-brand-50 text-brand-700">
              <?php echo pwd_icon($proof['icon'], 'size-6'); ?>
            </span>
            <span class="mt-6 font-semibold text-slate-900"><?php echo esc_html($proof['title']); ?></span>
            <span class="mt-2 text-sm leading-relaxed text-slate-600"><?php echo esc_html($proof['text']); ?></span>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
