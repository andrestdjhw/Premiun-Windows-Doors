<?php
/*
 * Template Name: Replacement & Retrofit
 *
 * /solutions/replacement/. Sin brief todavía: contenido provisional para revisar.
 * Premium se presenta como fabricante, no como contratista de reemplazo.
 * La estructura vive en template-parts/project-type.php.
 */

pwd_seo(
  'Replacement & Retrofit Windows & Doors | Premium',
  'Made-to-order replacement windows and doors sized for existing openings, with vinyl and aluminum series manufactured in Corona, California.',
  '/solutions/replacement/'
);

get_header();

get_template_part('template-parts/project-type', null, array(
  'hero' => array(
    'eyebrow' => 'Solutions · Replacement & Retrofit',
    'title' => array(array('Made to Fit', 'light'), array('the Openings You Have.', 'accent')),
    'text' => 'Made-to-order replacement windows and doors sized for existing openings, across vinyl and aluminum series.',
    'image' => array('1024' => '2026/09/Timeless_Series.jpg'),
    'buttons' => array(
      array('Explore Windows', home_url('/windows/'), 'light'),
      array('Explore Doors', home_url('/doors/'), 'outline-light'),
    ),
  ),
  'intro' => 'Replacement starts with an opening that already exists. Made-to-order sizing lets the new window or door fit the opening, instead of forcing the opening to fit a stock size.',
  'factors' => array('Existing openings', 'Measurements', 'Frame options', 'Glass', 'Colors', 'Hardware'),
  'support_title' => 'A better product in the same opening',
  'support' => array(
    array('Made-to-order sizes', 'Manufactured to the measurements of each existing opening.'),
    array('Style and series options', 'Update the look with different materials, colors and configurations.'),
    array('Performance improvement', 'Compare glass and frame options to improve comfort and efficiency.'),
  ),
  'markets' => array('residential', 'multifamily'),
  'resources' => array(
    'Glass options' => '/capabilities/glass-options/',
    'Finishes & colors' => '/capabilities/finishes-colors/',
    'Installation guides' => '/resources/installation-guides/',
    'Warranty information' => '/warranty/',
  ),
  'cta_title' => 'Start with the opening',
  'ctas' => array(
    array('label' => 'Explore Windows', 'text' => 'Picture, casement, awning, sliding, hung and specialty shapes.', 'href' => '/windows/'),
    array('label' => 'Explore Doors', 'text' => 'Sliding patio, French swing, multi-slide and multi-fold.', 'href' => '/doors/'),
    array('label' => 'Request a Quote', 'text' => 'Share your openings and our team will follow up.', 'href' => '/request-a-quote/'),
  ),
));

get_footer();
