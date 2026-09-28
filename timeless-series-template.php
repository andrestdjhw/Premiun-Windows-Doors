<?php
/*
 * Template Name: Timeless Series
 *
 * /series/timeless/. Audiencia: propietarios, dealers y constructores.
 * Objetivo: posicionar Timeless como la línea versátil y de valor para el día a día, SIN que suene
 * a gama baja: no usar "cheap", "budget" ni "affordable". El valor es un buen ajuste de producto
 * (configuraciones esenciales, vinilo durable, opciones prácticas, selección más fácil).
 * Renders: premiumwindows.com (VIZ-Timeless-*). La estructura vive en template-parts/series-page.php.
 */

pwd_seo(
  'Timeless Vinyl Windows & Doors | Premium Windows',
  'Explore Timeless vinyl windows and patio doors designed for dependable performance, streamlined sightlines and long-term value.',
  '/series/timeless/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Series', '/series/'), array('Timeless', '/series/timeless/')),
    'eyebrow' => 'Timeless Series',
    'title' => array(
      array('Dependable Performance.', 'light'),
      array('Streamlined Value.', 'accent'),
    ),
    'image' => array(
      '1024' => '2026/09/VIZ-Timeless-Home-Basic-Back-1024x683.jpg',
      '1536' => '2026/09/VIZ-Timeless-Home-Basic-Back-1536x1024.jpg',
      '1800' => '2026/09/VIZ-Timeless-Home-Basic-Back.jpg',
    ),
    'buttons' => array(
      array('Explore Timeless Windows', '#windows', 'light'),
      array('Compare Series', home_url('/series/#compare'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/series-page', null, array(
    'slug' => 'timeless',
    'intro_lead' => 'Timeless is built for projects that need straightforward durability, clean design, and dependable everyday performance.',
    'intro_text' => 'It supports both replacement and new-construction applications across a focused set of window styles and patio doors.',
    'intro_image' => array(
      '1024' => '2026/09/VIZ-Timeless-Interior-Bay-Nook-1024x683.jpg',
      '1536' => '2026/09/VIZ-Timeless-Interior-Bay-Nook-1536x1024.jpg',
      '1800' => '2026/09/VIZ-Timeless-Interior-Bay-Nook.jpg',
    ),
    'facts' => array(
      'Material' => 'Vinyl',
      'Focus' => 'Everyday performance',
      'Applications' => 'Replacement & new construction',
      'Products' => 'Windows & patio doors',
    ),
    'features_title' => 'Efficient by design',
    'features' => array(
      'Core configurations',
      'Durable vinyl construction',
      'Streamlined sightlines',
      'Practical options',
      'Long-term value',
      'A product family that makes selection easier',
    ),
    'professional_text' => 'Timeless covers core window styles and patio doors with product-specific documentation. Confirm exact options and configurations on each product page.',
    'ctas' => array(
      array('label' => 'Explore Timeless Windows', 'text' => 'Picture, sliding, single hung and arch windows.', 'href' => '/series/timeless/#windows'),
      array('label' => 'Explore Timeless Doors', 'text' => 'Patio sliding doors.', 'href' => '/series/timeless/#doors'),
      array('label' => 'Compare Series', 'text' => 'See how Timeless compares with the other four series.', 'href' => '/series/#compare'),
    ),
  ));
  ?>
</main>

<?php get_footer();
