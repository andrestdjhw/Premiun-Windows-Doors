<?php
/*
 * Template Name: New Construction
 *
 * /solutions/new-construction/. Sin brief todavía: contenido provisional para revisar.
 * La estructura vive en template-parts/project-type.php.
 */

pwd_seo(
  'New Construction Windows & Doors | Premium',
  'Made-to-order windows and doors for new construction projects, with technical documentation and project support, manufactured in Corona, California.',
  '/solutions/new-construction/'
);

get_header();

get_template_part('template-parts/project-type', null, array(
  'hero' => array(
    'eyebrow' => 'Solutions · New Construction',
    'title' => array(array('Specified from', 'light'), array('the Start of the Build.', 'accent')),
    'text' => 'Made-to-order windows and doors for homes and buildings built from the ground up — with documentation and support that fit the construction process.',
    'image' => array('1024' => '2026/09/Serene_Series.jpg'),
    'buttons' => array(
      array('Request a Quote', home_url('/request-a-quote/'), 'light'),
      array('Technical Resources', home_url('/professionals/technical-resources/'), 'outline-light'),
    ),
  ),
  'intro' => 'In new construction, windows and doors are decided alongside the plans. Aligning the product, the documentation and the schedule early keeps the openings from holding up the build.',
  'factors' => array('Plans & specifications', 'Configurations', 'Performance requirements', 'Submittals', 'Scheduling', 'Delivery'),
  'support_title' => 'From plans to delivery',
  'support' => array(
    array('Specify early', 'Choose series, configurations and options while the plans are still being drawn.'),
    array('Documentation for approvals', 'Drawings, certifications and performance information for plan review and submittals.'),
    array('Coordinated production', 'Made-to-order manufacturing and delivery coordinated with the project team.'),
  ),
  'markets' => array('residential', 'multifamily', 'commercial'),
  'resources' => array(
    'Technical drawings' => '/resources/technical-drawings/',
    'Specifications' => '/professionals/specifications/',
    'Certifications' => '/resources/certifications/',
    'Installation guides' => '/resources/installation-guides/',
  ),
  'cta_title' => 'Plan the openings for your build',
  'ctas' => array(
    array('label' => 'Request a Quote', 'text' => 'Share your plans and our team will follow up.', 'href' => '/request-a-quote/'),
    array('label' => 'Technical Resources', 'text' => 'Drawings, certifications and specifications.', 'href' => '/professionals/technical-resources/'),
    array('label' => 'Find the Right Series', 'text' => 'Compare the five series side by side.', 'href' => '/compare-series/'),
  ),
));

get_footer();
