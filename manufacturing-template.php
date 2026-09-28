<?php
/*
 * Template Name: Manufacturing
 *
 * /capabilities/manufacturing/. Audiencia: todos los profesionales y quien evalúa la marca.
 * Objetivo: hacer visible y verificable la capacidad de la planta y la operación.
 * Reglas del brief:
 *   - Proceso: usar solo pasos confirmados por operaciones.
 *   - Planta/automatización: solo con cifras y descripciones aprobadas por el cliente.
 *     No inventar volumen de producción ni capacidad.
 * Cada sección vive en template-parts/manufacturing/.
 */

pwd_seo(
  'Window & Door Manufacturing in California | Premium',
  'See how Premium manufactures custom windows and doors in Corona, California, from product configuration through quality control and packaging.',
  '/capabilities/manufacturing/'
);

get_header(); ?>

<main id="content">
  <?php
  // Sin imagen hasta tener fotos reales de la planta (no usar stock de fábricas).
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'Manufacturing',
    'title' => array(
      array('Manufactured in', 'light'),
      array('Corona, California.', 'accent'),
    ),
    'buttons' => array(
      array('Explore Products', home_url('/products/'), 'light'),
      array('Start a Project', home_url('/request-a-quote/'), 'outline-light'),
    ),
  ));

  $sections = array('intro', 'process', 'facility', 'capabilities', 'why');

  foreach ($sections as $section) {
    get_template_part('template-parts/manufacturing/' . $section);
  }

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Put our manufacturing to work',
    'ctas' => array(
      array('label' => 'Explore Products', 'text' => 'Windows, doors and the five product series.', 'href' => '/products/'),
      array('label' => 'Start a Project', 'text' => 'Share the scope and requirements with our team.', 'href' => '/request-a-quote/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
