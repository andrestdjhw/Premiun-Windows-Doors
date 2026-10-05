<?php
/*
 * Template Name: Capabilities
 *
 * /capabilities/ ("Our Capabilities" del mega menú). Índice de manufactura, personalización y desempeño.
 */

pwd_seo(
  'Manufacturing & Performance Capabilities | Premium Windows & Doors',
  'In-house manufacturing in Corona, California, custom sizes, finishes, glass and hardware options, and performance backed by AAMA, NFRC and ASTM references.',
  '/capabilities/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'Capabilities',
    'title' => array(
      array('Engineered', 'light'),
      array('and built in California.', 'accent'),
    ),
    'text' => 'In-house manufacturing and custom fabrication give us control over every detail, from the frame profile to the glass, finish and hardware.',
    'image' => array('1536' => '2026/09/Commercial--scaled.jpg'),
    'buttons' => array(
      array('Manufacturing', home_url('/capabilities/manufacturing/'), 'light'),
      array('Performance', '#performance', 'outline-light'),
    ),
  ));

  get_template_part('template-parts/sections', null, array('sections' => array(
    array(
      'type' => 'cards',
      'eyebrow' => 'Manufacturing',
      'title' => 'Built to the requirements of the opening',
      'text' => 'Options are series- and product-specific. Each product page lists exactly what is available.',
      'cols' => 3,
      'items' => array(
        array('icon' => 'factory', 'title' => 'Manufacturing', 'text' => 'How Premium windows and doors are fabricated in Corona, California.', 'href' => '/capabilities/manufacturing/'),
        array('icon' => 'layers', 'title' => 'Custom Sizes & Shapes', 'text' => 'Configurations, frame systems and sizes for each opening.', 'href' => '/capabilities/customization/'),
        array('icon' => 'file-badge', 'title' => 'Finishes & Colors', 'text' => 'Exterior and interior colors by series, plus blind colors.', 'href' => '/capabilities/finishes-colors/'),
        array('icon' => 'badge-check', 'title' => 'Glass Options', 'text' => 'Dual, Dura and Triple Pane glazing, textures and Blinds + Glass.', 'href' => '/capabilities/glass-options/'),
        array('icon' => 'shield-check', 'title' => 'Hardware & Accessories', 'text' => 'Locks, handles, rollers and grid profiles by series.', 'href' => '/capabilities/hardware/'),
      ),
    ),
    array(
      'type' => 'cards',
      'id' => 'performance',
      'eyebrow' => 'Performance',
      'title' => 'Performance you can document',
      'text' => 'Energy, acoustic and structural performance depend on the product, size and glazing selected. Confirm ratings for your project with our team.',
      'cols' => 4,
      'items' => array(
        array('icon' => 'award', 'title' => 'Energy Efficiency', 'text' => 'LoĒ³-366® glass, argon and warm-edge spacers come standard.', 'href' => '/capabilities/energy-efficiency/'),
        array('icon' => 'file-text', 'title' => 'Testing & Certifications', 'text' => 'AAMA, NFRC and ASTM references where applicable.', 'href' => '/capabilities/certifications/'),
        array('icon' => 'layers', 'title' => 'Sound Control', 'text' => 'Laminated glazing and the acoustic-focused Serene Series.', 'href' => '/capabilities/sound-control/'),
        array('icon' => 'shield-check', 'title' => 'Coastal & High-Wind', 'text' => 'Project-specific review of structural requirements.', 'href' => '/capabilities/coastal-high-wind/'),
      ),
    ),
  )));

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Put our capabilities to work',
    'ctas' => array(
      array('label' => 'Request a Quote', 'text' => 'Share your openings and our team will follow up.', 'href' => '/request-a-quote/'),
      array('label' => 'Technical Resources', 'text' => 'Detail drawings and installation guides.', 'href' => '/resources/technical/'),
      array('label' => 'Compare Series', 'text' => 'Materials, finishes and performance side by side.', 'href' => '/series/#compare'),
    ),
  ));
  ?>
</main>

<?php get_footer();
