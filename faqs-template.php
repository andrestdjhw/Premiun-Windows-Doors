<?php
/*
 * Template Name: FAQs
 *
 * /faqs/. Sin brief todavía. Las respuestas usan SOLO información ya confirmada en el sitio
 * (briefs de Home, About, Customization, Resources, Terms). No agregar datos sin confirmar
 * (plazos de entrega, zonas de servicio, instalación, precios).
 * Pendientes para el cliente: ¿Premium vende directo al propietario? ¿Instala? ¿Plazos típicos?
 * ¿Área de servicio?
 *
 * Las respuestas aceptan HTML básico (enlaces). Genera también el schema FAQPage.
 */

$faq_groups = array(
  array(
    'id' => 'products',
    'title' => 'Products',
    'items' => array(
      array(
        'Where are Premium windows and doors manufactured?',
        'Premium Windows &amp; Doors manufactures its products in Corona, California, and has been manufacturing windows and doors since 2001. <a href="/capabilities/manufacturing/">Learn about our manufacturing</a>.',
      ),
      array(
        'What product series does Premium offer?',
        'Premium offers five product series: Zenith, Timeless, Serene, Elegance and Aluminum, across vinyl and aluminum product lines. <a href="/series/#compare">Compare the series</a> to find the right fit for your project.',
      ),
      array(
        'What types of windows and doors are available?',
        'Windows include picture, casement, awning, horizontal sliding, single-hung, double-hung, arch and special shape windows. Doors include sliding patio, French swing, multi-slide and multi-fold doors. Availability varies by series.',
      ),
      array(
        'Are Premium products used in residential, multifamily and commercial projects?',
        'Yes. Premium makes windows and doors for residential replacement and new construction, as well as multifamily and commercial projects. <a href="/solutions/">Explore solutions by project type</a>.',
      ),
    ),
  ),
  array(
    'id' => 'customization',
    'title' => 'Customization',
    'items' => array(
      array(
        'Are Premium windows and doors made to order?',
        'Yes. Premium manufactures made-to-order windows and doors for replacement and new construction.',
      ),
      array(
        'What options can I customize?',
        'Premium offers series- and product-specific options across color, glass, grids, hardware, frame systems, configurations and selected upgrades. Availability varies by model, so exact options should always be confirmed on the product page. <a href="/capabilities/customization/">See customization options</a>.',
      ),
    ),
  ),
  array(
    'id' => 'documents',
    'title' => 'Documents & Certifications',
    'items' => array(
      array(
        'Are Premium products certified?',
        'Premium products carry AAMA and NFRC certifications or labels depending on series, model and configuration. <a href="/resources/technical/?type=certification">Find certification documents</a>.',
      ),
      array(
        'Where can I find technical drawings and installation guides?',
        'Detail drawings, installation guides and other product documents are available in our <a href="/resources/technical/">Technical Resources</a> library, searchable by series, product, style and document type.',
      ),
      array(
        'Do I need to fill out a form to download brochures or documents?',
        'No. Brochures and technical documents download directly. Subscribing to product updates is optional and never required to access product information. <a href="/resources/brochures/">Browse brochures</a>.',
      ),
      array(
        'What if I can’t find the document I need?',
        'If a project requirement isn’t answered by the published documents, <a href="/professionals/request-support/">contact our project-support team</a> and we’ll help you find the right information.',
      ),
    ),
  ),
  array(
    'id' => 'quotes',
    'title' => 'Quotes & Projects',
    'items' => array(
      array(
        'How do I request a quote?',
        'You can <a href="/request-a-quote/">request a quote</a> online. For larger projects, developers and general contractors can <a href="/professionals/developers-general-contractors/#submit-project">submit a project</a> with the scope, location and timeframe.',
      ),
      array(
        'Is a quote a binding offer?',
        'No. Quotes are subject to final measurements, project review, product availability and written confirmation. All sales are governed by the written sales agreement and applicable warranty documents. See our <a href="/terms-and-conditions/">Terms &amp; Conditions</a>.',
      ),
    ),
  ),
  array(
    'id' => 'warranty',
    'title' => 'Warranty & Service',
    'items' => array(
      array(
        'What warranty do Premium products have?',
        'Premium offers a transferable lifetime warranty, subject to current terms and conditions. <a href="/warranty/">Read warranty information</a>.',
      ),
      array(
        'How do I request service for my windows or doors?',
        'Submit a <a href="/service-request/">service request</a> and our team will follow up.',
      ),
      array(
        'Is Premium a BBB Accredited Business?',
        'Yes. Premium Windows &amp; Doors is a BBB Accredited Business with an A+ rating.',
      ),
    ),
  ),
  array(
    'id' => 'dealers',
    'title' => 'Dealers & Professionals',
    'items' => array(
      array(
        'How can I become a Premium dealer?',
        'Visit our <a href="/professionals/dealers-distributors/">Dealers &amp; Distributors</a> page to learn about the dealer program, or <a href="/professionals/become-a-dealer/">apply to become a dealer</a>.',
      ),
      array(
        'What is iQuote?',
        'iQuote is the quoting and ordering tool for Premium dealers. Existing dealers can <a href="/iquote/">log in to iQuote</a>.',
      ),
      array(
        'What resources are available for architects and specifiers?',
        'Architects and specifiers can access technical drawings, frame details, glazing, finishes, hardware, certifications and series comparisons. <a href="/professionals/architects-specifiers/">See resources for architects</a>.',
      ),
    ),
  ),
);

