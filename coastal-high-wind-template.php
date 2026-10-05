<?php
/*
 * Template Name: Coastal & High-Wind
 *
 * /capabilities/coastal-high-wind/ (link del mega menú).
 * PENDIENTE (cliente): ni el sitio actual ni las fichas publican ratings de design pressure (DP), impacto
 * o zonas costeras. La página no afirma ratings ni aprobaciones; dirige a revisión por proyecto.
 * Reemplazar con datos verificados cuando el cliente los entregue.
 */

pwd_seo(
  'Coastal & High-Wind Projects | Premium Windows & Doors',
  'Planning windows and doors for a coastal or high-wind location? Premium’s project team reviews structural requirements, product options and documentation.',
  '/capabilities/coastal-high-wind/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Capabilities', '/capabilities/'), array('Coastal & High-Wind', '/capabilities/coastal-high-wind/')),
    'eyebrow' => 'Coastal & High-Wind',
    'title' => array(
      array('Demanding locations need', 'light'),
      array('a project-specific review.', 'accent'),
    ),
    'text' => 'Wind load, water resistance and local code requirements vary by site. Our team reviews them with you before products are specified.',
    'image' => array('1536' => '2026/09/VIZ-Aluminum-Home-Desert-House-Front-Side.jpg'),
    'buttons' => array(array('Request a Review', home_url('/professionals/request-support/'), 'light')),
  ));

  get_template_part('template-parts/sections', null, array('sections' => array(
    array(
      'type' => 'intro',
      'eyebrow' => 'Project review',
      'lead' => 'Structural performance depends on the product, size, configuration and installation, not on the series name alone.',
      'text' => 'Share the project location, required design pressure and any local code requirements. We’ll confirm which products and configurations fit, and provide the documentation available for each.',
      'note' => 'Performance ratings vary by product, size and configuration. Always confirm ratings for the specific units on your project.',
    ),
    array(
      'type' => 'steps',
      'eyebrow' => 'What to send us',
      'title' => 'Information for a fast review',
      'items' => array(
        array('title' => 'Location and exposure', 'text' => 'Project address, exposure category and any coastal or wind-zone designation.'),
        array('title' => 'Requirements', 'text' => 'Required design pressure, water resistance and local code references.'),
        array('title' => 'Openings', 'text' => 'Window and door types, sizes and configurations from the plans.'),
        array('title' => 'Schedule', 'text' => 'Submittal deadlines and project timeline.'),
      ),
    ),
  )));

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Start the review',
    'ctas' => array(
      array('label' => 'Request Support', 'text' => 'Send requirements to our technical team.', 'href' => '/professionals/request-support/'),
      array('label' => 'Testing & Certifications', 'text' => 'AAMA, NFRC and ASTM references.', 'href' => '/capabilities/certifications/'),
      array('label' => 'Technical Resources', 'text' => 'Detail drawings by product and frame.', 'href' => '/resources/technical/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
