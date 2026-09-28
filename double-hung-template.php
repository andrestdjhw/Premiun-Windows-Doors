<?php
/*
 * Template Name: Double Hung Windows
 *
 * /windows/double-hung-windows/. Audiencia: quienes investigan producto, propietarios y profesionales.
 * Objetivo: posicionar para el estilo y dirigir al usuario a la serie / ficha de producto correcta.
 * Disponibilidad limitada a series específicas: mostrar solo productos y configuraciones verificados (brief).
 * Fuente provisional de productos: premiumwindows.com/products/double-hung-windows/ (revisado 2026-09-28).
 * PENDIENTE: confirmar con el cliente. La estructura vive en template-parts/product-style.php.
 */

pwd_seo(
  'Double Hung Windows | Premium Windows & Doors',
  'Explore Premium double hung windows with dual operable sashes, ventilation flexibility and series-specific glazing, frame and finish options.',
  '/windows/double-hung-windows/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Windows', '/windows/'), array('Double Hung Windows', '/windows/double-hung-windows/')),
    'eyebrow' => 'Double Hung Windows',
    'title' => array(
      array('Dual-sash ventilation with', 'light'),
      array('product-specific performance options.', 'accent'),
    ),
    'image' => array('700' => '2026/09/Elegance_Series.jpg'),
    'buttons' => array(
      array('Compare Products', '#products', 'light'),
      array('Double Hung Documents', home_url('/resources/technical/?style=double-hung'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/product-style', null, array(
    'name' => 'Double Hung',
    'style' => 'double-hung',
    'diagrams' => array('double-hung'),
    'intro_eyebrow' => 'Two operable sashes',
    'intro_lead' => 'Double hung windows provide ventilation from two operable sashes and support flexible air movement within a familiar architectural format.',
    'intro_text' => 'Availability is limited to specific Premium series. Compare the verified products and configurations below.',
    'compare_by' => array('Glazing', 'Frame', 'Finish'),
    'facts' => array(
      'Operation' => 'Vertical, operable',
      'Operable sashes' => 'Two',
      'Availability' => 'Select series',
    ),
    'products' => array(
      array('series' => 'Zenith', 'material' => 'Performance Vinyl', 'text' => 'Maximizes natural light in the hottest climates while staying cool.', 'image' => '2026/09/PRM_Web-Zenith-Thumbnail_0004_ZE_UNIT-DH.jpg', 'href' => '/windows/double-hung-windows/zenith/'),
      array('series' => 'Serene', 'material' => 'Vinyl', 'text' => 'Advanced glazing that creates an acoustic barrier against outside noise.', 'image' => '2026/09/SereneW-Double_Hung-Front.jpg', 'href' => '/windows/double-hung-windows/serene/'),
    ),
    'cta_title' => 'Plan your double hung windows',
  ));
  ?>
</main>

<?php get_footer();
