<?php
/*
 * Template Name: Dealers & Distributors
 *
 * /professionals/dealers-distributors/. Audiencia: dealers, distribuidores y revendedores.
 * Objetivo: pasar de "conseguir más dealers" a "ganar más participación dentro de las
 * relaciones con los dealers correctos".
 * Cada sección vive en template-parts/dealers/.
 */

pwd_seo(
  'Window & Door Dealer Program | Premium Windows & Doors',
  'Explore Premium’s dealer and distributor program, product portfolio, support resources, iQuote access and California manufacturing capabilities.',
  '/professionals/dealers-distributors/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'Dealers & Distributors',
    'title' => array(
      array('Build a Stronger', 'light'),
      array('Window & Door Offering with Premium.', 'accent'),
    ),
    'image' => array(
      '1536' => '2026/09/DealersDistributors-1536x1024.jpg',
      '2048' => '2026/09/DealersDistributors-2048x1365.jpg',
      '2560' => '2026/09/DealersDistributors-scaled.jpg',
    ),
    'buttons' => array(
      array('Become a Dealer', home_url('/professionals/become-a-dealer/'), 'light'),
      array('iQuote Login', home_url('/iquote/'), 'outline-light'),
    ),
  ));

  $sections = array('intro', 'why', 'relationship', 'tools');

  foreach ($sections as $section) {
    get_template_part('template-parts/dealers/' . $section);
  }

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Grow with Premium',
    'ctas' => array(
      array('label' => 'Become a Dealer', 'text' => 'Apply to join the Premium dealer network.', 'href' => '/professionals/become-a-dealer/'),
      array('label' => 'iQuote Login', 'text' => 'Quote and order for existing dealers.', 'href' => '/iquote/'),
      array('label' => 'Contact Sales', 'text' => 'Talk with our team about the dealer program.', 'href' => '/contact/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
