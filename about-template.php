<?php
/*
 * Template Name: About
 *
 * About Premium (/about/). Objetivo: convertir la historia, la planta y la identidad
 * de fabricante en evidencia creíble de la marca.
 * Cada sección vive en template-parts/about/.
 */

pwd_seo(
  'About Premium Windows & Doors | California Manufacturer Since 2001',
  'Premium Windows & Doors has manufactured custom residential, commercial and multifamily window and door products in California since 2001.',
  '/about/'
);

get_header(); ?>

<main id="content">
  <?php
  $sections = array('hero', 'story', 'pillars');

  foreach ($sections as $section) {
    get_template_part('template-parts/about/' . $section);
  }
  ?>
</main>

<?php get_footer();
