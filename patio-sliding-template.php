<?php
/*
 * Template Name: Patio Sliding Doors
 *
 * /doors/patio-sliding-doors/. Audiencia: quienes investigan producto, propietarios y profesionales.
 * Objetivo: posicionar para el estilo y dirigir al usuario a la serie / ficha de producto correcta.
 * Productos: solo los verificados que se fabrican hoy en este estilo (brief).
 * Fuente provisional: premiumwindows.com/products/patio-sliding-doors/ y sus fichas (revisado 2026-09-28):
 * material y atributos de cada ficha ("Infinite Series" = Elegance). PENDIENTE: confirmar con el cliente.
 * La estructura vive en template-parts/product-style.php.
 */

pwd_seo(
  'Patio Sliding Doors | Premium Windows & Doors',
  'Compare custom patio sliding doors across Premium vinyl and aluminum series with multiple configurations, glazing, finishes and hardware.',
  '/doors/patio-sliding-doors/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Doors', '/doors/'), array('Patio Sliding Doors', '/doors/patio-sliding-doors/')),
    'eyebrow' => 'Patio Sliding Doors',
    'title' => array(
      array('Sliding door systems for everyday access,', 'light'),
      array('views and indoor-outdoor connection.', 'accent'),
    ),
    'image' => array('1024' => '2026/09/Aluminum_Series.jpg'),
    'buttons' => array(
      array('Compare Products', '#products', 'light'),
      array('Patio Sliding Documents', home_url('/resources/technical/?product=door&style=patio-sliding'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/product-style', null, array(
    'kind' => 'door',
    'name' => 'Patio Sliding',
    'style' => 'patio-sliding',
    'diagrams' => array('patio-sliding'),
    'intro_eyebrow' => 'Operable access in a familiar format',
    'intro_lead' => 'Patio sliding doors provide operable access within a familiar sliding format and are available across multiple Premium series.',
    'intro_text' => 'Compare material, sightlines, glazing, hardware, frame options, and configuration by product.',
    'compare_by' => array('Material', 'Sightlines', 'Glazing', 'Hardware', 'Frame options', 'Configuration'),
    'facts' => array(
      'Operation' => 'Sliding, operable',
      'Operable panels' => '1 or 2',
      'Configurations' => 'Multiple options',
    ),
    'products' => array(
      array('series' => 'Zenith', 'material' => 'Performance Vinyl', 'text' => 'An elevated luxury experience with versatile style integration.', 'image' => '2026/09/PRM_Web-Zenith-Thumbnail_0012_ZE_UNIT-SL.jpg', 'href' => '/doors/patio-sliding-doors/zenith/'),
      array('series' => 'Timeless', 'material' => 'Vinyl', 'text' => 'Premium durability and narrow frames for maximized value.', 'image' => '2026/09/TI_Unit-SL.jpg', 'href' => '/doors/patio-sliding-doors/timeless/'),
      array('series' => 'Serene', 'material' => 'Vinyl', 'text' => 'Energy efficiency with even sightlines and design versatility.', 'image' => '2026/09/Thumb-Doors-Patio-Sliding-Serene.jpg', 'href' => '/doors/patio-sliding-doors/serene/'),
      array('series' => 'Elegance', 'material' => 'Vinyl', 'text' => 'Classic styling with even sightlines and premium durability.', 'image' => '2026/09/Thumb-Doors-Patio-Sliding-Infinite.jpg', 'href' => '/doors/patio-sliding-doors/elegance/'),
      array('series' => 'Aluminum', 'material' => 'Aluminum', 'text' => 'Slim sightlines, thermal performance and a modern aesthetic.', 'image' => '2026/09/Aluminum-Series-Patio-Sliding-Doors.jpg', 'href' => '/doors/patio-sliding-doors/aluminum/'),
    ),
    'cta_title' => 'Plan your patio sliding doors',
  ));
  ?>
</main>

<?php get_footer();
