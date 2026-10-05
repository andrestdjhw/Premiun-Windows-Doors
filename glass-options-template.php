<?php
/*
 * Template Name: Glass Options
 *
 * /capabilities/glass-options/. LoĒ³-366®, paquetes de vidrio, texturas y Blinds + Glass.
 * Fuente: fichas de producto y premiumwindows.com/resources/glass/ (revisado 2026-10-03).
 * La disponibilidad por serie sale de pwd_series_options().
 */

pwd_seo(
  'Window & Door Glass Options | LoĒ³-366, Laminated & Triple Pane | Premium',
  'Cardinal LoĒ³-366 glass comes standard. Compare Dual, Dura (laminated) and Triple Pane glazing, privacy glass textures and Blinds + Glass by series.',
  '/capabilities/glass-options/'
);

$glazing = pwd_product_glazing();
$rows = array();
foreach (pwd_series_data() as $slug => $series) {
  $options = pwd_series_options($slug);
  $row = array($series['name']);
  foreach (array_keys($glazing) as $name) $row[] = in_array($name, $options['glazing'], true) ? 'Available' : '—';
  $row[] = $options['textures'] ? 'Available' : '—';
  $row[] = $options['blinds'] ? 'Available' : '—';
  $rows[] = $row;
}

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Capabilities', '/capabilities/'), array('Glass Options', '/capabilities/glass-options/')),
    'eyebrow' => 'Glass Options',
    'title' => array(
      array('Performance glass', 'light'),
      array('comes standard.', 'accent'),
    ),
    'text' => 'Every Premium window and door starts with Cardinal LoĒ³-366® glass. Add laminated or triple-pane glazing, privacy textures or blinds between the glass.',
    'image' => array('1536' => '2026/09/VIZ-Timeless-Interior-Bay-Nook.jpg'),
    'buttons' => array(
      array('Glazing Packages', '#glazing', 'light'),
      array('Glass Textures', '#textures', 'outline-light'),
    ),
  ));

  get_template_part('template-parts/sections', null, array('sections' => array(
    array(
      'type' => 'intro',
      'eyebrow' => 'What is LoĒ³-366®?',
      'lead' => 'Cardinal LoĒ³-366® glass comes standard in all Premium Windows products.',
      'text' => 'Its triple-layer silver coating is designed for year-round comfort and energy savings in all climates. Insulated glass units add argon gas between the panes and Duraseal® warm-edge spacers to reduce heat transfer at the edge of the glass.',
      'facts' => array('Coating' => 'LoĒ³-366®', 'Gas fill' => 'Argon', 'Spacer' => 'Duraseal® warm-edge', 'Grids' => 'Between the glass'),
    ),
  )));
  ?>

  <section id="glazing" class="scroll-mt-28 bg-slate-50 py-20 lg:py-28">
    <div class="site-container">
      <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
        <p class="eyebrow text-brand-600">Glazing packages</p>
        <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Dual, Dura and Triple Pane</h2>
        <p class="mt-4 text-lg leading-relaxed text-slate-600">Dura Pane adds a laminated pane for security and sound reduction; Triple Pane adds a third pane for higher thermal performance.</p>
      </div>
      <ul class="mt-12 grid gap-6 sm:grid-cols-3">
        <?php $i = 0; foreach ($glazing as $name => $option) : ?>
          <li <?php echo pwd_reveal($i++); ?> class="overflow-hidden rounded-sm border border-slate-200 bg-white">
            <img src="<?php echo esc_url(pwd_upload_url($option['image'])); ?>" alt="<?php echo esc_attr($name . ' glazing section'); ?>" loading="lazy" decoding="async" class="aspect-square w-full object-cover">
            <div class="border-t border-slate-200 p-6">
              <h3 class="text-lg font-semibold tracking-tight text-slate-900"><?php echo esc_html($name); ?></h3>
              <p class="mt-1 text-sm text-slate-600"><?php echo esc_html($option['spec']); ?></p>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <section id="textures" class="scroll-mt-28 bg-white py-20 lg:py-28" data-glass-textures>
    <div class="site-container">
      <div <?php echo pwd_reveal(); ?> class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
        <div class="max-w-2xl">
          <p class="eyebrow text-brand-600">Privacy glass</p>
          <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Glass textures</h2>
          <p class="mt-4 text-lg leading-relaxed text-slate-600">Textured patterns add privacy without giving up daylight. Other patterns are available on request. Ask your dealer.</p>
        </div>
        <div role="group" aria-label="Time of day" class="flex shrink-0 gap-2">
          <?php foreach (array('morning', 'afternoon', 'night') as $time) : ?>
            <button type="button" data-time-to="<?php echo $time; ?>" aria-pressed="<?php echo $time === 'afternoon' ? 'true' : 'false'; ?>" class="rounded-sm border border-slate-300 bg-white px-3.5 py-2 text-sm font-medium text-slate-700 capitalize transition-colors hover:border-brand-600 aria-pressed:border-brand-800 aria-pressed:bg-brand-800 aria-pressed:text-white"><?php echo esc_html($time); ?></button>
          <?php endforeach; ?>
        </div>
      </div>
      <ul class="mt-12 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-5">
        <?php foreach (array('Obscure', 'Reed', 'Rain', 'Glue Chip', 'Flemish') as $i => $texture) : ?>
          <li <?php echo pwd_reveal($i); ?>>
            <?php foreach (array('morning', 'afternoon', 'night') as $time) : ?>
              <img src="<?php echo esc_url(pwd_upload_url(pwd_product_texture_image($texture, $time))); ?>" alt="<?php echo esc_attr($texture . ' glass in the ' . $time); ?>" loading="lazy" decoding="async" data-time="<?php echo $time; ?>" <?php echo $time === 'afternoon' ? '' : 'hidden'; ?> class="aspect-square w-full rounded-sm object-cover">
            <?php endforeach; ?>
            <p class="mt-3 font-medium text-slate-900"><?php echo esc_html($texture); ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <?php
  get_template_part('template-parts/sections', null, array('sections' => array(
    array(
      'type' => 'cards',
      'id' => 'blinds',
      'bg' => 'dark',
      'eyebrow' => 'Upgrade',
      'title' => 'Blinds + Glass',
      'text' => 'A cordless blind sealed between the glass: dust-free, safer for children and pets, and operated with a fingertip controller to raise, lower and tilt.',
      'cols' => 3,
      'items' => array_map(function ($label, $image) {
        return array('title' => $label, 'image' => $image, 'image_class' => 'aspect-square w-full bg-white object-cover');
      }, array_keys(pwd_product_blinds_views()), pwd_product_blinds_views()),
    ),
    array(
      'type' => 'table',
      'bg' => 'slate',
      'eyebrow' => 'By series',
      'title' => 'Glass options available in each series',
      'head' => array('Series', 'Dual Pane', 'Dura Pane', 'Triple Pane', 'Textures', 'Blinds + Glass'),
      'rows' => $rows,
      'note' => 'Availability varies by product and size within each series. Confirm on the product page.',
    ),
  )));

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Choose the right glass',
    'ctas' => array(
      array('label' => 'Energy Efficiency', 'text' => 'How the standard glass package saves energy.', 'href' => '/capabilities/energy-efficiency/'),
      array('label' => 'Sound Control', 'text' => 'Laminated glazing for quieter interiors.', 'href' => '/capabilities/sound-control/'),
      array('label' => 'Request a Quote', 'text' => 'Share your openings and glass requirements.', 'href' => '/request-a-quote/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
