<?php
// Fichas de producto: una página por estilo + serie (ej. /windows/horizontal-sliding-windows/zenith/)
// con la plantilla product-template.php. Los datos viven en inc/product-data.php y los PDFs
// en la Media Library, clasificados con pwd_document_taxonomies().

require_once get_theme_file_path('/inc/product-data.php');
require_once get_theme_file_path('/inc/product-documents.php');
require_once get_theme_file_path('/inc/gallery-data.php');

// Ficha de la página actual (o de $path, ej. 'windows/picture-windows/zenith'), con datos derivados:
// kind (window|door), noun, path, style_name (ej. "Horizontal Sliding"), style_path y thumbnail.
function pwd_product($path = null) {
  $path = trim($path ?? get_page_uri(get_queried_object_id()), '/');
  $product = pwd_product_data()[$path] ?? null;
  if (!$product) return null;

  $kind = strpos($path, 'doors/') === 0 ? 'door' : 'window';
  $style_path = '/' . dirname($path) . '/';
  $style = array();
  foreach (pwd_product_matrix()[$kind . 's'] as $entry) {
    if ($entry['href'] === $style_path) $style = $entry;
  }

  return array_merge($product, array(
    'kind' => $kind,
    'noun' => $kind === 'door' ? 'Door' : 'Window',
    'path' => '/' . $path . '/',
    'style_name' => $style['name'] ?? '',
    'style_path' => $style_path,
    'thumbnail' => $style['series'][$product['series']] ?? ($product['views'][0][1] ?? ''),
  ));
}

// Otras fichas de la misma serie y tipo (ventanas o puertas), en el orden del menú.
function pwd_product_siblings($product) {
  $siblings = array();
  foreach (array_keys(pwd_product_data()) as $path) {
    $other = pwd_product($path);
    if ($other['series'] === $product['series'] && $other['kind'] === $product['kind'] && $other['path'] !== $product['path']) {
      $siblings[] = $other;
    }
  }
  return $siblings;
}

// PDFs de la ficha (serie + estilo), agrupados por tipo de documento: Installation Guide primero.
function pwd_product_document_groups($product) {
  $query = new WP_Query(array(
    'post_type' => 'attachment',
    'post_status' => 'inherit',
    'post_mime_type' => 'application/pdf',
    'posts_per_page' => -1,
    'no_found_rows' => true,
    'orderby' => 'title',
    'order' => 'ASC',
    'tax_query' => array(
      'relation' => 'AND',
      array('taxonomy' => 'pwd_series', 'field' => 'slug', 'terms' => $product['series']),
      array('taxonomy' => 'pwd_style', 'field' => 'slug', 'terms' => $product['style']),
      array('taxonomy' => 'pwd_doc_type', 'operator' => 'EXISTS'),
    ),
  ));

  $order = array('installation-guide' => 0, 'detail-drawing' => 1);
  $groups = array();
  foreach ($query->posts as $post) {
    $types = wp_get_object_terms($post->ID, 'pwd_doc_type');
    $frames = wp_get_object_terms($post->ID, 'pwd_frame_type', array('fields' => 'names'));
    $type = $types[0];
    $groups[$type->slug] = $groups[$type->slug] ?? array('label' => $type->name, 'docs' => array());
    $groups[$type->slug]['docs'][] = array('id' => $post->ID, 'title' => $post->post_title, 'frame' => $frames[0] ?? '');
  }
  uksort($groups, function ($a, $b) use ($order) { return ($order[$a] ?? 9) - ($order[$b] ?? 9); });

  // Dentro de cada grupo: por configuración (título sin el marco) y luego por marco, de menor a mayor.
  $frames = array('Block', 'Nail-On 1″', 'Nail-On 1-3/8″', 'Retrofit 1-3/4″', 'Retrofit 2″', 'Retrofit 2-1/2″', 'Retrofit 2-3/4″');
  foreach ($groups as &$group) {
    usort($group['docs'], function ($a, $b) use ($frames) {
      $base = strcasecmp(str_replace($a['frame'], '', $a['title']), str_replace($b['frame'], '', $b['title']));
      if ($base) return $base;
      $rank = function ($frame) use ($frames) { $i = array_search($frame, $frames, true); return $i === false ? 99 : $i; };
      return $rank($a['frame']) - $rank($b['frame']);
    });
  }
  unset($group);

  return $groups;
}

// Contenido compartido por todas las fichas (mismo texto e imágenes en el sitio actual).
function pwd_product_frame_text() {
  return array(
    'Block' => 'Suitable for some replacement applications. Block with sloped sill adapter is also available.',
    'Nail-On' => 'Targeted installation in a newly created opening.',
    'Retrofit' => 'Convenient replacement installation with no need to break out stucco.',
  );
}

function pwd_product_glazing() {
  return array(
    'Dual Pane' => array('spec' => 'Glass • LoĒ³', 'image' => '2024/10/Grazing_Option-Duap_Plane.jpg'),
    'Dura Pane' => array('spec' => 'Laminated glass • LoĒ³', 'image' => '2024/10/Grazing_Option-Dura_Plane.jpg'),
    'Triple Pane' => array('spec' => 'LoĒ³ • Glass • LoĒ³', 'image' => '2024/10/Grazing_Option-Tripple_Pane.jpg'),
  );
}

