<?php
// Brochures por serie + literatura general (brochures sin serie asignada).
$series = array(
  array('slug' => 'zenith', 'name' => 'Zenith', 'tagline' => 'Versatility Redefined', 'image' => '2026/09/ZENITH_Series-768x512.jpg'),
  array('slug' => 'timeless', 'name' => 'Timeless', 'tagline' => 'Classic Performance', 'image' => '2026/09/Timeless_Series-768x512.jpg'),
  array('slug' => 'serene', 'name' => 'Serene', 'tagline' => 'Modern Comfort', 'image' => '2026/09/Serene_Series-768x512.jpg'),
  array('slug' => 'elegance', 'name' => 'Elegance', 'tagline' => 'Refined Design', 'image' => '2026/09/Elegance_Series.jpg'),
  array('slug' => 'aluminum', 'name' => 'Aluminum', 'tagline' => 'Strength in Form', 'image' => '2026/09/Aluminum_Series-768x512.jpg'),
);

$brochures = get_posts(array(
  'post_type' => 'attachment',
  'post_status' => 'inherit',
  'post_mime_type' => 'application/pdf',
  'posts_per_page' => -1,
  'orderby' => 'title',
  'order' => 'ASC',
  'tax_query' => array(array('taxonomy' => 'pwd_doc_type', 'field' => 'slug', 'terms' => 'brochure')),
));

// Agrupa los PDFs por serie; los que no tienen serie van a literatura general.
$by_series = array();
$general = array();
foreach ($brochures as $brochure) {
  $slugs = wp_get_object_terms($brochure->ID, 'pwd_series', array('fields' => 'slugs'));
  if (!$slugs) {
    $general[] = $brochure;
    continue;
  }
  foreach ($slugs as $slug) $by_series[$slug][] = $brochure;
}
?>
<section id="brochures" class="scroll-mt-28 bg-white py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
      <p class="eyebrow text-brand-600">Series literature</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Brochures by series</h2>
      <p class="mt-4 text-lg leading-relaxed text-slate-600">Open or download any brochure directly. No sign-up needed.</p>
    </div>

    <ul class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
      <?php foreach ($series as $i => $item) : $files = $by_series[$item['slug']] ?? array(); ?>
        <li <?php echo pwd_reveal($i); ?> data-tilt class="flex flex-col overflow-hidden rounded-sm border border-slate-200 bg-white">
          <?php echo pwd_media(pwd_upload_url($item['image']), $item['name'] . ' Series home exterior', 'aspect-[4/3] w-full'); ?>
          <div class="flex flex-1 flex-col p-6">
            <h3 class="text-lg font-semibold tracking-tight text-slate-900"><?php echo esc_html($item['name']); ?> Series</h3>
            <p class="mt-1 text-sm text-slate-600"><?php echo esc_html($item['tagline']); ?></p>
            <div class="mt-auto space-y-2 pt-6">
              <?php if ($files) : ?>
                <?php foreach ($files as $file) echo pwd_download_button($file->ID, count($files) > 1 ? get_the_title($file) : 'Download PDF', 'w-full'); ?>
              <?php else : ?>
                <p class="text-sm text-slate-500">Brochure coming soon.</p>
                <?php echo pwd_arrow_link('View series', home_url('/series/' . $item['slug'] . '/'), 'text-sm text-brand-700 hover:text-brand-900'); ?>
              <?php endif; ?>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>

    <?php if ($general) : ?>
      <div <?php echo pwd_reveal(); ?> class="mt-16">
        <h2 class="text-2xl font-semibold tracking-tight text-slate-900">General literature</h2>
        <ul class="mt-4 divide-y divide-slate-200 border-y border-slate-200">
          <?php foreach ($general as $file) : ?>
            <li class="flex flex-col gap-4 py-5 sm:flex-row sm:items-center">
              <span class="flex size-12 shrink-0 items-center justify-center rounded-sm bg-brand-50 text-brand-700">
                <?php echo pwd_icon('file-text', 'size-6'); ?>
              </span>
              <p class="flex-1 font-semibold text-slate-900"><?php echo esc_html(get_the_title($file)); ?></p>
              <?php echo pwd_download_button($file->ID); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
  </div>
</section>
