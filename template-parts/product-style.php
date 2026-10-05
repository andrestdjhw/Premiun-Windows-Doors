<?php
// Ficha de un estilo de ventana o puerta (Picture, Patio Sliding…): intro, productos por serie,
// datos técnicos para profesionales y CTAs. El contenido llega en $args desde cada plantilla:
//   kind        'window' (por defecto) o 'door'
//   name        nombre del estilo, ej. "Picture"
//   style       slug del término pwd_style para filtrar la biblioteca técnica, ej. "picture"
//   diagrams    array de esquemas de pwd_window_diagram() o pwd_door_diagram()
//   intro_eyebrow, intro_lead, intro_text
//   compare_by  array de criterios de comparación
//   facts       array label => valor (ficha rápida)
//   products    array de series, material, text, image (uploads), href y name (opcional; por defecto "{serie} {estilo} Window|Door")
//               Solo productos VERIFICADOS que se fabrican hoy en este estilo (briefs).
//   cta_title
$style = wp_parse_args($args, array(
  'kind' => 'window', 'name' => '', 'style' => '', 'diagrams' => array(), 'intro_eyebrow' => '', 'intro_lead' => '', 'intro_text' => '',
  'compare_by' => array(), 'facts' => array(), 'products' => array(), 'cta_title' => '',
));
$is_door = $style['kind'] === 'door';
$noun = $is_door ? 'Door' : 'Window';
$docs = function ($type = '') use ($style) {
  return add_query_arg(array_filter(array('product' => $style['kind'], 'style' => $style['style'], 'type' => $type)), '/resources/technical/');
};
$product_count = count($style['products']);
$product_grids = array(
  2 => 'sm:grid-cols-2 lg:max-w-4xl',
  3 => 'sm:grid-cols-2 lg:grid-cols-3',
  4 => 'sm:grid-cols-2 lg:grid-cols-4',
);
$product_grid = $product_grids[$product_count] ?? 'sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5';
$resources = array(
  array('icon' => 'file-text', 'title' => 'Technical drawings', 'href' => $docs('detail-drawing')),
  array('icon' => 'badge-check', 'title' => 'Glazing', 'href' => '/capabilities/customization/'),
  array('icon' => 'layers', 'title' => 'Frame systems', 'href' => '/series/#compare'),
  array('icon' => 'award', 'title' => 'Certifications', 'href' => $docs('certification')),
  array('icon' => 'file-badge', 'title' => 'Installation documents', 'href' => $docs('installation-guide')),
  array('icon' => 'shield-check', 'title' => 'Warranty', 'href' => '/warranty/'),
);
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container grid items-center gap-14 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-7">
      <h2 class="eyebrow text-brand-600"><?php echo esc_html($style['intro_eyebrow']); ?></h2>
      <p class="mt-6 text-2xl leading-snug font-medium tracking-tight text-slate-900 lg:text-3xl"><?php echo esc_html($style['intro_lead']); ?></p>
      <p class="mt-6 text-lg leading-relaxed text-slate-600"><?php echo esc_html($style['intro_text']); ?></p>
      <?php if ($style['compare_by']) : ?>
        <ul class="mt-8 flex flex-wrap gap-2">
          <?php foreach ($style['compare_by'] as $item) : ?>
            <li class="rounded-sm bg-brand-50 px-3.5 py-2 text-sm font-medium text-brand-800"><?php echo esc_html($item); ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>

    <dl <?php echo pwd_reveal(1); ?> class="grid gap-px overflow-hidden rounded-sm border border-slate-200 bg-slate-200 lg:col-span-4 lg:col-start-9">
      <div class="flex items-center justify-center gap-8 bg-slate-50 py-10 text-brand-600">
        <?php foreach ($style['diagrams'] as $diagram) echo $is_door ? pwd_door_diagram($diagram, 'h-28 w-auto') : pwd_window_diagram($diagram, 'h-32 w-auto'); ?>
      </div>
      <?php foreach ($style['facts'] as $label => $value) : ?>
        <div class="flex items-center justify-between gap-4 bg-white px-6 py-4">
          <dt class="shrink-0 text-sm text-slate-500"><?php echo esc_html($label); ?></dt>
          <dd class="text-right font-semibold text-slate-900"><?php echo esc_html($value); ?></dd>
        </div>
      <?php endforeach; ?>
    </dl>
  </div>
