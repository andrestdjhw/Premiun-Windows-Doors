<?php
// Página de una serie (Zenith, Timeless…). Los productos salen de pwd_product_matrix().
// $args:
//   slug            slug de la serie (zenith, timeless…)
//   intro_lead, intro_text, intro_image (array ancho => archivo), facts (label => valor)
//   features_title, features (array), features_note
//   professional_text
//   ctas            args de template-parts/cta-cards
$page = wp_parse_args($args, array(
  'slug' => '', 'intro_lead' => '', 'intro_text' => '', 'intro_image' => array(), 'facts' => array(),
  'features_title' => '', 'features' => array(), 'features_note' => '', 'professional_text' => '', 'ctas' => array(),
));
$series = pwd_series_data()[$page['slug']];
$matrix = pwd_product_matrix();
$groups = array(
  'windows' => array('label' => 'Windows', 'noun' => 'Window', 'kind' => 'window'),
  'doors' => array('label' => 'Doors', 'noun' => 'Door', 'kind' => 'door'),
);
$docs = function ($type = '') use ($page) {
  return add_query_arg(array_filter(array('series' => $page['slug'], 'type' => $type)), '/resources/technical/');
};
$resources = array(
  array('icon' => 'file-text', 'title' => 'Technical drawings', 'href' => $docs('detail-drawing')),
  array('icon' => 'layers', 'title' => 'Frame options', 'href' => '/capabilities/customization/'),
  array('icon' => 'badge-check', 'title' => 'Glazing options', 'href' => '/capabilities/customization/'),
  array('icon' => 'award', 'title' => 'Certifications', 'href' => $docs('certification')),
  array('icon' => 'file-badge', 'title' => 'Installation documents', 'href' => $docs('installation-guide')),
  array('icon' => 'shield-check', 'title' => 'Warranty', 'href' => '/warranty/'),
);
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container grid items-center gap-14 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-6">
      <h2 class="eyebrow text-brand-600"><?php echo esc_html($series['name'] . ' Series' . ($series['material'] !== $series['name'] ? ' · ' . $series['material'] : '')); ?></h2>
      <p class="mt-6 text-2xl leading-snug font-medium tracking-tight text-slate-900 lg:text-3xl"><?php echo esc_html($page['intro_lead']); ?></p>
      <p class="mt-6 text-lg leading-relaxed text-slate-600"><?php echo esc_html($page['intro_text']); ?></p>
      <?php if ($page['facts']) : ?>
        <dl class="mt-10 grid grid-cols-2 gap-x-8 gap-y-6 border-t border-slate-200 pt-8">
          <?php foreach ($page['facts'] as $label => $value) : ?>
            <div>
              <dt class="text-sm text-slate-500"><?php echo esc_html($label); ?></dt>
              <dd class="mt-1 text-lg font-semibold tracking-tight text-brand-800"><?php echo esc_html($value); ?></dd>
            </div>
          <?php endforeach; ?>
        </dl>
      <?php endif; ?>
    </div>
    <?php if ($page['intro_image']) : ?>
      <div <?php echo pwd_reveal(1, 150); ?> class="lg:col-span-6">
        <img
          src="<?php echo esc_url(pwd_upload_url(reset($page['intro_image']))); ?>"
          srcset="<?php echo esc_attr(implode(', ', array_map(function ($w, $file) { return pwd_upload_url($file) . ' ' . $w . 'w'; }, array_keys($page['intro_image']), $page['intro_image']))); ?>"
          sizes="(min-width: 1024px) 50vw, 100vw"
          alt="<?php echo esc_attr($series['name'] . ' Series windows in a living space'); ?>"
          loading="lazy"
          decoding="async"
          class="aspect-[3/2] w-full rounded-sm object-cover shadow-2xl shadow-brand-950/15"
        >
      </div>
    <?php endif; ?>
  </div>
</section>

