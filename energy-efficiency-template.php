<?php
/*
 * Template Name: Energy Efficiency
 *
 * /capabilities/energy-efficiency/. Componentes de eficiencia que traen todas las fichas
 * (LoĒ³-366®, argón, spacer Duraseal®, triple pane) y la certificación NFRC.
 * Sin valores de U-factor/SHGC: dependen del producto y se confirman con la etiqueta NFRC de cada unidad.
 */

pwd_seo(
  'Energy-Efficient Windows & Doors | LoĒ³-366 Glass | Premium',
  'Premium windows and doors combine Cardinal LoĒ³-366 glass, argon gas, warm-edge spacers and NFRC-rated performance for year-round comfort and energy savings.',
  '/capabilities/energy-efficiency/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Capabilities', '/capabilities/'), array('Energy Efficiency', '/capabilities/energy-efficiency/')),
    'eyebrow' => 'Energy Efficiency',
    'title' => array(
      array('Year-round comfort,', 'light'),
      array('lower energy costs.', 'accent'),
    ),
    'text' => 'Every Premium window and door is built around a high-performance glass package designed to keep heat where it belongs.',
    'image' => array('1536' => '2026/09/VIZ-Serene-Home-Woods.jpg'),
    'buttons' => array(
      array('Energy Upgrades', home_url('/solutions/energy-upgrades/'), 'light'),
      array('Glass Options', home_url('/capabilities/glass-options/'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/sections', null, array('sections' => array(
    array(
      'type' => 'intro',
      'eyebrow' => 'Standard performance package',
      'lead' => 'Efficiency comes from the whole unit: low-E glass, gas fill, warm-edge spacers and a well-sealed frame working together.',
      'text' => 'These components come standard. Thermal values such as U-factor and SHGC depend on the product, size and glazing selected, and are shown on the NFRC label of each rated unit.',
      'facts' => array('Glass' => 'LoĒ³-366®', 'Gas fill' => 'Argon', 'Spacer' => 'Warm-edge', 'Rating' => 'NFRC'),
    ),
    array(
      'type' => 'cards',
      'eyebrow' => 'How it works',
      'title' => 'Four layers of efficiency',
      'cols' => 4,
      'items' => array(
        array('icon' => 'badge-check', 'title' => 'LoĒ³-366® glass', 'text' => 'Cardinal’s triple-silver low-E coating reflects heat while letting daylight through.'),
        array('icon' => 'layers', 'title' => 'Argon gas', 'text' => 'Argon-filled chambers reduce heat transfer through the glass.'),
        array('icon' => 'shield-check', 'title' => 'Duraseal® spacer', 'text' => 'Warm-edge spacers improve thermal performance at the edge of the glass.'),
        array('icon' => 'award', 'title' => 'Triple Pane option', 'text' => 'A third pane with two low-E surfaces on selected products.'),
      ),
    ),
    array(
      'type' => 'split',
      'eyebrow' => 'NFRC',
      'title' => 'Ratings you can compare',
      'text' => 'The National Fenestration Rating Council provides independent performance ratings for windows, doors and skylights. The NFRC label supports code compliance and lets you compare products on equal terms.',
      'image' => '2024/10/Grazing_Option-Tripple_Pane.jpg',
      'image_alt' => 'Triple pane glazing section',
      'button' => array('Testing & Certifications', '/capabilities/certifications/'),
    ),
  )));

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Plan an energy upgrade',
    'ctas' => array(
      array('label' => 'Energy Upgrades', 'text' => 'Replacing windows for comfort and efficiency.', 'href' => '/solutions/energy-upgrades/'),
      array('label' => 'Technical Resources', 'text' => 'Drawings and documents by product.', 'href' => '/resources/technical/'),
      array('label' => 'Request a Quote', 'text' => 'Share your openings and our team will follow up.', 'href' => '/request-a-quote/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