</section>

<section id="products" class="scroll-mt-28 bg-slate-50 py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
      <div class="max-w-2xl">
        <p class="eyebrow text-brand-600">Compare available products</p>
        <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl"><?php echo esc_html($style['name'] . ' ' . strtolower($noun) . 's'); ?> by series</h2>
      </div>
      <div class="shrink-0">
        <?php echo pwd_button('Compare Series', home_url('/series/#compare'), 'outline'); ?>
      </div>
    </div>

    <ul class="mt-12 grid gap-6 <?php echo $product_grid; ?>">
      <?php foreach ($style['products'] as $i => $product) : ?>
        <li <?php echo pwd_reveal($i); ?>>
          <a href="<?php echo esc_url(home_url($product['href'])); ?>" data-tilt class="group flex h-full flex-col overflow-hidden rounded-sm border border-slate-200 bg-white transition-colors hover:border-brand-600">
            <span class="block bg-white p-4">
              <img
                src="<?php echo esc_url(pwd_upload_url($product['image'])); ?>"
                alt="<?php echo esc_attr($product['name'] ?? $product['series'] . ' ' . $style['name'] . ' ' . $noun); ?>"
                loading="lazy"
                decoding="async"
                width="700"
                height="450"
                class="aspect-[14/9] w-full object-contain transition-transform duration-500 group-hover:scale-105"
              >
            </span>
            <span class="flex flex-1 flex-col border-t border-slate-200 p-6">
              <span class="self-start rounded-sm bg-brand-50 px-2 py-0.5 text-xs font-medium text-brand-800"><?php echo esc_html($product['material']); ?></span>
              <span class="mt-4 text-lg font-semibold tracking-tight text-slate-900"><?php echo esc_html($product['name'] ?? $product['series'] . ' ' . $style['name'] . ' ' . $noun); ?></span>
              <span class="mt-2 text-sm leading-relaxed text-slate-600"><?php echo esc_html($product['text']); ?></span>
              <span class="mt-auto inline-flex items-center gap-2 pt-6 text-sm font-medium text-brand-700">
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

<section class="bg-brand-950 py-20 text-white lg:py-28">
  <div class="site-container grid gap-12 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-4">
      <p class="eyebrow text-brand-100">For professionals</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight lg:text-4xl"><?php echo esc_html($style['name'] . ' ' . strtolower($noun)); ?> technical data</h2>
      <p class="mt-4 text-lg leading-relaxed text-white/70">
        Technical drawings, glazing, frame systems, certifications, installation documents, and other product-specific data, available from each product page and Technical Resources.
      </p>
      <div class="mt-8">
        <?php echo pwd_button('All ' . $style['name'] . ' Documents', home_url($docs()), 'light'); ?>
      </div>
    </div>

    <ul class="grid gap-3 self-center sm:grid-cols-2 lg:col-span-8">
      <?php foreach ($resources as $i => $item) : ?>
        <li <?php echo pwd_reveal($i % 2); ?>>
          <a href="<?php echo esc_url(home_url($item['href'])); ?>" data-tilt class="group flex items-center gap-4 rounded-sm border border-white/10 bg-white/5 p-5 transition-colors hover:border-white/40 hover:bg-white/10">
            <span class="flex size-11 shrink-0 items-center justify-center rounded-full bg-white/10 text-brand-100">
              <?php echo pwd_icon($item['icon'], 'size-5'); ?>
            </span>
            <span class="flex-1 font-medium"><?php echo esc_html($item['title']); ?></span>
            <?php echo pwd_icon('arrow-right', 'size-4 text-brand-100 transition-transform group-hover:translate-x-1'); ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<?php
get_template_part('template-parts/cta-cards', null, array(
  'title' => $style['cta_title'],
  'ctas' => array(
    array('label' => 'Request a Quote', 'text' => 'Share your openings and our team will follow up.', 'href' => '/request-a-quote/'),
    array('label' => 'Compare Series', 'text' => 'Materials, performance and applications side by side.', 'href' => '/series/#compare'),
    $is_door
      ? array('label' => 'Explore All Doors', 'text' => 'Every door style Premium manufactures.', 'href' => '/doors/')
      : array('label' => 'Explore All Windows', 'text' => 'Every window style Premium manufactures.', 'href' => '/windows/'),
  ),
));
