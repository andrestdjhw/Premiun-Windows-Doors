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
    'email' => 'info@premiumwindows.com',
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
    'windows' => array('title' => 'Windows', 'template' => 'windows-template.php'),
    'doors' => array('title' => 'Doors', 'template' => 'doors-template.php'),
    'series' => array('title' => 'Series', 'template' => 'series-overview-template.php'),
    'series/zenith' => array('title' => 'Zenith Series', 'template' => 'zenith-series-template.php'),
    'series/timeless' => array('title' => 'Timeless Series', 'template' => 'timeless-series-template.php'),
    'series/serene' => array('title' => 'Serene Series', 'template' => 'serene-series-template.php'),
    'series/elegance' => array('title' => 'Elegance Series', 'template' => 'elegance-series-template.php'),
    'series/aluminum' => array('title' => 'Aluminum Series', 'template' => 'aluminum-series-template.php'),
    'doors/patio-sliding-doors' => array('title' => 'Patio Sliding Doors', 'template' => 'patio-sliding-template.php'),
    'doors/french-swing-doors' => array('title' => 'French Swing Doors', 'template' => 'french-swing-template.php'),
    'doors/multiple-sliding-doors' => array('title' => 'Multiple Sliding Doors', 'template' => 'multi-slide-template.php'),
    'doors/multiple-folding-doors' => array('title' => 'Multiple Folding Doors', 'template' => 'multifolding-doors-template.php'),
    'windows/picture-windows' => array('title' => 'Picture Windows', 'template' => 'picture-windows-template.php'),
    'windows/casement-awning-windows' => array('title' => 'Casement & Awning Windows', 'template' => 'casement-awning-template.php'),
    'windows/horizontal-sliding-windows' => array('title' => 'Horizontal Sliding Windows', 'template' => 'horizontal-sliding-template.php'),
    'windows/single-hung-windows' => array('title' => 'Single Hung Windows', 'template' => 'single-hung-template.php'),
    'windows/double-hung-windows' => array('title' => 'Double Hung Windows', 'template' => 'double-hung-template.php'),
    'windows/arch-special-shape-windows' => array('title' => 'Arch & Special Shape Windows', 'template' => 'arch-special-shape-template.php'),
    'solutions/residential' => array('title' => 'Residential Solutions', 'template' => 'residential-template.php'),
    'solutions/multifamily' => array('title' => 'Multifamily Solutions', 'template' => 'multifamily-template.php'),
    'solutions/commercial' => array('title' => 'Commercial Solutions', 'template' => 'commercial-template.php'),
    'solutions/new-construction' => array('title' => 'New Construction', 'template' => 'new-construction-template.php'),
    'solutions/replacement' => array('title' => 'Replacement & Retrofit', 'template' => 'replacement-template.php'),
    'solutions/remodel' => array('title' => 'Remodel & Renovation', 'template' => 'remodel-template.php'),
    'solutions/energy-upgrades' => array('title' => 'Energy Upgrades', 'template' => 'energy-upgrades-template.php'),
    'professionals/architects-specifiers' => array('title' => 'Architects & Specifiers', 'template' => 'architects-specifiers-template.php'),
    'professionals/developers-general-contractors' => array('title' => 'Developers & General Contractors', 'template' => 'developers-contractors-template.php'),
    'professionals/dealers-distributors' => array('title' => 'Dealers & Distributors', 'template' => 'dealer-distributors-template.php'),
    'capabilities/manufacturing' => array('title' => 'Manufacturing', 'template' => 'manufacturing-template.php'),
    'capabilities/customization' => array('title' => 'Customization', 'template' => 'customization-template.php'),
    'resources' => array('title' => 'Resources', 'template' => 'resources-template.php'),
    'resources/technical' => array('title' => 'Technical Resources', 'template' => 'technical-resources-template.php'),
    'resources/brochures' => array('title' => 'Brochures & Literature', 'template' => 'brochure-template.php'),
    'faqs' => array('title' => 'FAQs', 'template' => 'faqs-template.php'),
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

