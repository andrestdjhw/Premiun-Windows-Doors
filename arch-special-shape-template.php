<?php
/*
 * Template Name: Arch & Special Shape Windows
 *
 * /windows/arch-special-shape-windows/. Audiencia: quienes investigan producto, propietarios y profesionales.
 * Objetivo: posicionar para el estilo y dirigir al usuario a la serie / ficha de producto correcta.
 * Disponibilidad y configuración varían por serie; cada producto enlaza a sus dibujos y opciones (brief).
 * Fuente provisional de productos: premiumwindows.com/products/arch-and-special-shape-windows/ (revisado 2026-09-28).
 * Ese sitio solo publica productos Arch (Timeless y Elegance); no hay productos Special Shape publicados.
 * PENDIENTE: confirmar con el cliente, en especial qué series ofrecen formas especiales.
 * La estructura vive en template-parts/product-style.php.
 */

pwd_seo(
  'Arch & Special Shape Windows | Premium Windows & Doors',
  'Explore arch and special shape windows for architectural openings, daylight and custom design requirements from Premium Windows & Doors.',
  '/windows/arch-special-shape-windows/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Windows', '/windows/'), array('Arch & Special Shape Windows', '/windows/arch-special-shape-windows/')),
    'eyebrow' => 'Arch & Special Shape Windows',
    'title' => array(
      array('Fixed architectural shapes that support', 'light'),
      array('design-specific openings.', 'accent'),
    ),
    'image' => array('1024' => '2026/09/Timeless_Series.jpg'),
    'buttons' => array(
      array('Compare Products', '#products', 'light'),
      array('Arch & Special Shape Documents', home_url('/resources/technical/?style=arch-special-shape'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/product-style', null, array(
    'name' => 'Arch & Special Shape',
    'style' => 'arch-special-shape',
    'diagrams' => array('arch', 'special-shape'),
    'intro_eyebrow' => 'Beyond the standard rectangle',
    'intro_lead' => 'Arch and special shape windows help resolve openings where standard rectangular formats do not fit the architectural intent.',
    'intro_text' => 'Availability and configuration vary by series, so each product connects directly to the applicable drawings and design options.',
    'compare_by' => array('Shape', 'Series', 'Drawings', 'Design options'),
    'facts' => array(
      'Operation' => 'Fixed',
      'Arch' => 'Curved or half-circle top',
      'Special shape' => 'Angled forms, e.g. for angled ceilings',
      'Availability' => 'Varies by series',
    ),
    'products' => array(
      array('series' => 'Timeless', 'name' => 'Timeless Arch Window', 'material' => 'Vinyl', 'text' => 'Designed to brighten any space and built to last for decades.', 'image' => '2026/09/PRM_Web-Timeless-Thumbnail_0007_TI_UNIT-ARC.jpg', 'href' => '/windows/arch-special-shape-windows/timeless/'),
      array('series' => 'Elegance', 'name' => 'Elegance Arch Window', 'material' => 'Vinyl', 'text' => 'Classic proportions and even sightlines that echo traditional wood windows.', 'image' => '2026/09/PRM_Web-Elegance-Thumbnail_0003_EL_UNIT-ARC.jpg', 'href' => '/windows/arch-special-shape-windows/elegance/'),
    ),
    'cta_title' => 'Plan your arch & special shape windows',
  ));
  ?>
</main>

<?php get_footer();
