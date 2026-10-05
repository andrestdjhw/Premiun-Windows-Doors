<?php
// Redirecciones 301 desde las URLs del sitio actual (premiumwindows.com) a la nueva estructura.
// Inventario tomado de los sitemaps de premiumwindows.com el 2026-09-28.
// Solo se aplican cuando la URL da 404, así que nunca pisan una página existente.
// URLs que se mantienen iguales (/, /about/, /contact/, /windows/, /doors/, /warranty/, /resources/,
// /resources/brochures/, /blog/ y las entradas del blog) no necesitan redirección.

// Rutas exactas.
function pwd_legacy_redirects() {
  return array(
    // Estilos (el sitio actual los tiene bajo /products/ y /operation/).
    '/products/picture-windows/' => '/windows/picture-windows/',
    '/products/casement-and-awning-windows/' => '/windows/casement-awning-windows/',
    '/products/horizontal-sliding-windows/' => '/windows/horizontal-sliding-windows/',
    '/products/single-hung-windows/' => '/windows/single-hung-windows/',
    '/products/double-hung-windows/' => '/windows/double-hung-windows/',
    '/products/arch-and-special-shape-windows/' => '/windows/arch-special-shape-windows/',
    '/products/arch-and-special-shape/' => '/windows/arch-special-shape-windows/',
    '/operation/arch-special-shape/' => '/windows/arch-special-shape-windows/',
    '/products/french-swing-doors/' => '/doors/french-swing-doors/',
    '/products/patio-sliding-doors/' => '/doors/patio-sliding-doors/',
    '/products/multiple-sliding-doors/' => '/doors/multiple-sliding-doors/',
    '/products/multiple-folding-doors/' => '/doors/multiple-folding-doors/',

    // Series (el sitio actual tiene /core/, /windows/ y /doors/ por serie).
    '/core/' => '/series/',
    '/core/zenith/' => '/series/zenith/',
    '/core/timeless/' => '/series/timeless/',
    '/core/serene/' => '/series/serene/',
    '/core/elegance/' => '/series/elegance/',
    '/core/aluminum/' => '/series/aluminum/',
    '/windows/zenith/' => '/series/zenith/',
    '/windows/timeless/' => '/series/timeless/',
    '/windows/serene/' => '/series/serene/',
    '/windows/elegance/' => '/series/elegance/',
    '/windows/aluminum/' => '/series/aluminum/',
    '/doors/zenith/' => '/series/zenith/',
    '/doors/timeless/' => '/series/timeless/',
    '/doors/serene/' => '/series/serene/',
    '/doors/elegance/' => '/series/elegance/',
    '/doors/aluminum/' => '/series/aluminum/',

    // Comparación de series: la tabla vive en /series/ mientras no exista una página propia.
    '/compare-series/' => '/series/#compare',

    // Recursos y páginas.
    '/resources/certificates/' => '/resources/certifications/',
    '/resources/glass/' => '/capabilities/glass-options/',
    '/resources/service-request/' => '/service-request/',
    '/resources/careers/' => '/about/',
    '/legal/' => '/privacy-policy/',
    '/inspiration/' => '/projects/',
    '/become-a-vendor/' => '/professionals/become-a-dealer/',

    // Landing pages de campañas (confirmar si hay anuncios activos apuntando a ellas).
    '/landing/' => '/',
    '/landing/zenith-general/' => '/series/zenith/',
    '/landing/timeless-general-landing/' => '/series/timeless/',
    '/landing/premium-luxury-landing/' => '/',
    '/landing/premium-value-landing/' => '/',

    // Páginas internas o de prueba del sitio actual.
    '/styleguide/' => '/',
    '/dev/' => '/',
    '/br/' => '/',
    '/resources/service-form-test-page/' => '/service-request/',
  );
}

// Prefijos: cubren las páginas hijas (fichas de producto, galería, categorías del blog).
// Se evalúan después de las rutas exactas; el prefijo más largo gana.
function pwd_legacy_redirect_prefixes() {
  return array(
    '/products/picture-windows/' => '/windows/picture-windows/',
    '/products/casement-and-awning-windows/' => '/windows/casement-awning-windows/',
    '/products/horizontal-sliding-windows/' => '/windows/horizontal-sliding-windows/',
    '/products/single-hung-windows/' => '/windows/single-hung-windows/',
    '/products/double-hung-windows/' => '/windows/double-hung-windows/',
    '/products/arch-and-special-shape-windows/' => '/windows/arch-special-shape-windows/',
    '/products/french-swing-doors/' => '/doors/french-swing-doors/',
    '/products/patio-sliding-doors/' => '/doors/patio-sliding-doors/',
    '/products/multiple-sliding-doors/' => '/doors/multiple-sliding-doors/',
    '/products/multiple-folding-doors/' => '/doors/multiple-folding-doors/',
    '/products/' => '/products/',
    '/archviz/' => '/projects/',
    '/category/' => '/blog/',
    '/author/' => '/blog/',
  );
}

function pwd_legacy_redirect() {
  if (!is_404()) return;

  $path = strtolower(trailingslashit(wp_parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '/'));
  // Otras partes del tema agregan rutas con el filtro (ej. las fichas de producto en inc/products.php).
  $target = apply_filters('pwd_legacy_redirects', pwd_legacy_redirects())[$path] ?? null;

  if (!$target) {
    $prefixes = pwd_legacy_redirect_prefixes();
    uksort($prefixes, function ($a, $b) { return strlen($b) - strlen($a); });
    foreach ($prefixes as $prefix => $destination) {
      if (strpos($path, $prefix) === 0 && $path !== $destination) {
        $target = $destination;
        break;
      }
    }
  }

  if ($target) {
    wp_safe_redirect(home_url($target), 301, 'Premium Windows & Doors');
    exit;
  }
}

// Prioridad 1: antes de redirect_canonical() de WordPress.
add_action('template_redirect', 'pwd_legacy_redirect', 1);

// WordPress "adivina" a dónde mandar un 404 buscando slugs parecidos (ej. /windows/arch/ →
// /professionals/architects-specifiers/). Esas adivinanzas son 301 permanentes y suelen ser
// incorrectas, así que se desactivan: una URL inexistente responde 404.
add_filter('do_redirect_guess_404_permalink', '__return_false');
