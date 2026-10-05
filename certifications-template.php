<?php
/*
 * Template Name: Certifications
 *
 * /resources/certifications/. Documentos de certificación de la Media Library (pwd_doc_type = certification)
 * con descarga directa. Si aún no hay documentos, muestra el estado vacío con contacto.
 * La explicación de cada estándar vive en /capabilities/certifications/.
 */

pwd_seo(
  'Certification Documents | AAMA, NFRC & ASTM | Premium Windows & Doors',
  'Download certification documents for Premium windows and doors and learn how AAMA, NFRC and ASTM references support code compliance.',
  '/resources/certifications/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Resources', '/resources/'), array('Certifications', '/resources/certifications/')),
    'eyebrow' => 'Certifications',
    'title' => array(
      array('Certification documents,', 'light'),
      array('ready to download.', 'accent'),
    ),
    'text' => 'Certification documents for Premium products download directly, no form required.',
    'image' => array('1536' => '2026/09/ArchitectsSpecifiers-scaled.jpg'),
    'buttons' => array(
      array('Documents', '#documents', 'light'),
      array('About the Standards', home_url('/capabilities/certifications/'), 'outline-light'),
    ),
  ));

  get_template_part('template-parts/sections', null, array('sections' => array(
    array(
      'type' => 'documents',
      'id' => 'documents',
      'eyebrow' => 'Downloads',
      'title' => 'Certification documents',
      'query' => array('pwd_doc_type' => 'certification'),
      'empty' => 'Certification documents are being added.',
    ),
    array(
      'type' => 'cards',
      'eyebrow' => 'Standards',
      'title' => 'What Premium products reference',
      'cols' => 3,
      'items' => array(
        array('icon' => 'award', 'title' => 'AAMA', 'text' => 'Performance standards for residential and commercial windows and doors.', 'href' => '/capabilities/certifications/'),
        array('icon' => 'badge-check', 'title' => 'NFRC', 'text' => 'Independent energy-performance ratings that support code compliance.', 'href' => '/capabilities/certifications/'),
        array('icon' => 'file-text', 'title' => 'ASTM', 'text' => 'Test methods for air, water and structural performance.', 'href' => '/capabilities/certifications/'),
      ),
    ),
  )));

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'More technical documents',
    'ctas' => array(
      array('label' => 'Technical Resources', 'text' => 'Detail drawings and installation guides.', 'href' => '/resources/technical/'),
      array('label' => 'Warranty', 'text' => 'Current and legacy warranty documents.', 'href' => '/warranty/'),
      array('label' => 'Request Support', 'text' => 'Ask for project-specific performance data.', 'href' => '/professionals/request-support/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
