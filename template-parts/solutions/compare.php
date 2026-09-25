<?php
// Comparativa por mercado. Audiencias tomadas de los briefs de cada página de solución.
$markets = array(
  array(
    'title' => 'Residential',
    'audience' => 'Homeowners, residential dealers, builders',
    'focus' => 'Design, glass, color, hardware and configuration options for replacement and new construction.',
    'resources' => array('Series comparison', 'Warranty information', 'Service resources'),
    'cta' => array('Explore Residential', '/solutions/residential/'),
  ),
  array(
    'title' => 'Multifamily',
    'audience' => 'Developers, GCs, purchasing, architects, dealers',
    'focus' => 'Consistency across repeated openings, configurations, documents and project requirements.',
    'resources' => array('Submittals & documentation', 'Project support', 'Packaging & delivery'),
    'cta' => array('Explore Multifamily', '/solutions/multifamily/'),
  ),
  array(
    'title' => 'Commercial',
    'audience' => 'Architects, GCs, developers, dealers',
    'focus' => 'Specification, documentation and product fit where the project requirements support it.',
    'resources' => array('Drawings & frame details', 'Certifications', 'Aluminum Series'),
    'cta' => array('Explore Commercial', '/solutions/commercial/'),
  ),
);
?>
<section class="bg-slate-50 py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
      <p class="eyebrow text-brand-600">At a glance</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">What each market needs</h2>
    </div>

    <div class="mt-12 grid gap-6 lg:grid-cols-3">
      <?php foreach ($markets as $i => $market) : ?>
        <article <?php echo pwd_reveal($i); ?> data-tilt class="flex flex-col rounded-sm border border-slate-200 bg-white p-8">
          <h3 class="text-2xl font-semibold tracking-tight text-slate-900"><?php echo esc_html($market['title']); ?></h3>
          <dl class="mt-6 space-y-5 border-t border-slate-200 pt-6">
            <div>
              <dt class="font-mono text-[11px] uppercase tracking-[0.2em] text-slate-500">Who it&rsquo;s for</dt>
              <dd class="mt-1.5 font-medium text-slate-900"><?php echo esc_html($market['audience']); ?></dd>
            </div>
            <div>
              <dt class="font-mono text-[11px] uppercase tracking-[0.2em] text-slate-500">Focus</dt>
              <dd class="mt-1.5 leading-relaxed text-slate-600"><?php echo esc_html($market['focus']); ?></dd>
            </div>
            <div>
              <dt class="font-mono text-[11px] uppercase tracking-[0.2em] text-slate-500">Key resources</dt>
              <dd class="mt-2">
                <ul class="space-y-1.5">
                  <?php foreach ($market['resources'] as $resource) : ?>
                    <li class="flex items-center gap-2.5 text-sm text-slate-700">
                      <?php echo pwd_icon('badge-check', 'size-4 shrink-0 text-brand-600'); ?>
                      <?php echo esc_html($resource); ?>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </dd>
            </div>
          </dl>
          <div class="mt-auto pt-8">
            <?php echo pwd_arrow_link($market['cta'][0], home_url($market['cta'][1])); ?>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
