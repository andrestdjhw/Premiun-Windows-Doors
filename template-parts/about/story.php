<?php
// Historia de la empresa. La línea de tiempo resume los mismos hechos del texto.
$milestones = array(
  array('year' => '2001', 'title' => 'Founded in California', 'text' => 'A focus on dependable window and door manufacturing.'),
  array('year' => 'Over time', 'title' => 'Growth', 'text' => 'Expanded product portfolio, capabilities, and project experience.'),
  array('year' => 'Today', 'title' => 'Corona, California', 'text' => 'Made-to-order windows and doors across multiple vinyl and aluminum product series.'),
);
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container grid gap-14 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-7">
      <p class="eyebrow text-brand-600">Company story</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Built on dependable manufacturing.</h2>
      <div class="mt-8 space-y-6 text-lg leading-relaxed text-slate-600">
        <p>
          Premium Windows &amp; Doors was founded in California in 2001 with a focus on dependable window and door manufacturing. Over time, the company expanded its product portfolio, capabilities, and project experience to serve applications ranging from individual homes to commercial and multifamily developments.
        </p>
        <p>
          Today, Mediland Corporation DBA Premium Windows operates from Corona, California, manufacturing made-to-order windows and doors across multiple vinyl and aluminum product series.
        </p>
      </div>
    </div>

    <ol class="self-center border-l border-slate-200 lg:col-span-5">
      <?php foreach ($milestones as $i => $milestone) : ?>
        <li <?php echo pwd_reveal($i + 1); ?> class="relative pb-10 pl-8 last:pb-0">
          <span class="absolute -left-[5px] top-2 size-2.5 rounded-full bg-brand-600"></span>
          <p class="font-mono text-xs uppercase tracking-[0.2em] text-brand-600"><?php echo esc_html($milestone['year']); ?></p>
          <p class="mt-2 text-xl font-semibold tracking-tight text-slate-900"><?php echo esc_html($milestone['title']); ?></p>
          <p class="mt-1 leading-relaxed text-slate-600"><?php echo esc_html($milestone['text']); ?></p>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>
