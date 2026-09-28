<?php
// Comparison positioning: el rol de cada serie (textos del brief).
// Aluminum: el brief de Series Overview llega cortado antes de su texto; se usa el intro del brief de Aluminum Series.
$positioning = array(
  'zenith' => 'Performance vinyl for bold modern aesthetics and demanding heat conditions, with black capstock protection and available Blinds + Glass options on select products.',
  'timeless' => 'A versatile vinyl line focused on dependable everyday performance, streamlined design, and long-term value.',
  'serene' => 'Vinyl solutions focused on acoustic comfort, energy performance, design versatility, and broader door configurations.',
  'elegance' => 'Traditional proportions, wider profiles, and classic styling for projects that call for architectural continuity and enduring character.',
  'aluminum' => 'Built for projects that prioritize modern proportions, material expression, and larger architectural openings.',
);
$series = pwd_series_data();
$matrix = pwd_product_matrix();

// Cuántos estilos de ventana y puerta ofrece cada serie.
$count_styles = function ($slug, $group) use ($matrix) {
  return count(array_filter($matrix[$group], function ($style) use ($slug) { return isset($style['series'][$slug]); }));
};
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
      <p class="eyebrow text-brand-600">Comparison positioning</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Which series fits the project?</h2>
    </div>

    <ol class="mt-14 space-y-6">
      <?php $i = 0; foreach ($positioning as $slug => $text) : $item = $series[$slug]; ?>
        <li <?php echo pwd_reveal(); ?>>
          <a href="<?php echo esc_url(home_url('/series/' . $slug . '/')); ?>" data-tilt class="group grid overflow-hidden rounded-sm border border-slate-200 bg-white transition-colors hover:border-brand-600 md:grid-cols-12">
            <span class="relative block overflow-hidden md:col-span-5 <?php echo $i % 2 ? 'md:order-2' : ''; ?>">
              <?php echo pwd_media(pwd_upload_url($item['image']), $item['name'] . ' Series home exterior', 'aspect-[16/10] size-full transition-transform duration-700 group-hover:scale-105 md:aspect-auto md:absolute md:inset-0'); ?>
            </span>
            <span class="flex flex-col p-8 md:col-span-7 lg:p-12">
              <span class="flex flex-wrap items-center gap-3">
                <span class="font-mono text-sm text-brand-600"><?php echo esc_html(sprintf('%02d', $i + 1)); ?></span>
                <span class="rounded-sm bg-brand-50 px-2 py-0.5 text-xs font-medium text-brand-800"><?php echo esc_html($item['material']); ?></span>
              </span>
              <span class="mt-5 text-3xl font-semibold tracking-tight text-slate-900"><?php echo esc_html($item['name']); ?> Series</span>
              <span class="mt-1 font-mono text-xs uppercase tracking-[0.2em] text-slate-500"><?php echo esc_html($item['tagline']); ?></span>
              <span class="mt-5 text-lg leading-relaxed text-slate-600"><?php echo esc_html($text); ?></span>
              <span class="mt-6 flex flex-wrap gap-x-8 gap-y-2 border-t border-slate-200 pt-5 text-sm text-slate-600">
                <span><strong class="font-semibold text-slate-900"><?php echo esc_html($count_styles($slug, 'windows')); ?></strong> window styles</span>
                <span><strong class="font-semibold text-slate-900"><?php echo esc_html($count_styles($slug, 'doors')); ?></strong> door styles</span>
              </span>
              <span class="mt-auto inline-flex items-center gap-2 pt-8 text-sm font-medium text-brand-700">
                Explore <?php echo esc_html($item['name']); ?> Series
                <?php echo pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1'); ?>
              </span>
            </span>
          </a>
        </li>
      <?php $i++; endforeach; ?>
    </ol>
  </div>
</section>
