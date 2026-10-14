<?php
// Búsqueda del sitio (search.php). Las páginas del tema se arman desde plantillas y no tienen contenido
// en la base de datos, así que la búsqueda nativa de WordPress no las encuentra. En su lugar se busca en:
//   - páginas: título y descripción de cada llamada a pwd_seo() en las plantillas *.php del tema
//   - productos: fichas de pwd_product_data()
//   - documentos: PDFs de la Media Library clasificados con pwd_doc_type
//   - artículos: entradas del blog (búsqueda nativa)

// Hubs integrados en About (ver pwd_capabilities_hub_redirect()): no se muestran como resultado.
function pwd_search_excluded_paths() {
  return array('/capabilities/', '/resources/');
}

// Índice de páginas y productos. Se cachea por petición.
function pwd_search_index() {
  static $index = null;
  if ($index !== null) return $index;
  $index = array();

  $sections = array(
    'windows' => 'Products', 'doors' => 'Products', 'series' => 'Products', 'products' => 'Products',
    'solutions' => 'Solutions', 'professionals' => 'Professionals', 'capabilities' => 'Capabilities',
    'resources' => 'Resources', 'warranty' => 'Resources', 'service-request' => 'Resources', 'faqs' => 'Resources',
  );
  $pattern = "/pwd_seo\(\s*'((?:[^'\\\\]|\\\\.)*)'\s*,\s*'((?:[^'\\\\]|\\\\.)*)'(?:\s*,\s*'([^']*)')?\s*\)/";

  foreach (glob(get_theme_file_path('/*.php')) as $file) {
    if (!preg_match($pattern, file_get_contents($file), $m)) continue;
    $path = $m[3] ?? '/';
    if (in_array($path, pwd_search_excluded_paths(), true)) continue;
    $seo_title = stripslashes($m[1]);
    $segment = explode('/', trim($path, '/'))[0];
    // Título visible: el de la página en WordPress ("Patio Sliding Doors"); el título SEO queda como palabras clave.
    $page = $path === '/' ? null : get_page_by_path(trim($path, '/'));
    $title = $path === '/' ? 'Home' : ($page ? $page->post_title : trim(explode('|', $seo_title)[0]));

    $index[] = array(
      'type' => 'page',
      'title' => $title,
      'text' => stripslashes($m[2]),
      'keywords' => $seo_title,
      'url' => home_url($path),
      'path' => $path,
      'label' => $sections[$segment] ?? 'Company',
    );
  }

  foreach (array_keys(pwd_product_data()) as $key) {
    $product = pwd_product($key);
    $series = pwd_series_data()[$product['series']] ?? array('name' => '');
    $index[] = array(
      'type' => 'product',
      'title' => $product['name'],
      'text' => $product['lead'] ?? '',
      'keywords' => implode(' ', array($product['style_name'], $series['name'] . ' Series', $product['material'] ?? '', $product['kind'] . 's')),
      'url' => home_url($product['path']),
      'path' => $product['path'],
      'label' => $series['name'] . ' Series · ' . $product['noun'],
      'image' => $product['thumbnail'],
    );
  }

  return $index;
}

// Palabras de la búsqueda, en minúsculas y sin acentos. Se ignoran las de una letra.
function pwd_search_terms($query) {
  $query = strtolower(remove_accents(wp_strip_all_tags($query)));
  return array_values(array_filter(preg_split('/[^a-z0-9&]+/', $query), function ($word) {
    return strlen($word) > 1;
  }));
}

// ¿Aparece la palabra (o su singular: "doors" → "door") en el texto?
function pwd_search_has($haystack, $term) {
  if (strpos($haystack, $term) !== false) return true;
  return strlen($term) > 3 && substr($term, -1) === 's' && strpos($haystack, substr($term, 0, -1)) !== false;
}

// Texto normalizado para comparar: minúsculas, sin acentos y sin el nombre de la marca
// ("Premium Windows & Doors" aparece en casi todos los títulos y haría que "doors" coincida con todo).
function pwd_search_normalize($text) {
  $text = strtolower(remove_accents(html_entity_decode($text, ENT_QUOTES)));
  return preg_replace('/premium windows (&|and) doors/', ' ', $text);
}