// Atributos de un formulario enviado con EmailJS (src/scripts/forms.js).
// Las credenciales se definen en wp-config.php (no se versionan con el tema):
//   define('PWD_EMAILJS_PUBLIC_KEY', '...');
//   define('PWD_EMAILJS_SERVICE_ID', '...');
//   define('PWD_EMAILJS_PROJECT_TEMPLATE_ID', '...');   // formulario de proyecto (Developers & GCs)
//   define('PWD_EMAILJS_NEWSLETTER_TEMPLATE_ID', '...'); // suscripción opcional (Brochures)
// Sin credenciales, el formulario se muestra pero avisa que no está configurado.
function pwd_emailjs_attrs($template_constant, $form_name, $success_message = '') {
  $attrs = array(
    'data-emailjs-form' => $form_name,
    'data-success-message' => $success_message,
    'data-public-key' => defined('PWD_EMAILJS_PUBLIC_KEY') ? PWD_EMAILJS_PUBLIC_KEY : '',
    'data-service-id' => defined('PWD_EMAILJS_SERVICE_ID') ? PWD_EMAILJS_SERVICE_ID : '',
    'data-template-id' => defined($template_constant) ? constant($template_constant) : '',
    'data-fallback-email' => pwd_contact_info()['email'],
  );

  return implode(' ', array_map(function ($key, $value) {
    return sprintf('%s="%s"', $key, esc_attr($value));
  }, array_keys($attrs), $attrs));
}

// Biblioteca técnica (/resources/technical/): los PDFs se suben a la Media Library y se clasifican
// con estas taxonomías (Medios → editar archivo → "Editar más detalles"). Solo se listan los PDFs
// que tienen un tipo de documento asignado. Así se conservan los nombres de archivo y sus URLs.
function pwd_document_taxonomies() {
  return array(
    'pwd_series' => array('label' => 'Series', 'param' => 'series', 'terms' => array('Zenith', 'Timeless', 'Serene', 'Elegance', 'Aluminum')),
    'pwd_product' => array('label' => 'Product', 'param' => 'product', 'terms' => array('Window', 'Door')),
    'pwd_style' => array('label' => 'Style / operation', 'param' => 'style', 'terms' => array(
      'Picture', 'Casement & Awning', 'Horizontal Sliding', 'Single-Hung', 'Double-Hung', 'Arch & Special Shape',
      'Patio Sliding', 'French Swing', 'Multi-Slide', 'Multi-Fold',
    )),
    'pwd_doc_type' => array('label' => 'Document type', 'param' => 'type', 'terms' => array(
      'Detail Drawing', 'Installation Guide', 'Certification', 'Performance', 'Warranty', 'Brochure',
    )),
    // Tipos de marco "where applicable": sin términos por defecto, se agregan desde el admin.
    'pwd_frame_type' => array('label' => 'Frame type', 'param' => 'frame', 'terms' => array()),
  );
}

function pwd_register_document_taxonomies() {
  foreach (pwd_document_taxonomies() as $taxonomy => $config) {
    register_taxonomy($taxonomy, 'attachment', array(
      'label' => $config['label'],
      'hierarchical' => true,
      'public' => false,
      'show_ui' => true,
      'show_admin_column' => true,
      'show_in_rest' => true,
      'query_var' => false,
      'rewrite' => false,
      'update_count_callback' => '_update_generic_term_count',
    ));
  }

  $version = get_option('pwd_document_terms_version');
  if ($version === '5') return;

  // v2: "Specialty & Shape" se separa en "Arch" y "Special Shape".
  $old = get_term_by('slug', 'specialty-shape', 'pwd_style');
  if ($old) wp_update_term($old->term_id, 'pwd_style', array('name' => 'Arch', 'slug' => 'arch'));

  // v3: "Casement" y "Awning" se unen en "Casement & Awning" (los documentos de Awning pasan al nuevo término).
  $casement = get_term_by('slug', 'casement', 'pwd_style');
  if ($casement) wp_update_term($casement->term_id, 'pwd_style', array('name' => 'Casement & Awning', 'slug' => 'casement-awning'));
  $awning = get_term_by('slug', 'awning', 'pwd_style');
  $merged = get_term_by('slug', 'casement-awning', 'pwd_style');
  if ($awning && $merged) {
    foreach (get_objects_in_term($awning->term_id, 'pwd_style') as $object_id) {
      wp_add_object_terms((int) $object_id, $merged->term_id, 'pwd_style');
    }
    wp_delete_term($awning->term_id, 'pwd_style');
  }

  // v5: "Sliding Patio" pasa a "Patio Sliding" (nombre del brief y del sitio actual).
  $patio = get_term_by('slug', 'sliding-patio', 'pwd_style');
  if ($patio) wp_update_term($patio->term_id, 'pwd_style', array('name' => 'Patio Sliding', 'slug' => 'patio-sliding'));

  // v4: "Arch" y "Special Shape" se unen en "Arch & Special Shape".
  $arch = get_term_by('slug', 'arch', 'pwd_style');
  if ($arch) wp_update_term($arch->term_id, 'pwd_style', array('name' => 'Arch & Special Shape', 'slug' => 'arch-special-shape'));
  $special = get_term_by('slug', 'special-shape', 'pwd_style');
  $arch_merged = get_term_by('slug', 'arch-special-shape', 'pwd_style');
  if ($special && $arch_merged) {
    foreach (get_objects_in_term($special->term_id, 'pwd_style') as $object_id) {
      wp_add_object_terms((int) $object_id, $arch_merged->term_id, 'pwd_style');
    }
    wp_delete_term($special->term_id, 'pwd_style');
  }

  foreach (pwd_document_taxonomies() as $taxonomy => $config) {
    foreach ($config['terms'] as $term) {
      if (!term_exists($term, $taxonomy)) wp_insert_term($term, $taxonomy);
    }
  }

  update_option('pwd_document_terms_version', '5');
}

