<?php
/*
 * Template Name: Products
 *
 * /products/ ("View All Products" del mega menú). Índice de estilos de ventanas y puertas con las series
 * disponibles en cada uno (pwd_product_matrix()); cada serie enlaza a su ficha de producto.
 */

pwd_seo(
  'Windows & Doors | All Products | Premium Windows & Doors',
  'Browse every Premium window and door style by series: picture, casement, sliding, hung, arch, patio, French swing, multi-slide and multi-fold.',
  '/products/'
);

$series = pwd_series_data();
$groups = array(
  'windows' => array('label' => 'Windows', 'noun' => 'Window', 'href' => '/windows/'),
  'doors' => array('label' => 'Doors', 'noun' => 'Door', 'href' => '/doors/'),
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Products', '/products/')),
    'eyebrow' => 'Products',
    'title' => array(
      array('Windows and doors', 'light'),
      array('designed for a better tomorrow.', 'accent'),
    ),
    'text' => 'Every style Premium manufactures, with the series available in each. Choose a style, then compare series and open the technical product page.',
    'image' => array('1536' => '2026/09/VIZ-ZENITH-LA-FARMHOUSE-Back-Yard-A.jpg'),
    'buttons' => array(
      array('Windows', '#windows', 'light'),
      array('Doors', '#doors', 'outline-light'),
    ),
  ));
  ?>

  <?php foreach ($groups as $key => $group) : ?>
    <section id="<?php echo esc_attr($key); ?>" class="scroll-mt-28 <?php echo $key === 'windows' ? 'bg-slate-50' : 'bg-white'; ?> py-20 lg:py-28">
      <div class="site-container">
        <div <?php echo pwd_reveal(); ?> class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
          <div>
            <p class="eyebrow text-brand-600"><?php echo esc_html(count(pwd_product_matrix()[$key]) . ' styles'); ?></p>
            <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl"><?php echo esc_html($group['label']); ?></h2>
          </div>
          <?php echo pwd_arrow_link('All ' . strtolower($group['label']), home_url($group['href'])); ?>
        </div>

        <ul class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
          <?php foreach (pwd_product_matrix()[$key] as $i => $style) :
            $image = reset($style['series']); ?>
            <li <?php echo pwd_reveal($i % 3); ?> class="flex h-full flex-col overflow-hidden rounded-sm border border-slate-200 bg-white">
              <a href="<?php echo esc_url(home_url($style['href'])); ?>" class="group block bg-white p-4">
                <img src="<?php echo esc_url(pwd_upload_url($image)); ?>" alt="<?php echo esc_attr($style['name'] . ' ' . strtolower($group['label'])); ?>" loading="lazy" decoding="async" width="700" height="450" class="aspect-[14/9] w-full object-contain transition-transform duration-500 group-hover:scale-105">
              </a>
              <div class="flex flex-1 flex-col border-t border-slate-200 p-6">
                <h3 class="text-lg font-semibold tracking-tight text-slate-900">
                  <a href="<?php echo esc_url(home_url($style['href'])); ?>" class="hover:text-brand-700"><?php echo esc_html($style['name'] . ' ' . $group['label']); ?></a>
                </h3>
                <p class="mt-4 text-xs font-medium tracking-wide text-slate-500 uppercase">Available series</p>
                <ul class="mt-2 flex flex-wrap gap-2">
                  <?php foreach (array_keys($style['series']) as $slug) : ?>
                    <li>
                      <a href="<?php echo esc_url(home_url($style['href'] . $slug . '/')); ?>" class="inline-block rounded-sm border border-slate-300 px-3 py-1.5 text-sm font-medium text-slate-700 transition-colors hover:border-brand-600 hover:text-brand-700">
                        <?php echo esc_html($series[$slug]['name']); ?>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
                <div class="mt-auto pt-6 text-sm"><?php echo pwd_arrow_link('Compare ' . strtolower($style['name']) . ' ' . strtolower($group['label']), home_url($style['href'] . '#products')); ?></div>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>
  <?php endforeach; ?>

  <?php
  get_template_part('template-parts/series-cards');

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Find the right product for your project',
    'ctas' => array(
      array('label' => 'Request a Quote', 'text' => 'Share your openings and our team will follow up.', 'href' => '/request-a-quote/'),
      array('label' => 'Compare Series', 'text' => 'Materials, finishes and performance side by side.', 'href' => '/series/#compare'),
      array('label' => 'Product Catalog', 'text' => 'Every product with its key specifications.', 'href' => '/resources/product-catalog/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
