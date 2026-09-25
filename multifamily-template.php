<?php
/*
 * Template Name: Multifamily Solutions
 *
 * /solutions/multifamily/. Audiencia: developers, GCs, compras, arquitectos y dealers.
 * Objetivo: posicionar a Premium para alcances grandes y repetibles con decisiones
 * de compra entre varias partes.
 * Cada sección vive en template-parts/multifamily/.
 */

pwd_seo(
  'Multifamily Windows & Doors Manufacturer | Premium',
  'Window and door manufacturing for multifamily projects with repeatable product options, technical documentation, project support and California production.',
  '/solutions/multifamily/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'Multifamily Solutions',
    'title' => array(
      array('Multifamily Is', 'light'),
      array('More Than More Units.', 'accent'),
    ),
    'image' => array(
      '1536' => '2026/09/Multifamily-1536x975.jpg',
      '2048' => '2026/09/Multifamily-2048x1299.jpg',
      '2560' => '2026/09/Multifamily-scaled.jpg',
    ),
    'buttons' => array(
      array('Request Project Support', home_url('/professionals/project-support/'), 'light'),
      array('Technical Resources', home_url('/professionals/technical-resources/'), 'outline-light'),
    ),
  ));

  $sections = array('intro', 'repeatability', 'team', 'evidence');

  foreach ($sections as $section) {
    get_template_part('template-parts/multifamily/' . $section);
  }
  ?>
</main>

<?php get_footer();
