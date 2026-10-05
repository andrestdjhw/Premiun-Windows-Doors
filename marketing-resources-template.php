<?php
/*
 * Template Name: Marketing Resources
 *
 * /professionals/marketing-resources/. Material de venta para dealers que ya existe en el sitio
 * (brochures, galería de renders, fichas y documentos) y solicitud de material adicional / co-op.
 * PENDIENTE (cliente): kit de logos, fotografía descargable y reglas de co-op, si se van a publicar.
 */

pwd_seo(
  'Marketing Resources for Dealers | Premium Windows & Doors',
  'Brochures, product imagery, technical documents and co-op marketing support for Premium Windows & Doors dealers and distributors.',
  '/professionals/marketing-resources/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Professionals', '/professionals/'), array('Marketing Resources', '/professionals/marketing-resources/')),
    'eyebrow' => 'Marketing Resources',
    'title' => array(
      array('Sell Premium with', 'light'),
      array('materials that work.', 'accent'),
    ),
    'text' => 'Literature, imagery and product information to help your customers choose with confidence.',
    'image' => array('1536' => '2026/09/VIZ-Timeless-Home-Basic-Back.jpg'),
    'buttons' => array(array('Request Materials', '#materials', 'light')),
  ));

  get_template_part('template-parts/sections', null, array('sections' => array(
    array(
      'type' => 'cards',
      'eyebrow' => 'Available now',
      'title' => 'Share these with your customers',
      'cols' => 4,
      'items' => array(
        array('icon' => 'layers', 'title' => 'Brochures', 'text' => 'Series literature to share with customers.', 'href' => '/resources/brochures/'),
        array('icon' => 'file-badge', 'title' => 'Inspiration gallery', 'text' => 'Product renders by series and style.', 'href' => '/projects/'),
        array('icon' => 'file-text', 'title' => 'Product catalog', 'text' => 'Every product with its key specifications.', 'href' => '/resources/product-catalog/'),
        array('icon' => 'shield-check', 'title' => 'Warranty documents', 'text' => 'Give customers the warranty up front.', 'href' => '/warranty/'),
      ),
    ),
  )));

  get_template_part('template-parts/form', null, array(
    'id' => 'materials',
    'eyebrow' => 'Dealers only',
    'title' => 'Request marketing support',
    'text' => 'Need logos, photography, showroom displays or co-op support? Tell us what you need.',
    'points' => array('Logos and brand assets', 'Product photography', 'Co-op marketing opportunities', 'Printed literature'),
    'form_name' => 'Marketing Resources Request',
    'template' => 'PWD_EMAILJS_DEALER_TEMPLATE_ID',
    'success' => 'Thank you. Your request was sent to our marketing team.',
    'submit' => 'Send Request',
    'groups' => array(
      array('fields' => array(
        array('name' => 'name', 'label' => 'Your name', 'required' => true, 'autocomplete' => 'name'),
        array('name' => 'business', 'label' => 'Dealer / business name', 'required' => true, 'autocomplete' => 'organization'),
        array('name' => 'email', 'label' => 'Email', 'type' => 'email', 'required' => true, 'autocomplete' => 'email'),
        array('name' => 'phone', 'label' => 'Phone', 'type' => 'tel', 'autocomplete' => 'tel'),
        array('name' => 'materials', 'label' => 'What do you need?', 'type' => 'checkboxes', 'options' => array('Logos', 'Photography', 'Printed brochures', 'Showroom display', 'Co-op marketing', 'Other')),
        array('name' => 'message', 'label' => 'Details', 'type' => 'textarea'),
      )),
    ),
  ));

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'More for dealers',
    'ctas' => array(
      array('label' => 'iQuote Login', 'text' => 'Quote and place orders online.', 'href' => '/iquote/'),
      array('label' => 'Dealer Program', 'text' => 'What Premium dealers receive.', 'href' => '/professionals/dealer-program/'),
      array('label' => 'Technical Resources', 'text' => 'Drawings and installation guides.', 'href' => '/resources/technical/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
