<?php
// Sección: proyectos. Cada proyecto destacado debe documentar estos puntos cuando el cliente lo apruebe.
$documented = array(
  array('title' => 'Product', 'text' => 'Series, product types and configurations used.'),
  array('title' => 'Application', 'text' => 'Residential, multifamily or commercial.'),
  array('title' => 'Scope', 'text' => 'Size and nature of the project.'),
  array('title' => 'Requirements', 'text' => 'Performance, design and coordination needs.'),
);
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container grid gap-12 lg:grid-cols-2 lg:gap-20">
    <div <?php echo pwd_reveal(); ?>>
      <p class="eyebrow text-brand-600">Projects</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Premium products at work.</h2>
      <p class="mt-6 text-lg leading-relaxed text-slate-600">
        See how Premium products are applied across residential, multifamily, and commercial work. Each featured project documents the product, application, scope, and project requirements.
      </p>
      <div class="mt-10">
        <?php echo pwd_button('View Projects', home_url('/projects/')); ?>
      </div>
    </div>

    <dl class="grid gap-4 self-center sm:grid-cols-2">
      <?php foreach ($documented as $i => $item) : ?>
        <div <?php echo pwd_reveal($i); ?> data-tilt class="rounded-sm border border-slate-200 bg-white p-7">
          <dt class="font-semibold text-slate-900"><?php echo esc_html($item['title']); ?></dt>
          <dd class="mt-2 text-sm leading-relaxed text-slate-600"><?php echo esc_html($item['text']); ?></dd>
        </div>
      <?php endforeach; ?>
    </dl>
  </div>
</section>
