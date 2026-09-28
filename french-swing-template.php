<?php
/*
 * Template Name: French Swing Doors
 *
 * /doors/french-swing-doors/. Audiencia: quienes investigan producto, propietarios y profesionales.
 * Objetivo: posicionar para el estilo y dirigir al usuario a la serie / ficha de producto correcta.
 * Productos: solo los verificados que se fabrican hoy en este estilo (brief).
 * Fuente provisional: premiumwindows.com/products/french-swing-doors/ y sus fichas (revisado 2026-09-28):
 * material y atributos de cada ficha ("Infinite Series" = Elegance). PENDIENTE: confirmar con el cliente.
 * La estructura vive en template-parts/product-style.php.
 */

pwd_seo(
  'French Swing Doors | Premium Windows & Doors',
  'Explore custom French swing doors with one- or two-panel configurations across select Premium vinyl and aluminum series.',
  '/doors/french-swing-doors/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Doors', '/doors/'), array('French Swing Doors', '/doors/french-swing-doors/')),
    'eyebrow' => 'French Swing Doors',
    'title' => array(
      array('Swing-door configurations for', 'light'),
      array('traditional and modern openings.', 'accent'),
    ),
    'image' => array('700' => '2026/09/Elegance_Series.jpg'),
    'buttons' => array(
      array('Compare Products', '#products', 'light'),
      array('French Swing Documents', home_url('/resources/technical/?product=door&style=french-swing'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/product-style', null, array(
    'kind' => 'door',
    'name' => 'French Swing',
    'style' => 'french-swing',
    'diagrams' => array('french-swing'),
    'intro_eyebrow' => 'One or two hinged panels',
    'intro_lead' => 'French swing doors use one or two hinged panels and can support different handing and swing conditions depending on the product.',
    'intro_text' => 'Compare the exact series, finish, glazing, hardware and frame options before specifying.',
    'compare_by' => array('Series', 'Finish', 'Glazing', 'Hardware', 'Frame options'),
    'facts' => array(
      'Operation' => 'Hinged, swing',
      'Panels' => '1 or 2',
      'Handing and swing' => 'Varies by product',
    ),
    'products' => array(
      array('series' => 'Zenith', 'material' => 'Performance Vinyl', 'text' => 'An elevated luxury experience with versatile style integration.', 'image' => '2026/09/PRM_Web-Zenith-Thumbnail_0010_ZE_UNIT-SW.jpg', 'href' => '/doors/french-swing-doors/zenith/'),
      array('series' => 'Serene', 'material' => 'Vinyl', 'text' => 'Sound reduction and energy efficiency with even sightlines.', 'image' => '2026/09/Thumb-Doors-French-Swing-Serene.jpg', 'href' => '/doors/french-swing-doors/serene/'),
      array('series' => 'Elegance', 'material' => 'Vinyl', 'text' => 'Classic styling with even sightlines and premium durability.', 'image' => '2026/09/Thumb-Doors-French-Swing-Infinite.jpg', 'href' => '/doors/french-swing-doors/elegance/'),
      array('series' => 'Aluminum', 'material' => 'Aluminum', 'text' => 'Slim sightlines, thermal performance and a modern aesthetic.', 'image' => '2026/09/Aluminum-Series-French-Swing-Door.jpg', 'href' => '/doors/french-swing-doors/aluminum/'),
    ),
    'cta_title' => 'Plan your French swing doors',
  ));
  ?>
</main>

<?php get_footer();
