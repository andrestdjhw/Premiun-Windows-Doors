<?php
/*
 * Template Name: Elegance Series
 *
 * /series/elegance/. Audiencia: propietarios, arquitectos, proyectos HOA/patrimoniales y dealers.
 * Objetivo: posicionar Elegance como continuidad arquitectónica tradicional, NO como lujo genérico
 * (no usar "luxury"). Presentarla por encaje arquitectónico, estilo clásico, vinilo durable, opciones
 * de marco por proyecto, vidrio, grids y dibujos técnicos (brief). En el sitio actual se llamaba "Infinite Series".
 * Imágenes: premiumwindows.com. La estructura vive en template-parts/series-page.php.
 */

pwd_seo(
  'Elegance Windows & Doors | Traditional Design | Premium',
  'Explore Elegance vinyl windows and doors with classic proportions, even sightlines and wider profiles for traditional and heritage-inspired projects.',
  '/series/elegance/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Series', '/series/'), array('Elegance', '/series/elegance/')),
    'eyebrow' => 'Elegance Series',
    'title' => array(
      array('Traditional Proportions.', 'light'),
      array('Modern Manufacturing.', 'accent'),
    ),
    'image' => array(
      '1024' => '2026/09/PRM-Series-Summary-Elegance-1024x683.jpg',
      '1500' => '2026/09/PRM-Series-Summary-Elegance.jpg',
    ),
    'buttons' => array(
      array('Explore Elegance Windows', '#windows', 'light'),
      array('Explore Elegance Doors', '#doors', 'outline-light'),
    ),
  ));

  get_template_part('template-parts/series-page', null, array(
    'slug' => 'elegance',
    'intro_lead' => 'Elegance is designed for projects where the window and door profile must support a more traditional architectural language.',
    'intro_text' => 'Wider profiles, classic proportions, and even sightlines help the product integrate into heritage-inspired homes, renovations, and communities with defined design standards.',
    'intro_image' => array(
      '1024' => '2026/09/Elegance-Series-Window-image_photshopped-scaled-e1638991194640-1024x787.jpg',
      '1536' => '2026/09/Elegance-Series-Window-image_photshopped-scaled-e1638991194640-1536x1181.jpg',
      '2048' => '2026/09/Elegance-Series-Window-image_photshopped-scaled-e1638991194640-2048x1575.jpg',
    ),
    'facts' => array(
      'Material' => 'Vinyl',
      'Profile' => 'Wider, classic proportions',
      'Sightlines' => 'Even',
      'Fits' => 'Heritage-inspired projects',
    ),
    'features_title' => 'Designed for architectural fit',
    'features' => array(
      'Architectural fit',
      'Classic styling',
      'Durable vinyl construction',
      'Project-specific frame options',
      'Glazing and grid options',
      'Technical drawings',
    ),
    'professional_text' => 'For HOA, heritage and renovation projects with defined design standards, review the project-specific frame options, glazing, grids and detail drawings for each Elegance product.',
    'ctas' => array(
      array('label' => 'Explore Elegance Windows', 'text' => 'Picture, sliding, single hung and arch windows.', 'href' => '/series/elegance/#windows'),
      array('label' => 'Explore Elegance Doors', 'text' => 'Patio sliding and French swing doors.', 'href' => '/series/elegance/#doors'),
      array('label' => 'View Detail Drawings', 'text' => 'Elegance detail drawings and documents.', 'href' => '/resources/technical/?series=elegance&type=detail-drawing'),
    ),
  ));
  ?>
</main>

<?php get_footer();