add_action('init', 'pwd_register_document_taxonomies', 5);

// Botón de descarga directa de un PDF de la Media Library (sin formulario).
function pwd_download_button($attachment_id, $label = 'PDF', $class = '') {
  $file = get_attached_file($attachment_id);
  $size = $file && file_exists($file) ? size_format(filesize($file)) : '';

  return sprintf(
    '<a href="%s" target="_blank" rel="noopener" class="inline-flex shrink-0 items-center justify-center gap-2 rounded-sm border border-brand-800 px-4 py-2.5 text-sm font-medium text-brand-800 transition-colors hover:bg-brand-800 hover:text-white %s">%s%s<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true" class="size-4"><path d="M12 15V3" /><path d="m7 10 5 5 5-5" /><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" /></svg></a>',
    esc_url(wp_get_attachment_url($attachment_id)),
    esc_attr($class),
    esc_html($label),
    $size ? ' &middot; ' . esc_html($size) : ''
  );
}

// Esquema de elevación de un tipo de ventana (SVG de líneas, estilo plano arquitectónico).
// Las líneas en V apuntan al lado de la bisagra; las flechas indican la hoja que se desliza.
function pwd_window_diagram($type, $class = 'h-24 w-auto') {
  $frame = '<rect x="4" y="4" width="72" height="92" rx="1" />';
  $shapes = array(
    'picture' => $frame . '<rect x="11" y="11" width="58" height="78" />',
    'casement' => $frame . '<rect x="11" y="11" width="58" height="78" /><path d="M69 11 11 50l58 39" stroke-dasharray="4 3" />',
    'awning' => $frame . '<rect x="11" y="11" width="58" height="78" /><path d="M11 89 40 11l29 78" stroke-dasharray="4 3" />',
    'horizontal-sliding' => $frame . '<path d="M40 4v92" /><rect x="10" y="10" width="26" height="80" /><rect x="44" y="10" width="26" height="80" /><path d="M16 50h14m-4-4 4 4-4 4" />',
    'single-hung' => $frame . '<path d="M4 50h72" /><rect x="10" y="10" width="60" height="36" /><rect x="10" y="54" width="60" height="36" /><path d="M40 84V62m-4 4 4-4 4 4" />',
    'double-hung' => $frame . '<path d="M4 50h72" /><rect x="10" y="10" width="60" height="36" /><rect x="10" y="54" width="60" height="36" /><path d="M40 84V62m-4 4 4-4 4 4" /><path d="M40 16v22m-4-4 4 4 4-4" />',
    'arch' => '<path d="M4 96V40a36 36 0 0 1 72 0v56Z" /><path d="M11 89V41a29 29 0 0 1 58 0v48Z" /><path d="M11 41h58" />',
    'special-shape' => '<path d="M4 96V40L76 8v88Z" /><path d="M11 89V44.5L69 19v70Z" />',
  );

  if (!isset($shapes[$type])) return '';

  return sprintf(
    '<svg viewBox="0 0 80 100" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" stroke-linecap="round" aria-hidden="true" class="%s">%s</svg>',
    esc_attr($class),
    $shapes[$type]
  );
}

