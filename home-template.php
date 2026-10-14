<?php
/*
 * Template Name: Home
 *
 * Portada. Objetivo: posicionar a Premium como fabricante, dirigir al usuario
 * por producto/aplicación y demostrar capacidad rápidamente.
 * Cada sección vive en template-parts/home/.
 */

pwd_seo(
  'Custom Windows & Doors Manufacturer | Premium Windows & Doors',
  'Custom windows and doors manufactured in Corona, California for residential, commercial and multifamily projects. Explore products and capabilities.'
);

get_header(); ?>

<main id="content">
  <?php
  $sections = array('hero', 'series', 'products', 'solutions', 'capability', 'manufacturing', 'professionals', 'projects', 'confidence');
  // Capability y Manufacturing forman un solo bloque oscuro: el timeline se funde hacia abajo con Manufacturing.
  $section_args = array('capability' => array('join' => 'bottom'));

  foreach ($sections as $section) {
    get_template_part('template-parts/home/' . $section, null, $section_args[$section] ?? array());
  }
  ?>
</main>

<?php get_footer();
