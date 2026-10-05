<?php
/*
 * Template Name: Finish & Glass Options
 *
 * /professionals/finish-glass-options/. Resumen para arquitectos: colores, vidrios, texturas y Blinds + Glass
 * por serie en una sola tabla (pwd_series_options()). El detalle visual vive en Capabilities.
 */

pwd_seo(
  'Finish & Glass Options by Series | For Architects | Premium',
  'Compare frame colors, glazing packages, privacy glass and Blinds + Glass availability across Premium’s Zenith, Timeless, Serene, Elegance and Aluminum series.',
  '/professionals/finish-glass-options/'
);

$rows = array();
foreach (pwd_series_data() as $slug => $series) {
  $options = pwd_series_options($slug);
  $rows[] = array(
    $series['name'] . ' · ' . $series['material'],
    $options['exterior'],
    $options['interior'],
    $options['glazing'],
    $options['textures'] ? implode(', ', $options['textures']) : '—',
    $options['blinds'] ? 'Available' : '—',
  );
}

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Professionals', '/professionals/'), array('Finish & Glass Options', '/professionals/finish-glass-options/')),
    'eyebrow' => 'Finish & Glass Options',
    'title' => array(
      array('Every finish and glass option', 'light'),
      array('on one page.', 'accent'),
    ),
    'text' => 'A quick reference for specifying color and glazing by series. Availability varies by product within each series.',
    'image' => array('1536' => '2026/09/ArchitectsSpecifiers-scaled.jpg'),
    'buttons' => array(array('Options by Series', '#options', 'light')),
  ));

  get_template_part('template-parts/sections', null, array('sections' => array(
    array(
      'type' => 'table',
      'id' => 'options',
      'eyebrow' => 'By series',
      'title' => 'Finish and glass options',
      'text' => 'Cardinal LoĒ³-366® glass, argon gas and Duraseal® warm-edge spacers come standard in every series.',
      'head' => array('Series', 'Exterior', 'Interior', 'Glazing', 'Glass textures', 'Blinds + Glass'),
      'rows' => $rows,
      'note' => 'Confirm options for each product on its product page or detail drawings.',
    ),
    array(
      'type' => 'cards',
      'eyebrow' => 'Details',
      'title' => 'See the options up close',
      'cols' => 3,
      'items' => array(
        array('icon' => 'file-badge', 'title' => 'Finishes & Colors', 'text' => 'Color swatches for frames, hardware and blinds.', 'href' => '/capabilities/finishes-colors/'),
        array('icon' => 'badge-check', 'title' => 'Glass Options', 'text' => 'Glazing packages, textures and Blinds + Glass.', 'href' => '/capabilities/glass-options/'),
        array('icon' => 'shield-check', 'title' => 'Hardware & Accessories', 'text' => 'Locks, handles and grid profiles.', 'href' => '/capabilities/hardware/'),
      ),
    ),
  )));

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Continue your specification',
    'ctas' => array(
      array('label' => 'Specifications', 'text' => 'Frame depths and options by product.', 'href' => '/professionals/specifications/'),
      array('label' => 'Technical Resources', 'text' => 'Detail drawings and installation guides.', 'href' => '/resources/technical/'),
      array('label' => 'Request Support', 'text' => 'Ask our technical team.', 'href' => '/professionals/request-support/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
