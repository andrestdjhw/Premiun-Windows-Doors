<?php
/*
 * Template Name: Service Request
 *
 * /service-request/. Mismos datos que pide el formulario actual (premiumwindows.com/resources/service-request/,
 * revisado 2026-10-03): compra (dealer, referencia, líneas), propietario, producto y descripción del defecto.
 * Las fotos no se adjuntan (EmailJS); el equipo de servicio las pide por correo si hacen falta.
 */

pwd_seo(
  'Service Request | Premium Windows & Doors',
  'Submit a service request for installed Premium windows and doors. Share purchase details, product information and a description of the issue.',
  '/service-request/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Resources', '/resources/'), array('Service Request', '/service-request/')),
    'eyebrow' => 'Service Request',
    'title' => array(
      array('Service for installed', 'light'),
      array('Premium products.', 'accent'),
    ),
    'text' => 'Tell us about the product and the issue. Our service team reviews every request and follows up with next steps.',
    'image' => array('1536' => '2026/09/VIZ-Timeless-Interior-Bay-Nook.jpg'),
    'buttons' => array(
      array('Start a Request', '#service', 'light'),
      array('Warranty Information', home_url('/warranty/'), 'outline-light'),
    ),
  ));

  $series = array_merge(array_column(pwd_series_data(), 'name'), array('Not sure'));

  get_template_part('template-parts/form', null, array(
    'id' => 'service',
    'eyebrow' => 'Service request form',
    'title' => 'Request service',
    'text' => 'Your dealer and order reference help us find the product quickly. You’ll usually find them on your invoice or order confirmation.',
    'points' => array(
      'Have your dealer name and order reference number at hand.',
      'Describe what you see and where (which window or door, which side).',
      'Our team may ask for photos by email to diagnose the issue.',
    ),
    'form_name' => 'Service Request',
    'template' => 'PWD_EMAILJS_SERVICE_TEMPLATE_ID',
    'success' => 'Thank you. Your service request was submitted and our service team will contact you.',
    'submit' => 'Submit Service Request',
    'groups' => array(
      array('legend' => 'Purchase information', 'fields' => array(
        array('name' => 'dealer_name', 'label' => 'Dealer name'),
        array('name' => 'dealer_contact', 'label' => 'Dealer contact name'),
        array('name' => 'reference_number', 'label' => 'Order reference number'),
        array('name' => 'line_numbers', 'label' => 'Line number(s)'),
      )),
      array('legend' => 'Homeowner information', 'fields' => array(
        array('name' => 'name', 'label' => 'Contact name', 'required' => true, 'autocomplete' => 'name'),
        array('name' => 'email', 'label' => 'Email', 'type' => 'email', 'required' => true, 'autocomplete' => 'email'),
        array('name' => 'phone', 'label' => 'Phone', 'type' => 'tel', 'required' => true, 'autocomplete' => 'tel'),
        array('name' => 'address', 'label' => 'Street address', 'required' => true, 'autocomplete' => 'street-address'),
        array('name' => 'city', 'label' => 'City', 'required' => true, 'autocomplete' => 'address-level2'),
        array('name' => 'state', 'label' => 'State', 'required' => true, 'autocomplete' => 'address-level1'),
        array('name' => 'zip', 'label' => 'ZIP code', 'required' => true, 'autocomplete' => 'postal-code'),
      )),
      array('legend' => 'Product', 'fields' => array(
        array('name' => 'series', 'label' => 'Series', 'type' => 'select', 'options' => $series),
        array('name' => 'color', 'label' => 'Color', 'type' => 'select', 'options' => array('White', 'Almond', 'Black', 'Clear Anodized', 'Bronze Anodized', 'Other')),
        array('name' => 'window_type', 'label' => 'Window type', 'type' => 'checkboxes', 'options' => array('Picture', 'Casement & Awning', 'Horizontal Sliding', 'Single Hung', 'Double Hung', 'Arch & Special Shape')),
        array('name' => 'door_type', 'label' => 'Door type', 'type' => 'checkboxes', 'options' => array('Patio Sliding', 'French Swing', 'Multiple Sliding', 'Multiple Folding')),
        array('name' => 'component', 'label' => 'Affected component', 'type' => 'checkboxes', 'options' => array('Insulated glass', 'Grids', 'Screen', 'Hardware / lock', 'Frame / sash', 'Operation', 'Other')),
        array('name' => 'defect', 'label' => 'Describe the issue', 'type' => 'textarea', 'required' => true, 'placeholder' => 'What happened, when you noticed it and which opening is affected…'),
      )),
    ),
  ));

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Before you submit',
    'ctas' => array(
      array('label' => 'Warranty Information', 'text' => 'Current and legacy warranty documents.', 'href' => '/warranty/'),
      array('label' => 'Installation Guides', 'text' => 'Installation documents for every window and door style.', 'href' => '/resources/technical/?type=installation-guide'),
      array('label' => 'Contact Us', 'text' => 'Questions about an existing order? Talk to our team.', 'href' => '/contact/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
