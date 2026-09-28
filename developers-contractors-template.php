<?php
/*
 * Template Name: Developers & General Contractors
 *
 * /professionals/developers-general-contractors/. Audiencia: developers, GCs, PMs y compras.
 * Objetivo: traducir la capacidad de manufactura en menor incertidumbre de ejecución.
 * Incluye el formulario de intake de proyecto (EmailJS).
 * Cada sección vive en template-parts/developers/.
 */

pwd_seo(
  'Windows & Doors for Developers & GCs | Premium',
  'Window and door manufacturing support for developers and general contractors across residential, multifamily and commercial projects.',
  '/professionals/developers-general-contractors/'
);

$page_url = '/professionals/developers-general-contractors/';

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'Developers & General Contractors',
    'title' => array(
      array('A Window & Door Supplier Has to', 'light'),
      array('Perform Beyond the Product.', 'accent'),
    ),
    'image' => array(
      '1536' => '2026/09/DevelopersGeneralContractors-1536x1024.jpg',
      '2048' => '2026/09/DevelopersGeneralContractors-2048x1365.jpg',
      '2560' => '2026/09/DevelopersGeneralContractors-scaled.jpg',
    ),
    'buttons' => array(
      array('Submit a Project', '#submit-project', 'light'),
      array('View Projects', home_url('/projects/'), 'outline-light'),
    ),
  ));

  $sections = array('intro', 'proof', 'submit');

  foreach ($sections as $section) {
    get_template_part('template-parts/developers/' . $section);
  }

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Move the project forward',
    'ctas' => array(
      array('label' => 'Submit a Project', 'text' => 'Share the scope and timeframe with our team.', 'href' => $page_url . '#submit-project'),
      array('label' => 'View Projects', 'text' => 'Residential, multifamily and commercial work.', 'href' => '/projects/'),
      array('label' => 'Technical Resources', 'text' => 'Drawings, certifications and documentation.', 'href' => '/resources/technical/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
