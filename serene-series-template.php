<?php
/*
 * Template Name: Serene Series
 *
 * /series/serene/. Audiencia: propietarios, equipos de multifamily, dealers y arquitectos.
 * Objetivo: posicionar Serene alrededor de confort, control de sonido, vidrio y versatilidad de configuración.
 * Los beneficios son la información de producto del brief ("Key message").
 * Imágenes: premiumwindows.com (Serene-Series-Doors, VIZ-Serene-Home-Woods).
 * La estructura vive en template-parts/series-page.php.
 */

pwd_seo(
  'Serene Windows & Doors | Sound & Comfort | Premium',
  'Explore Serene vinyl windows and doors focused on acoustic comfort, energy efficiency, design versatility and multiple door configurations.',
  '/series/serene/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Series', '/series/'), array('Serene', '/series/serene/')),
    'eyebrow' => 'Serene Series',
    'title' => array(
      array('Quiet Comfort.', 'light'),
      array('Flexible Design.', 'accent'),
    ),
    'image' => array(
      '1024' => '2026/09/Serene-Series-Doors-scaled-1-1024x683.jpg',
      '1536' => '2026/09/Serene-Series-Doors-scaled-1-1536x1025.jpg',
      '2048' => '2026/09/Serene-Series-Doors-scaled-1-2048x1366.jpg',
      '2560' => '2026/09/Serene-Series-Doors-scaled-1.jpg',
    ),
    'buttons' => array(
      array('Explore Serene Windows', '#windows', 'light'),
      array('Explore Serene Doors', '#doors', 'outline-light'),
    ),
  ));

  get_template_part('template-parts/series-page', null, array(
    'slug' => 'serene',
    'intro_lead' => 'Serene is designed for projects where comfort, glazing performance, and design versatility need to work together.',
    'intro_text' => 'The series includes multiple window types and a broad door offering, giving designers and buyers more flexibility across connected spaces.',
    'intro_image' => array(
      '1024' => '2026/09/VIZ-Serene-Home-Woods-1024x683.jpg',
      '1536' => '2026/09/VIZ-Serene-Home-Woods-1536x1024.jpg',
      '1800' => '2026/09/VIZ-Serene-Home-Woods.jpg',
    ),
    'facts' => array(
      'Material' => 'Vinyl',
      'Focus' => 'Sound and comfort',
      'Glazing' => 'Multiple choices',
      'Doors' => 'Broad offering',
    ),
    'features_title' => 'Comfort, performance and versatility',
    'features' => array(
      'Sound reduction',
      'Energy efficiency',
      'Even sightlines',
      'Design versatility',
      'Blinds + Glass options',
      'Multiple glazing choices',
    ),
    'features_note' => 'Blinds + Glass options on selected products. Exact options vary by model.',
    'professional_text' => 'With multiple window types, a broad door offering and several glazing choices, Serene gives multifamily teams and architects more flexibility across connected spaces. Confirm exact options and documentation on each product page.',
    'ctas' => array(
      array('label' => 'Explore Serene Windows', 'text' => 'Picture, casement & awning, sliding and hung windows.', 'href' => '/series/serene/#windows'),
      array('label' => 'Explore Serene Doors', 'text' => 'Patio sliding, French swing, multi-slide and multi-fold.', 'href' => '/series/serene/#doors'),
      array('label' => 'View Technical Resources', 'text' => 'Serene drawings, certifications and documents.', 'href' => '/resources/technical/?series=serene'),
    ),
  ));
  ?>
</main>

<?php get_footer();
