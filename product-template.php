<?php
/*
 * Template Name: Product Detail
 *
 * /windows/{estilo}/{serie}/ y /doors/{estilo}/{serie}/ (ej. /windows/horizontal-sliding-windows/zenith/).
 * Audiencia: propietarios, arquitectos, dealers e instaladores que ya eligieron estilo y comparan series.
 * Objetivo: ficha técnica del producto (colores, herrajes, marcos, vidrios) y descarga directa de
 * guías de instalación y detail drawings, sin formulario.
 * Los datos salen de pwd_product() según la ruta de la página; la estructura vive en template-parts/product-page.php.
 */

$product = pwd_product();

if ($product) {
  pwd_seo(
    $product['name'] . ' | Premium Windows & Doors',
    sprintf(
      '%s in %s: colors, frame options, glazing, installation guides and detail drawings ready to download.',
      $product['name'],
      strtolower($product['material'])
    ),
    $product['path']
  );
}

get_header(); ?>

<main id="content">
  <?php
  if ($product) {
    get_template_part('template-parts/product-page', null, array('product' => $product));
  } else {
    // Página con esta plantilla pero sin datos en inc/product-data.php.
    get_template_part('template-parts/page-hero', null, array(
      'eyebrow' => 'Products',
      'title' => array(array(get_the_title(), 'light')),
      'buttons' => array(array('Explore Windows', home_url('/windows/'), 'light'), array('Explore Doors', home_url('/doors/'), 'outline-light')),
    ));
  }
  ?>
</main>

<?php get_footer();