// Redirecciones 301 desde las URLs del sitio actual.
require_once get_theme_file_path('/inc/redirects.php');

// Esquema de elevación de un tipo de puerta (mismo estilo que pwd_window_diagram()).
// Líneas en V: hoja abatible (el vértice apunta a la bisagra). Flechas: hoja corrediza.
function pwd_door_diagram($type, $class = 'h-24 w-auto') {
  $frame = '<rect x="4" y="4" width="112" height="92" rx="1" />';
  $shapes = array(
    'patio-sliding' => $frame . '<path d="M60 4v92" /><rect x="10" y="10" width="46" height="80" /><rect x="64" y="10" width="46" height="80" /><path d="M22 50h22m-4-4 4 4-4 4" />',
    'french-swing' => $frame . '<path d="M60 4v92" /><rect x="10" y="10" width="46" height="80" /><rect x="64" y="10" width="46" height="80" /><path d="M56 10 10 50l46 40M64 10l46 40-46 40" stroke-dasharray="4 3" />',
    'multi-slide' => $frame . '<path d="M32 4v92M60 4v92M88 4v92" /><rect x="9" y="10" width="19" height="80" /><rect x="36" y="10" width="20" height="80" /><rect x="64" y="10" width="20" height="80" /><rect x="92" y="10" width="19" height="80" /><path d="M40 50h12m-4-4 4 4-4 4M68 50h12m-4-4 4 4-4 4M96 50h11m-4-4 4 4-4 4" />',
    'multi-fold' => $frame . '<path d="M32 4v92M60 4v92M88 4v92" /><rect x="9" y="10" width="19" height="80" /><rect x="36" y="10" width="20" height="80" /><rect x="64" y="10" width="20" height="80" /><rect x="92" y="10" width="19" height="80" /><path d="M9 90 28 50 9 10M56 90 36 50l20-40M64 90l20-40-20-40M111 90 92 50l19-40" stroke-dasharray="4 3" />',
  );

  if (!isset($shapes[$type])) return '';

  return sprintf(
    '<svg viewBox="0 0 120 100" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" stroke-linecap="round" aria-hidden="true" class="%s">%s</svg>',
    esc_attr($class),
    $shapes[$type]
  );
}

// Las cinco series y qué estilos ofrece cada una.
// Fuente provisional: productos publicados en premiumwindows.com (revisado 2026-09-28;
// "Infinite Series" = Elegance). PENDIENTE: confirmar con la matriz de producto oficial del cliente.
function pwd_series_data() {
  return array(
    'zenith' => array('name' => 'Zenith', 'tagline' => 'Versatility Redefined', 'material' => 'Performance Vinyl', 'image' => '2026/09/ZENITH_Series-768x512.jpg'),
    'timeless' => array('name' => 'Timeless', 'tagline' => 'Classic Performance', 'material' => 'Vinyl', 'image' => '2026/09/Timeless_Series-768x512.jpg'),
    'serene' => array('name' => 'Serene', 'tagline' => 'Modern Comfort', 'material' => 'Vinyl', 'image' => '2026/09/Serene_Series-768x512.jpg'),
    'elegance' => array('name' => 'Elegance', 'tagline' => 'Refined Design', 'material' => 'Vinyl', 'image' => '2026/09/Elegance_Series.jpg'),
    'aluminum' => array('name' => 'Aluminum', 'tagline' => 'Strength in Form', 'material' => 'Aluminum', 'image' => '2026/09/Aluminum_Series-768x512.jpg'),
  );
}

