<?php
// Sección: explorar productos (por tipo de producto o por requerimiento).
$categories = array(
  array(
    'title' => 'Windows',
    'href' => home_url('/windows/'),
    'links' => array(
      'Picture' => '/windows/picture/',
      'Casement' => '/windows/casement/',
      'Awning' => '/windows/awning/',
      'Horizontal Sliding' => '/windows/horizontal-sliding/',
      'Single-Hung' => '/windows/single-hung/',
      'Double-Hung' => '/windows/double-hung/',
      'Specialty & Shape' => '/windows/specialty-shape/',
    ),
  ),
  array(
    'title' => 'Doors',
    'href' => home_url('/doors/'),
    'links' => array(
      'Sliding Patio' => '/doors/sliding-patio/',
      'French Swing' => '/doors/french-swing/',
      'Multi-Slide' => '/doors/multi-slide/',
      'Multi-Fold' => '/doors/multi-fold/',
    ),
  ),
);

$requirements = array(
  array('title' => 'Performance', 'text' => 'Energy efficiency, sound control, coastal and high-wind.', 'href' => home_url('/capabilities/')),
  array('title' => 'Material', 'text' => 'Compare vinyl and aluminum series side by side.', 'href' => home_url('/compare-series/')),
  array('title' => 'Design', 'text' => 'Finishes, colors, glass and hardware options.', 'href' => home_url('/capabilities/finishes-colors/')),
);
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
      <p class="eyebrow text-brand-600">Products</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Explore products</h2>
      <p class="mt-4 text-lg leading-relaxed text-slate-600">Choose the product first&mdash;or start with the performance, material, and design requirements of your project.</p>
    </div>

    <div class="mt-12 grid gap-6 lg:grid-cols-2">
      <?php foreach ($categories as $i => $category) : ?>
        <div <?php echo pwd_reveal($i); ?> data-tilt class="flex flex-col rounded-sm border border-slate-200 bg-white p-8 lg:p-10">
          <h3 class="text-2xl font-semibold tracking-tight text-slate-900"><?php echo esc_html($category['title']); ?></h3>
          <ul class="mt-6 flex flex-wrap gap-2">
            <?php foreach ($category['links'] as $label => $path) : ?>
              <li>
                <a href="<?php echo esc_url(home_url($path)); ?>" class="inline-flex rounded-sm border border-slate-200 px-3.5 py-2 text-sm text-slate-700 transition-colors hover:border-brand-600 hover:text-brand-700">
                  <?php echo esc_html($label); ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
          <div class="mt-auto pt-8">
            <?php echo pwd_arrow_link('View all ' . strtolower($category['title']), $category['href']); ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <p data-reveal class="mt-14 text-sm font-semibold text-slate-900">Or start with your requirements</p>
    <div class="mt-4 grid gap-4 md:grid-cols-3">
      <?php foreach ($requirements as $i => $item) : ?>
        <a href="<?php echo esc_url($item['href']); ?>" <?php echo pwd_reveal($i); ?> data-tilt class="group flex items-start justify-between gap-4 rounded-sm border border-slate-200 bg-white p-6 transition-colors hover:border-brand-600">
          <span>
            <span class="block font-semibold text-slate-900"><?php echo esc_html($item['title']); ?></span>
            <span class="mt-1 block text-sm text-slate-600"><?php echo esc_html($item['text']); ?></span>
          </span>
          <?php echo pwd_icon('arrow-right', 'mt-1 size-4 shrink-0 text-brand-700 transition-transform group-hover:translate-x-1'); ?>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