function pwd_product_blinds_views() {
  return array(
    'Open View' => '2025/11/ODL-DIAGRAM-Retracted.jpg',
    'Light Control' => '2025/11/ODL-DIAGRAM-OPEN.jpg',
    'Full Privacy' => '2025/11/ODL-DIAGRAM-CLOSED.jpg',
  );
}

// Cada textura de vidrio fotografiada en tres momentos del día.
function pwd_product_texture_image($texture, $time) {
  $scenes = array('morning' => 'Yard', 'afternoon' => 'Apartment', 'night' => 'City');
  return '2024/10/GT-' . strtoupper(str_replace(' ', '_', $texture)) . '-' . $scenes[$time] . '.jpg';
}

// Muestras de color de marcos, herrajes y persianas.
function pwd_color_swatch($name) {
  $colors = array(
    'White' => '#ffffff',
    'Almond' => '#e8dcc4',
    'Black' => '#1d1d1f',
    'Black Laminated' => '#2b2b2d',
    'Clear Anodized' => '#c8ccd0',
    'Bronze Anodized' => '#5a4636',
    'Espresso' => '#4b3427',
    'Silver Moon' => '#b8bcc0',
    'Slate' => '#6a7178',
    'Tan' => '#c9b28c',
  );
  return $colors[$name] ?? '#cbd5e1';
}

// Todas las imágenes que usan las fichas (rutas de uploads), para importarlas.
function pwd_product_media_files() {
  $files = array_merge(array_values(pwd_product_blinds_views()), array_column(pwd_product_glazing(), 'image'));
  foreach (pwd_product_data() as $product) {
    $files = array_merge($files, array_column($product['views'], 1), array_values($product['frame_details'] ?? array()));
    $files = array_merge($files, array_column($product['hardware'] ?? array(), 'image'), array_column($product['grids'] ?? array(), 'image'));
    foreach ($product['textures'] ?? array() as $texture) {
      foreach (array('morning', 'afternoon', 'night') as $time) $files[] = pwd_product_texture_image($texture, $time);
    }
  }
  $files = array_merge($files, array_column(pwd_product_series_copy(), 'image'));
  return array_values(array_unique(array_filter($files)));
}

// PDFs e imágenes de otras páginas (garantía, contacto, galería) que también trae el importador.
// Mismo formato que pwd_product_documents(). Fuente: premiumwindows.com/warranty/ (revisado 2026-10-03).
function pwd_site_documents() {
  $vinyl = array('zenith', 'timeless', 'serene', 'elegance');
  $all = array('window', 'door');
  return array(
    '2026/09/Premium_Vinyl_Products_Limited_Lifetime_Warranty_FINAL_2026-09-15.pdf' => array(
      'title' => 'Vinyl Products Limited Lifetime Warranty (effective September 15, 2026)', 'type' => 'Warranty', 'series' => $vinyl, 'styles' => array(), 'products' => $all, 'frame' => null,
    ),
    '2026/09/Premium_Aluminum_Products_Limited_Lifetime_Warranty_2026-09-15.pdf' => array(
      'title' => 'Aluminum Products Limited Lifetime Warranty (effective September 15, 2026)', 'type' => 'Warranty', 'series' => array('aluminum'), 'styles' => array(), 'products' => $all, 'frame' => null,
    ),
    '2026/02/Premium-Windows-Lifetime-Warranty-Zenith-Serene-Elegance-Timeless-2025-12-16.pdf' => array(
      'title' => 'Legacy Lifetime Warranty (December 16, 2025 to September 14, 2026)', 'type' => 'Warranty', 'series' => $vinyl, 'styles' => array(), 'products' => $all, 'frame' => null,
    ),
    '2020/05/PremiumWindowsWarranty.pdf' => array(
      'title' => 'Legacy Warranty (purchases before September 30, 2025)', 'type' => 'Warranty', 'series' => array(), 'styles' => array(), 'products' => $all, 'frame' => null,
    ),
  );
}

function pwd_site_media_files() {
  $files = array('2025/10/prm-warranty.jpg', '2026/01/PRM-Location-Image-1.jpg', '2025/05/prm_hero-Zenith_main-M-838x1024.jpg');
  foreach (pwd_gallery_data() as $item) $files[] = $item['image'];
  return $files;
}

// Redirecciones 301 de las fichas del sitio actual (/products/{estilo}/{producto}/).
add_filter('pwd_legacy_redirects', function ($redirects) {
  foreach (pwd_product_data() as $path => $product) $redirects[$product['legacy']] = '/' . $path . '/';
  return $redirects;
});

