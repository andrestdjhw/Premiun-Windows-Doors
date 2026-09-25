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
  $sections = array('hero', 'solutions', 'manufacturing', 'products', 'capability', 'series', 'professionals', 'projects', 'confidence');

  foreach ($sections as $section) {
    get_template_part('template-parts/home/' . $section);
  }
  ?>
</main>

<?php get_footer();
