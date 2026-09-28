<?php
/*
 * Template Name: Technical Resources
 *
 * /resources/technical/. Audiencia: arquitectos, dealers, GCs, instaladores y compradores técnicos.
 * Objetivo: que dibujos y documentación sean fáciles de buscar, sin fricción de captura de leads
 * (descarga directa, sin formulario).
 * Los documentos son PDFs de la Media Library clasificados con pwd_document_taxonomies().
 */

pwd_seo(
  'Window & Door Technical Drawings & Documents | Premium',
  'Search Premium window and door technical drawings, installation guides, frame details and product documents by series and product.',
  '/resources/technical/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'Technical Resources',
    'title' => array(
      array('Find the Product. Find the Document.', 'light'),
      array('Keep the Project Moving.', 'accent'),
    ),
    'text' => 'Search technical information by series, product type, style, frame condition, or document type. Every document downloads directly — no form required.',
    'image' => array(
      '1536' => '2026/09/ArchitectsSpecifiers-1536x1024.jpg',
      '2048' => '2026/09/ArchitectsSpecifiers-2048x1365.jpg',
      '2560' => '2026/09/ArchitectsSpecifiers-scaled.jpg',
    ),
    'buttons' => array(
      array('Browse Documents', '#documents', 'light'),
    ),
  ));

  get_template_part('template-parts/technical/library');
  ?>
</main>

<?php get_footer();