// wp pwd import-product-docs [--source=<url>]
// Descarga las imágenes y PDFs de las fichas y de pwd_site_documents() a uploads conservando su ruta (así las URLs públicas
// no cambian al migrar) y crea los adjuntos PDF con sus taxonomías. Es idempotente: los archivos
// existentes no se vuelven a descargar y los adjuntos existentes solo reciben los términos que falten.
if (defined('WP_CLI') && WP_CLI) {
  WP_CLI::add_command('pwd import-product-docs', function ($args, $assoc_args) {
    $source = trailingslashit($assoc_args['source'] ?? 'https://premiumwindows.com/wp-content/uploads/');
    $uploads = wp_upload_dir();
    $failed = array();

    $fetch = function ($file) use ($source, $uploads, &$failed) {
      $path = $uploads['basedir'] . '/' . $file;
      if (file_exists($path)) return $path;
      wp_mkdir_p(dirname($path));
      $response = wp_remote_get($source . $file, array('timeout' => 120, 'stream' => true, 'filename' => $path));
      if (is_wp_error($response) || wp_remote_retrieve_response_code($response) !== 200) {
        @unlink($path);
        $failed[] = $file;
        return null;
      }
      return $path;
    };

    $media = array_values(array_unique(array_merge(pwd_product_media_files(), pwd_site_media_files())));
    $progress = WP_CLI\Utils\make_progress_bar('Images', count($media));
    foreach ($media as $file) {
      $fetch($file);
      $progress->tick();
    }
    $progress->finish();

    $documents = array_merge(pwd_product_documents(), pwd_site_documents());
    $created = 0;
    $progress = WP_CLI\Utils\make_progress_bar('PDFs', count($documents));
    foreach ($documents as $file => $doc) {
      $progress->tick();
      $path = $fetch($file);
      if (!$path) continue;

      $existing = get_posts(array(
        'post_type' => 'attachment',
        'post_status' => 'inherit',
        'posts_per_page' => 1,
        'fields' => 'ids',
        'meta_key' => '_wp_attached_file',
        'meta_value' => $file,
      ));
      $id = $existing[0] ?? 0;

      if (!$id) {
        $id = wp_insert_attachment(array(
          'post_title' => $doc['title'],
          'post_mime_type' => 'application/pdf',
          'post_status' => 'inherit',
          'guid' => $uploads['baseurl'] . '/' . $file,
        ), $path, 0, true);
        if (is_wp_error($id)) {
          $failed[] = $file;
          continue;
        }
        wp_update_attachment_metadata($id, array('filesize' => filesize($path)));
        $created++;
      }

      $terms = array(
        'pwd_series' => $doc['series'],
        'pwd_style' => $doc['styles'],
        'pwd_product' => $doc['products'],
        'pwd_doc_type' => array(sanitize_title($doc['type'])),
        'pwd_frame_type' => $doc['frame'] ? array($doc['frame']) : array(),
      );
      foreach ($terms as $taxonomy => $values) {
        $ids = array();
        foreach ($values as $value) {
          $term = get_term_by('slug', sanitize_title($value), $taxonomy);
          if (!$term && $taxonomy === 'pwd_frame_type') {
            $inserted = wp_insert_term($value, $taxonomy);
            $term = is_wp_error($inserted) ? null : get_term($inserted['term_id'], $taxonomy);
          }
          if ($term) $ids[] = (int) $term->term_id;
        }
        if ($ids) wp_set_object_terms($id, $ids, $taxonomy, true);
      }
    }
    $progress->finish();

    WP_CLI::log(sprintf('%d PDFs created, %d already in the Media Library.', $created, count($documents) - $created));
    if ($failed) WP_CLI::warning("Could not download:\n" . implode("\n", $failed));
    else WP_CLI::success('Product images and documents are in place.');
  });
}

// Opciones de una serie juntando todas sus fichas (para Finishes, Glass, Hardware y Specifications).
// Devuelve listas sin duplicados: exterior, interior, glazing, textures, frame_options, frame_depths,
// hardware (nombre => colores), grids (nombre => colores), blinds (bool), styles (nombres de producto).
function pwd_series_options($series) {
  $options = array(
    'exterior' => array(), 'interior' => array(), 'glazing' => array(), 'textures' => array(), 'frame_options' => array(),
    'frame_depths' => array(), 'hardware' => array(), 'grids' => array(), 'blinds' => false, 'styles' => array(),
  );
  foreach (array_keys(pwd_product_data()) as $path) {
    $product = pwd_product($path);
    if ($product['series'] !== $series) continue;
    $options['styles'][] = $product['name'];
    $options['blinds'] = $options['blinds'] || $product['blinds'];
    foreach (array('exterior', 'interior', 'glazing', 'frame_options') as $key) {
      $options[$key] = array_values(array_unique(array_merge($options[$key], $product[$key] ?? array())));
    }
    $options['textures'] = array_values(array_unique(array_merge($options['textures'], $product['textures'] ?? array())));
    if (!empty($product['frame_depth'])) $options['frame_depths'][$product['name']] = $product['frame_depth'];
    foreach (array('hardware', 'grids') as $key) {
      foreach ($product[$key] ?? array() as $item) {
        $options[$key][$item['name']] = array_values(array_unique(array_merge($options[$key][$item['name']] ?? array(), $item['colors'])));
      }
    }
  }
  return $options;
}
