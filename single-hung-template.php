<?php
/*
 * Template Name: Single Hung Windows
 *
 * /windows/single-hung-windows/. Audiencia: quienes investigan producto, propietarios y profesionales.
 * Objetivo: posicionar para el estilo y dirigir al usuario a la serie / ficha de producto correcta.
 * Productos: solo los verificados que se fabrican hoy en este estilo (brief).
 * Fuente provisional de productos: premiumwindows.com/products/single-hung-windows/ (revisado 2026-09-28).
 * PENDIENTE: confirmar con el cliente. La estructura vive en template-parts/product-style.php.
 */

pwd_seo(
  'Single Hung Windows | Premium Windows & Doors',
  'Compare custom single hung windows across Premium vinyl and aluminum series for residential, replacement and new-construction applications.',
  '/windows/single-hung-windows/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Windows', '/windows/'), array('Single Hung Windows', '/windows/single-hung-windows/')),
    'eyebrow' => 'Single Hung Windows',
    'title' => array(
      array('A familiar vertical operating format', 'light'),
      array('offered across multiple series.', 'accent'),
    ),
    'image' => array('1024' => '2026/09/Serene_Series.jpg'),
    'buttons' => array(
      array('Compare Products', '#products', 'light'),
      array('Single Hung Documents', home_url('/resources/technical/?style=single-hung'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/product-style', null, array(
    'name' => 'Single Hung',
    'style' => 'single-hung',
    'diagrams' => array('single-hung'),
    'intro_eyebrow' => 'A classic vertical format',
    'intro_lead' => 'Single hung windows use one operable sash within a classic vertical format.',
    'intro_text' => 'Premium offers the style across several series, allowing customers to select the material, profile, glazing, hardware, color and frame system that best fit the project.',
    'compare_by' => array('Material', 'Profile', 'Glazing', 'Hardware', 'Color', 'Frame system'),
    'facts' => array(
      'Operation' => 'Vertical, operable',
      'Operable sashes' => 'One',
      'Format' => 'Classic vertical',
    ),
    'products' => array(
      array('series' => 'Zenith', 'material' => 'Performance Vinyl', 'text' => 'Maximizes natural light in the hottest climates while staying cool.', 'image' => '2026/09/PRM_Web-Zenith-Thumbnail_0002_ZE_UNIT-SH.jpg', 'href' => '/windows/single-hung-windows/zenith/'),
      array('series' => 'Timeless', 'material' => 'Vinyl', 'text' => 'Designed to brighten any space and built to last for decades.', 'image' => '2026/09/PRM_Web-Timeless-Thumbnail_0004_TI_UNIT-SH.jpg', 'href' => '/windows/single-hung-windows/timeless/'),
      array('series' => 'Serene', 'material' => 'Vinyl', 'text' => 'Advanced glazing that creates an acoustic barrier against outside noise.', 'image' => '2026/09/SereneW-Single_Hung-Front.jpg', 'href' => '/windows/single-hung-windows/serene/'),
      array('series' => 'Elegance', 'material' => 'Vinyl', 'text' => 'Classic proportions and even sightlines that echo traditional wood windows.', 'image' => '2026/09/PRM_Web-Elegance-Thumbnail_0000_EL_UNIT-SH.jpg', 'href' => '/windows/single-hung-windows/elegance/'),
      array('series' => 'Aluminum', 'material' => 'Aluminum', 'text' => 'Exceptional engineering with top-of-the-line components.', 'image' => '2026/09/Single-Hung-Window-Aluminum-Series.jpg', 'href' => '/windows/single-hung-windows/aluminum/'),
    ),
    'cta_title' => 'Plan your single hung windows',
  ));
  ?>
</main>

<?php get_footer();
