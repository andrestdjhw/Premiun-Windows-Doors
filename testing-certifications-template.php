<?php
/*
 * Template Name: Testing & Certifications
 *
 * /capabilities/certifications/. Qué significan AAMA, NFRC y ASTM para el producto.
 * Textos de AAMA/NFRC: premiumwindows.com/resources/certificates/ (revisado 2026-10-03).
 * Los documentos de certificación viven en /resources/certifications/.
 */

pwd_seo(
  'Testing & Certifications | AAMA, NFRC & ASTM | Premium Windows & Doors',
  'Premium windows and doors reference AAMA, NFRC and ASTM standards for structural, water, air and energy performance. Learn what each certification means.',
  '/capabilities/certifications/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Capabilities', '/capabilities/'), array('Testing & Certifications', '/capabilities/certifications/')),
    'eyebrow' => 'Testing & Certifications',
    'title' => array(
      array('Performance measured', 'light'),
      array('against industry standards.', 'accent'),
    ),
    'text' => 'Premium products reference AAMA, NFRC and ASTM standards where applicable, so architects, inspectors and homeowners can compare them with confidence.',
    'image' => array('1536' => '2026/09/ArchitectsSpecifiers-scaled.jpg'),
    'buttons' => array(array('Certification Documents', home_url('/resources/certifications/'), 'light')),
  ));

  get_template_part('template-parts/sections', null, array('sections' => array(
    array(
      'type' => 'cards',
      'eyebrow' => 'Standards',
      'title' => 'What each certification means',
      'cols' => 3,
      'items' => array(
        array('icon' => 'award', 'title' => 'AAMA', 'meta' => 'Structural, water & air', 'text' => 'The American Architectural Manufacturers Association label shows that a product meets rigorous performance standards for residential and commercial applications.'),
        array('icon' => 'badge-check', 'title' => 'NFRC', 'meta' => 'Energy performance', 'text' => 'The National Fenestration Rating Council provides independent energy ratings for windows, doors and skylights, supporting code compliance.'),
        array('icon' => 'file-text', 'title' => 'ASTM', 'meta' => 'Test methods', 'text' => 'ASTM International publishes the test methods used to measure how windows and doors perform under air, water and structural loads.'),
      ),
    ),
    array(
      'type' => 'checklist',
      'bg' => 'dark',
      'eyebrow' => 'Where to find it',
      'title' => 'Certification on every product page',
      'text' => 'Each product page lists the standards it references. Ratings vary by product, size and configuration.',
      'items' => array('Certifications listed per product', 'NFRC label on rated units', 'Detail drawings by frame type', 'Installation guides by style'),
    ),
  )));

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Need performance data for a project?',
    'ctas' => array(
      array('label' => 'Certification Documents', 'text' => 'Download available certification documents.', 'href' => '/resources/certifications/'),
      array('label' => 'Request Support', 'text' => 'Ask our team for project-specific ratings.', 'href' => '/professionals/request-support/'),
      array('label' => 'Technical Resources', 'text' => 'Detail drawings and installation guides.', 'href' => '/resources/technical/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
