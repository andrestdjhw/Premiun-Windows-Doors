<?php
/*
 * Template Name: Picture Windows
 *
 * /windows/picture-windows/. Audiencia: quienes investigan producto, propietarios y profesionales.
 * Objetivo: posicionar para el estilo y dirigir al usuario a la serie / ficha de producto correcta.
 * Productos: solo los verificados que se fabrican hoy en este estilo (brief).
 * Fuente provisional de productos: premiumwindows.com/products/picture-windows/ (revisado 2026-09-28).
 * PENDIENTE: confirmar con el cliente. La estructura vive en template-parts/product-style.php.
 */

pwd_seo(
  'Picture Windows | Custom Fixed Windows | Premium',
  'Explore custom picture windows across Premium vinyl and aluminum series for expansive views, daylight and fixed-window performance.',
  '/windows/picture-windows/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Windows', '/windows/'), array('Picture Windows', '/windows/picture-windows/')),
    'eyebrow' => 'Picture Windows',
    'title' => array(
      array('Fixed windows for daylight,', 'light'),
      array('views, and sealed openings.', 'accent'),
    ),
    'image' => array('1024' => '2026/09/ZENITH_Series.jpg'),
    'buttons' => array(
      array('Compare Products', '#products', 'light'),
      array('Picture Window Documents', home_url('/resources/technical/?style=picture'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/product-style', null, array(
    'name' => 'Picture',
    'style' => 'picture',
    'diagrams' => array('picture'),
    'intro_eyebrow' => 'What is a picture window',
    'intro_lead' => 'Picture windows provide a fixed, non-operable opening designed to maximize daylight and visual connection while minimizing moving components.',
    'intro_text' => 'Compare available Premium series by material, frame profile, glazing, color, and application.',
    'compare_by' => array('Material', 'Frame profile', 'Glazing', 'Color', 'Application'),
    'facts' => array('Operation' => 'Fixed, non-operable', 'Best for' => 'Daylight and views', 'Moving components' => 'Minimal'),
    'products' => array(
      array('series' => 'Zenith', 'material' => 'Performance Vinyl', 'text' => 'Maximizes natural light in the hottest climates while staying cool.', 'image' => '2026/09/PRM_Web-Zenith-Thumbnail_0000_ZE_UNIT-PW.jpg', 'href' => '/windows/picture-windows/zenith/'),
      array('series' => 'Timeless', 'material' => 'Vinyl', 'text' => 'Designed to brighten any space and built to last for decades.', 'image' => '2026/09/PRM_Web-Timeless-Thumbnail_0005_TI_UNIT-PW.jpg', 'href' => '/windows/picture-windows/timeless/'),
      array('series' => 'Serene', 'material' => 'Vinyl', 'text' => 'Advanced glazing that creates an acoustic barrier against outside noise.', 'image' => '2026/09/SereneW-Picture-Front.jpg', 'href' => '/windows/picture-windows/serene/'),
      array('series' => 'Elegance', 'material' => 'Vinyl', 'text' => 'Classic proportions and even sightlines that echo traditional wood windows.', 'image' => '2026/09/PRM_Web-Elegance-Thumbnail_0001_EL_UNIT-PW.jpg', 'href' => '/windows/picture-windows/elegance/'),
      array('series' => 'Aluminum', 'material' => 'Aluminum', 'text' => 'Exceptional engineering with top-of-the-line components.', 'image' => '2026/09/Picture-Window-Aluminum-Series-1.jpg', 'href' => '/windows/picture-windows/aluminum/'),
    ),
    'cta_title' => 'Plan your picture windows',
  ));
  ?>
</main>

<?php get_footer();