// Convierte las rutas relativas de las respuestas en URLs del sitio.
foreach ($faq_groups as &$group) {
  foreach ($group['items'] as &$item) {
    $item[1] = preg_replace_callback('/href="(\/[^"]*)"/', function ($m) { return 'href="' . esc_url(home_url($m[1])) . '"'; }, $item[1]);
  }
}
unset($group, $item);

pwd_seo(
  'Window & Door FAQs | Premium Windows & Doors',
  'Answers about Premium windows and doors: product series, custom options, certifications, documents, quotes, warranty, service and the dealer program.',
  '/faqs/'
);

// Schema FAQPage para buscadores.
add_action('wp_head', function () use ($faq_groups) {
  $entities = array();
  foreach ($faq_groups as $group) {
    foreach ($group['items'] as $item) {
      $entities[] = array(
        '@type' => 'Question',
        'name' => html_entity_decode($item[0], ENT_QUOTES),
        'acceptedAnswer' => array('@type' => 'Answer', 'text' => html_entity_decode(wp_strip_all_tags($item[1]), ENT_QUOTES)),
      );
    }
  }
  printf(
    '<script type="application/ld+json">%s</script>' . "\n",
    wp_json_encode(array('@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $entities), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
  );
});

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'FAQs',
    'title' => array(
      array('Frequently Asked', 'light'),
      array('Questions.', 'accent'),
    ),
    'text' => 'Answers about our products, custom options, documents, quotes, warranty and working with Premium.',
    'image' => array(
      '1536' => '2026/09/hero_faqs-1536x1024.jpg',
      '2048' => '2026/09/hero_faqs-2048x1365.jpg',
      '2560' => '2026/09/hero_faqs-scaled.jpg',
    ),
  ));

  get_template_part('template-parts/faqs/list', null, array('groups' => $faq_groups));

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Still have a question?',
    'ctas' => array(
      array('label' => 'Contact Us', 'text' => 'Questions about products, ordering or support.', 'href' => '/contact/'),
      array('label' => 'Contact Project Support', 'text' => 'Technical questions for a specific project.', 'href' => '/professionals/request-support/'),
      array('label' => 'Request a Quote', 'text' => 'Share your project and our team will follow up.', 'href' => '/request-a-quote/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
