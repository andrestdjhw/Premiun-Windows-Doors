<?php
/*
 * Template Name: Hardware & Accessories
 *
 * /capabilities/hardware/. Herrajes, grids y accesorios por serie, a partir de las fichas
 * (pwd_series_options() y las características de cada producto).
 */

pwd_seo(
  'Window & Door Hardware, Grids & Accessories | Premium',
  'Sash auto-locks, integral handles, key locks, rollers and grid profiles for Premium windows and doors, with finish colors by series.',
  '/capabilities/hardware/'
);

// Imagen de cada herraje/grid (primera ficha que la tenga) para las tarjetas.
$catalog = array();
foreach (pwd_product_data() as $product) {
  foreach (array_merge($product['hardware'] ?? array(), $product['grids'] ?? array()) as $item) {
    $catalog[$item['name']] = $catalog[$item['name']] ?? $item['image'];
  }
}

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Capabilities', '/capabilities/'), array('Hardware & Accessories', '/capabilities/hardware/')),
    'eyebrow' => 'Hardware & Accessories',
    'title' => array(
      array('The details you touch', 'light'),
      array('every day.', 'accent'),
    ),
    'text' => 'Locks, handles, rollers and grids are matched to each series and operation type, with finishes that coordinate with the frame.',
    'image' => array('1536' => '2026/09/VIZ-Timeless-Home-Basic-Back.jpg'),
    'buttons' => array(array('Hardware by Series', '#series', 'light')),
  ));

  get_template_part('template-parts/sections', null, array('sections' => array(
    array(
      'type' => 'cards',
      'eyebrow' => 'Hardware and grids',
      'title' => 'Hardware and grid profiles',
      'text' => 'Grids sit between the glass panes, so the glass surfaces stay flat and easy to clean.',
      'cols' => 4,
      'items' => array_map(function ($name, $image) {
        return array('title' => $name, 'image' => $image, 'image_class' => 'aspect-square w-full object-cover');
      }, array_keys($catalog), $catalog),
    ),
    array(
      'type' => 'checklist',
      'bg' => 'dark',
      'eyebrow' => 'Built-in features',
      'title' => 'Standard on selected products',
      'text' => 'Features vary by series and operation. Each product page lists exactly what is included.',
      'items' => array('Sash auto-lock', 'Integral handle', 'Smooth-glide rollers & rail', 'Low-noise nylon rollers', 'Key lock standard or optional on doors', 'Weather-sealed glazing bead'),
    ),
  )));
  ?>

  <div id="series" class="scroll-mt-28">
    <?php
    get_template_part('template-parts/series-swatches', null, array(
      'eyebrow' => 'By series',
      'title' => 'Hardware and grid colors',
      'rows' => array('Hardware' => 'hardware', 'Grids' => 'grids'),
    ));
    ?>
  </div>

  <?php
  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Complete the specification',
    'ctas' => array(
      array('label' => 'Finishes & Colors', 'text' => 'Frame colors by series.', 'href' => '/capabilities/finishes-colors/'),
      array('label' => 'Explore Products', 'text' => 'Hardware included on each product page.', 'href' => '/products/'),
      array('label' => 'Request a Quote', 'text' => 'Share your openings and our team will follow up.', 'href' => '/request-a-quote/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
