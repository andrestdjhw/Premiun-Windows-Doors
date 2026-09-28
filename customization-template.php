<?php
/*
 * Template Name: Customization
 *
 * /capabilities/customization/ (link "Custom Sizes & Shapes" del mega menú).
 * Audiencia: propietarios y profesionales.
 * Objetivo: mostrar la personalización como capacidad de manufactura controlada,
 * no como opciones infinitas sin verificar. La disponibilidad varía por modelo.
 * Cada sección vive en template-parts/customization/.
 */

pwd_seo(
  'Custom Windows & Doors | Colors, Glass & Configurations | Premium',
  'Explore custom window and door options including series-specific colors, glass, grids, hardware, frame systems and configurations.',
  '/capabilities/customization/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'Customization',
    'title' => array(
      array('Customization Starts with', 'light'),
      array('the Requirements of the Opening.', 'accent'),
    ),
    'image' => array('1024' => '2026/09/ZENITH_Series.jpg'),
    'buttons' => array(
      array('Explore Products', home_url('/products/'), 'light'),
      array('Compare Series', home_url('/series/#compare'), 'outline-light'),
    ),
  ));

  $sections = array('options', 'fit');

  foreach ($sections as $section) {
    get_template_part('template-parts/customization/' . $section);
  }

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Find the options for your project',
    'ctas' => array(
      array('label' => 'Explore Products', 'text' => 'See the options available for each window and door.', 'href' => '/products/'),
      array('label' => 'Compare Series', 'text' => 'Compare materials, options and performance side by side.', 'href' => '/series/#compare'),
    ),
  ));
  ?>
</main>

<?php get_footer();
