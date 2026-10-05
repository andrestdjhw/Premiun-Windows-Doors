<?php
/*
 * Template Name: Specifications
 *
 * /professionals/specifications/. Datos de especificación de cada producto (profundidad de marco,
 * opciones de marco, vidrios, certificaciones) a partir de pwd_product_data(), con enlace a sus documentos.
 */

pwd_seo(
  'Window & Door Specifications | Frame Depths & Options | Premium',
  'Frame depths, framing options, glazing and certifications for every Premium window and door, with detail drawings and installation guides to download.',
  '/professionals/specifications/'
);

$groups = array('window' => array(), 'door' => array());
foreach (array_keys(pwd_product_data()) as $path) {
  $product = pwd_product($path);
  $groups[$product['kind']][] = $product;
}

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Professionals', '/professionals/'), array('Specifications', '/professionals/specifications/')),
    'eyebrow' => 'Specifications',
    'title' => array(
      array('Specification data', 'light'),
      array('for every product.', 'accent'),
    ),
    'text' => 'Frame depths, framing options, glazing and certifications in one place, with links to each product’s detail drawings.',
    'image' => array('1536' => '2026/09/ArchitectsSpecifiers-scaled.jpg'),
    'buttons' => array(
      array('Windows', '#windows', 'light'),
      array('Doors', '#doors', 'outline-light'),
    ),
  ));
  ?>

  <?php foreach (array('window' => 'Windows', 'door' => 'Doors') as $kind => $label) : ?>
    <section id="<?php echo esc_attr(strtolower($label)); ?>" class="scroll-mt-28 <?php echo $kind === 'window' ? 'bg-white' : 'bg-slate-50'; ?> py-20 lg:py-28">
      <div class="site-container">
        <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
          <p class="eyebrow text-brand-600"><?php echo esc_html(count($groups[$kind]) . ' products'); ?></p>
          <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl"><?php echo esc_html($label); ?></h2>
        </div>
        <div <?php echo pwd_reveal(1); ?> class="mt-10 overflow-x-auto rounded-sm border border-slate-200 bg-white">
          <table class="w-full min-w-[900px] text-left text-sm">
            <thead class="bg-slate-50 text-slate-500">
              <tr>
                <th scope="col" class="px-5 py-4 font-medium">Product</th>
                <th scope="col" class="px-5 py-4 font-medium">Material</th>
                <th scope="col" class="px-5 py-4 font-medium">Frame depth</th>
                <th scope="col" class="px-5 py-4 font-medium">Framing options</th>
                <th scope="col" class="px-5 py-4 font-medium">Glazing</th>
                <th scope="col" class="px-5 py-4 font-medium">Documents</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 text-slate-700">
              <?php foreach ($groups[$kind] as $product) : ?>
                <tr>
                  <th scope="row" class="px-5 py-4 align-top font-semibold text-slate-900">
                    <a href="<?php echo esc_url(home_url($product['path'])); ?>" class="hover:text-brand-700"><?php echo esc_html($product['name']); ?></a>
                  </th>
                  <td class="px-5 py-4 align-top"><?php echo esc_html($product['material']); ?></td>
                  <td class="px-5 py-4 align-top"><?php echo esc_html($product['frame_depth'] ?? '—'); ?></td>
                  <td class="px-5 py-4 align-top"><?php echo esc_html(implode(', ', $product['frame_options'] ?? array()) ?: '—'); ?></td>
                  <td class="px-5 py-4 align-top"><?php echo esc_html(implode(', ', $product['glazing'])); ?></td>
                  <td class="px-5 py-4 align-top">
                    <a href="<?php echo esc_url(home_url($product['path'] . '#downloads')); ?>" class="font-medium text-brand-700 hover:text-brand-900">Downloads</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <p class="mt-4 text-sm text-slate-500">Frame data as published for each product. Confirm configuration-specific values with the detail drawings.</p>
      </div>
    </section>
  <?php endforeach; ?>

  <?php
  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Need more for your specification?',
    'ctas' => array(
      array('label' => 'Technical Resources', 'text' => 'Search every drawing and guide.', 'href' => '/resources/technical/'),
      array('label' => 'Finish & Glass Options', 'text' => 'Colors and glazing by series.', 'href' => '/professionals/finish-glass-options/'),
      array('label' => 'Request Support', 'text' => 'Ask our technical team.', 'href' => '/professionals/request-support/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
