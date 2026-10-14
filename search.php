<?php
// Resultados de búsqueda (?s=). No usa la consulta principal de WordPress: busca en el índice del tema
// (inc/search.php). Filtro opcional ?type=page|product|document|article.

$query = trim(get_search_query(false));
$type = sanitize_key(wp_unslash($_GET['type'] ?? ''));

$groups = array(
  'page' => array('label' => 'Pages', 'items' => array()),
  'product' => array('label' => 'Products', 'items' => array()),
  'document' => array('label' => 'Documents', 'items' => array()),
  'article' => array('label' => 'Articles', 'items' => array()),
);
foreach (pwd_search_items($query) as $item) $groups[$item['type']]['items'][] = $item;
$groups['document']['items'] = pwd_search_documents($query);
$groups['article']['items'] = pwd_search_articles($query);

if (!isset($groups[$type])) $type = '';
$total = array_sum(array_map(function ($group) { return count($group['items']); }, $groups));
// En "All" cada grupo muestra un adelanto; el filtro de su tipo muestra todo.
$preview = array('page' => 8, 'product' => 8, 'document' => 6, 'article' => 4);
$search_url = function ($args = array()) use ($query) {
  return add_query_arg(array_merge(array('s' => $query), $args), home_url('/'));
};

pwd_seo(
  $query ? sprintf('Search results for “%s” | Premium Windows & Doors', $query) : 'Search | Premium Windows & Doors',
  'Search Premium Windows & Doors products, series, solutions and resources.',
  '/?s=' . rawurlencode($query)
);

$suggestions = array(
  'Windows' => '/windows/',
  'Doors' => '/doors/',
  'Compare Series' => '/series/#compare',
  'Technical Resources' => '/resources/technical/',
  'Warranty' => '/warranty/',
  'Request a Quote' => '/request-a-quote/',
);

get_header(); ?>