// 'series': slug de serie => foto del producto (uploads). La ficha de cada producto vive en {href}{serie}/.
function pwd_product_matrix() {
  $u = '2026/09/';
  return array(
    'windows' => array(
      array('name' => 'Picture', 'href' => '/windows/picture-windows/', 'series' => array(
        'zenith' => $u . 'PRM_Web-Zenith-Thumbnail_0000_ZE_UNIT-PW.jpg',
        'timeless' => $u . 'PRM_Web-Timeless-Thumbnail_0005_TI_UNIT-PW.jpg',
        'serene' => $u . 'SereneW-Picture-Front.jpg',
        'elegance' => $u . 'PRM_Web-Elegance-Thumbnail_0001_EL_UNIT-PW.jpg',
        'aluminum' => $u . 'Picture-Window-Aluminum-Series-1.jpg',
      )),
      array('name' => 'Casement & Awning', 'href' => '/windows/casement-awning-windows/', 'series' => array(
        'zenith' => $u . 'PRM_Web-Zenith-Thumbnail_0008_ZE_UNIT-CM.jpg',
        'serene' => $u . 'Thumb-Windows-Casement-Awning-Serene.jpg',
        'aluminum' => $u . 'Casement-Window-Aluminum-Series-e1590607502165.jpg',
      )),
      array('name' => 'Horizontal Sliding', 'href' => '/windows/horizontal-sliding-windows/', 'series' => array(
        'zenith' => $u . 'PRM_Web-Zenith-Thumbnail_0006_ZE_UNIT-XO.jpg',
        'timeless' => $u . 'PRM_Web-Timeless-Thumbnail_0006_TI_UNIT-XO.jpg',
        'serene' => $u . 'SereneW-Horizontal_sliding-Front.jpg',
        'elegance' => $u . 'PRM_Web-Elegance-Thumbnail_0002_EL_UNIT-XO.jpg',
        'aluminum' => $u . 'Horizontal-Sliding-Aluminum-Series.jpg',
      )),
      array('name' => 'Single Hung', 'href' => '/windows/single-hung-windows/', 'series' => array(
        'zenith' => $u . 'PRM_Web-Zenith-Thumbnail_0002_ZE_UNIT-SH.jpg',
        'timeless' => $u . 'PRM_Web-Timeless-Thumbnail_0004_TI_UNIT-SH.jpg',
        'serene' => $u . 'SereneW-Single_Hung-Front.jpg',
        'elegance' => $u . 'PRM_Web-Elegance-Thumbnail_0000_EL_UNIT-SH.jpg',
        'aluminum' => $u . 'Single-Hung-Window-Aluminum-Series.jpg',
      )),
      array('name' => 'Double Hung', 'href' => '/windows/double-hung-windows/', 'series' => array(
        'zenith' => $u . 'PRM_Web-Zenith-Thumbnail_0004_ZE_UNIT-DH.jpg',
        'serene' => $u . 'SereneW-Double_Hung-Front.jpg',
      )),
      array('name' => 'Arch & Special Shape', 'href' => '/windows/arch-special-shape-windows/', 'product' => 'Arch', 'series' => array(
        'timeless' => $u . 'PRM_Web-Timeless-Thumbnail_0007_TI_UNIT-ARC.jpg',
        'elegance' => $u . 'PRM_Web-Elegance-Thumbnail_0003_EL_UNIT-ARC.jpg',
      )),
    ),
    'doors' => array(
      array('name' => 'Patio Sliding', 'href' => '/doors/patio-sliding-doors/', 'series' => array(
        'zenith' => $u . 'PRM_Web-Zenith-Thumbnail_0012_ZE_UNIT-SL.jpg',
        'timeless' => $u . 'TI_Unit-SL.jpg',
        'serene' => $u . 'Thumb-Doors-Patio-Sliding-Serene.jpg',
        'elegance' => $u . 'Thumb-Doors-Patio-Sliding-Infinite.jpg',
        'aluminum' => $u . 'Aluminum-Series-Patio-Sliding-Doors.jpg',
      )),
      array('name' => 'French Swing', 'href' => '/doors/french-swing-doors/', 'series' => array(
        'zenith' => $u . 'PRM_Web-Zenith-Thumbnail_0010_ZE_UNIT-SW.jpg',
        'serene' => $u . 'Thumb-Doors-French-Swing-Serene.jpg',
        'elegance' => $u . 'Thumb-Doors-French-Swing-Infinite.jpg',
        'aluminum' => $u . 'Aluminum-Series-French-Swing-Door.jpg',
      )),
      array('name' => 'Multiple Sliding', 'href' => '/doors/multiple-sliding-doors/', 'series' => array(
        'serene' => $u . 'Operation-Doors-Multiple-Sliding.jpg',
        'aluminum' => $u . 'Aluminum-Series-Multiple-Sliding-Door.jpg',
      )),
      array('name' => 'Multiple Folding', 'href' => '/doors/multiple-folding-doors/', 'series' => array(
        'serene' => $u . 'Thumb-Doors-Multiple-Folding-Serene.jpg',
        'aluminum' => $u . 'Aluminum-Series-Multiple-Folding-Door.jpg',
      )),
    ),
  );
}
