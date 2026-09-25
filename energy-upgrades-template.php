<?php
/*
 * Template Name: Energy Upgrades
 *
 * /solutions/energy-upgrades/. Sin brief todavía: contenido provisional para revisar.
 * Las certificaciones se mencionan igual que en Home: "depending on series, model and configuration".
 * La estructura vive en template-parts/project-type.php.
 */

pwd_seo(
  'Energy-Efficient Window & Door Upgrades | Premium',
  'Upgrade to windows and doors with glass and frame options for better comfort and energy performance, with NFRC ratings depending on series. Made in California.',
  '/solutions/energy-upgrades/'
);

get_header();

get_template_part('template-parts/project-type', null, array(
  'hero' => array(
    'eyebrow' => 'Solutions · Energy Upgrades',
    'title' => array(array('Better Performance,', 'light'), array('Opening by Opening.', 'accent')),
    'text' => 'Glass and frame options that improve comfort and energy performance, with ratings documented where applicable.',
    'image' => array('700' => '2026/09/Elegance_Series.jpg'),
    'buttons' => array(
      array('Compare Series', home_url('/compare-series/'), 'light'),
      array('Energy Efficiency', home_url('/capabilities/energy-efficiency/'), 'outline-light'),
    ),
  ),
  'intro' => 'Upgrading windows and doors is one of the most direct ways to improve comfort in a home or building. The right glass and frame combination depends on the climate, the orientation and the project’s performance goals.',
  'factors' => array('Glazing', 'Frame material', 'Solar heat gain', 'Insulation', 'Comfort', 'NFRC ratings'),
  'support_title' => 'Performance you can compare',
  'support' => array(
    array('Glass options', 'Compare glazing options for insulation, solar control and comfort.'),
    array('Frame materials', 'Vinyl and aluminum series with different performance priorities.'),
    array('Documented ratings', 'NFRC ratings and labels depending on series, model and configuration.'),
  ),
  'markets' => array('residential', 'multifamily', 'commercial'),
  'resources' => array(
    'Energy efficiency' => '/capabilities/energy-efficiency/',
    'Glass options' => '/capabilities/glass-options/',
    'Certifications' => '/resources/certifications/',
    'Compare series' => '/compare-series/',
  ),
  'cta_title' => 'Find the right performance for the project',
  'ctas' => array(
    array('label' => 'Find the Right Series', 'text' => 'Compare the five series side by side.', 'href' => '/compare-series/'),
    array('label' => 'Energy Efficiency', 'text' => 'How glass and frames affect performance.', 'href' => '/capabilities/energy-efficiency/'),
    array('label' => 'Request a Quote', 'text' => 'Share your project and our team will follow up.', 'href' => '/request-a-quote/'),
  ),
));

get_footer();
