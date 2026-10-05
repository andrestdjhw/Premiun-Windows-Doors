<?php
/*
 * Template Name: Become a Dealer
 *
 * /professionals/become-a-dealer/. Solicitud de distribuidor con los mismos datos que pide
 * premiumwindows.com/become-a-vendor/ (revisado 2026-10-03): contacto, negocio, especialidades y área de servicio.
 */

pwd_seo(
  'Become a Premium Windows & Doors Dealer | Distributor Application',
  'Apply to become a Premium Windows & Doors dealer or distributor. Grow with a trusted manufacturing team committed to quality and long-term success.',
  '/professionals/become-a-dealer/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Professionals', '/professionals/'), array('Become a Dealer', '/professionals/become-a-dealer/')),
    'eyebrow' => 'Become a Dealer',
    'title' => array(
      array('Become a Premium', 'light'),
      array('distributor.', 'accent'),
    ),
    'text' => 'Grow with a trusted manufacturing team committed to quality, collaboration and long-term success.',
    'image' => array('1536' => '2026/09/DealersDistributors-scaled.jpg'),
    'buttons' => array(
      array('Apply Now', '#application', 'light'),
      array('Dealer Program', home_url('/professionals/dealer-program/'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/form', null, array(
    'id' => 'application',
    'eyebrow' => 'Distributor application',
    'title' => 'Tell us about your business',
    'text' => 'Our team reviews every application and follows up to discuss the partnership.',
    'points' => array(
      'Coordinated marketing support and co-op opportunities',
      'Products engineered for long-term performance',
      'Dedicated service support and technical network',
    ),
    'form_name' => 'Distributor Application',
    'template' => 'PWD_EMAILJS_DEALER_TEMPLATE_ID',
    'success' => 'Thank you. Your application was submitted and our team will be in touch.',
    'submit' => 'Submit Application',
    'groups' => array(
      array('legend' => 'Your information', 'fields' => array(
        array('name' => 'name', 'label' => 'Your name', 'required' => true, 'autocomplete' => 'name'),
        array('name' => 'phone', 'label' => 'Phone', 'type' => 'tel', 'required' => true, 'autocomplete' => 'tel'),
        array('name' => 'email', 'label' => 'Email', 'type' => 'email', 'required' => true, 'autocomplete' => 'email', 'full' => true),
      )),
      array('legend' => 'Business information', 'fields' => array(
        array('name' => 'business', 'label' => 'Business name', 'required' => true, 'autocomplete' => 'organization'),
        array('name' => 'business_website', 'label' => 'Business website', 'type' => 'url', 'autocomplete' => 'url'),
        array('name' => 'address', 'label' => 'Business address', 'required' => true, 'autocomplete' => 'street-address', 'full' => true),
        array('name' => 'city', 'label' => 'City', 'required' => true, 'autocomplete' => 'address-level2'),
        array('name' => 'state', 'label' => 'State', 'required' => true, 'autocomplete' => 'address-level1'),
        array('name' => 'zip', 'label' => 'ZIP code', 'required' => true, 'autocomplete' => 'postal-code'),
      )),
      array('legend' => 'Your focus', 'fields' => array(
        array('name' => 'specialties', 'label' => 'Specialties', 'type' => 'checkboxes', 'options' => array('Residential', 'Large developments', 'Commercial')),
        array('name' => 'service_area', 'label' => 'Areas of service', 'full' => true, 'placeholder' => 'Cities, counties or regions you serve'),
        array('name' => 'referral', 'label' => 'How did you hear about us?', 'type' => 'select', 'options' => array('Search engine', 'Social media', 'Trade show', 'Referral', 'Sales representative', 'Other')),
      )),
    ),
  ));

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Learn more before you apply',
    'ctas' => array(
      array('label' => 'Dealer Program', 'text' => 'What Premium dealers receive.', 'href' => '/professionals/dealer-program/'),
      array('label' => 'Compare Series', 'text' => 'The five series you would sell.', 'href' => '/series/#compare'),
      array('label' => 'Manufacturing', 'text' => 'How we build in Corona, California.', 'href' => '/capabilities/manufacturing/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
