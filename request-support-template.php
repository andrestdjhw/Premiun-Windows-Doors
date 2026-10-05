<?php
/*
 * Template Name: Request Support
 *
 * /professionals/request-support/. Soporte técnico para arquitectos, specifiers, contratistas e instaladores:
 * dibujos, especificaciones, datos de desempeño y selección de producto.
 */

pwd_seo(
  'Request Technical Support | Premium Windows & Doors',
  'Request detail drawings, specifications, performance data or product-selection help from Premium’s technical team for your window and door project.',
  '/professionals/request-support/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Professionals', '/professionals/'), array('Request Support', '/professionals/request-support/')),
    'eyebrow' => 'Request Support',
    'title' => array(
      array('Technical answers', 'light'),
      array('for your project.', 'accent'),
    ),
    'text' => 'Can’t find a drawing, need a specification or want help choosing the right product? Send the details and our technical team will respond.',
    'image' => array('1536' => '2026/09/ArchitectsSpecifiers-scaled.jpg'),
    'buttons' => array(
      array('Send a Request', '#support', 'light'),
      array('Technical Resources', home_url('/resources/technical/'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/form', null, array(
    'id' => 'support',
    'eyebrow' => 'Support request',
    'title' => 'What do you need?',
    'text' => 'Most detail drawings and installation guides download directly from Technical Resources. Use this form for anything else.',
    'points' => array(
      'Detail drawings for a specific configuration',
      'Specification language and product data',
      'Performance information for a project',
      'Help selecting a series or frame type',
    ),
    'form_name' => 'Request Support (Professionals)',
    'template' => 'PWD_EMAILJS_SUPPORT_TEMPLATE_ID',
    'success' => 'Thank you. Your request was sent to our technical team.',
    'submit' => 'Send Request',
    'groups' => array(
      array('legend' => 'About you', 'fields' => array(
        array('name' => 'name', 'label' => 'Full name', 'required' => true, 'autocomplete' => 'name'),
        array('name' => 'company', 'label' => 'Company', 'required' => true, 'autocomplete' => 'organization'),
        array('name' => 'email', 'label' => 'Email', 'type' => 'email', 'required' => true, 'autocomplete' => 'email'),
        array('name' => 'phone', 'label' => 'Phone', 'type' => 'tel', 'autocomplete' => 'tel'),
        array('name' => 'role', 'label' => 'Your role', 'type' => 'select', 'required' => true, 'options' => array('Architect / Specifier', 'Developer', 'General Contractor', 'Installer', 'Dealer', 'Other')),
      )),
      array('legend' => 'Your request', 'fields' => array(
        array('name' => 'project', 'label' => 'Project name and location'),
        array('name' => 'series', 'label' => 'Series', 'type' => 'select', 'options' => array_merge(array_column(pwd_series_data(), 'name'), array('Not sure'))),
        array('name' => 'request_type', 'label' => 'Request type', 'type' => 'checkboxes', 'options' => array('Detail drawings', 'Specifications', 'Performance data', 'Product selection', 'Installation question', 'Other')),
        array('name' => 'message', 'label' => 'Details', 'type' => 'textarea', 'required' => true, 'placeholder' => 'Products, configurations, frame types, sizes and deadlines…'),
      )),
    ),
  ));

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Find it yourself',
    'ctas' => array(
      array('label' => 'Technical Resources', 'text' => 'Detail drawings and installation guides by product.', 'href' => '/resources/technical/'),
      array('label' => 'Specifications', 'text' => 'Frame depths and options by product.', 'href' => '/professionals/specifications/'),
      array('label' => 'Finish & Glass Options', 'text' => 'Colors and glazing by series.', 'href' => '/professionals/finish-glass-options/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
