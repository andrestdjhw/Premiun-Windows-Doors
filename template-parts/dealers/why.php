<?php
// Why Premium: los 7 puntos del brief.
$reasons = array(
  array('icon' => 'factory', 'title' => 'Made-to-order manufacturing', 'href' => '/capabilities/'),
  array('icon' => 'layers', 'title' => 'Vinyl and aluminum series', 'href' => '/series/#compare'),
  array('icon' => 'file-badge', 'title' => 'Windows and doors', 'href' => '/products/'),
  array('icon' => 'badge-check', 'title' => 'Residential, commercial and multifamily applications', 'href' => '/solutions/'),
  array('icon' => 'file-text', 'title' => 'Technical resources', 'href' => '/resources/technical/'),
  array('icon' => 'award', 'title' => 'Project support', 'href' => '/professionals/project-support/'),
  array('icon' => 'shield-check', 'title' => 'Service and warranty infrastructure', 'href' => '/warranty/'),
);
?>
<section class="bg-slate-50 py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
      <p class="eyebrow text-brand-600">Why Premium</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Why dealers choose Premium</h2>
    </div>

    <ul class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
      <?php foreach ($reasons as $i => $item) : ?>
        <li <?php echo pwd_reveal($i % 4); ?>>
          <a href="<?php echo esc_url(home_url($item['href'])); ?>" data-tilt class="group flex h-full flex-col rounded-sm border border-slate-200 bg-white p-7 transition-colors hover:border-brand-600">
            <span class="flex size-12 items-center justify-center rounded-full bg-brand-50 text-brand-700">
              <?php echo pwd_icon($item['icon'], 'size-6'); ?>
            </span>
            <span class="mt-6 flex-1 text-lg font-semibold leading-snug tracking-tight text-slate-900"><?php echo esc_html($item['title']); ?></span>
            <?php echo pwd_icon('arrow-right', 'mt-6 size-4 text-brand-700 transition-transform group-hover:translate-x-1'); ?>
          </a>
        </li>
      <?php endforeach; ?>
      <li <?php echo pwd_reveal(3); ?>>
        <a href="<?php echo esc_url(home_url('/professionals/become-a-dealer/')); ?>" class="group flex h-full flex-col justify-between rounded-sm bg-brand-900 p-7 text-white transition-colors hover:bg-brand-800">
          <span class="text-lg font-semibold tracking-tight">Ready to offer Premium?</span>
          <span class="mt-6 inline-flex items-center gap-2 text-sm font-medium">
            Become a Dealer
            <?php echo pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1'); ?>
          </span>
        </a>
      </li>
    </ul>
  </div>
</section>
