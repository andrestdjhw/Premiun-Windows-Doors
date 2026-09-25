<?php
// For the project team: qué protege cada participante y dónde encuentra la evidencia que necesita.
$roles = array(
  array('role' => 'Developers', 'protects' => 'Capital and schedule', 'link' => array('Project Support', '/professionals/project-support/')),
  array('role' => 'Architects', 'protects' => 'Specification and compliance', 'link' => array('Specifications', '/professionals/specifications/')),
  array('role' => 'General contractors', 'protects' => 'Execution', 'link' => array('Technical Resources', '/professionals/technical-resources/')),
  array('role' => 'Purchasing', 'protects' => 'Cost and terms', 'link' => array('Request a Quote', '/request-a-quote/')),
  array('role' => 'Installers', 'protects' => 'Consistency and fit', 'link' => array('Installation Guides', '/resources/installation-guides/')),
);
?>
<section class="bg-slate-50 py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-3xl">
      <p class="eyebrow text-brand-600">For the project team</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Evidence for every participant in the decision.</h2>
      <p class="mt-4 text-lg leading-relaxed text-slate-600">
        Each participant protects something different. Premium gives every one of them the evidence they need to keep the product moving through the decision.
      </p>
    </div>

    <ul class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-5">
      <?php foreach ($roles as $i => $item) : ?>
        <li <?php echo pwd_reveal($i); ?> data-tilt class="flex flex-col rounded-sm border border-slate-200 bg-white p-7">
          <h3 class="text-xl font-semibold tracking-tight text-slate-900"><?php echo esc_html($item['role']); ?></h3>
          <p class="mt-5 font-mono text-[11px] uppercase tracking-[0.2em] text-slate-500">Protect</p>
          <p class="mt-1 font-medium text-brand-800"><?php echo esc_html($item['protects']); ?></p>
          <div class="mt-auto pt-7 text-sm">
            <?php echo pwd_arrow_link($item['link'][0], home_url($item['link'][1])); ?>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
