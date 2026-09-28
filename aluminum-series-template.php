<?php
/*
 * Template Name: Aluminum Series
 *
 * /series/aluminum/. Audiencia: arquitectos, residencial a medida, comercial y dealers.
 * Objetivo: posicionar aluminio por arquitectura, especificación, aberturas modernas y evidencia técnica.
 * Key message (brief): mostrar perfiles delgados, acabados anodizados, herrajes, rodillos, vidrio y la
 * relación técnica entre marco, vidrio y abertura. Acabados Clear/Bronze Anodized verificados en las fichas
 * de premiumwindows.com (2026-09-28). La estructura vive en template-parts/series-page.php.
 */

pwd_seo(
  'Aluminum Windows & Doors | Premium Windows & Doors',
  'Explore Premium aluminum windows and doors with slim sightlines, modern aesthetics, thermal performance options and technical documentation.',
  '/series/aluminum/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Series', '/series/'), array('Aluminum', '/series/aluminum/')),
    'eyebrow' => 'Aluminum Series',
    'title' => array(
      array('Architectural Sightlines.', 'light'),
      array('Engineered Openings.', 'accent'),
    ),
    'image' => array(
      '1024' => '2026/09/VIZ-Aluminum-Home-Desert-House-Front-Side-1024x683.jpg',
      '1536' => '2026/09/VIZ-Aluminum-Home-Desert-House-Front-Side-1536x1024.jpg',
      '1800' => '2026/09/VIZ-Aluminum-Home-Desert-House-Front-Side.jpg',
    ),
    'buttons' => array(
      array('Explore Aluminum Windows', '#windows', 'light'),
      array('Explore Aluminum Doors', '#doors', 'outline-light'),
    ),
  ));

  get_template_part('template-parts/series-page', null, array(
    'slug' => 'aluminum',
    'intro_lead' => 'Premium’s Aluminum Series is built for projects that prioritize modern proportions, material expression, and larger architectural openings.',
    'intro_text' => 'Product-specific pages provide the exact finishes, glazing, hardware, frame details, and certifications that apply to each model.',
    'intro_image' => array(
      '1024' => '2026/09/Aluminum-Doors-Image_2-1024x757.jpg',
      '1536' => '2026/09/Aluminum-Doors-Image_2-1536x1135.jpg',
      '2048' => '2026/09/Aluminum-Doors-Image_2-2048x1513.jpg',
    ),
    'facts' => array(
      'Material' => 'Aluminum',
      'Finishes' => 'Clear & bronze anodized',
      'Profiles' => 'Slim sightlines',
      'Products' => 'Windows & doors',
    ),
    'features_title' => 'Where frame, glass and opening meet',
    'features' => array(
      'Slim profiles',
      'Anodized finish options',
      'Hardware',
      'Rollers',
      'Glazing',
      'Frame, glass and opening detail',
    ),
    'features_note' => 'Finishes, hardware and glazing vary by product. Confirm the exact options on each product page.',
    'professional_text' => 'For architects, custom residential and commercial work, review the finishes, frame details, glazing and certifications of each Aluminum product and confirm fit against the project’s specification.',
    'ctas' => array(
      array('label' => 'Explore Aluminum Windows', 'text' => 'Picture, casement & awning, sliding and single hung windows.', 'href' => '/series/aluminum/#windows'),
      array('label' => 'Explore Aluminum Doors', 'text' => 'Patio sliding, French swing, multi-slide and multi-fold.', 'href' => '/series/aluminum/#doors'),
      array('label' => 'Technical Resources', 'text' => 'Aluminum drawings, certifications and documents.', 'href' => '/resources/technical/?series=aluminum'),
    ),
  ));
  ?>
</main>

<?php get_footer();
