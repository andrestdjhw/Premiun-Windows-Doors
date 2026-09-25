<?php
// Built for repeatability: consistencia a lo largo de todo el proyecto.
$scope = array(
  array('title' => 'Repeated openings', 'text' => 'The same product, unit after unit.'),
  array('title' => 'Configurations', 'text' => 'Repeatable options across buildings and phases.'),
  array('title' => 'Documents', 'text' => 'Consistent documentation from submittal to closeout.'),
  array('title' => 'Project requirements', 'text' => 'Held from specification through delivery.'),
);
?>
<section class="bg-brand-950 py-20 text-white lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-3xl">
      <p class="eyebrow text-brand-100">Consistency at scale</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight lg:text-4xl">Built for repeatability</h2>
      <p class="mt-4 text-lg leading-relaxed text-white/70">
        Premium&rsquo;s role is to help project teams evaluate the right product and maintain consistency across repeated openings, configurations, documents, and project requirements.
      </p>
    </div>

    <ol class="mt-14 grid gap-px overflow-hidden rounded-sm bg-white/10 sm:grid-cols-2 lg:grid-cols-4">
      <?php foreach ($scope as $i => $item) : ?>
        <li <?php echo pwd_reveal($i); ?> class="bg-brand-950 p-8">
          <span class="font-mono text-sm text-brand-500"><?php echo esc_html(sprintf('%02d', $i + 1)); ?></span>
          <h3 class="mt-5 text-xl font-semibold tracking-tight"><?php echo esc_html($item['title']); ?></h3>
          <p class="mt-2 text-sm leading-relaxed text-white/60"><?php echo esc_html($item['text']); ?></p>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>
