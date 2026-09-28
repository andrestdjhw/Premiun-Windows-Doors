<?php
/*
 * Template Name: Brochures & Literature
 *
 * /resources/brochures/. Audiencia: propietarios, dealers y profesionales.
 * Objetivo: acceso sin fricción a la literatura de producto, con la suscripción de marketing
 * opcional y separada. No pedir dirección/teléfono antes de abrir un brochure, salvo que el
 * cliente decida deliberadamente usarlo como generación de leads.
 * Los brochures son PDFs de la Media Library con tipo de documento "Brochure".
 */

pwd_seo(
  'Window & Door Brochures & Literature | Premium',
  'Download Premium Windows & Doors brochures and product literature for Zenith, Timeless, Serene, Elegance and Aluminum series.',
  '/resources/brochures/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'Brochures & Literature',
    'title' => array(
      array('Product Literature,', 'light'),
      array('Ready When You Need It.', 'accent'),
    ),
    'text' => 'Download current brochures and series literature directly — no form required.',
    'image' => array('1024' => '2026/09/Timeless_Series.jpg'),
    'buttons' => array(
      array('Browse Brochures', '#brochures', 'light'),
      array('Technical Resources', home_url('/resources/technical/'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/brochures/library');
  get_template_part('template-parts/brochures/subscribe');
  ?>
</main>

<?php get_footer();
