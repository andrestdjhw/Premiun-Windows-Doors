<?php
/*
 * Template Name: Residential Solutions
 *
 * /solutions/residential/. Audiencia: propietarios, dealers residenciales y constructores.
 * Objetivo: apoyar la conversión B2C sin presentar la marca como contratista de reemplazo:
 * Premium se presenta como fabricante.
 * Cada sección vive en template-parts/residential/.
 */

pwd_seo(
  'Custom Residential Windows & Doors | Premium',
  'Custom windows and doors for residential replacement and new construction, manufactured in California with multiple vinyl and aluminum series.',
  '/solutions/residential/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'Residential Solutions',
    'title' => array(
      array('Made for the Home.', 'light'),
      array('Manufactured for the Long Term.', 'accent'),
    ),
    'image' => array(
      '1536' => '2026/09/Residential-1536x1024.jpg',
      '2048' => '2026/09/Residential-2048x1365.jpg',
      '2560' => '2026/09/Residential-scaled.jpg',
    ),
    'buttons' => array(
      array('Explore Windows', home_url('/windows/'), 'light'),
      array('Explore Doors', home_url('/doors/'), 'outline-light'),
    ),
  ));

  $sections = array('intro', 'paths', 'confidence', 'cta');

  foreach ($sections as $section) {
    get_template_part('template-parts/residential/' . $section);
  }
  ?>
</main>

<?php get_footer();
