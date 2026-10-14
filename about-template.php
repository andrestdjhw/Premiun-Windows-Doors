<?php
/*
 * Template Name: About
 *
 * About Premium (/about/). Objetivo: convertir la historia, la planta y la identidad
 * de fabricante en evidencia creíble de la marca.
 * Cada sección vive en template-parts/about/; el proceso de manufactura se comparte con el Home.
 * Incluye las capacidades y los recursos (antes /capabilities/ y /resources/, que redirigen a
 * /about/#capabilities y /about/#resources).
 */

pwd_seo(
  'About Premium Windows & Doors | California Manufacturer Since 2001',
  'Premium Windows & Doors has manufactured custom residential, commercial and multifamily window and door products in California since 2001.',
  '/about/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/about/hero');
  get_template_part('template-parts/about/story');
  get_template_part('template-parts/home/capability'); // Proceso de manufactura (mismo bloque del Home).
  get_template_part('template-parts/about/capabilities'); // Antes el hub /capabilities/.
  get_template_part('template-parts/resources/categories', null, array('id' => 'resources')); // Antes el hub /resources/.
  get_template_part('template-parts/resources/stages');
  get_template_part('template-parts/about/pillars');
  ?>
</main>

<?php get_footer();
