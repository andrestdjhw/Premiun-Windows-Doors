<?php
// Página de solución por tipo de proyecto (New Construction, Replacement, Remodel, Energy Upgrades).
// El contenido llega en $args desde cada plantilla:
//   hero           args de template-parts/page-hero
//   intro          texto principal
//   factors        array de strings (lo que entra en la decisión)
//   support_title  título de la sección de apoyo
//   support        array de array(title, text)
//   markets        array de slugs: residential | multifamily | commercial
//   resources      array label => ruta
//   cta_title, ctas  args de template-parts/cta-cards
$page = wp_parse_args($args, array(
  'hero' => array(), 'intro' => '', 'factors' => array(), 'support_title' => '', 'support' => array(),
  'markets' => array(), 'resources' => array(), 'cta_title' => '', 'ctas' => array(),
));

$all_markets = array(
  'residential' => array('title' => 'Residential', 'href' => '/solutions/residential/', 'image' => '2026/09/Residential-768x512.jpg'),
  'multifamily' => array('title' => 'Multifamily', 'href' => '/solutions/multifamily/', 'image' => '2026/09/Multifamily-768x487.jpg'),
  'commercial' => array('title' => 'Commercial', 'href' => '/solutions/commercial/', 'image' => '2026/09/Commercial--768x576.jpg'),
);
?>
<main id="content">
  <?php get_template_part('template-parts/page-hero', null, $page['hero']); ?>

  <section class="bg-white py-20 lg:py-28">
    <div class="site-container grid gap-14 lg:grid-cols-12 lg:gap-16">
      <div <?php echo pwd_reveal(); ?> class="lg:col-span-6">
        <h2 class="eyebrow text-brand-600">Overview</h2>
        <p class="mt-6 text-2xl leading-snug font-medium tracking-tight text-slate-900 lg:text-3xl"><?php echo esc_html($page['intro']); ?></p>
      </div>

      <div <?php echo pwd_reveal(1); ?> class="self-center lg:col-span-5 lg:col-start-8">
        <p class="font-mono text-[11px] uppercase tracking-[0.2em] text-slate-500">What goes into the decision</p>
        <ul class="mt-4 grid grid-cols-2 gap-px overflow-hidden rounded-sm border border-slate-200 bg-slate-200">
          <?php foreach ($page['factors'] as $factor) : ?>
            <li class="flex items-center gap-3 bg-white px-4 py-3.5 text-sm font-medium text-slate-800">
              <?php echo pwd_icon('badge-check', 'size-4 shrink-0 text-brand-600'); ?>
              <?php echo esc_html($factor); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>

  <section class="bg-slate-50 py-20 lg:py-28">
    <div class="site-container">
      <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
        <p class="eyebrow text-brand-600">How Premium helps</p>
        <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl"><?php echo esc_html($page['support_title']); ?></h2>
      </div>

      <ol class="mt-12 grid gap-6 md:grid-cols-3">
        <?php foreach ($page['support'] as $i => $item) : ?>
          <li <?php echo pwd_reveal($i); ?> data-tilt class="rounded-sm border border-slate-200 bg-white p-8">
            <span class="font-mono text-sm text-brand-600"><?php echo esc_html(sprintf('%02d', $i + 1)); ?></span>
            <h3 class="mt-5 text-xl font-semibold tracking-tight text-slate-900"><?php echo esc_html($item[0]); ?></h3>
            <p class="mt-3 leading-relaxed text-slate-600"><?php echo esc_html($item[1]); ?></p>
          </li>
        <?php endforeach; ?>
      </ol>
    </div>
  </section>

  <section class="bg-white py-20 lg:py-28">
    <div class="site-container grid gap-14 lg:grid-cols-12 lg:gap-16">
      <div class="lg:col-span-7">
        <div <?php echo pwd_reveal(); ?>>
          <p class="eyebrow text-brand-600">Applies to</p>
          <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Explore by market</h2>
        </div>
        <ul class="mt-10 grid gap-4 <?php echo count($page['markets']) > 2 ? 'sm:grid-cols-3' : 'sm:grid-cols-2'; ?>">
          <?php foreach ($page['markets'] as $i => $slug) : $market = $all_markets[$slug]; ?>
            <li <?php echo pwd_reveal($i); ?>>
              <a href="<?php echo esc_url(home_url($market['href'])); ?>" data-tilt class="group block overflow-hidden rounded-sm border border-slate-200 bg-white">
                <?php echo pwd_media(pwd_upload_url($market['image']), $market['title'] . ' project', 'aspect-[4/3] w-full'); ?>
                <span class="flex items-center justify-between gap-3 p-5 font-semibold tracking-tight text-slate-900">
                  <?php echo esc_html($market['title']); ?>
                  <?php echo pwd_icon('arrow-right', 'size-4 text-brand-700 transition-transform group-hover:translate-x-1'); ?>
                </span>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div <?php echo pwd_reveal(1); ?> class="lg:col-span-4 lg:col-start-9">
        <p class="font-mono text-[11px] uppercase tracking-[0.2em] text-slate-500">Related resources</p>
        <ul class="mt-4 divide-y divide-slate-200 border-y border-slate-200">
          <?php foreach ($page['resources'] as $label => $path) : ?>
            <li>
              <a href="<?php echo esc_url(home_url($path)); ?>" class="group flex items-center justify-between gap-4 py-4 font-medium text-slate-800 transition-colors hover:text-brand-700">
                <?php echo esc_html($label); ?>
                <?php echo pwd_icon('arrow-right', 'size-4 text-brand-700 transition-transform group-hover:translate-x-1'); ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/cta-cards', null, array('title' => $page['cta_title'], 'ctas' => $page['ctas'])); ?>
</main>