<main id="content">
  <section class="relative isolate overflow-hidden bg-brand-gradient py-16 text-white lg:py-20">
    <?php echo pwd_brand_mark('top-right', 'dark'); ?>
    <div class="site-container">
      <p class="eyebrow text-brand-100">Search</p>
      <h1 class="mt-4 text-3xl font-semibold tracking-tight lg:text-4xl">
        <?php if ($query) : ?>
          <?php echo esc_html(sprintf(_n('%d result for', '%d results for', $total), $total)); ?>
          <span class="text-brand-300">“<?php echo esc_html($query); ?>”</span>
        <?php else : ?>
          Search Premium Windows &amp; Doors
        <?php endif; ?>
      </h1>

      <form action="<?php echo esc_url(home_url('/')); ?>" method="get" role="search" class="mt-8 flex max-w-2xl gap-3">
        <label for="search-page-input" class="sr-only">Search</label>
        <div class="relative flex-1">
          <?php echo pwd_icon('search', 'pointer-events-none absolute top-1/2 left-4 size-5 -translate-y-1/2 text-slate-400'); ?>
          <input
            id="search-page-input"
            type="search"
            name="s"
            value="<?php echo esc_attr($query); ?>"
            placeholder="Search products, series, resources…"
            class="w-full rounded-sm bg-white py-3.5 pr-4 pl-12 text-slate-900 outline-none placeholder:text-slate-400 focus:ring-2 focus:ring-brand-300"
          >
        </div>
        <button type="submit" class="btn-sweep group inline-flex items-center gap-2 rounded-sm bg-white px-6 py-3.5 text-[15px] font-medium text-brand-900 [--sweep-color:var(--color-brand-600)] hover:text-white">
          <span class="inline-flex items-center gap-2">Search <?php echo pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1'); ?></span>
        </button>
      </form>
    </div>
  </section>

  <section class="bg-surface py-12 lg:py-16">
    <div class="site-container">
      <?php if ($total) : ?>
        <nav aria-label="Filter results" class="flex flex-wrap gap-2">
          <?php
          $tab = function ($label, $count, $value) use ($type, $search_url) {
            $active = $type === $value;
            printf(
              '<a href="%s" %s class="inline-flex items-center gap-2 rounded-sm border px-4 py-2 text-sm font-medium transition-colors %s">%s<span class="font-mono text-xs %s">%d</span></a>',
              esc_url($search_url($value ? array('type' => $value) : array())),
              $active ? 'aria-current="page"' : '',
              $active ? 'border-brand-800 bg-brand-800 text-white' : 'border-slate-300 bg-white text-slate-700 hover:border-brand-600',
              esc_html($label),
              $active ? 'text-white/70' : 'text-slate-400',
              $count
            );
          };
          $tab('All', $total, '');
          foreach ($groups as $key => $group) {
            if ($group['items']) $tab($group['label'], count($group['items']), $key);
          }
          ?>
        </nav>

        <div class="mt-10 space-y-14">
          <?php foreach ($groups as $key => $group) :
            if (!$group['items'] || ($type && $type !== $key)) continue;
            $items = $type ? $group['items'] : array_slice($group['items'], 0, $preview[$key]);
            $more = count($group['items']) - count($items); ?>
            <div>
              <div class="flex items-end justify-between gap-4 border-b border-mist pb-4">
                <h2 class="text-xl font-semibold tracking-tight text-slate-900"><?php echo esc_html($group['label']); ?></h2>
                <?php if ($more > 0) echo pwd_arrow_link(sprintf('View all %d', count($group['items'])), $search_url(array('type' => $key)), 'text-sm text-brand-700 hover:text-brand-900'); ?>
              </div>

              <?php if ($key === 'product') : ?>
                <ul class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                  <?php foreach ($items as $item) : ?>
                    <li>
                      <a href="<?php echo esc_url($item['url']); ?>" class="group flex h-full flex-col overflow-hidden rounded-sm border border-slate-200 bg-white transition-colors hover:border-brand-600">
                        <span class="flex aspect-[4/3] items-center justify-center bg-white p-6">
                          <?php if (!empty($item['image'])) : ?>
                            <img src="<?php echo esc_url(pwd_upload_url($item['image'])); ?>" alt="" loading="lazy" decoding="async" class="max-h-full w-auto object-contain transition-transform duration-500 group-hover:scale-105">
                          <?php endif; ?>
                        </span>
                        <span class="border-t border-slate-100 p-5">
                          <span class="block font-mono text-[11px] tracking-[0.15em] text-brand-600 uppercase"><?php echo esc_html($item['label']); ?></span>
                          <span class="mt-2 block font-semibold text-slate-900 transition-colors group-hover:text-brand-700"><?php echo esc_html($item['title']); ?></span>
                        </span>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>

              <?php elseif ($key === 'document') : ?>
                <ul class="mt-6 grid gap-3 md:grid-cols-2">
                  <?php foreach ($items as $item) : ?>
                    <li>
                      <a href="<?php echo esc_url($item['url']); ?>" target="_blank" rel="noopener" class="group flex items-center gap-4 rounded-sm border border-slate-200 bg-white p-4 transition-colors hover:border-brand-600">
                        <span class="flex size-11 shrink-0 items-center justify-center rounded-sm bg-brand-50 text-brand-700"><?php echo pwd_icon('file-text', 'size-5'); ?></span>
                        <span class="min-w-0 flex-1">
                          <span class="block truncate font-medium text-slate-900"><?php echo esc_html($item['title']); ?></span>
                          <span class="mt-0.5 block text-sm text-slate-500"><?php echo esc_html($item['label']); ?> · PDF</span>
                        </span>
                        <?php echo pwd_icon('download', 'size-4 shrink-0 text-brand-700'); ?>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>

              <?php else : ?>
                <ul class="mt-6 grid gap-3">
                  <?php foreach ($items as $item) : ?>
                    <li>
                      <a href="<?php echo esc_url($item['url']); ?>" class="group flex items-start gap-6 rounded-sm border border-slate-200 bg-white p-5 transition-colors hover:border-brand-600 lg:p-6">
                        <span class="min-w-0 flex-1">
                          <span class="block font-mono text-[11px] tracking-[0.15em] text-brand-600 uppercase"><?php echo esc_html($item['label']); ?></span>
                          <span class="mt-2 block text-lg font-semibold tracking-tight text-slate-900 transition-colors group-hover:text-brand-700"><?php echo esc_html($item['title']); ?></span>
                          <?php if (!empty($item['text'])) : ?>
                            <span class="mt-1.5 block leading-relaxed text-slate-600"><?php echo esc_html($item['text']); ?></span>
                          <?php endif; ?>
                          <?php if (!empty($item['path'])) : ?>
                            <span class="mt-2 block font-mono text-xs text-slate-400"><?php echo esc_html(untrailingslashit(wp_parse_url(home_url(), PHP_URL_HOST) . $item['path'])); ?></span>
                          <?php endif; ?>
                        </span>
                        <?php echo pwd_icon('arrow-right', 'mt-1 size-5 shrink-0 text-brand-700 transition-transform group-hover:translate-x-1'); ?>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>

      <?php else : ?>
        <div class="mx-auto max-w-2xl rounded-sm border border-slate-200 bg-white p-10 text-center lg:p-14">
          <span class="mx-auto flex size-14 items-center justify-center rounded-full bg-brand-50 text-brand-700"><?php echo pwd_icon('search', 'size-6'); ?></span>
          <h2 class="mt-6 text-2xl font-semibold tracking-tight text-slate-900">
            <?php echo $query ? 'No results found' : 'What are you looking for?'; ?>
          </h2>
          <p class="mt-3 text-slate-600">
            <?php echo $query ? 'Try a different term, like a product style, a series name or a document type.' : 'Search products, series, solutions and resources.'; ?>
          </p>
          <ul class="mt-8 flex flex-wrap justify-center gap-2">
            <?php foreach ($suggestions as $label => $path) : ?>
              <li><a href="<?php echo esc_url(home_url($path)); ?>" class="inline-flex rounded-sm border border-slate-300 px-4 py-2 text-sm font-medium text-slate-700 transition-colors hover:border-brand-600 hover:text-brand-700"><?php echo esc_html($label); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer();
