<?php
/*
 * Template Name: Doors
 *
 * /doors/. Audiencia: propietarios, dealers, arquitectos, developers y contratistas.
 * Objetivo: posicionar las puertas como categoría estratégica con valor arquitectónico y de proyecto.
 * Cada sección vive en template-parts/doors/.
 */

pwd_seo(
  'Custom Door Manufacturer in California | Premium Windows & Doors',
  'Explore custom patio, French swing, multi-slide and multi-fold doors for residential, commercial and multifamily projects.',
  '/doors/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'Doors',
    'title' => array(
      array('Door Systems Built Around the Opening,', 'light'),
      array('the Project, and the Experience.', 'accent'),
    ),
    'text' => 'Premium manufactures patio sliding, French swing, multi-slide, and multi-fold door systems across select vinyl and aluminum series. Compare configurations, materials, glazing, hardware, and technical requirements by product.',
    'image' => array('1024' => '2026/09/Aluminum_Series.jpg'),
    'buttons' => array(
      array('Explore Door Styles', '#door-styles', 'light'),
      array('Compare Series', home_url('/series/#compare'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/doors/styles');
  get_template_part('template-parts/doors/why');
  get_template_part('template-parts/series-cards', null, array(
    'text' => 'Choose the series and configuration that fit the project — not only the look. Compare material, frame design, glazing and performance across Premium’s five series.',
  ));
  get_template_part('template-parts/doors/projects');

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Take the next step',
    'ctas' => array(
      array('label' => 'Request a Quote', 'text' => 'Share your openings and our team will follow up.', 'href' => '/request-a-quote/'),
      array('label' => 'Compare Series', 'text' => 'Materials, performance and applications side by side.', 'href' => '/series/#compare'),
      array('label' => 'Door Documents', 'text' => 'Drawings, installation guides and certifications.', 'href' => '/resources/technical/?product=door'),
    ),
  ));
  ?>
</main>

<?php get_footer();
