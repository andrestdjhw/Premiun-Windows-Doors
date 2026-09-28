<?php
// Recursos del brief, agrupados para encontrarlos más rápido.
$groups = array(
  array(
    'title' => 'Technical',
    'icon' => 'file-text',
    'links' => array(
      'Technical drawings' => '/resources/technical/?type=detail-drawing',
      'Frame details' => '/professionals/specifications/',
      'Glazing' => '/capabilities/glass-options/',
      'Hardware' => '/capabilities/hardware/',
    ),
  ),
  array(
    'title' => 'Finish & performance',
    'icon' => 'award',
    'links' => array(
      'Colors & finishes' => '/capabilities/finishes-colors/',
      'Certifications & labels' => '/resources/certifications/',
      'Series comparison' => '/series/#compare',
    ),
  ),
  array(
    'title' => 'Documents',
    'icon' => 'layers',
    'links' => array(
      'Warranty' => '/warranty/',
      'Installation documents' => '/resources/technical/?type=installation-guide',
      'Brochures' => '/resources/brochures/',
    ),
  ),
);
?>
<section class="bg-slate-50 py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
      <p class="eyebrow text-brand-600">Resources</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Technical resources for specification</h2>
    </div>

    <div class="mt-12 grid gap-6 lg:grid-cols-3">
      <?php foreach ($groups as $i => $group) : ?>
        <div <?php echo pwd_reveal($i); ?> data-tilt class="rounded-sm border border-slate-200 bg-white p-8">
          <span class="flex size-12 items-center justify-center rounded-full bg-brand-50 text-brand-700">
            <?php echo pwd_icon($group['icon'], 'size-6'); ?>
          </span>
          <h3 class="mt-6 text-xl font-semibold tracking-tight text-slate-900"><?php echo esc_html($group['title']); ?></h3>
          <ul class="mt-4 divide-y divide-slate-200 border-t border-slate-200">
            <?php foreach ($group['links'] as $label => $path) : ?>
              <li>
                <a href="<?php echo esc_url(home_url($path)); ?>" class="group flex items-center justify-between gap-4 py-3.5 font-medium text-slate-800 transition-colors hover:text-brand-700">
                  <?php echo esc_html($label); ?>
                  <?php echo pwd_icon('arrow-right', 'size-4 text-brand-700 transition-transform group-hover:translate-x-1'); ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
