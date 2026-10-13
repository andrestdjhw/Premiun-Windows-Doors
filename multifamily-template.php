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
    // Foto real de obra (pwd_project_photos()).
    'image' => array(
      '1536' => '2026/10/foto_01_sin_marca-1536x1152.jpg',
      '2000' => '2026/10/foto_01_sin_marca.jpg',
    ),
    'buttons' => array(
      array('Request Project Support', home_url('/professionals/project-support/'), 'light'),
      array('Technical Resources', home_url('/resources/technical/'), 'outline-light'),
    ),
  ));

  $sections = array('intro', 'repeatability', 'team', 'evidence');

  foreach ($sections as $section) {
    get_template_part('template-parts/multifamily/' . $section);
  }
  ?>
</main>

<?php get_footer();
