<?php
/*
 * Template Name: Product Catalog
 *
 * /resources/product-catalog/. Catálogo en línea: todas las fichas de producto con sus datos clave
 * (pwd_product_data()), agrupadas por serie. El sitio actual no publica un catálogo PDF; si el cliente
 * entrega uno, subirlo como Brochure sin serie y enlazarlo desde aquí.
 */

pwd_seo(
  'Product Catalog | Premium Windows & Doors',
  'Browse the complete Premium Windows & Doors catalog: every window and door by series with material, colors, glazing and links to technical documents.',
  '/resources/product-catalog/'
);

$by_series = array();
foreach (array_keys(pwd_product_data()) as $path) {
  $product = pwd_product($path);
  $by_series[$product['series']][] = $product;
}

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Resources', '/resources/'), array('Product Catalog', '/resources/product-catalog/')),
    'eyebrow' => 'Product Catalog',
    'title' => array(
      array('The complete catalog,', 'light'),
      array('always up to date.', 'accent'),
    ),
    'text' => 'Every Premium window and door by series, with key details and a direct link to its technical product page.',
    'image' => array('1536' => '2026/09/VIZ-ZENITH-LA-FARMHOUSE-Family-Room-A.jpg'),
    'buttons' => array(
      array('Browse by Series', '#catalog', 'light'),
      array('Brochures', home_url('/resources/brochures/'), 'outline-light'),
    ),
  ));
  ?>

  <div id="catalog" class="scroll-mt-28">
    <?php $i = 0; foreach (pwd_series_data() as $slug => $series) :
      if (empty($by_series[$slug])) continue; ?>
      <section id="<?php echo esc_attr($slug); ?>" class="scroll-mt-28 <?php echo $i++ % 2 ? 'bg-slate-50' : 'bg-white'; ?> py-16 lg:py-24">
        <div class="site-container">
          <div <?php echo pwd_reveal(); ?> class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
            <div>
              <p class="eyebrow text-brand-600"><?php echo esc_html($series['material'] . ' · ' . $series['tagline']); ?></p>
              <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl"><?php echo esc_html($series['name'] . ' Series'); ?></h2>
            </div>
            <?php echo pwd_arrow_link('About the ' . $series['name'] . ' Series', home_url('/series/' . $slug . '/')); ?>
          </div>
          <ul class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <?php foreach ($by_series[$slug] as $n => $product) : ?>
              <li <?php echo pwd_reveal($n % 4); ?>>
                <a href="<?php echo esc_url(home_url($product['path'])); ?>" data-tilt class="group flex h-full flex-col overflow-hidden rounded-sm border border-slate-200 bg-white transition-colors hover:border-brand-600">
                  <span class="block p-4">
                    <img src="<?php echo esc_url(pwd_upload_url($product['thumbnail'])); ?>" alt="<?php echo esc_attr($product['name']); ?>" loading="lazy" decoding="async" width="700" height="450" class="aspect-[14/9] w-full object-contain transition-transform duration-500 group-hover:scale-105">
                  </span>
                  <span class="flex flex-1 flex-col border-t border-slate-200 p-5">
                    <span class="font-semibold tracking-tight text-slate-900"><?php echo esc_html($product['name']); ?></span>
                    <span class="mt-3 space-y-1 text-sm text-slate-600">
                      <span class="block">Colors: <?php echo esc_html(implode(', ', array_unique(array_merge($product['exterior'], $product['interior'])))); ?></span>
                      <span class="block">Glazing: <?php echo esc_html(implode(', ', $product['glazing'])); ?></span>
                      <?php if (!empty($product['frame_depth'])) : ?><span class="block">Frame depth: <?php echo esc_html($product['frame_depth']); ?></span><?php endif; ?>
                    </span>
                    <span class="mt-auto inline-flex items-center gap-2 pt-5 text-sm font-medium text-brand-700">
                      Technical product page
                      <?php echo pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1'); ?>
                    </span>
                  </span>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </section>
    <?php endforeach; ?>
  </div>

  <?php
  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Ready to choose?',
    'ctas' => array(
      array('label' => 'Request a Quote', 'text' => 'Share your openings and our team will follow up.', 'href' => '/request-a-quote/'),
      array('label' => 'Compare Series', 'text' => 'Materials, finishes and performance side by side.', 'href' => '/series/#compare'),
      array('label' => 'Technical Resources', 'text' => 'Drawings and installation guides.', 'href' => '/resources/technical/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