// Resultados de páginas y productos ordenados por relevancia. Todas las palabras deben aparecer;
// si ninguna entrada las tiene todas, se aceptan coincidencias parciales.
function pwd_search_items($query) {
  $terms = pwd_search_terms($query);
  if (!$terms) return array();
  $phrase = implode(' ', $terms);

  $score = function ($item, $require_all) use ($terms, $phrase) {
    $title = pwd_search_normalize($item['title']);
    $body = pwd_search_normalize($item['text'] . ' ' . ($item['keywords'] ?? '') . ' ' . $item['label'] . ' ' . $item['path']);
    $points = trim($title) === $phrase ? 25 : (strpos($title, $phrase) !== false ? 12 : 0);
    $found = 0;
    foreach ($terms as $term) {
      if (pwd_search_has($title, $term)) { $points += 5; $found++; }
      elseif (pwd_search_has($body, $term)) { $points += 1; $found++; }
    }
    if ($require_all ? $found < count($terms) : !$found) return 0;
    // Las páginas generales van antes que las fichas cuando empatan.
    return $points + ($item['type'] === 'page' ? 0.5 : 0);
  };

  foreach (array(true, false) as $require_all) {
    $results = array();
    foreach (pwd_search_index() as $item) {
      $points = $score($item, $require_all);
      if ($points) $results[] = $item + array('score' => $points);
    }
    if ($results) break;
  }

  usort($results, function ($a, $b) { return $b['score'] <=> $a['score']; });
  return $results;
}

// Palabras en singular para la búsqueda nativa de WordPress (LIKE %palabra%): "door" también encuentra "doors".
function pwd_search_wp_terms($query) {
  return implode(' ', array_map(function ($term) {
    return strlen($term) > 3 && substr($term, -1) === 's' ? substr($term, 0, -1) : $term;
  }, pwd_search_terms($query)));
}

// PDFs de la biblioteca técnica: por título y por clasificación (tipo de documento o serie cuyo nombre
// coincide con la búsqueda, ej. "drawing" → Detail Drawing; muchos títulos son códigos como EL-XO-BK-251220).
function pwd_search_documents($query, $limit = 60) {
  $terms = pwd_search_terms($query);
  if (!$terms) return array();
  $base = array(
    'post_type' => 'attachment',
    'post_status' => 'inherit',
    'post_mime_type' => 'application/pdf',
    'posts_per_page' => $limit,
    'no_found_rows' => true,
  );

  $by_title = get_posts($base + array(
    's' => pwd_search_wp_terms($query),
    'tax_query' => array(array('taxonomy' => 'pwd_doc_type', 'operator' => 'EXISTS')),
  ));

  $tax_query = array('relation' => 'OR');
  foreach (array('pwd_doc_type', 'pwd_series') as $taxonomy) {
    $matches = array();
    foreach (get_terms(array('taxonomy' => $taxonomy, 'hide_empty' => true)) as $term) {
      $name = pwd_search_normalize($term->name);
      foreach ($terms as $word) {
        if (pwd_search_has($name, $word)) { $matches[] = $term->term_id; break; }
      }
    }
    if ($matches) $tax_query[] = array('taxonomy' => $taxonomy, 'terms' => $matches);
  }
  $by_term = count($tax_query) > 1 ? get_posts($base + array('tax_query' => $tax_query)) : array();

  $docs = array();
  foreach (array_merge($by_title, $by_term) as $doc) $docs[$doc->ID] = $doc;

  return array_map(function ($doc) {
    $types = wp_get_post_terms($doc->ID, 'pwd_doc_type', array('fields' => 'names'));
    return array(
      'type' => 'document',
      'title' => get_the_title($doc),
      'url' => wp_get_attachment_url($doc->ID),
      'label' => $types && !is_wp_error($types) ? $types[0] : 'Document',
    );
  }, array_slice(array_values($docs), 0, $limit));
}

// Entradas del blog que coinciden con la búsqueda.
function pwd_search_articles($query, $limit = 6) {
  if (!pwd_search_terms($query)) return array();
  $posts = new WP_Query(array('post_type' => 'post', 's' => pwd_search_wp_terms($query), 'posts_per_page' => $limit, 'no_found_rows' => true));

  return array_map(function ($post) {
    return array(
      'type' => 'article',
      'title' => get_the_title($post),
      'text' => wp_trim_words(get_the_excerpt($post), 24),
      'url' => get_permalink($post),
      'label' => get_the_date('', $post),
    );
  }, $posts->posts);
}
