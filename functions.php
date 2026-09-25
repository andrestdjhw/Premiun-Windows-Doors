<?php

function boilerplate_load_assets() {
  wp_enqueue_style('pwd-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap', array(), null);
  $asset = include get_theme_file_path('/build/index.asset.php');
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), $asset['dependencies'], $asset['version'], true);
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'), array(), filemtime(get_theme_file_path('/build/index.css')));
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'boilerplate_add_support');

// Datos que recibe el componente React del Navbar (header.php → #navbar-root).
function pwd_navbar_config() {
  $logo_id = get_theme_mod('custom_logo');

  return array(
    'homeUrl' => home_url('/'),
    'imagesUrl' => get_theme_file_uri('/assets/images/nav/'),
    'uploadsUrl' => wp_upload_dir()['baseurl'] . '/',
    'logoUrl' => $logo_id ? wp_get_attachment_image_url($logo_id, 'full') : '',
    'siteName' => html_entity_decode(get_bloginfo('name'), ENT_QUOTES),
    'quoteUrl' => home_url('/request-a-quote/'),
    'currentLang' => 'en',
    'languages' => array(
      array('code' => 'en', 'label' => 'English', 'href' => home_url('/')),
      array('code' => 'es', 'label' => 'Español', 'href' => home_url('/es/')),
    ),
  );
}

// Datos de contacto de la empresa para las plantillas PHP (páginas legales).
function pwd_contact_info() {
  return array(
    'company' => 'Premium Windows & Doors',
    'email' => 'info@premiunwindows.com',
    'phone' => '800 608 0252',
    'phoneHref' => 'tel:+18006080252',
    'address' => '15 Longitud Way, Corona, CA 92881',
  );
}

// Crea las páginas legales si no existen. Su contenido vive en page-{slug}.php.
function pwd_ensure_legal_pages() {
  if (get_option('pwd_legal_pages_version') === '1') return;

  $pages = array(
    'privacy-policy' => 'Privacy Policy',
    'terms-and-conditions' => 'Terms & Conditions',
  );

  foreach ($pages as $slug => $title) {
    $page = get_page_by_path($slug);

    if (!$page) {
      $page_id = wp_insert_post(array(
        'post_type' => 'page',
        'post_status' => 'publish',
        'post_name' => $slug,
        'post_title' => $title,
      ));
    } else {
      $page_id = $page->ID;
      // WordPress crea por defecto un borrador "Privacy Policy"; lo publicamos.
      if ($page->post_status !== 'publish') {
        wp_update_post(array('ID' => $page_id, 'post_status' => 'publish', 'post_title' => $title));
      }
    }

    if ($slug === 'privacy-policy' && $page_id && !is_wp_error($page_id)) {
      update_option('wp_page_for_privacy_policy', $page_id);
    }
  }

  update_option('pwd_legal_pages_version', '1');
}

add_action('init', 'pwd_ensure_legal_pages');

// URL de un archivo de la Media Library (ej. '2026/09/ZENITH_Series.jpg').
function pwd_upload_url($file) {
  return wp_upload_dir()['baseurl'] . '/' . ltrim($file, '/');
}

// Iconos SVG en línea para las plantillas PHP (mismos trazos que src/components/Navbar/icons.js).
function pwd_icon($name, $class = 'size-4') {
  $paths = array(
    'arrow-right' => '<path d="M5 12h14" /><path d="m12 5 7 7-7 7" />',
    'award' => '<circle cx="12" cy="8" r="6" /><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11" />',
    'shield-check' => '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" /><path d="m9 12 2 2 4-4" />',
    'file-text' => '<path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" /><path d="M14 2v4a2 2 0 0 0 2 2h4" /><path d="M10 9H8M16 13H8M16 17H8" />',
    'factory' => '<path d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z" /><path d="M17 18h1" /><path d="M12 18h1" /><path d="M7 18h1" />',
    'file-badge' => '<path d="M12 22h6a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v3" /><path d="M14 2v4a2 2 0 0 0 2 2h4" /><path d="M5 17a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" /><path d="M7 16.5 8 22l-3-1-3 1 1-5.5" />',
    'layers' => '<path d="M12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z" /><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65" /><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65" />',
    'badge-check' => '<path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z" /><path d="m9 12 2 2 4-4" />',
  );

  if (!isset($paths[$name])) return '';

  return sprintf(
    '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="%s">%s</svg>',
    esc_attr($class),
    $paths[$name]
  );
}

// Imagen con respaldo: si aún no hay foto real, muestra un panel con degradado de marca.
// $eager para la imagen principal de la página (LCP).
function pwd_media($src, $alt, $class = '', $eager = false) {
  if ($src) {
    return sprintf(
      '<img src="%s" alt="%s" %s decoding="async" class="object-cover %s">',
      esc_url($src),
      esc_attr($alt),
      $eager ? 'fetchpriority="high"' : 'loading="lazy"',
      esc_attr($class)
    );
  }

  return sprintf(
    '<div role="img" aria-label="%s" class="bg-linear-to-br from-brand-800 via-brand-700 to-brand-500 %s"></div>',
    esc_attr($alt),
    esc_attr($class)
  );
}

