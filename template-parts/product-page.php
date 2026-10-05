<?php
// Ficha de un producto (estilo + serie). $args['product'] viene de pwd_product().
// Secciones opcionales según los datos: beneficios del material, marcos, Blinds + Glass,
// herrajes, grids y texturas de vidrio. Los PDFs salen de la Media Library (pwd_product_document_groups()).
$product = $args['product'];
$series = pwd_series_data()[$product['series']];
$series_copy = pwd_product_series_copy()[$product['series'] . '-' . $product['kind']] ?? null;
$documents = pwd_product_document_groups($product);
$siblings = pwd_product_siblings($product);
$glazing = array_intersect_key(pwd_product_glazing(), array_flip($product['glazing']));
$frame_text = pwd_product_frame_text();
$library_url = add_query_arg(array('series' => $product['series'], 'style' => $product['style']), home_url('/resources/technical/')) . '#documents';
$group_label = $product['kind'] === 'door' ? 'Doors' : 'Windows';
$crumbs = array(
  array($group_label, '/' . strtolower($group_label) . '/'),
  array($product['style_name'] . ' ' . $group_label, $product['style_path']),
  array($series['name'], $product['path']),
);
$swatches = function ($colors) {
  foreach ($colors as $color) {
    printf(
      '<li class="flex items-center gap-2 text-sm text-slate-700"><span class="size-5 shrink-0 rounded-full border border-slate-300" style="background:%s"></span>%s</li>',
      esc_attr(pwd_color_swatch($color)),
      esc_html($color)
    );
  }
};
$check = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="mt-0.5 size-5 shrink-0 text-brand-600"><path d="m5 12 5 5L20 7" /></svg>';
?>
<section class="bg-slate-50">
  <div class="site-container grid items-center gap-12 py-16 lg:grid-cols-12 lg:gap-16 lg:py-24">
    <div class="lg:col-span-6">
      <nav aria-label="Breadcrumb">
        <ol class="flex flex-wrap items-center gap-2 text-sm text-slate-500">
          <li><a href="<?php echo esc_url(home_url('/')); ?>" class="transition-colors hover:text-brand-700">Home</a></li>
          <?php foreach ($crumbs as $i => $crumb) : ?>
            <li aria-hidden="true">/</li>
            <li>
              <?php if ($i === count($crumbs) - 1) : ?>
                <span aria-current="page" class="text-slate-900"><?php echo esc_html($crumb[0]); ?></span>
              <?php else : ?>
                <a href="<?php echo esc_url(home_url($crumb[1])); ?>" class="transition-colors hover:text-brand-700"><?php echo esc_html($crumb[0]); ?></a>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ol>
      </nav>
      <?php
      $items = array(array('@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => home_url('/')));
      foreach ($crumbs as $i => $crumb) {
        $items[] = array('@type' => 'ListItem', 'position' => $i + 2, 'name' => $crumb[0], 'item' => home_url($crumb[1]));
      }
      printf('<script type="application/ld+json">%s</script>', wp_json_encode(array('@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => $items), JSON_UNESCAPED_SLASHES));
      ?>

      <p <?php echo pwd_reveal(); ?> class="eyebrow mt-10 text-brand-600"><?php echo esc_html($series['name'] . ' Series · ' . $product['material']); ?></p>
      <h1 <?php echo pwd_reveal(1); ?> class="mt-5 text-4xl font-semibold tracking-tight text-slate-900 sm:text-5xl"><?php echo esc_html($product['name']); ?></h1>
      <p <?php echo pwd_reveal(2); ?> class="mt-6 text-lg leading-relaxed text-slate-600"><?php echo esc_html($product['lead']); ?></p>
      <?php if ($product['highlights']) : ?>
        <ul <?php echo pwd_reveal(2); ?> class="mt-8 flex flex-wrap gap-2">
          <?php foreach ($product['highlights'] as $highlight) : ?>
            <li class="rounded-sm bg-brand-50 px-3.5 py-2 text-sm font-medium text-brand-800"><?php echo esc_html($highlight); ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
      <div <?php echo pwd_reveal(3); ?> class="mt-10 flex flex-col gap-4 sm:flex-row sm:flex-wrap">
        <?php echo pwd_button('Request a Quote', home_url('/request-a-quote/')); ?>
        <?php echo pwd_button('Downloads', '#downloads', 'outline'); ?>
      </div>
    </div>

    <div <?php echo pwd_reveal(1, 150); ?> class="lg:col-span-6" data-product-views>
      <div class="relative rounded-sm border border-slate-200 bg-white p-6 sm:p-10">
        <?php foreach ($product['views'] as $i => $view) : ?>
          <img
            src="<?php echo esc_url(pwd_upload_url($view[1])); ?>"
            alt="<?php echo esc_attr(trim($product['name'] . ($view[0] && $view[0] !== 'Standard' ? ' (' . strtolower($view[0]) . ')' : ''))); ?>"
            <?php echo $i ? 'loading="lazy" hidden' : 'fetchpriority="high"'; ?>
            decoding="async"
            data-view="<?php echo $i; ?>"
            class="aspect-[4/3] w-full object-contain"
          >
        <?php endforeach; ?>
      </div>
      <?php if (count($product['views']) > 1) : ?>
        <div role="group" aria-label="Product view" class="mt-4 flex flex-wrap gap-2">
          <?php foreach ($product['views'] as $i => $view) : ?>
            <button type="button" data-view-to="<?php echo $i; ?>" aria-pressed="<?php echo $i ? 'false' : 'true'; ?>" class="rounded-sm border border-slate-300 bg-white px-3.5 py-2 text-sm font-medium text-slate-700 transition-colors hover:border-brand-600 aria-pressed:border-brand-800 aria-pressed:bg-brand-800 aria-pressed:text-white">
              <?php echo esc_html($view[0]); ?>
            </button>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="bg-white py-20 lg:py-28">
  <div class="site-container grid gap-14 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-5">
      <p class="eyebrow text-brand-600"><?php echo esc_html($product['noun']); ?> overview</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Finishes and features</h2>
      <dl class="mt-10 divide-y divide-slate-200 border-y border-slate-200">
        <div class="flex items-center justify-between gap-6 py-4">
          <dt class="text-sm text-slate-500">Material</dt>
          <dd class="text-right font-semibold text-slate-900"><?php echo esc_html($product['material']); ?></dd>
        </div>
        <?php foreach (array('Exterior' => $product['exterior'], 'Interior' => $product['interior']) as $label => $colors) : if (!$colors) continue; ?>
          <div class="grid gap-3 py-4 sm:grid-cols-3">
            <dt class="text-sm text-slate-500"><?php echo esc_html($label); ?></dt>
            <dd class="sm:col-span-2"><ul class="flex flex-wrap gap-x-5 gap-y-2"><?php $swatches($colors); ?></ul></dd>
          </div>
        <?php endforeach; ?>
        <?php if ($product['blinds']) : ?>
          <div class="grid gap-3 py-4 sm:grid-cols-3">
            <dt class="text-sm text-slate-500">Upgrade</dt>
            <dd class="sm:col-span-2">
              <a href="#blinds" class="font-semibold text-brand-700 hover:text-brand-900">Blinds + Glass</a>
              <ul class="mt-3 flex flex-wrap gap-x-5 gap-y-2"><?php $swatches(array('Espresso', 'Silver Moon', 'Slate', 'Tan', 'White')); ?></ul>
            </dd>
          </div>
        <?php endif; ?>
      </dl>
    </div>

    <div class="space-y-6 lg:col-span-6 lg:col-start-7">
      <?php if ($product['features']) : ?>
        <div <?php echo pwd_reveal(1); ?> class="rounded-sm border border-slate-200 p-8">
          <h3 class="text-lg font-semibold tracking-tight text-slate-900">Features</h3>
          <ul class="mt-5 grid gap-3 sm:grid-cols-2">
            <?php foreach ($product['features'] as $feature) : ?>
              <li class="flex gap-3 text-slate-700"><?php echo $check . esc_html($feature); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>
      <?php if (!empty($product['benefits'])) : ?>
        <div <?php echo pwd_reveal(2); ?> class="rounded-sm bg-brand-950 p-8 text-white">
          <h3 class="text-lg font-semibold tracking-tight"><?php echo esc_html($product['benefits']['title']); ?></h3>
          <p class="mt-3 leading-relaxed text-white/70"><?php echo esc_html($product['benefits']['text']); ?></p>
          <ul class="mt-6 grid gap-3 sm:grid-cols-2">
            <?php foreach ($product['benefits']['items'] as $benefit) : ?>
              <li class="flex items-center gap-3 font-medium"><?php echo pwd_icon('badge-check', 'size-5 shrink-0 text-brand-500') . esc_html($benefit); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="bg-slate-50 py-20 lg:py-28">
  <div class="site-container grid gap-12 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-4">
      <p class="eyebrow text-brand-600">Specifications</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Technical data</h2>
      <p class="mt-4 text-lg leading-relaxed text-slate-600">Exact options vary by size and configuration. Confirm with your dealer or our project-support team.</p>
    </div>
    <dl <?php echo pwd_reveal(1); ?> class="divide-y divide-slate-200 rounded-sm border border-slate-200 bg-white lg:col-span-8">
      <?php
      $rows = array_filter(array_merge(
        array(
          'Frame depth' => $product['frame_depth'] ?? '',
          'Framing options' => implode(' • ', $product['frame_options'] ?? array()),
          'Glazing options' => implode(' • ', $product['glazing']),
        ),
        $product['specs']
      ));
      foreach ($rows as $label => $value) : ?>
        <div class="grid gap-1 px-6 py-4 sm:grid-cols-3 sm:gap-6">
          <dt class="text-sm text-slate-500"><?php echo esc_html(ucfirst(strtolower($label))); ?></dt>
          <dd class="font-medium text-slate-900 sm:col-span-2"><?php echo esc_html($value); ?></dd>
        </div>
      <?php endforeach; ?>
    </dl>
  </div>
</section>

<?php if (!empty($product['frame_details'])) : ?>
  <section class="bg-white py-20 lg:py-28">
    <div class="site-container">
      <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
        <p class="eyebrow text-brand-600">Design options</p>
        <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Frame options</h2>
        <p class="mt-4 text-lg leading-relaxed text-slate-600">Frame solutions for new construction and replacement openings.</p>
      </div>
      <ul class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <?php $i = 0; foreach ($product['frame_details'] as $frame => $image) : ?>
          <li <?php echo pwd_reveal($i++); ?> class="flex flex-col overflow-hidden rounded-sm border border-slate-200 bg-white">
            <img src="<?php echo esc_url(pwd_upload_url($image)); ?>" alt="<?php echo esc_attr($product['name'] . ' ' . $frame . ' frame section'); ?>" loading="lazy" decoding="async" class="aspect-[3/4] w-full bg-white object-contain p-4">
            <div class="flex-1 border-t border-slate-200 p-6">
              <h3 class="text-lg font-semibold tracking-tight text-slate-900"><?php echo esc_html($frame); ?></h3>
              <p class="mt-2 text-sm leading-relaxed text-slate-600"><?php echo esc_html($frame_text[$frame] ?? ''); ?></p>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
<?php endif; ?>

<?php if ($product['blinds']) : ?>
  <section id="blinds" class="scroll-mt-28 bg-brand-950 py-20 text-white lg:py-28">
    <div class="site-container grid gap-12 lg:grid-cols-12 lg:gap-16">
      <div <?php echo pwd_reveal(); ?> class="lg:col-span-4">
        <p class="eyebrow text-brand-100">Upgrade</p>
        <h2 class="mt-4 text-3xl font-semibold tracking-tight lg:text-4xl">Blinds + Glass</h2>
        <p class="mt-4 text-lg leading-relaxed text-white/70">
          A cordless blind sealed between the glass: dust-free, safer for children and pets, and operated with a fingertip controller to raise, lower and tilt.
        </p>
      </div>
      <ul class="grid gap-4 sm:grid-cols-3 lg:col-span-8">
        <?php $i = 0; foreach (pwd_product_blinds_views() as $label => $image) : ?>
          <li <?php echo pwd_reveal($i++); ?>>
            <img src="<?php echo esc_url(pwd_upload_url($image)); ?>" alt="<?php echo esc_attr('Blinds + Glass: ' . strtolower($label)); ?>" loading="lazy" decoding="async" class="aspect-square w-full rounded-sm object-cover">
            <p class="mt-3 font-medium"><?php echo esc_html($label); ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
<?php endif; ?>

<?php if (!empty($product['hardware']) || !empty($product['grids'])) : ?>
  <section class="bg-white py-20 lg:py-28">
    <div class="site-container">
      <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
        <p class="eyebrow text-brand-600">Design options</p>
        <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl"><?php echo esc_html(!empty($product['grids']) ? 'Hardware and grids' : 'Hardware'); ?></h2>
        <?php if (!empty($product['grids'])) : ?>
          <p class="mt-4 text-lg leading-relaxed text-slate-600">Grids sit between the glass panes for easy cleaning. Ask your dealer for available patterns.</p>
        <?php endif; ?>
      </div>
      <ul class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
        <?php foreach (array_merge($product['hardware'] ?? array(), $product['grids'] ?? array()) as $i => $option) : ?>
          <li <?php echo pwd_reveal($i); ?> class="flex flex-col overflow-hidden rounded-sm border border-slate-200">
            <img src="<?php echo esc_url(pwd_upload_url($option['image'])); ?>" alt="<?php echo esc_attr($option['name']); ?>" loading="lazy" decoding="async" class="aspect-square w-full object-cover">
            <div class="flex-1 border-t border-slate-200 p-5">
              <h3 class="font-semibold tracking-tight text-slate-900"><?php echo esc_html($option['name']); ?></h3>
              <ul class="mt-3 flex flex-wrap gap-x-4 gap-y-2"><?php $swatches($option['colors']); ?></ul>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
<?php endif; ?>

<?php if (!empty($product['textures'])) : ?>
  <section class="bg-slate-50 py-20 lg:py-28" data-glass-textures>
    <div class="site-container">
      <div <?php echo pwd_reveal(); ?> class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
        <div class="max-w-2xl">
          <p class="eyebrow text-brand-600">Privacy glass</p>
          <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Glass textures</h2>
          <p class="mt-4 text-lg leading-relaxed text-slate-600">Textured patterns add privacy without giving up daylight. Other patterns are available on request.</p>
        </div>
        <div role="group" aria-label="Time of day" class="flex shrink-0 gap-2">
          <?php foreach (array('morning', 'afternoon', 'night') as $time) : ?>
            <button type="button" data-time-to="<?php echo $time; ?>" aria-pressed="<?php echo $time === 'afternoon' ? 'true' : 'false'; ?>" class="rounded-sm border border-slate-300 bg-white px-3.5 py-2 text-sm font-medium text-slate-700 capitalize transition-colors hover:border-brand-600 aria-pressed:border-brand-800 aria-pressed:bg-brand-800 aria-pressed:text-white">
              <?php echo esc_html($time); ?>
            </button>
          <?php endforeach; ?>
        </div>
      </div>
      <ul class="mt-12 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-5">
        <?php foreach ($product['textures'] as $i => $texture) : ?>
          <li <?php echo pwd_reveal($i); ?>>
            <?php foreach (array('morning', 'afternoon', 'night') as $time) : ?>
              <img
                src="<?php echo esc_url(pwd_upload_url(pwd_product_texture_image($texture, $time))); ?>"
                alt="<?php echo esc_attr($texture . ' glass in the ' . $time); ?>"
                loading="lazy"
                decoding="async"
                data-time="<?php echo $time; ?>"
                <?php echo $time === 'afternoon' ? '' : 'hidden'; ?>
                class="aspect-square w-full rounded-sm object-cover"
              >
            <?php endforeach; ?>
            <p class="mt-3 font-medium text-slate-900"><?php echo esc_html($texture); ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
<?php endif; ?>

<?php if ($glazing) : ?>
  <section class="bg-white py-20 lg:py-28">
    <div class="site-container grid gap-12 lg:grid-cols-12 lg:gap-16">
      <div <?php echo pwd_reveal(); ?> class="lg:col-span-4">
        <p class="eyebrow text-brand-600">Glazing</p>
        <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Glazing options</h2>
        <p class="mt-4 text-lg leading-relaxed text-slate-600">
          Cardinal LoĒ³-366® glass comes standard, with argon-filled chambers and Duraseal® warm-edge spacers for year-round comfort and energy savings.
        </p>
      </div>
      <ul class="grid gap-6 sm:grid-cols-3 lg:col-span-8">
        <?php $i = 0; foreach ($glazing as $name => $option) : ?>
          <li <?php echo pwd_reveal($i++); ?> class="overflow-hidden rounded-sm border border-slate-200">
            <img src="<?php echo esc_url(pwd_upload_url($option['image'])); ?>" alt="<?php echo esc_attr($name . ' glazing section'); ?>" loading="lazy" decoding="async" class="aspect-square w-full object-cover">
            <div class="border-t border-slate-200 p-5">
              <h3 class="font-semibold tracking-tight text-slate-900"><?php echo esc_html($name); ?></h3>
              <p class="mt-1 text-sm text-slate-600"><?php echo esc_html($option['spec']); ?></p>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
<?php endif; ?>

<section id="downloads" class="scroll-mt-28 bg-slate-50 py-20 lg:py-28">
  <div class="site-container grid gap-12 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-4">
      <p class="eyebrow text-brand-600">Downloads</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Installation guides and detail drawings</h2>
      <p class="mt-4 text-lg leading-relaxed text-slate-600">
        Every document downloads directly. For other technical specs, email
        <a href="mailto:<?php echo esc_attr(pwd_contact_info()['email']); ?>?subject=<?php echo rawurlencode('Technical docs: ' . $product['name']); ?>" class="font-medium text-brand-700 hover:text-brand-900"><?php echo esc_html(pwd_contact_info()['email']); ?></a>.
      </p>
      <div class="mt-8">
        <?php echo pwd_arrow_link('Search all technical documents', $library_url); ?>
      </div>
    </div>

    <div <?php echo pwd_reveal(1); ?> class="space-y-10 lg:col-span-8">
      <?php if ($documents) : ?>
        <?php foreach ($documents as $group) : ?>
          <div>
            <h3 class="flex items-baseline justify-between gap-4 border-b border-slate-200 pb-3 font-semibold text-slate-900">
              <?php echo esc_html($group['label'] . 's'); ?>
              <span class="text-sm font-normal text-slate-500"><?php echo esc_html(sprintf(_n('%d file', '%d files', count($group['docs'])), count($group['docs']))); ?></span>
            </h3>
            <ul class="divide-y divide-slate-200">
              <?php foreach ($group['docs'] as $doc) : ?>
                <li class="flex flex-col gap-3 py-4 sm:flex-row sm:items-center">
                  <span class="flex size-10 shrink-0 items-center justify-center rounded-sm bg-brand-50 text-brand-700"><?php echo pwd_icon('file-text', 'size-5'); ?></span>
                  <span class="min-w-0 flex-1">
                    <span class="block font-medium text-slate-900"><?php echo esc_html($doc['title']); ?></span>
                    <?php if ($doc['frame']) : ?>
                      <span class="mt-1 inline-block rounded-sm bg-slate-100 px-2 py-0.5 text-xs font-medium text-slate-700"><?php echo esc_html($doc['frame']); ?></span>
                    <?php endif; ?>
                  </span>
                  <?php echo pwd_download_button($doc['id']); ?>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endforeach; ?>
      <?php else : ?>
        <div class="rounded-sm border border-dashed border-slate-300 bg-white p-10 text-center">
          <p class="text-lg font-semibold text-slate-900">Documents for this product are being added.</p>
          <p class="mx-auto mt-2 max-w-md text-slate-600">Our project-support team can send the drawings and guides you need.</p>
          <div class="mt-6 flex justify-center">
            <?php echo pwd_button('Contact Project Support', home_url('/professionals/request-support/')); ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php if ($series_copy) : ?>
  <section class="bg-white py-20 lg:py-28">
    <div class="site-container grid items-center gap-12 lg:grid-cols-12 lg:gap-16">
      <div <?php echo pwd_reveal(); ?> class="lg:col-span-6">
        <img src="<?php echo esc_url(pwd_upload_url($series_copy['image'])); ?>" alt="<?php echo esc_attr($series['name'] . ' Series ' . strtolower($group_label)); ?>" loading="lazy" decoding="async" class="aspect-[3/2] w-full rounded-sm object-cover shadow-2xl shadow-brand-950/15">
      </div>
      <div <?php echo pwd_reveal(1, 150); ?> class="lg:col-span-5 lg:col-start-8">
        <p class="eyebrow text-brand-600"><?php echo esc_html($series['name'] . ' Series'); ?></p>
        <p class="mt-6 text-2xl leading-snug font-medium tracking-tight text-slate-900 lg:text-3xl"><?php echo esc_html($series_copy['lead']); ?></p>
        <p class="mt-6 text-lg leading-relaxed text-slate-600"><?php echo esc_html($series_copy['text']); ?></p>
        <div class="mt-8">
          <?php echo pwd_button('Explore the ' . $series['name'] . ' Series', home_url('/series/' . $product['series'] . '/'), 'outline'); ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php if ($siblings) : ?>
  <section class="bg-slate-50 py-20 lg:py-28">
    <div class="site-container">
      <div <?php echo pwd_reveal(); ?> class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
          <p class="eyebrow text-brand-600"><?php echo esc_html($series['name'] . ' Series'); ?></p>
          <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl"><?php echo esc_html('More ' . $series['name'] . ' ' . strtolower($group_label)); ?></h2>
        </div>
        <?php echo pwd_arrow_link('All ' . strtolower($group_label), home_url('/' . strtolower($group_label) . '/')); ?>
      </div>
      <ul class="mt-10 grid gap-6 sm:grid-cols-2 <?php echo count($siblings) >= 4 ? 'lg:grid-cols-4' : 'lg:grid-cols-3'; ?>">
        <?php foreach ($siblings as $i => $sibling) : ?>
          <li <?php echo pwd_reveal($i); ?>>
            <a href="<?php echo esc_url(home_url($sibling['path'])); ?>" data-tilt class="group flex h-full flex-col overflow-hidden rounded-sm border border-slate-200 bg-white transition-colors hover:border-brand-600">
              <span class="block bg-white p-4">
                <img src="<?php echo esc_url(pwd_upload_url($sibling['thumbnail'])); ?>" alt="<?php echo esc_attr($sibling['name']); ?>" loading="lazy" decoding="async" width="700" height="450" class="aspect-[14/9] w-full object-contain transition-transform duration-500 group-hover:scale-105">
              </span>
              <span class="flex flex-1 flex-col border-t border-slate-200 p-5">
                <span class="font-semibold tracking-tight text-slate-900"><?php echo esc_html($sibling['name']); ?></span>
                <span class="mt-auto inline-flex items-center gap-2 pt-4 text-sm font-medium text-brand-700">
                  View details
                  <?php echo pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1'); ?>
                </span>
              </span>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
<?php endif; ?>

<?php
get_template_part('template-parts/cta-cards', null, array(
  'title' => 'Plan your ' . $product['name'] . ' project',
  'ctas' => array(
    array('label' => 'Request a Quote', 'text' => 'Share your openings and our team will follow up.', 'href' => '/request-a-quote/'),
    array('label' => 'Compare ' . $product['style_name'] . ' ' . $group_label, 'text' => 'Every series available in this style, side by side.', 'href' => $product['style_path'] . '#products'),
    array('label' => 'Technical Resources', 'text' => 'Every ' . $series['name'] . ' ' . $product['style_name'] . ' document in one place.', 'href' => add_query_arg(array('series' => $product['series'], 'style' => $product['style']), '/resources/technical/')),
  ),
));
