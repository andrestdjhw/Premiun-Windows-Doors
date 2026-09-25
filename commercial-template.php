<?php
/*
 * Template Name: Commercial Solutions
 *
 * /solutions/commercial/. Audiencia: arquitectos, GCs, developers y dealers.
 * Objetivo: posicionar a Premium para aplicaciones comerciales/custom donde la
 * documentación y la especificación importan. No dar a entender que todas las
 * series sirven para cualquier aplicación comercial.
 * Cada sección vive en template-parts/commercial/.
 */

pwd_seo(
  'Commercial Windows & Doors Manufacturer | Premium',
  'Custom commercial windows and doors with technical resources, aluminum and vinyl options, manufacturing support and project documentation.',
  '/solutions/commercial/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'Commercial Solutions',
    'title' => array(
      array('Commercial Openings Require', 'light'),
      array('More Than a Product Match.', 'accent'),
    ),
    'image' => array(
      '1536' => '2026/09/Commercial--1536x1152.jpg',
      '2048' => '2026/09/Commercial--2048x1536.jpg',
      '2560' => '2026/09/Commercial--scaled.jpg',
    ),
    'buttons' => array(
      array('Start a Commercial Project', home_url('/request-a-quote/'), 'light'),
      array('Explore Aluminum', home_url('/series/aluminum/'), 'outline-light'),
    ),
  ));

  $sections = array('intro', 'product-fit', 'technical', 'cta');

  foreach ($sections as $section) {
    get_template_part('template-parts/commercial/' . $section);
  }
  ?>
</main>

<?php get_footer();
