<?php
// Biblioteca de documentos técnicos con filtros por URL (?series=&product=&style=&type=&frame=&q=).
// Funciona sin JavaScript; con JS los selects envían el formulario al cambiar.
$taxonomies = pwd_document_taxonomies();
$per_page = 20;
$current_page = max(1, absint($_GET['pg'] ?? 1));
$search = sanitize_text_field(wp_unslash($_GET['q'] ?? ''));

// Solo PDFs con tipo de documento asignado.
$tax_query = array('relation' => 'AND', array('taxonomy' => 'pwd_doc_type', 'operator' => 'EXISTS'));
$active = array();

foreach ($taxonomies as $taxonomy => $config) {
  $value = sanitize_title(wp_unslash($_GET[$config['param']] ?? ''));
  if (!$value) continue;
  $active[$config['param']] = $value;
  $tax_query[] = array('taxonomy' => $taxonomy, 'field' => 'slug', 'terms' => $value);
}

$documents = new WP_Query(array(
  'post_type' => 'attachment',
  'post_status' => 'inherit',
  'post_mime_type' => 'application/pdf',
  'posts_per_page' => $per_page,
  'paged' => $current_page,
  's' => $search,
  'orderby' => 'title',
  'order' => 'ASC',
  'tax_query' => $tax_query,
));

