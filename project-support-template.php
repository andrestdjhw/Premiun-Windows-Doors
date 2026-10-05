<?php
/*
 * Template Name: Project Support
 *
 * /professionals/project-support/. Cómo acompaña Premium a developers y GCs desde la selección hasta el servicio.
 * Las etapas usan lo que el sitio ya ofrece (recursos técnicos, garantía, service request); no promete
 * plazos ni servicios no confirmados. El formulario de proyecto vive en Developers & GCs (#submit-project).
 */

pwd_seo(
  'Project Support for Developers & Contractors | Premium Windows & Doors',
  'Premium supports developers and general contractors from product selection and technical submittals through delivery, service and warranty.',
  '/professionals/project-support/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Professionals', '/professionals/'), array('Project Support', '/professionals/project-support/')),
    'eyebrow' => 'Project Support',
    'title' => array(
      array('One team from selection', 'light'),
      array('to service.', 'accent'),
    ),
    'text' => 'A project-support process with clear points of contact, consistent documentation and a defined path for service after installation.',
    'image' => array('1536' => '2026/09/DevelopersGeneralContractors-scaled.jpg'),
    'buttons' => array(
      array('Submit a Project', home_url('/professionals/developers-general-contractors/#submit-project'), 'light'),
      array('Request Support', home_url('/professionals/request-support/'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/sections', null, array('sections' => array(
    array(
      'type' => 'steps',
      'eyebrow' => 'How we support projects',
      'title' => 'Support at every stage',
      'items' => array(
        array('title' => 'Product fit', 'text' => 'Match series, operation types and frame systems to the application and budget.'),
        array('title' => 'Technical submittals', 'text' => 'Detail drawings, installation guides and certification references early in the process.'),
        array('title' => 'Quoting and coordination', 'text' => 'A single point of contact for quotes, revisions and project communication.'),
        array('title' => 'Service and warranty', 'text' => 'Defined warranty terms and a service request process after installation.'),
      ),
    ),
    array(
      'type' => 'cards',
      'eyebrow' => 'Resources',
      'title' => 'Everything your team needs',
      'cols' => 3,
      'items' => array(
        array('icon' => 'file-text', 'title' => 'Technical Resources', 'text' => 'Detail drawings and installation guides by product.', 'href' => '/resources/technical/'),
        array('icon' => 'layers', 'title' => 'Specifications', 'text' => 'Frame depths and framing options by product.', 'href' => '/professionals/specifications/'),
        array('icon' => 'shield-check', 'title' => 'Warranty', 'text' => 'Current warranty documents for vinyl and aluminum.', 'href' => '/warranty/'),
        array('icon' => 'factory', 'title' => 'Multifamily Solutions', 'text' => 'Repeatable products and documentation at scale.', 'href' => '/solutions/multifamily/'),
        array('icon' => 'award', 'title' => 'Commercial Solutions', 'text' => 'Product fit for commercial applications.', 'href' => '/solutions/commercial/'),
        array('icon' => 'file-badge', 'title' => 'Service Request', 'text' => 'Report issues with installed products.', 'href' => '/service-request/'),
      ),
    ),
  )));

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Start your project with Premium',
    'ctas' => array(
      array('label' => 'Submit a Project', 'text' => 'Share scope, timeline and products.', 'href' => '/professionals/developers-general-contractors/#submit-project'),
      array('label' => 'Request a Quote', 'text' => 'Get pricing for your openings.', 'href' => '/request-a-quote/'),
      array('label' => 'Contact Us', 'text' => 'Talk to our team about your project.', 'href' => '/contact/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
