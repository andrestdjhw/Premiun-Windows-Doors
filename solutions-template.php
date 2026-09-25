<?php
/*
 * Template Name: Solutions Overview
 *
 * /solutions/. Resumen de todas las soluciones: por mercado (Residential, Multifamily,
 * Commercial) y por tipo de proyecto. Cada sección vive en template-parts/solutions/.
 */

pwd_seo(
  'Window & Door Solutions for Every Project | Premium',
  'Custom window and door solutions for residential, multifamily and commercial projects, from new construction to replacement, manufactured in Corona, California.',
  '/solutions/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'Solutions',
    'title' => array(
      array('Solutions for', 'light'),
      array('Every Kind of Project.', 'accent'),
    ),
    'text' => 'From custom homes to multifamily and commercial buildings — the right product and the right support for each project.',
    'image' => array('1024' => '2026/09/ZENITH_Series.jpg'),
    'buttons' => array(
      array('Request a Quote', home_url('/request-a-quote/'), 'light'),
      array('Compare Series', home_url('/compare-series/'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/solution-cards', null, array(
    'eyebrow' => 'By market',
    'title' => 'Choose your market',
    'text' => 'Each market brings a different buying process. Start with the one that matches your project.',
  ));

  $sections = array('compare', 'project-types', 'cta');

  foreach ($sections as $section) {
    get_template_part('template-parts/solutions/' . $section);
  }
  ?>
</main>

<?php get_footer();
