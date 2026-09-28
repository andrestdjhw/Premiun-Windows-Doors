<?php
/*
 * Template Name: Windows
 *
 * /windows/. Audiencia: propietarios, dealers, arquitectos y contratistas.
 * Objetivo: presentar la capacidad de ventanas made-to-order y dirigir por estilo, serie y aplicación.
 * Cada sección vive en template-parts/windows/.
 */

pwd_seo(
  'Custom Window Manufacturer in California | Premium Windows',
  'Explore custom vinyl and aluminum windows for replacement, new construction, commercial and multifamily projects from Premium Windows & Doors.',
  '/windows/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'Windows',
    'title' => array(
      array('Custom Windows for the Way', 'light'),
      array('the Project Needs to Perform.', 'accent'),
    ),
    'text' => 'Premium manufactures made-to-order windows for replacement and new construction across residential, commercial, and multifamily applications. Explore by style, series, material, or performance priority.',
    'image' => array(
      '1536' => '2026/09/Residential-1536x1024.jpg',
      '2048' => '2026/09/Residential-2048x1365.jpg',
      '2560' => '2026/09/Residential-scaled.jpg',
    ),
    'buttons' => array(
      array('Explore by Style', '#window-styles', 'light'),
      array('Compare Series', home_url('/series/#compare'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/windows/styles');
  get_template_part('template-parts/series-cards');
  get_template_part('template-parts/windows/custom');

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Take the next step',
    'ctas' => array(
      array('label' => 'Request a Quote', 'text' => 'Share your openings and our team will follow up.', 'href' => '/request-a-quote/'),
      array('label' => 'Compare Series', 'text' => 'Materials, performance and applications side by side.', 'href' => '/series/#compare'),
      array('label' => 'Window Documents', 'text' => 'Drawings, installation guides and certifications.', 'href' => '/resources/technical/?product=window'),
    ),
  ));
  ?>
</main>

<?php get_footer();
