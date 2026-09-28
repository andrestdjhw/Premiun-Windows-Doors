<?php
// "Choose the right path": tres formas de empezar (abertura, estilo o serie).
$paths = array(
  array(
    'number' => '01',
    'title' => 'Start with the room or opening',
    'links' => array(
      'Window openings' => '/windows/',
      'Patio & door openings' => '/doors/',
      'Arch & special shape openings' => '/windows/arch-special-shape-windows/',
    ),
  ),
  array(
    'number' => '02',
    'title' => 'Start with the window or door style',
    'links' => array(
      'Casement & Awning' => '/windows/casement-awning-windows/',
      'Double-Hung' => '/windows/double-hung-windows/',
      'Horizontal Sliding' => '/windows/horizontal-sliding-windows/',
      'Picture' => '/windows/picture-windows/',
      'Patio Sliding' => '/doors/patio-sliding-doors/',
      'French Swing' => '/doors/french-swing-doors/',
      'Multi-Slide' => '/doors/multiple-sliding-doors/',
    ),
  ),
  array(
    'number' => '03',
    'title' => 'Start with the series',
    'links' => array(
      'Zenith' => '/series/zenith/',
      'Timeless' => '/series/timeless/',
      'Serene' => '/series/serene/',
      'Elegance' => '/series/elegance/',
      'Aluminum' => '/series/aluminum/',
    ),
  ),
);
?>
<section class="bg-slate-50 py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
      <p class="eyebrow text-brand-600">Where to start</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Choose the right path</h2>
      <p class="mt-4 text-lg leading-relaxed text-slate-600">Start with the room or opening, the window or door style, or the series that best matches the home&rsquo;s architecture and performance priorities.</p>
    </div>

    <div class="mt-12 grid gap-6 lg:grid-cols-3">
      <?php foreach ($paths as $i => $path) : ?>
        <div <?php echo pwd_reveal($i); ?> data-tilt class="flex flex-col rounded-sm border border-slate-200 bg-white p-8">
          <span class="font-mono text-sm text-brand-600"><?php echo esc_html($path['number']); ?></span>
          <h3 class="mt-5 text-xl font-semibold tracking-tight text-slate-900"><?php echo esc_html($path['title']); ?></h3>
          <ul class="mt-6 flex flex-wrap gap-2">
            <?php foreach ($path['links'] as $label => $url) : ?>
              <li>
                <a href="<?php echo esc_url(home_url($url)); ?>" class="inline-flex rounded-sm border border-slate-200 px-3.5 py-2 text-sm text-slate-700 transition-colors hover:border-brand-600 hover:text-brand-700">
                  <?php echo esc_html($label); ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
