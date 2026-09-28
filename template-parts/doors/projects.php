<?php
// For larger projects: páginas de producto y recursos técnicos juntos.
$resources = array(
  array('icon' => 'file-text', 'title' => 'Door drawings', 'href' => '/resources/technical/?product=door&type=detail-drawing'),
  array('icon' => 'layers', 'title' => 'Frame options', 'href' => '/series/#compare'),
  array('icon' => 'badge-check', 'title' => 'Glazing', 'href' => '/capabilities/customization/'),
  array('icon' => 'award', 'title' => 'Certifications', 'href' => '/resources/technical/?product=door&type=certification'),
);
$solutions = array('Multifamily' => '/solutions/multifamily/', 'Commercial' => '/solutions/commercial/');
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container grid gap-12 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-5">
      <p class="eyebrow text-brand-600">For larger projects</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Product pages and technical resources, together.</h2>
      <p class="mt-4 text-lg leading-relaxed text-slate-600">
        For multifamily and commercial scopes, use the product pages and technical resources together. Drawings, frame options, glazing, certifications, and approved documents stay directly accessible.
      </p>
      <ul class="mt-8 flex flex-wrap gap-x-8 gap-y-3">
        <?php foreach ($solutions as $label => $path) : ?>
          <li><?php echo pwd_arrow_link($label . ' solutions', home_url($path)); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <ul class="grid gap-4 self-center sm:grid-cols-2 lg:col-span-7">
      <?php foreach ($resources as $i => $item) : ?>
        <li <?php echo pwd_reveal($i % 2); ?>>
          <a href="<?php echo esc_url(home_url($item['href'])); ?>" data-tilt class="group flex items-center gap-4 rounded-sm border border-slate-200 bg-white p-5 transition-colors hover:border-brand-600">
            <span class="flex size-11 shrink-0 items-center justify-center rounded-full bg-brand-50 text-brand-700">
              <?php echo pwd_icon($item['icon'], 'size-5'); ?>
            </span>
            <span class="flex-1 font-medium text-slate-900"><?php echo esc_html($item['title']); ?></span>
            <?php echo pwd_icon('arrow-right', 'size-4 text-brand-700 transition-transform group-hover:translate-x-1'); ?>
          </a>
        </li>
      <?php endforeach; ?>
      <li <?php echo pwd_reveal(2); ?> class="sm:col-span-2">
        <?php echo pwd_button('All Door Documents', home_url('/resources/technical/?product=door'), 'outline'); ?>
      </li>
    </ul>
  </div>
</section>
