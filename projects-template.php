<?php
/*
 * Template Name: Projects
 *
 * /projects/. Galería de inspiración (pwd_gallery_data(), renders del sitio actual) con filtros por serie
 * y estilo vía URL (?series=&style=), sin JavaScript.
 * PENDIENTE (cliente): proyectos reales con producto, aplicación, alcance y requisitos (ver template-parts/home/projects.php).
 */

pwd_seo(
  'Projects & Inspiration | Premium Windows & Doors',
  'Get inspired by Premium windows and doors in modern farmhouses, desert homes, apartments and hotels. Filter by series and window or door style.',
  '/projects/'
);

$series = pwd_series_data();
$styles = array();
foreach (pwd_product_matrix() as $group) {
  foreach ($group as $style) $styles[sanitize_title(str_replace(array('Multiple Sliding', 'Multiple Folding'), array('Multi-Slide', 'Multi-Fold'), $style['name']))] = $style['name'];
}
$active_series = sanitize_title(wp_unslash($_GET['series'] ?? ''));
$active_style = sanitize_title(wp_unslash($_GET['style'] ?? ''));
$items = array_values(array_filter(pwd_gallery_data(), function ($item) use ($active_series, $active_style) {
  return (!$active_series || $item['series'] === $active_series) && (!$active_style || in_array($active_style, $item['styles'], true));
}));
$used_styles = array_unique(array_merge(...array_column(pwd_gallery_data(), 'styles')));
$page_url = get_permalink();
$chip = function ($label, $args, $active) use ($page_url) {
  printf(
    '<a href="%s#gallery" %s class="rounded-sm border px-3.5 py-2 text-sm font-medium transition-colors %s">%s</a>',
    esc_url(add_query_arg(array_filter($args), $page_url)),
    $active ? 'aria-current="true"' : '',
    $active ? 'border-brand-800 bg-brand-800 text-white' : 'border-slate-300 bg-white text-slate-700 hover:border-brand-600',
    esc_html($label)
  );
};

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'Projects & Inspiration',
    'title' => array(
      array('See Premium windows', 'light'),
      array('and doors in place.', 'accent'),
    ),
    'text' => 'Homes, apartments and hotels designed with Premium products. Filter by series or by window and door style.',
    'image' => array('1536' => '2026/09/VIZ-ZENITH-LA-FARMHOUSE-Back-Yard-A.jpg'),
    'buttons' => array(array('Browse the Gallery', '#gallery', 'light')),
  ));
  ?>

  <section id="gallery" class="scroll-mt-28 bg-white py-16 lg:py-24">
    <div class="site-container">
      <div class="space-y-4">
        <div class="flex flex-wrap items-center gap-2">
          <span class="mr-2 w-16 text-sm font-medium text-slate-500">Series</span>
          <?php
          $chip('All', array('style' => $active_style), !$active_series);
          foreach ($series as $slug => $info) {
            if (in_array($slug, array_column(pwd_gallery_data(), 'series'), true)) $chip($info['name'], array('series' => $slug, 'style' => $active_style), $active_series === $slug);
          }
          ?>
        </div>
        <div class="flex flex-wrap items-center gap-2">
          <span class="mr-2 w-16 text-sm font-medium text-slate-500">Style</span>
          <?php
          $chip('All', array('series' => $active_series), !$active_style);
          foreach ($styles as $slug => $name) {
            if (in_array($slug, $used_styles, true)) $chip($name, array('series' => $active_series, 'style' => $slug), $active_style === $slug);
          }
          ?>
        </div>
      </div>

      <p class="mt-8 text-sm text-slate-500" aria-live="polite"><?php echo esc_html(sprintf(_n('%d image', '%d images', count($items)), count($items))); ?></p>

      <?php if ($items) : ?>
        <ul class="mt-4 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
          <?php foreach ($items as $i => $item) : ?>
            <li <?php echo pwd_reveal($i % 3); ?> class="overflow-hidden rounded-sm border border-slate-200 bg-white">
              <a href="<?php echo esc_url(pwd_upload_url($item['image'])); ?>" target="_blank" rel="noopener" class="group block overflow-hidden">
                <img src="<?php echo esc_url(pwd_upload_sized($item['image'], '1024x683')); ?>" alt="<?php echo esc_attr($item['title']); ?>" loading="lazy" decoding="async" class="aspect-[3/2] w-full object-cover transition-transform duration-500 group-hover:scale-105">
              </a>
              <div class="p-5">
                <a href="<?php echo esc_url(home_url('/series/' . $item['series'] . '/')); ?>" class="text-sm font-semibold text-brand-700 hover:text-brand-900"><?php echo esc_html($series[$item['series']]['name'] . ' Series'); ?></a>
                <ul class="mt-3 flex flex-wrap gap-1.5">
                  <?php foreach ($item['styles'] as $style) : ?>
                    <li class="rounded-sm bg-slate-100 px-2 py-0.5 text-xs font-medium text-slate-700"><?php echo esc_html($styles[$style] ?? $style); ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php else : ?>
        <div class="mt-4 rounded-sm border border-dashed border-slate-300 p-10 text-center">
          <p class="text-lg font-semibold text-slate-900">No images match these filters.</p>
          <div class="mt-6 flex justify-center"><?php echo pwd_button('Clear Filters', $page_url . '#gallery', 'outline'); ?></div>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <?php
  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Bring the look to your project',
    'ctas' => array(
      array('label' => 'Request a Quote', 'text' => 'Share your openings and our team will follow up.', 'href' => '/request-a-quote/'),
      array('label' => 'Compare Series', 'text' => 'Materials, finishes and performance side by side.', 'href' => '/series/#compare'),
      array('label' => 'Explore Products', 'text' => 'Every window and door style.', 'href' => '/products/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
