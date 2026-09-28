<?php
/*
 * Template Name: Casement & Awning Windows
 *
 * /windows/casement-awning-windows/. Audiencia: quienes investigan producto, propietarios y profesionales.
 * Objetivo: posicionar para el estilo y dirigir al usuario a la serie / ficha de producto correcta.
 * Productos: solo los verificados que se fabrican hoy en este estilo (brief).
 * Fuente provisional de productos y del dato "90°": premiumwindows.com/products/casement-and-awning-windows/
 * (revisado 2026-09-28). PENDIENTE: confirmar con el cliente.
 * La estructura vive en template-parts/product-style.php.
 */

pwd_seo(
  'Casement & Awning Windows | Premium Windows & Doors',
  'Explore custom casement and awning windows for ventilation, daylight and flexible architectural configurations across select Premium series.',
  '/windows/casement-awning-windows/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Windows', '/windows/'), array('Casement & Awning Windows', '/windows/casement-awning-windows/')),
    'eyebrow' => 'Casement & Awning Windows',
    'title' => array(
      array('Operable windows for controlled ventilation', 'light'),
      array('and architectural flexibility.', 'accent'),
    ),
    'image' => array(
      '1536' => '2026/09/Residential-1536x1024.jpg',
      '2048' => '2026/09/Residential-2048x1365.jpg',
      '2560' => '2026/09/Residential-scaled.jpg',
    ),
    'buttons' => array(
      array('Compare Products', '#products', 'light'),
      array('Casement & Awning Documents', home_url('/resources/technical/?style=casement-awning'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/product-style', null, array(
    'name' => 'Casement & Awning',
    'style' => 'casement-awning',
    'diagrams' => array('casement', 'awning'),
    'intro_eyebrow' => 'Daylight with controlled ventilation',
    'intro_lead' => 'Casement and awning windows combine daylight with controlled ventilation.',
    'intro_text' => 'Product availability, hardware, frame types, glazing and opening configurations vary by series; use the product cards below to compare the exact options.',
    'compare_by' => array('Hardware', 'Frame types', 'Glazing', 'Opening configurations'),
    'facts' => array(
      'Operation' => 'Hinged, operable',
      'Casement' => 'Side-hinged, opens a full 90°, left or right',
      'Awning' => 'Top-hinged, opens outward',
      'Best for' => 'Ventilation and daylight',
    ),
    'products' => array(
      array('series' => 'Zenith', 'material' => 'Performance Vinyl', 'text' => 'Maximizes natural light in the hottest climates while staying cool.', 'image' => '2026/09/PRM_Web-Zenith-Thumbnail_0008_ZE_UNIT-CM.jpg', 'href' => '/windows/casement-awning-windows/zenith/'),
      array('series' => 'Serene', 'material' => 'Vinyl', 'text' => 'Advanced glazing that creates an acoustic barrier against outside noise.', 'image' => '2026/09/Thumb-Windows-Casement-Awning-Serene.jpg', 'href' => '/windows/casement-awning-windows/serene/'),
      array('series' => 'Aluminum', 'material' => 'Aluminum', 'text' => 'Exceptional engineering with top-of-the-line components.', 'image' => '2026/09/Casement-Window-Aluminum-Series-e1590607502165.jpg', 'href' => '/windows/casement-awning-windows/aluminum/'),
    ),
    'cta_title' => 'Plan your casement & awning windows',
  ));
  ?>
</main>

<?php get_footer();
