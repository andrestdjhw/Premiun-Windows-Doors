<?php
/*
 * Template Name: Request a Quote
 *
 * /request-a-quote/ (botón principal del header y CTAs de todo el sitio).
 * Audiencia: propietarios, contratistas, arquitectos y developers. Los dealers cotizan en iQuote (/iquote/).
 * Objetivo: capturar lo necesario para enrutar la cotización (rol, ubicación, productos, alcance y plazo).
 * El formulario usa template-parts/form.php (EmailJS).
 */

pwd_seo(
  'Request a Quote | Premium Windows & Doors',
  'Request a quote for Premium windows and doors. Share your project, products and timeline and our team will connect you with the right next step.',
  '/request-a-quote/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'Request a Quote',
    'title' => array(
      array('Tell us about your openings.', 'light'),
      array('We’ll take it from there.', 'accent'),
    ),
    'text' => 'Share a few project details and our team will follow up with the right next step: a dealer near you, a project quote, or technical support.',
    'image' => array('1536' => '2026/09/Residential-scaled.jpg'),
    'buttons' => array(array('Start Your Request', '#quote', 'light')),
  ));

  $windows = array_column(pwd_product_matrix()['windows'], 'name');
  $doors = array_column(pwd_product_matrix()['doors'], 'name');

  get_template_part('template-parts/form', null, array(
    'id' => 'quote',
    'eyebrow' => 'Quote request',
    'title' => 'Project details',
    'text' => 'The more we know, the faster we can route your request. Fields marked * are required.',
    'points' => array(
      'Homeowners are connected with a Premium dealer in their area.',
      'Contractors, developers and architects are routed to our project team.',
      'Not sure which series fits? Tell us about the project and we’ll recommend options.',
    ),
    'aside' => sprintf(
      '<div class="mt-10 rounded-sm border border-slate-200 bg-slate-50 p-6"><p class="font-semibold text-slate-900">Are you a Premium dealer?</p><p class="mt-2 text-sm leading-relaxed text-slate-600">Quote and place orders directly in iQuote.</p><div class="mt-4">%s</div></div>',
      pwd_arrow_link('iQuote Login', home_url('/iquote/'))
    ),
    'form_name' => 'Request a Quote',
    'template' => 'PWD_EMAILJS_QUOTE_TEMPLATE_ID',
    'success' => 'Thank you. Your quote request was sent and our team will follow up shortly.',
    'submit' => 'Request Quote',
    'groups' => array(
      array('legend' => 'About you', 'fields' => array(
        array('name' => 'name', 'label' => 'Full name', 'required' => true, 'autocomplete' => 'name'),
        array('name' => 'email', 'label' => 'Email', 'type' => 'email', 'required' => true, 'autocomplete' => 'email'),
        array('name' => 'phone', 'label' => 'Phone', 'type' => 'tel', 'autocomplete' => 'tel'),
        array('name' => 'zip', 'label' => 'Project ZIP code', 'required' => true, 'autocomplete' => 'postal-code'),
        array('name' => 'role', 'label' => 'I am a…', 'type' => 'select', 'required' => true, 'options' => array('Homeowner', 'Contractor / Installer', 'Architect / Designer', 'Developer / General Contractor', 'Builder', 'Other')),
        array('name' => 'company', 'label' => 'Company (if applicable)', 'autocomplete' => 'organization'),
      )),
      array('legend' => 'About the project', 'fields' => array(
        array('name' => 'project_type', 'label' => 'Project type', 'type' => 'select', 'required' => true, 'options' => array('Replacement / Retrofit', 'New construction', 'Remodel / Addition', 'Multifamily', 'Commercial', 'Not sure yet')),
        array('name' => 'timeline', 'label' => 'Timeline', 'type' => 'select', 'options' => array('As soon as possible', 'Within 3 months', '3–6 months', '6–12 months', 'Just researching')),
        array('name' => 'openings', 'label' => 'Approximate number of openings', 'type' => 'select', 'options' => array('1–5', '6–15', '16–50', '50+', 'Not sure')),
        array('name' => 'series', 'label' => 'Series of interest', 'type' => 'select', 'options' => array_merge(array_column(pwd_series_data(), 'name'), array('Not sure'))),
        array('name' => 'windows', 'label' => 'Windows', 'type' => 'checkboxes', 'options' => $windows),
        array('name' => 'doors', 'label' => 'Doors', 'type' => 'checkboxes', 'options' => $doors),
        array('name' => 'message', 'label' => 'Anything else we should know?', 'type' => 'textarea', 'placeholder' => 'Sizes, colors, glass requirements, plans or a link to drawings…'),
      )),
    ),
  ));

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Still comparing options?',
    'ctas' => array(
      array('label' => 'Compare Series', 'text' => 'Materials, finishes and performance side by side.', 'href' => '/series/#compare'),
      array('label' => 'Browse Products', 'text' => 'Every window and door style Premium manufactures.', 'href' => '/products/'),
      array('label' => 'Contact Us', 'text' => 'Questions before you request a quote? Talk to our team.', 'href' => '/contact/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
