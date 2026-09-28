<?php
/*
 * Template Name: Architects & Specifiers
 *
 * /professionals/architects-specifiers/. Audiencia: arquitectos, diseñadores y specifiers.
 * Objetivo: que Premium sea fácil de evaluar y especificar antes de comprometer el proyecto.
 * Las dudas no resueltas van al contacto técnico/de proyecto, no al formulario general.
 * Cada sección vive en template-parts/architects/.
 */

pwd_seo(
  'Window & Door Resources for Architects | Premium',
  'Technical window and door resources for architects and specifiers, including drawings, certifications, glazing, frame details and product documentation.',
  '/professionals/architects-specifiers/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'Architects & Specifiers',
    'title' => array(
      array('Everything You Need to', 'light'),
      array('Evaluate and Specify Premium.', 'accent'),
    ),
    'image' => array(
      '1536' => '2026/09/ArchitectsSpecifiers-1536x1024.jpg',
      '2048' => '2026/09/ArchitectsSpecifiers-2048x1365.jpg',
      '2560' => '2026/09/ArchitectsSpecifiers-scaled.jpg',
    ),
    'buttons' => array(
      array('Technical Resources', home_url('/resources/technical/'), 'light'),
      array('Compare Series', home_url('/series/#compare'), 'outline-light'),
    ),
  ));

  $sections = array('intro', 'resources', 'support');

  foreach ($sections as $section) {
    get_template_part('template-parts/architects/' . $section);
  }

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Ready to specify?',
    'ctas' => array(
      array('label' => 'Technical Resources', 'text' => 'Drawings, frame details, certifications and documentation.', 'href' => '/resources/technical/'),
      array('label' => 'Compare Series', 'text' => 'Materials, performance and applications side by side.', 'href' => '/series/#compare'),
      array('label' => 'Contact Project Support', 'text' => 'Technical questions answered by our project team.', 'href' => '/professionals/request-support/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
