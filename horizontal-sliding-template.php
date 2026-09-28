<?php
/*
 * Template Name: Horizontal Sliding Windows
 *
 * /windows/horizontal-sliding-windows/. Audiencia: quienes investigan producto, propietarios y profesionales.
 * Objetivo: posicionar para el estilo y dirigir al usuario a la serie / ficha de producto correcta.
 * Productos: solo los verificados que se fabrican hoy en este estilo (brief).
 * Fuente provisional de productos y del dato "left or right": premiumwindows.com/products/horizontal-sliding-windows/
 * (revisado 2026-09-28). PENDIENTE: confirmar con el cliente.
 * La estructura vive en template-parts/product-style.php.
 */

pwd_seo(
  'Horizontal Sliding Windows | Premium Windows & Doors',
  'Explore custom horizontal sliding windows in vinyl and aluminum series for smooth operation, daylight and replacement or new-construction applications.',
  '/windows/horizontal-sliding-windows/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Windows', '/windows/'), array('Horizontal Sliding Windows', '/windows/horizontal-sliding-windows/')),
    'eyebrow' => 'Horizontal Sliding Windows',
    'title' => array(
      array('Sliding operation with broad daylight openings', 'light'),
      array('and multiple material choices.', 'accent'),
    ),
    'image' => array('1024' => '2026/09/Timeless_Series.jpg'),
    'buttons' => array(
      array('Compare Products', '#products', 'light'),
      array('Horizontal Sliding Documents', home_url('/resources/technical/?style=horizontal-sliding'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/product-style', null, array(
    'name' => 'Horizontal Sliding',
    'style' => 'horizontal-sliding',
    'diagrams' => array('horizontal-sliding'),
    'intro_eyebrow' => 'Ventilation, daylight and simple operation',
    'intro_lead' => 'Horizontal sliding windows move laterally to combine ventilation, daylight, and straightforward operation.',
    'intro_text' => 'Premium offers this style across multiple series, allowing projects to compare material, sightlines, frame systems, glazing and hardware.',
    'compare_by' => array('Material', 'Sightlines', 'Frame systems', 'Glazing', 'Hardware'),
    'facts' => array(
      'Operation' => 'Sliding, operable',
      'Movement' => 'Lateral, to the left or right',
      'Best for' => 'Ventilation and daylight',
    ),
    'products' => array(
      array('series' => 'Zenith', 'material' => 'Performance Vinyl', 'text' => 'Maximizes natural light in the hottest climates while staying cool.', 'image' => '2026/09/PRM_Web-Zenith-Thumbnail_0006_ZE_UNIT-XO.jpg', 'href' => '/windows/horizontal-sliding-windows/zenith/'),
      array('series' => 'Timeless', 'material' => 'Vinyl', 'text' => 'Designed to brighten any space and built to last for decades.', 'image' => '2026/09/PRM_Web-Timeless-Thumbnail_0006_TI_UNIT-XO.jpg', 'href' => '/windows/horizontal-sliding-windows/timeless/'),
      array('series' => 'Serene', 'material' => 'Vinyl', 'text' => 'Advanced glazing that creates an acoustic barrier against outside noise.', 'image' => '2026/09/SereneW-Horizontal_sliding-Front.jpg', 'href' => '/windows/horizontal-sliding-windows/serene/'),
      array('series' => 'Elegance', 'material' => 'Vinyl', 'text' => 'Classic proportions and even sightlines that echo traditional wood windows.', 'image' => '2026/09/PRM_Web-Elegance-Thumbnail_0002_EL_UNIT-XO.jpg', 'href' => '/windows/horizontal-sliding-windows/elegance/'),
      array('series' => 'Aluminum', 'material' => 'Aluminum', 'text' => 'Exceptional engineering with top-of-the-line components.', 'image' => '2026/09/Horizontal-Sliding-Aluminum-Series.jpg', 'href' => '/windows/horizontal-sliding-windows/aluminum/'),
    ),
    'cta_title' => 'Plan your horizontal sliding windows',
  ));
  ?>
</main>

<?php get_footer();