<section class="bg-slate-50 py-20 lg:py-28">
  <div class="site-container space-y-20">
    <?php foreach ($groups as $group => $info) :
      $styles = array_values(array_filter($matrix[$group], function ($style) use ($page) { return isset($style['series'][$page['slug']]); }));
      if (!$styles) continue;
      $grid = count($styles) >= 4 ? 'sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5' : 'sm:grid-cols-2 lg:grid-cols-3'; ?>
      <div id="<?php echo esc_attr($group); ?>" class="scroll-mt-28">
        <div <?php echo pwd_reveal(); ?> class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
          <div>
            <p class="eyebrow text-brand-600"><?php echo esc_html(sprintf(_n('%d style', '%d styles', count($styles)), count($styles))); ?></p>
            <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl"><?php echo esc_html($series['name'] . ' ' . $info['label']); ?></h2>
          </div>
          <?php echo pwd_arrow_link('All ' . strtolower($info['label']), home_url('/' . $group . '/')); ?>
        </div>

        <ul class="mt-10 grid gap-6 <?php echo $grid; ?>">
          <?php foreach ($styles as $i => $style) :
            $title = $series['name'] . ' ' . ($style['product'] ?? $style['name']) . ' ' . $info['noun']; ?>
            <li <?php echo pwd_reveal($i); ?>>
              <a href="<?php echo esc_url(home_url($style['href'] . $page['slug'] . '/')); ?>" data-tilt class="group flex h-full flex-col overflow-hidden rounded-sm border border-slate-200 bg-white transition-colors hover:border-brand-600">
                <span class="block bg-white p-4">
                  <img src="<?php echo esc_url(pwd_upload_url($style['series'][$page['slug']])); ?>" alt="<?php echo esc_attr($title); ?>" loading="lazy" decoding="async" width="700" height="450" class="aspect-[14/9] w-full object-contain transition-transform duration-500 group-hover:scale-105">
                </span>
                <span class="flex flex-1 flex-col border-t border-slate-200 p-5">
                  <span class="font-semibold tracking-tight text-slate-900"><?php echo esc_html($title); ?></span>
                  <span class="mt-auto inline-flex items-center gap-2 pt-4 text-sm font-medium text-brand-700">
                    Technical product page
                    <?php echo pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1'); ?>
                  </span>
                </span>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php if ($page['features']) : ?>
  <section class="bg-brand-950 py-20 text-white lg:py-28">
    <div class="site-container">
      <div <?php echo pwd_reveal(); ?> class="max-w-3xl">
        <p class="eyebrow text-brand-100">Key benefits</p>
        <h2 class="mt-4 text-3xl font-semibold tracking-tight lg:text-4xl"><?php echo esc_html($page['features_title']); ?></h2>
      </div>
      <ul class="mt-14 grid gap-px overflow-hidden rounded-sm bg-white/10 sm:grid-cols-2 lg:grid-cols-3">
        <?php foreach ($page['features'] as $i => $feature) : ?>
          <li <?php echo pwd_reveal($i % 3); ?> class="flex items-center gap-4 bg-brand-950 p-6 font-medium">
            <?php echo pwd_icon('badge-check', 'size-6 shrink-0 text-brand-500'); ?>
            <?php echo esc_html($feature); ?>
          </li>
        <?php endforeach; ?>
      </ul>
      <?php if ($page['features_note']) : ?>
        <p <?php echo pwd_reveal(); ?> class="mt-6 text-sm text-white/50"><?php echo esc_html($page['features_note']); ?></p>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>

<section class="bg-white py-20 lg:py-28">
  <div class="site-container grid gap-12 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-5">
      <p class="eyebrow text-brand-600">For professionals</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl"><?php echo esc_html($series['name']); ?> technical data</h2>
      <p class="mt-4 text-lg leading-relaxed text-slate-600"><?php echo esc_html($page['professional_text']); ?></p>
      <div class="mt-8">
        <?php echo pwd_button('All ' . $series['name'] . ' Documents', home_url($docs()), 'outline'); ?>
      </div>
    </div>
    <ul class="grid gap-4 self-center sm:grid-cols-2 lg:col-span-7">
      <?php foreach ($resources as $i => $item) : ?>
        <li <?php echo pwd_reveal($i % 2); ?>>
          <a href="<?php echo esc_url(home_url($item['href'])); ?>" data-tilt class="group flex items-center gap-4 rounded-sm border border-slate-200 bg-white p-5 transition-colors hover:border-brand-600">
            <span class="flex size-11 shrink-0 items-center justify-center rounded-full bg-brand-50 text-brand-700">
              <?php echo pwd_icon($item['icon'], 'size-5'); ?>
            </span>
            <span class="flex-1 font-medium text-slate-900"><?php echo esc_html($item['title']); ?></span>
            <?php echo pwd_icon('arrow-right', 'size-4 text-brand-700 transition-transform group-hover:translate-x-1'); ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<?php get_template_part('template-parts/cta-cards', null, array('title' => 'Specify ' . $series['name'], 'ctas' => $page['ctas']));
