<?php
// Dealer tools. El apoyo de ventas y marketing aplica "where approved" (según el brief).
$tools = array(
  array('icon' => 'badge-check', 'title' => 'iQuote access', 'text' => 'Quoting and ordering for dealers.', 'href' => '/iquote/'),
  array('icon' => 'file-badge', 'title' => 'Product literature', 'text' => 'Catalogs and brochures to share with customers.', 'href' => '/resources/brochures/'),
  array('icon' => 'file-text', 'title' => 'Technical resources', 'text' => 'Drawings, specifications and certifications.', 'href' => '/resources/technical/'),
  array('icon' => 'factory', 'title' => 'Service requests', 'text' => 'A clear path for service after the sale.', 'href' => '/service-request/'),
  array('icon' => 'shield-check', 'title' => 'Warranty', 'text' => 'Warranty terms and information.', 'href' => '/warranty/'),
  array('icon' => 'award', 'title' => 'Sales & marketing support', 'text' => 'Available where approved.', 'href' => '/professionals/marketing-resources/'),
);
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container grid gap-12 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-4">
      <p class="eyebrow text-brand-600">Dealer tools</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Tools to quote, sell and support</h2>
      <div class="mt-8">
        <?php echo pwd_button('iQuote Login', home_url('/iquote/')); ?>
      </div>
    </div>

    <ul class="grid gap-4 sm:grid-cols-2 lg:col-span-8">
      <?php foreach ($tools as $i => $tool) : ?>
        <li <?php echo pwd_reveal($i % 2); ?>>
          <a href="<?php echo esc_url(home_url($tool['href'])); ?>" data-tilt class="group flex h-full items-start gap-4 rounded-sm border border-slate-200 bg-white p-6 transition-colors hover:border-brand-600">
            <span class="flex size-11 shrink-0 items-center justify-center rounded-full bg-brand-50 text-brand-700">
              <?php echo pwd_icon($tool['icon'], 'size-5'); ?>
            </span>
            <span class="flex-1">
              <span class="block font-semibold text-slate-900"><?php echo esc_html($tool['title']); ?></span>
              <span class="mt-1 block text-sm leading-relaxed text-slate-600"><?php echo esc_html($tool['text']); ?></span>
            </span>
            <?php echo pwd_icon('arrow-right', 'mt-1 size-4 shrink-0 text-brand-700 transition-transform group-hover:translate-x-1'); ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
