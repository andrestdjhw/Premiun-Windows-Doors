<?php
/*
 * Template Name: Sound Control
 *
 * /capabilities/sound-control/. Serene como serie enfocada en confort acústico y Dura Pane (laminado).
 * Textos de Serene: premiumwindows.com/core/serene/ (revisado 2026-10-03).
 * PENDIENTE: valores STC/OITC; el sitio actual no publica ratings acústicos.
 */

pwd_seo(
  'Sound-Reducing Windows & Doors | Serene Series | Premium',
  'Reduce outside noise with the acoustic-focused Serene Series and Dura Pane laminated glazing from Premium Windows & Doors.',
  '/capabilities/sound-control/'
);

$serene = array();
foreach (array_keys(pwd_product_data()) as $path) {
  $product = pwd_product($path);
  if ($product['series'] === 'serene') {
    $serene[] = array('title' => $product['name'], 'image' => $product['thumbnail'], 'image_class' => 'aspect-[14/9] w-full bg-white object-contain p-4', 'href' => $product['path'], 'link' => 'View product');
  }
}

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Capabilities', '/capabilities/'), array('Sound Control', '/capabilities/sound-control/')),
    'eyebrow' => 'Sound Control',
    'title' => array(
      array('Quieter rooms', 'light'),
      array('start at the opening.', 'accent'),
    ),
    'text' => 'Windows and doors are the main path for outside noise. Glazing and frame design make the difference.',
    'image' => array('1536' => '2026/09/VIZ-Serene-Home-Woods.jpg'),
    'buttons' => array(
      array('Serene Series', home_url('/series/serene/'), 'light'),
      array('Glass Options', home_url('/capabilities/glass-options/'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/sections', null, array('sections' => array(
    array(
      'type' => 'intro',
      'eyebrow' => 'Serene Series',
      'lead' => 'Engineered with advanced glazing technology, Serene Series™ windows create an acoustic barrier that dramatically reduces outside noise.',
      'text' => 'Serene doors deliver the same focus on thermal and acoustic performance, with even sightlines and versatile design options for homes where quality and peace matter.',
      'image' => '2026/09/Serene_Series.jpg',
      'image_alt' => 'Serene Series windows',
    ),
    array(
      'type' => 'cards',
      'eyebrow' => 'How it works',
      'title' => 'What reduces noise',
      'cols' => 3,
      'items' => array(
        array('icon' => 'layers', 'title' => 'Laminated glass', 'text' => 'Dura Pane glazing adds a laminated pane, which dampens sound vibration through the glass.'),
        array('icon' => 'badge-check', 'title' => 'Insulated glass units', 'text' => 'Multiple panes with an argon-filled chamber separate the room from the outside.'),
        array('icon' => 'shield-check', 'title' => 'Sealed frames', 'text' => 'Weather-sealed glazing and tight operation limit the gaps where sound gets in.'),
      ),
    ),
    array(
      'type' => 'cards',
      'eyebrow' => 'Products',
      'title' => 'Serene windows and doors',
      'cols' => 4,
      'items' => $serene,
    ),
  )));

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Planning for a noisy location?',
    'ctas' => array(
      array('label' => 'Request Support', 'text' => 'Ask our team about acoustic requirements.', 'href' => '/professionals/request-support/'),
      array('label' => 'Serene Series', 'text' => 'The acoustic-focused vinyl series.', 'href' => '/series/serene/'),
      array('label' => 'Request a Quote', 'text' => 'Share your openings and our team will follow up.', 'href' => '/request-a-quote/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
