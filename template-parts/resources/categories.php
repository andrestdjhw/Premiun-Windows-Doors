<?php
// Las 6 categorías del brief. Technical y Brochures muestran cuántos documentos hay publicados.
$count_documents = function ($doc_type = '') {
  $clause = $doc_type
    ? array('taxonomy' => 'pwd_doc_type', 'field' => 'slug', 'terms' => $doc_type)
    : array('taxonomy' => 'pwd_doc_type', 'operator' => 'EXISTS');
  $query = new WP_Query(array(
    'post_type' => 'attachment',
    'post_status' => 'inherit',
    'post_mime_type' => 'application/pdf',
    'posts_per_page' => 1,
    'fields' => 'ids',
    'no_found_rows' => false,
    'tax_query' => array($clause),
  ));
  return (int) $query->found_posts;
};

$categories = array(
  array('icon' => 'file-text', 'title' => 'Technical Resources', 'text' => 'Detail drawings, installation guides and product documents, searchable by series and product.', 'href' => '/resources/technical/', 'count' => $count_documents()),
  array('icon' => 'file-badge', 'title' => 'Brochures & Literature', 'text' => 'Current brochures and series literature, ready to download.', 'href' => '/resources/brochures/', 'count' => $count_documents('brochure')),
  array('icon' => 'award', 'title' => 'Certifications', 'text' => 'AAMA and NFRC certifications and labels, depending on series, model and configuration.', 'href' => '/resources/technical/?type=certification', 'count' => $count_documents('certification')),
  array('icon' => 'shield-check', 'title' => 'Warranty', 'text' => 'Warranty terms and information for Premium products.', 'href' => '/warranty/', 'count' => null),
  array('icon' => 'factory', 'title' => 'Service Request', 'text' => 'Request service for an installed Premium window or door.', 'href' => '/service-request/', 'count' => null),
  array('icon' => 'badge-check', 'title' => 'FAQs', 'text' => 'Answers to common questions about products, ordering and support.', 'href' => '/faqs/', 'count' => null),
);
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
      <p class="eyebrow text-brand-600">Resource categories</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Everything in one place</h2>
    </div>

    <ul class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      <?php foreach ($categories as $i => $item) : ?>
        <li <?php echo pwd_reveal($i % 3); ?>>
          <a href="<?php echo esc_url(home_url($item['href'])); ?>" data-tilt class="group flex h-full flex-col rounded-sm border border-slate-200 bg-white p-8 transition-colors hover:border-brand-600">
            <span class="flex items-start justify-between gap-4">
              <span class="flex size-12 items-center justify-center rounded-full bg-brand-50 text-brand-700">
                <?php echo pwd_icon($item['icon'], 'size-6'); ?>
              </span>
              <?php if ($item['count']) : ?>
                <span class="rounded-sm bg-slate-100 px-2.5 py-1 font-mono text-xs text-slate-600">
                  <?php echo esc_html(sprintf(_n('%d document', '%d documents', $item['count']), $item['count'])); ?>
                </span>
              <?php endif; ?>
            </span>
            <span class="mt-6 text-xl font-semibold tracking-tight text-slate-900"><?php echo esc_html($item['title']); ?></span>
            <span class="mt-2 leading-relaxed text-slate-600"><?php echo esc_html($item['text']); ?></span>
            <span class="mt-auto inline-flex items-center gap-2 pt-7 text-sm font-medium text-brand-700">
              Open
              <?php echo pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1'); ?>
            </span>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
