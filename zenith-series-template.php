<?php
/*
 * Template Name: Zenith Series
 *
 * /series/zenith/. Audiencia: propietarios, arquitectos, dealers y contratistas.
 * Objetivo: presentar Zenith como serie de performance vinyl para diseño moderno y climas exigentes.
 * Los beneficios son la información de producto aprobada del brief ("Key message").
 * Renders: premiumwindows.com (VIZ-ZENITH-LA-FARMHOUSE). La estructura vive en template-parts/series-page.php.
 */

pwd_seo(
  'Zenith Performance Vinyl Windows & Doors | Premium',
  'Explore Zenith performance vinyl windows and doors with modern black finishes, heat-resistant material technology and project-ready technical resources.',
  '/series/zenith/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Series', '/series/'), array('Zenith', '/series/zenith/')),
    'eyebrow' => 'Zenith Series',
    'title' => array(
      array('Performance Vinyl for', 'light'),
      array('Bold, Modern Openings.', 'accent'),
    ),
    'image' => array(
      '1024' => '2026/09/VIZ-ZENITH-LA-FARMHOUSE-Back-Yard-A-1024x683.jpg',
      '1536' => '2026/09/VIZ-ZENITH-LA-FARMHOUSE-Back-Yard-A-1536x1024.jpg',
      '1800' => '2026/09/VIZ-ZENITH-LA-FARMHOUSE-Back-Yard-A.jpg',
    ),
    'buttons' => array(
      array('Explore Zenith Windows', '#windows', 'light'),
      array('Explore Zenith Doors', '#doors', 'outline-light'),
    ),
  ));

  get_template_part('template-parts/series-page', null, array(
    'slug' => 'zenith',
    'intro_lead' => 'Zenith combines a modern black aesthetic with performance co-extruded vinyl designed for demanding heat conditions.',
    'intro_text' => 'The series is built for projects that want contemporary design without treating appearance and durability as separate decisions.',
    'intro_image' => array(
      '1024' => '2026/09/VIZ-ZENITH-LA-FARMHOUSE-Family-Room-A-1024x683.jpg',
      '1536' => '2026/09/VIZ-ZENITH-LA-FARMHOUSE-Family-Room-A-1536x1024.jpg',
      '1800' => '2026/09/VIZ-ZENITH-LA-FARMHOUSE-Family-Room-A.jpg',
    ),
    'facts' => array(
      'Material' => 'Performance vinyl',
      'Aesthetic' => 'Modern black',
      'Built for' => 'Demanding heat',
      'Products' => 'Windows & doors',
    ),
    'features_title' => 'Performance vinyl benefits',
    'features' => array(
      'Heat resistance',
      'Anti-warping',
      'Anti-shrinking',
      'Color-fade resistance',
      'Capstock protection',
      'Blinds + Glass options',
      'Warm-edge spacers',
      'Argon insulation',
      'AAMA / NFRC / ASTM references',
    ),
    'features_note' => 'Blinds + Glass options on selected products. AAMA, NFRC and ASTM references where applicable. Exact compatibility varies by model.',
    'professional_text' => 'Use Zenith where the project requires modern dark-frame aesthetics plus product-specific technical documentation and frame/glazing options. Exact compatibility varies by model.',
    'ctas' => array(
      array('label' => 'Explore Zenith Windows', 'text' => 'Picture, casement & awning, sliding and hung windows.', 'href' => '/series/zenith/#windows'),
      array('label' => 'Explore Zenith Doors', 'text' => 'Patio sliding and French swing doors.', 'href' => '/series/zenith/#doors'),
      array('label' => 'View Technical Drawings', 'text' => 'Zenith detail drawings and documents.', 'href' => '/resources/technical/?series=zenith&type=detail-drawing'),
    ),
  ));
  ?>
</main>

<?php get_footer();
