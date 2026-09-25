<?php
// Sección: las cinco series de producto.
$series = array(
  array('name' => 'Zenith', 'tagline' => 'Versatility Redefined', 'image' => '2026/09/ZENITH_Series-768x512.jpg', 'slug' => 'zenith'),
  array('name' => 'Timeless', 'tagline' => 'Classic Performance', 'image' => '2026/09/Timeless_Series-768x512.jpg', 'slug' => 'timeless'),
  array('name' => 'Serene', 'tagline' => 'Modern Comfort', 'image' => '2026/09/Serene_Series-768x512.jpg', 'slug' => 'serene'),
  array('name' => 'Elegance', 'tagline' => 'Refined Design', 'image' => '2026/09/Elegance_Series.jpg', 'slug' => 'elegance'),
  array('name' => 'Aluminum', 'tagline' => 'Strength in Form', 'image' => '2026/09/Aluminum_Series-768x512.jpg', 'slug' => 'aluminum'),
);
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
      <div class="max-w-2xl">
        <p class="eyebrow text-brand-600">Series</p>
        <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Five product series.</h2>
        <p class="mt-4 text-lg leading-relaxed text-slate-600">Different materials, aesthetics, performance priorities, and applications. Compare them side by side to identify the right fit for the project.</p>
      </div>
      <div class="shrink-0">
        <?php echo pwd_button('Compare Series', home_url('/compare-series/'), 'outline'); ?>
      </div>
    </div>

    <ul class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
      <?php foreach ($series as $i => $item) : ?>
        <li <?php echo pwd_reveal($i); ?>>
          <a href="<?php echo esc_url(home_url('/series/' . $item['slug'] . '/')); ?>" class="group block">
            <div data-tilt class="overflow-hidden rounded-sm">
              <?php echo pwd_media(pwd_upload_url($item['image']), $item['name'] . ' Series home exterior', 'aspect-[4/3] w-full transition-transform duration-500 group-hover:scale-105'); ?>
            </div>
            <h3 class="mt-5 text-lg font-semibold tracking-tight text-slate-900 transition-colors group-hover:text-brand-700"><?php echo esc_html($item['name']); ?> Series</h3>
            <p class="mt-1 text-sm text-slate-600"><?php echo esc_html($item['tagline']); ?></p>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
