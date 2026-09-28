<?php
// Accesos directos a la biblioteca técnica por tipo de documento y por serie
// (se generan desde las taxonomías, así que reflejan lo que se agregue en el admin).
$groups = array(
  array('title' => 'Find a document by type', 'taxonomy' => 'pwd_doc_type', 'param' => 'type'),
  array('title' => 'Find documents by series', 'taxonomy' => 'pwd_series', 'param' => 'series'),
);
?>
<section class="bg-slate-50 py-20 lg:py-24">
  <div class="site-container grid gap-12 lg:grid-cols-2 lg:gap-16">
    <?php foreach ($groups as $i => $group) :
      $terms = get_terms(array('taxonomy' => $group['taxonomy'], 'hide_empty' => false));
      if (is_wp_error($terms) || !$terms) continue; ?>
      <div <?php echo pwd_reveal($i); ?>>
        <h2 class="text-2xl font-semibold tracking-tight text-slate-900"><?php echo esc_html($group['title']); ?></h2>
        <ul class="mt-6 flex flex-wrap gap-2">
          <?php foreach ($terms as $term) : ?>
            <li>
              <a href="<?php echo esc_url(add_query_arg($group['param'], $term->slug, home_url('/resources/technical/')) . '#documents'); ?>" class="inline-flex items-center gap-2 rounded-sm border border-slate-200 bg-white px-4 py-2.5 text-sm font-medium text-slate-700 transition-colors hover:border-brand-600 hover:text-brand-700">
                <?php echo esc_html($term->name); ?>
                <?php if ($term->count) : ?>
                  <span class="font-mono text-xs text-slate-400"><?php echo esc_html($term->count); ?></span>
                <?php endif; ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endforeach; ?>
  </div>
</section>
