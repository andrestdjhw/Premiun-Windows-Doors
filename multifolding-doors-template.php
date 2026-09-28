<?php
/*
 * Template Name: Multiple Folding Doors
 *
 * /doors/multiple-folding-doors/. Audiencia: quienes investigan producto, propietarios y profesionales.
 * Objetivo: posicionar para el estilo y dirigir al usuario a la serie / ficha de producto correcta.
 * Panel, marco, herrajes, vidrio y configuración: usar la documentación exacta de cada producto (brief).
 * Fuente provisional: premiumwindows.com/products/multiple-folding-doors/ y sus fichas (revisado 2026-09-28).
 * PENDIENTE: confirmar con el cliente. La estructura vive en template-parts/product-style.php.
 */

pwd_seo(
  'Multi-Fold Doors | Premium Windows & Doors',
  'Explore multiple folding door systems for large openings and indoor-outdoor connection across select Premium series.',
  '/doors/multiple-folding-doors/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Doors', '/doors/'), array('Multiple Folding Doors', '/doors/multiple-folding-doors/')),
    'eyebrow' => 'Multiple Folding Doors',
    'title' => array(
      array('Folding panel systems for', 'light'),
      array('maximum opening flexibility.', 'accent'),
    ),
    'image' => array('1024' => '2026/09/ZENITH_Series.jpg'),
    'buttons' => array(
      array('Compare Products', '#products', 'light'),
      array('Multiple Folding Documents', home_url('/resources/technical/?product=door&style=multi-fold'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/product-style', null, array(
    'kind' => 'door',
    'name' => 'Multiple Folding',
    'style' => 'multi-fold',
    'diagrams' => array('multi-fold'),
    'intro_eyebrow' => 'Open more of the wall',
    'intro_lead' => 'Multiple folding doors use two or more folding panels to open a larger percentage of the wall condition.',
    'intro_text' => 'Use exact product documentation for panel, frame, hardware, glazing and configuration requirements.',
    'compare_by' => array('Panels', 'Frame', 'Hardware', 'Glazing', 'Configuration'),
    'facts' => array(
      'Operation' => 'Folding panels',
      'Panels' => 'Two or more',
      'Best for' => 'Large openings and indoor-outdoor connection',
      'Requirements' => 'Per product documentation',
    ),
    'products' => array(
      array('series' => 'Serene', 'material' => 'Vinyl', 'text' => 'Sound reduction and energy efficiency with even sightlines.', 'image' => '2026/09/Thumb-Doors-Multiple-Folding-Serene.jpg', 'href' => '/doors/multiple-folding-doors/serene/'),
      array('series' => 'Aluminum', 'material' => 'Aluminum', 'text' => 'Slim sightlines, thermal performance and a modern aesthetic.', 'image' => '2026/09/Aluminum-Series-Multiple-Folding-Door.jpg', 'href' => '/doors/multiple-folding-doors/aluminum/'),
    ),
    'cta_title' => 'Plan your multiple folding doors',
  ));
  ?>
</main>

<?php get_footer();
