<?php
/*
 * Template Name: Resources
 *
 * /resources/. Audiencia: todas. Objetivo: centralizar documentación técnica, de ventas,
 * garantía, servicio y producto. Cada sección vive en template-parts/resources/.
 */

pwd_seo(
  'Window & Door Resources | Premium Windows & Doors',
  'Access technical drawings, brochures, certifications, warranty information, service resources and product documentation from Premium.',
  '/resources/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'Resources',
    'title' => array(
      array('The Information', 'light'),
      array('Behind the Product.', 'accent'),
    ),
    'text' => 'Access the documents and support resources needed to evaluate, specify, install, service, and understand Premium products.',
    'image' => array('1024' => '2026/09/Serene_Series.jpg'),
    'buttons' => array(
      array('Technical Resources', home_url('/resources/technical/'), 'light'),
      array('Brochures & Literature', home_url('/resources/brochures/'), 'outline-light'),
    ),
  ));

  $sections = array('categories', 'stages', 'types');

  foreach ($sections as $section) {
    get_template_part('template-parts/resources/' . $section);
  }

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Can’t find what you need?',
    'ctas' => array(
      array('label' => 'Contact Project Support', 'text' => 'Our team can send the right document for your project.', 'href' => '/professionals/request-support/'),
      array('label' => 'Service Request', 'text' => 'Request service for an installed Premium product.', 'href' => '/service-request/'),
      array('label' => 'Contact Us', 'text' => 'General questions about products and support.', 'href' => '/contact/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