// Crea las páginas que usan una plantilla del tema y les asigna esa plantilla.
// La clave es la ruta de la página; si es anidada (solutions/residential) crea también las páginas padre.
// Home además se asigna como portada (solo si la portada aún muestra entradas).
function pwd_ensure_template_pages() {
  $pages = array(
    'home' => array('title' => 'Home', 'template' => 'home-template.php'),
    'about' => array('title' => 'About', 'template' => 'about-template.php'),
    'solutions' => array('title' => 'Solutions', 'template' => 'solutions-template.php'),
    'solutions/residential' => array('title' => 'Residential Solutions', 'template' => 'residential-template.php'),
    'solutions/multifamily' => array('title' => 'Multifamily Solutions', 'template' => 'multifamily-template.php'),
    'solutions/commercial' => array('title' => 'Commercial Solutions', 'template' => 'commercial-template.php'),
    'solutions/new-construction' => array('title' => 'New Construction', 'template' => 'new-construction-template.php'),
    'solutions/replacement' => array('title' => 'Replacement & Retrofit', 'template' => 'replacement-template.php'),
    'solutions/remodel' => array('title' => 'Remodel & Renovation', 'template' => 'remodel-template.php'),
    'solutions/energy-upgrades' => array('title' => 'Energy Upgrades', 'template' => 'energy-upgrades-template.php'),
  );
  $done = (array) get_option('pwd_template_pages', array());

  foreach ($pages as $path => $page_data) {
    if (in_array($path, $done, true)) continue;

    $page_id = pwd_ensure_page($path, $page_data['title']);
    if (!$page_id) continue;

    // No pisa una plantilla elegida a mano en una página existente.
    $current = get_post_meta($page_id, '_wp_page_template', true);
    if (!$current || $current === 'default') {
      update_post_meta($page_id, '_wp_page_template', $page_data['template']);
    }

    if ($path === 'home' && get_option('show_on_front') !== 'page') {
      update_option('show_on_front', 'page');
      update_option('page_on_front', $page_id);
    }

    $done[] = $path;
  }

  update_option('pwd_template_pages', $done);
}

// Devuelve el ID de la página en $path, creándola (y sus páginas padre) si no existe.
function pwd_ensure_page($path, $title = '') {
  $page = get_page_by_path($path);
  if ($page) return $page->ID;

  $slug = basename($path);
  $parent_path = dirname($path);
  $parent_id = $parent_path === '.' ? 0 : pwd_ensure_page($parent_path, ucwords(str_replace('-', ' ', basename($parent_path))));

  $page_id = wp_insert_post(array(
    'post_type' => 'page',
    'post_status' => 'publish',
    'post_name' => $slug,
    'post_title' => $title ?: ucwords(str_replace('-', ' ', $slug)),
    'post_parent' => $parent_id,
  ));

  return is_wp_error($page_id) ? 0 : $page_id;
}

add_action('init', 'pwd_ensure_template_pages');

// Título y meta description de una plantilla (el tema no usa plugin de SEO).
// Se llama antes de get_header().
function pwd_seo($title, $description, $path = '/') {
  add_filter('pre_get_document_title', function () use ($title) {
    return esc_html($title);
  });

  add_action('wp_head', function () use ($title, $description, $path) {
    printf('<meta name="description" content="%s">' . "\n", esc_attr($description));
    printf('<meta property="og:title" content="%s">' . "\n", esc_attr($title));
    printf('<meta property="og:description" content="%s">' . "\n", esc_attr($description));
    printf('<meta property="og:url" content="%s">' . "\n", esc_url(home_url($path)));
  }, 1);
}

// Botón CTA con la animación btn-sweep. Variantes: primary, outline, light, outline-light (fondos oscuros).
function pwd_button($label, $href, $variant = 'primary', $arrow = true) {
  $variants = array(
    'primary' => 'bg-brand-800 text-white shadow-sm',
    'outline' => 'border border-brand-800 text-brand-800 [--sweep-color:var(--color-brand-800)] hover:text-white',
    'light' => 'bg-white text-brand-900 [--sweep-color:var(--color-brand-600)] hover:text-white',
    'outline-light' => 'border border-white/40 text-white [--sweep-color:white] hover:border-white hover:text-brand-950',
  );

  return sprintf(
    '<a href="%s" class="btn-sweep group inline-flex justify-center rounded-sm px-6 py-3.5 text-[15px] font-medium transition-colors duration-300 %s"><span class="inline-flex items-center gap-2">%s%s</span></a>',
    esc_url($href),
    $variants[$variant],
    esc_html($label),
    $arrow ? pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1') : ''
  );
}

// Enlace de texto con flecha.
function pwd_arrow_link($label, $href, $class = 'text-brand-700 hover:text-brand-900') {
  return sprintf(
    '<a href="%s" class="group inline-flex items-center gap-2 font-medium transition-colors %s">%s%s</a>',
    esc_url($href),
    esc_attr($class),
    esc_html($label),
    pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1')
  );
}

// Atributos del efecto reveal; $index escalona la entrada de elementos en una lista.
function pwd_reveal($index = 0, $step = 100) {
  $delay = (int) $index * $step;
  return $delay ? sprintf('data-reveal style="--reveal-delay: %dms"', $delay) : 'data-reveal';
}
