<?php
// Confianza: recursos que cada página de producto debe hacer fáciles de entender antes de comprar.
$resources = array(
  array('icon' => 'award', 'title' => 'Performance', 'href' => '/capabilities/energy-efficiency/'),
  array('icon' => 'layers', 'title' => 'Frame options', 'href' => '/capabilities/finishes-colors/'),
  array('icon' => 'badge-check', 'title' => 'Glazing', 'href' => '/capabilities/glass-options/'),
  array('icon' => 'file-text', 'title' => 'Technical documents', 'href' => '/resources/technical-drawings/'),
  array('icon' => 'shield-check', 'title' => 'Warranty information', 'href' => '/warranty/'),
  array('icon' => 'file-badge', 'title' => 'Service resources', 'href' => '/service-request/'),
);
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container grid gap-12 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-5">
      <p class="eyebrow text-brand-600">Confidence</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Understand it before you buy it.</h2>
      <p class="mt-4 text-lg leading-relaxed text-slate-600">
        Performance, frame options, glazing, technical documents, warranty information, and service resources&mdash;easy to find and easy to understand before purchase.
      </p>
    </div>

    <ul class="grid gap-4 sm:grid-cols-2 lg:col-span-7">
      <?php foreach ($resources as $i => $item) : ?>
        <li <?php echo pwd_reveal($i); ?>>
          <a href="<?php echo esc_url(home_url($item['href'])); ?>" data-tilt class="group flex items-center gap-4 rounded-sm border border-slate-200 bg-white p-5 transition-colors hover:border-brand-600">
            <span class="flex size-11 shrink-0 items-center justify-center rounded-full bg-brand-50 text-brand-700">
              <?php echo pwd_icon($item['icon'], 'size-5'); ?>
            </span>
            <span class="flex-1 font-medium text-slate-900"><?php echo esc_html($item['title']); ?></span>
            <?php echo pwd_icon('arrow-right', 'size-4 text-brand-700 transition-transform group-hover:translate-x-1'); ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