$page_url = get_permalink();
$has_filters = $active || $search;
$select = 'mt-2 block w-full rounded-sm border border-slate-300 bg-white px-3.5 py-2.5 text-[15px] text-slate-900 outline-none transition-colors focus:border-brand-600 focus:ring-2 focus:ring-brand-600/20';
?>
<section id="documents" class="scroll-mt-28 bg-slate-50 py-16 lg:py-24">
  <div class="site-container grid gap-10 lg:grid-cols-12 lg:gap-12">
    <aside class="lg:col-span-4 xl:col-span-3">
      <form method="get" action="<?php echo esc_url($page_url); ?>#documents" data-autosubmit class="rounded-sm border border-slate-200 bg-white p-6 lg:sticky lg:top-32">
        <div class="flex items-center justify-between">
          <h2 class="font-mono text-[11px] uppercase tracking-[0.2em] text-slate-500">Filter documents</h2>
          <?php if ($has_filters) : ?>
            <a href="<?php echo esc_url($page_url); ?>#documents" class="text-sm font-medium text-brand-700 hover:text-brand-900">Clear all</a>
          <?php endif; ?>
        </div>

        <div class="mt-5">
          <label for="doc-q" class="block text-sm font-medium text-slate-900">Keyword</label>
          <div class="mt-2 flex">
            <input id="doc-q" name="q" type="search" value="<?php echo esc_attr($search); ?>" placeholder="e.g. casement, NFRC…" class="<?php echo $select; ?> mt-0 rounded-r-none">
            <button type="submit" aria-label="Search documents" class="rounded-r-sm bg-brand-800 px-3.5 text-white transition-colors hover:bg-brand-900">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true" class="size-5"><circle cx="11" cy="11" r="8" /><path d="m21 21-4.3-4.3" /></svg>
            </button>
          </div>
        </div>

        <?php foreach ($taxonomies as $taxonomy => $config) :
          $terms = get_terms(array('taxonomy' => $taxonomy, 'hide_empty' => false));
          // "Frame type where applicable": el filtro solo aparece si hay tipos cargados.
          if (is_wp_error($terms) || !$terms) continue; ?>
          <div class="mt-5">
            <label for="doc-<?php echo esc_attr($config['param']); ?>" class="block text-sm font-medium text-slate-900"><?php echo esc_html($config['label']); ?></label>
            <select id="doc-<?php echo esc_attr($config['param']); ?>" name="<?php echo esc_attr($config['param']); ?>" class="<?php echo $select; ?>">
              <option value="">All</option>
              <?php foreach ($terms as $term) : ?>
                <option value="<?php echo esc_attr($term->slug); ?>" <?php selected($active[$config['param']] ?? '', $term->slug); ?>><?php echo esc_html($term->name); ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        <?php endforeach; ?>

        <button type="submit" data-autosubmit-hide class="mt-6 w-full rounded-sm bg-brand-800 px-4 py-3 text-[15px] font-medium text-white transition-colors hover:bg-brand-900">Apply filters</button>
      </form>
    </aside>

    <div class="lg:col-span-8 xl:col-span-9">
      <div class="flex flex-wrap items-baseline justify-between gap-3 border-b border-slate-200 pb-4">
        <h2 class="text-2xl font-semibold tracking-tight text-slate-900">Documents</h2>
        <p class="text-sm text-slate-500" aria-live="polite">
          <?php echo esc_html(sprintf(_n('%d document', '%d documents', $documents->found_posts), $documents->found_posts)); ?>
        </p>
      </div>

      <?php if ($documents->have_posts()) : ?>
        <ul class="mt-2 divide-y divide-slate-200">
          <?php while ($documents->have_posts()) : $documents->the_post();
            $id = get_the_ID();
            $chips = array();
            foreach (array('pwd_doc_type', 'pwd_series', 'pwd_product', 'pwd_style', 'pwd_frame_type') as $taxonomy) {
              foreach (wp_get_object_terms($id, $taxonomy, array('fields' => 'names')) as $name) $chips[] = array($taxonomy, $name);
            }
            ?>
            <li class="flex flex-col gap-4 py-5 sm:flex-row sm:items-center">
              <span class="flex size-12 shrink-0 items-center justify-center rounded-sm bg-brand-50 text-brand-700">
                <?php echo pwd_icon('file-text', 'size-6'); ?>
              </span>
              <div class="min-w-0 flex-1">
                <p class="font-semibold text-slate-900"><?php the_title(); ?></p>
                <ul class="mt-2 flex flex-wrap gap-1.5">
                  <?php foreach ($chips as $chip) : ?>
                    <li class="rounded-sm px-2 py-0.5 text-xs font-medium <?php echo $chip[0] === 'pwd_doc_type' ? 'bg-brand-800 text-white' : 'bg-slate-100 text-slate-700'; ?>"><?php echo esc_html($chip[1]); ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <?php echo pwd_download_button($id); ?>
            </li>
          <?php endwhile; wp_reset_postdata(); ?>
        </ul>

        <?php
        $pagination = paginate_links(array(
          'base' => add_query_arg('pg', '%#%') . '#documents',
          'format' => '',
          'current' => $current_page,
          'total' => $documents->max_num_pages,
          'type' => 'array',
          'prev_text' => '&larr;',
          'next_text' => '&rarr;',
        ));
        if ($pagination) : ?>
          <nav aria-label="Documents pagination" class="mt-8 flex flex-wrap gap-2 [&_.current]:bg-brand-800 [&_.current]:text-white [&>*]:inline-flex [&>*]:min-w-10 [&>*]:justify-center [&>*]:rounded-sm [&>*]:border [&>*]:border-slate-200 [&>*]:bg-white [&>*]:px-3 [&>*]:py-2 [&>*]:text-sm">
            <?php echo implode('', $pagination); ?>
          </nav>
        <?php endif; ?>
      <?php else : ?>
        <div class="mt-8 rounded-sm border border-dashed border-slate-300 bg-white p-10 text-center">
          <span class="mx-auto flex size-14 items-center justify-center rounded-full bg-brand-50 text-brand-700">
            <?php echo pwd_icon('file-text', 'size-7'); ?>
          </span>
          <p class="mt-5 text-lg font-semibold text-slate-900">
            <?php echo $has_filters ? 'No documents match these filters.' : 'Documents are being added.'; ?>
          </p>
          <p class="mx-auto mt-2 max-w-md text-slate-600">
            Can&rsquo;t find what you need? Our project-support team can send the right document for your project.
          </p>
          <div class="mt-6 flex flex-col justify-center gap-3 sm:flex-row">
            <?php if ($has_filters) : ?>
              <a href="<?php echo esc_url($page_url); ?>#documents" class="inline-flex justify-center rounded-sm border border-slate-300 px-5 py-3 text-sm font-medium text-slate-700 transition-colors hover:border-brand-600 hover:text-brand-700">Clear filters</a>
            <?php endif; ?>
            <?php echo pwd_button('Contact Project Support', home_url('/professionals/request-support/')); ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
