<?php
/*
 * Template Name: Dealer Program
 *
 * /professionals/dealer-program/. Qué recibe un dealer de Premium.
 * Beneficios: premiumwindows.com/become-a-vendor/ (revisado 2026-10-03): marketing y co-op,
 * productos de larga duración, soporte de servicio y producción flexible.
 * PENDIENTE (cliente): requisitos, niveles o capacitación del programa, si existen.
 */

pwd_seo(
  'Dealer Program | Sell Premium Windows & Doors',
  'Partner with a California manufacturer: flexible production, marketing and co-op support, service support and iQuote ordering for Premium dealers.',
  '/professionals/dealer-program/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Professionals', '/professionals/'), array('Dealer Program', '/professionals/dealer-program/')),
    'eyebrow' => 'Dealer Program',
    'title' => array(
      array('Grow with a manufacturer', 'light'),
      array('built for the long term.', 'accent'),
    ),
    'text' => 'Premium builds high-quality products for long-term performance, and brings the same reliability to every dealer and distributor we work with.',
    'image' => array('1536' => '2026/09/DealersDistributors-scaled.jpg'),
    'buttons' => array(
      array('Become a Dealer', home_url('/professionals/become-a-dealer/'), 'light'),
      array('iQuote Login', home_url('/iquote/'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/sections', null, array('sections' => array(
    array(
      'type' => 'intro',
      'eyebrow' => 'Why Premium',
      'lead' => 'Flexible production capabilities support both small and large projects, so partners can serve homeowners, builders and developers with one line.',
      'text' => 'Five series in vinyl and aluminum, windows and doors, manufactured in Corona, California, with technical resources, warranty and service infrastructure behind every sale.',
      'image' => '2025/05/prm_hero-Zenith_main-M-838x1024.jpg',
      'image_alt' => 'Zenith Series windows',
    ),
    array(
      'type' => 'cards',
      'eyebrow' => 'Program benefits',
      'title' => 'What dealers receive',
      'cols' => 3,
      'items' => array(
        array('icon' => 'award', 'title' => 'Marketing support', 'text' => 'Coordinated marketing support and co-op opportunities designed to accelerate your business growth.', 'href' => '/professionals/marketing-resources/'),
        array('icon' => 'badge-check', 'title' => 'Customer satisfaction', 'text' => 'Products engineered for long-term performance and durability. Lasting value your customers can rely on.', 'href' => '/series/'),
        array('icon' => 'shield-check', 'title' => 'Service support', 'text' => 'Every project is backed by our dedicated service support team and established technical network.', 'href' => '/service-request/'),
      ),
    ),
    array(
      'type' => 'cards',
      'eyebrow' => 'Dealer tools',
      'title' => 'Everything in one place',
      'cols' => 4,
      'items' => array(
        array('icon' => 'file-badge', 'title' => 'iQuote', 'text' => 'Quote and place orders online.', 'href' => '/iquote/', 'link' => 'Log in'),
        array('icon' => 'file-text', 'title' => 'Technical resources', 'text' => 'Drawings and installation guides.', 'href' => '/resources/technical/'),
        array('icon' => 'layers', 'title' => 'Product literature', 'text' => 'Brochures to share with customers.', 'href' => '/resources/brochures/'),
        array('icon' => 'shield-check', 'title' => 'Warranty', 'text' => 'Current warranty documents.', 'href' => '/warranty/'),
      ),
    ),
  )));

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Ready to partner with Premium?',
    'ctas' => array(
      array('label' => 'Become a Dealer', 'text' => 'Apply to become a Premium distributor.', 'href' => '/professionals/become-a-dealer/'),
      array('label' => 'Dealers & Distributors', 'text' => 'How Premium works with dealers.', 'href' => '/professionals/dealers-distributors/'),
      array('label' => 'Contact Us', 'text' => 'Questions about the program? Talk to our team.', 'href' => '/contact/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
