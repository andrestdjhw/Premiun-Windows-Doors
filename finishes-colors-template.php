<?php
/*
 * Template Name: Finishes & Colors
 *
 * /capabilities/finishes-colors/. Colores exteriores e interiores por serie y colores de Blinds + Glass.
 * Los colores salen de las fichas (pwd_series_options()); la disponibilidad varía por producto.
 */

pwd_seo(
  'Window & Door Finishes and Colors by Series | Premium',
  'Compare exterior and interior colors for Zenith, Timeless, Serene, Elegance and Aluminum windows and doors, including anodized finishes and Blinds + Glass colors.',
  '/capabilities/finishes-colors/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Capabilities', '/capabilities/'), array('Finishes & Colors', '/capabilities/finishes-colors/')),
    'eyebrow' => 'Finishes & Colors',
    'title' => array(
      array('Color that is built in,', 'light'),
      array('not painted on.', 'accent'),
    ),
    'text' => 'Each series has its own palette, from performance vinyl in modern black to anodized aluminum. Exact availability varies by product.',
    'image' => array('1536' => '2026/09/VIZ-ZENITH-LA-FARMHOUSE-Back-Yard-A.jpg'),
    'buttons' => array(array('Colors by Series', '#colors', 'light')),
  ));

  get_template_part('template-parts/sections', null, array('sections' => array(
    array(
      'type' => 'intro',
      'eyebrow' => 'Finishes',
      'lead' => 'Frame color is part of the material: co-extruded performance vinyl, laminated finishes and 20 mil anodized aluminum are engineered to hold their appearance.',
      'text' => 'Zenith pairs a black exterior and interior with performance vinyl designed for heat and color-fade resistance. Timeless and Serene offer white and almond, with a black laminated exterior on selected products; Elegance is offered in white. Aluminum Series is available in clear and bronze anodized finishes.',
      'note' => 'Availability varies by product and size. Confirm colors on each product page or with your dealer.',
    ),
  )));
  ?>

  <div id="colors" class="scroll-mt-28">
    <?php
    get_template_part('template-parts/series-swatches', null, array(
      'bg' => 'slate',
      'eyebrow' => 'By series',
      'title' => 'Exterior and interior colors',
      'rows' => array('Exterior' => 'exterior', 'Interior' => 'interior'),
    ));
    ?>
  </div>

  <?php
  get_template_part('template-parts/sections', null, array('sections' => array(
    array(
      'type' => 'split',
      'bg' => 'white',
      'eyebrow' => 'Blinds + Glass',
      'title' => 'Five blind colors, sealed between the glass',
      'text' => 'On products with the Blinds + Glass upgrade, cordless blinds are available in Espresso, Silver Moon, Slate, Tan and White, with color-matched components.',
      'image' => '2025/11/ODL-DIAGRAM-OPEN.jpg',
      'image_alt' => 'Blinds + Glass in light-control position',
      'button' => array('Glass Options', '/capabilities/glass-options/#blinds'),
    ),
  )));

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Choose your finish',
    'ctas' => array(
      array('label' => 'Explore Products', 'text' => 'See the colors available on each product page.', 'href' => '/products/'),
      array('label' => 'Hardware & Grids', 'text' => 'Hardware and grid colors by series.', 'href' => '/capabilities/hardware/'),
      array('label' => 'Request a Quote', 'text' => 'Share your openings and preferred finishes.', 'href' => '/request-a-quote/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
