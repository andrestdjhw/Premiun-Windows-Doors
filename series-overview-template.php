<?php
/*
 * Template Name: Series Overview
 *
 * /series/. Audiencia: todos los que investigan producto.
 * Objetivo: comparar las cinco series por material, intención de diseño, desempeño y aplicación.
 * La tabla comparativa (#compare) también recibe /series/#compare (ver inc/redirects.php).
 * Cada sección vive en template-parts/series/.
 */

pwd_seo(
  'Window & Door Series | Vinyl & Aluminum | Premium',
  'Compare Zenith, Timeless, Serene, Elegance and Aluminum window and door series by material, design, performance and application.',
  '/series/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'Series',
    'title' => array(
      array('Five Series. Different Priorities.', 'light'),
      array('One Manufacturing Standard.', 'accent'),
    ),
    'text' => 'Premium’s product portfolio gives homeowners and professionals multiple paths to the right solution — from performance vinyl and high-value everyday systems to acoustic comfort, traditional proportions, and aluminum architecture.',
    'image' => array('1024' => '2026/09/ZENITH_Series.jpg'),
    'buttons' => array(
      array('Compare the Series', '#compare', 'light'),
      array('Request a Quote', home_url('/request-a-quote/'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/series/positioning');
  get_template_part('template-parts/series/compare');

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Found the right series?',
    'ctas' => array(
      array('label' => 'Explore Windows', 'text' => 'Every window style, with the series that offer it.', 'href' => '/windows/'),
      array('label' => 'Explore Doors', 'text' => 'Every door style, with the series that offer it.', 'href' => '/doors/'),
      array('label' => 'Request a Quote', 'text' => 'Share your project and our team will follow up.', 'href' => '/request-a-quote/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
