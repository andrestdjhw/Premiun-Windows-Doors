<?php
/*
 * Template Name: Remodel & Renovation
 *
 * /solutions/remodel/. Sin brief todavía: contenido provisional para revisar.
 * La estructura vive en template-parts/project-type.php.
 */

pwd_seo(
  'Remodel & Renovation Windows & Doors | Premium',
  'Made-to-order windows and doors for remodels and renovations, from larger indoor-outdoor openings to specialty shapes, manufactured in Corona, California.',
  '/solutions/remodel/'
);

get_header();

get_template_part('template-parts/project-type', null, array(
  'hero' => array(
    'eyebrow' => 'Solutions · Remodel & Renovation',
    'title' => array(array('New Openings', 'light'), array('for Changing Spaces.', 'accent')),
    'text' => 'Windows and doors for remodels that change layouts, open walls to the outdoors, or update the style of a space.',
    'image' => array('1024' => '2026/09/Aluminum_Series.jpg'),
    'buttons' => array(
      array('Explore Doors', home_url('/doors/'), 'light'),
      array('Explore Windows', home_url('/windows/'), 'outline-light'),
    ),
  ),
  'intro' => 'A remodel often changes the opening itself — a wider view, a new door to the patio, a different style. Made-to-order products let the opening be designed around the space.',
  'factors' => array('Layout changes', 'Indoor-outdoor openings', 'Specialty shapes', 'Finishes', 'Hardware', 'Glass'),
  'support_title' => 'Designed around the new space',
  'support' => array(
    array('Larger openings', 'Multi-slide, multi-fold and sliding patio doors that connect indoor and outdoor spaces.'),
    array('Style updates', 'Picture, casement and specialty shape windows to match a new design.'),
    array('Consistent finishes', 'Colors, finishes and hardware coordinated across the project.'),
  ),
  'markets' => array('residential', 'commercial'),
  'resources' => array(
    'Multi-slide doors' => '/doors/multi-slide/',
    'Multi-fold doors' => '/doors/multi-fold/',
    'Specialty & shape windows' => '/windows/specialty-shape/',
    'Finishes & colors' => '/capabilities/finishes-colors/',
  ),
  'cta_title' => 'Design the openings for your remodel',
  'ctas' => array(
    array('label' => 'Explore Doors', 'text' => 'Sliding patio, French swing, multi-slide and multi-fold.', 'href' => '/doors/'),
    array('label' => 'Explore Windows', 'text' => 'Picture, casement, awning, sliding, hung and specialty shapes.', 'href' => '/windows/'),
    array('label' => 'Request a Quote', 'text' => 'Share your project and our team will follow up.', 'href' => '/request-a-quote/'),
  ),
));

get_footer();
