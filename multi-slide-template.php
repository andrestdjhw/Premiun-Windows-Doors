<?php
/*
 * Template Name: Multiple Sliding Doors
 *
 * /doors/multiple-sliding-doors/. Audiencia: quienes investigan producto, propietarios y profesionales.
 * Objetivo: posicionar para el estilo y dirigir al usuario a la serie / ficha de producto correcta.
 * Paneles, rieles, herrajes, vidrio y condiciones de marco son muy específicos de cada producto:
 * el módulo técnico y los dibujos son parte esencial de esta página (brief).
 * Fuente provisional: premiumwindows.com/products/multiple-sliding-doors/ y sus fichas (revisado 2026-09-28).
 * La imagen de Serene es la genérica de operación que usa ese sitio (no hay foto propia del producto).
 * PENDIENTE: confirmar productos con el cliente y conseguir foto de la Serene Multiple Sliding.
 * La estructura vive en template-parts/product-style.php.
 */

pwd_seo(
  'Multi-Slide Doors | Premium Windows & Doors',
  'Explore multiple sliding door systems designed for wider openings, panoramic views and project-specific configurations.',
  '/doors/multiple-sliding-doors/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Doors', '/doors/'), array('Multiple Sliding Doors', '/doors/multiple-sliding-doors/')),
    'eyebrow' => 'Multiple Sliding Doors',
    'title' => array(
      array('Larger sliding openings with', 'light'),
      array('project-specific configurations.', 'accent'),
    ),
    'image' => array(
      '1536' => '2026/09/Commercial--1536x1152.jpg',
      '2048' => '2026/09/Commercial--2048x1536.jpg',
      '2560' => '2026/09/Commercial--scaled.jpg',
    ),
    'buttons' => array(
      array('Compare Products', '#products', 'light'),
      array('Multiple Sliding Drawings', home_url('/resources/technical/?product=door&style=multi-slide&type=detail-drawing'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/product-style', null, array(
    'kind' => 'door',
    'name' => 'Multiple Sliding',
    'style' => 'multi-slide',
    'diagrams' => array('multi-slide'),
    'intro_eyebrow' => 'Wider spans, larger openings',
    'intro_lead' => 'Multiple sliding doors are designed for wider spans and larger visual openings.',
    'intro_text' => 'Because panel counts, tracks, hardware, glazing and frame conditions are highly product-specific, review the technical data and drawings for each product before specifying.',
    'compare_by' => array('Panel counts', 'Tracks', 'Hardware', 'Glazing', 'Frame conditions'),
    'facts' => array(
      'Operation' => 'Multiple sliding panels',
      'Best for' => 'Wider spans and panoramic views',
      'Panels and tracks' => 'Product-specific',
      'Drawings' => 'Essential to specify',
    ),
    'products' => array(
      array('series' => 'Serene', 'material' => 'Vinyl', 'text' => 'Sound reduction and energy efficiency with even sightlines.', 'image' => '2026/09/Operation-Doors-Multiple-Sliding.jpg', 'href' => '/doors/multiple-sliding-doors/serene/'),
      array('series' => 'Aluminum', 'material' => 'Aluminum', 'text' => 'Slim sightlines, thermal performance and a modern aesthetic.', 'image' => '2026/09/Aluminum-Series-Multiple-Sliding-Door.jpg', 'href' => '/doors/multiple-sliding-doors/aluminum/'),
    ),
    'cta_title' => 'Plan your multiple sliding doors',
  ));
  ?>
</main>

<?php get_footer();
