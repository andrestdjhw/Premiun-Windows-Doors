<?php
// Intro: aplicaciones y opciones que menciona el texto del brief.
$applications = array(
  array('title' => 'Replacement', 'text' => 'Made-to-order sizes for existing openings.'),
  array('title' => 'New construction', 'text' => 'Windows and doors for homes being built from the ground up.'),
);
$options = array('Materials', 'Styles', 'Colors', 'Glass', 'Hardware', 'Frame options');
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container grid gap-14 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-6">
      <h2 class="eyebrow text-brand-600">Made to order</h2>
      <p class="mt-6 text-2xl leading-snug font-medium tracking-tight text-slate-900 lg:text-3xl">
        Premium manufactures made-to-order windows and doors for residential replacement and new construction, with multiple materials, styles, colors, glass, hardware, and frame options across the product portfolio.
      </p>
    </div>

    <div class="space-y-10 lg:col-span-5 lg:col-start-8">
      <div class="grid gap-4 sm:grid-cols-2">
        <?php foreach ($applications as $i => $item) : ?>
          <div <?php echo pwd_reveal($i + 1); ?> data-tilt class="rounded-sm border border-slate-200 bg-white p-6">
            <h3 class="text-lg font-semibold tracking-tight text-slate-900"><?php echo esc_html($item['title']); ?></h3>
            <p class="mt-2 text-sm leading-relaxed text-slate-600"><?php echo esc_html($item['text']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>

      <div <?php echo pwd_reveal(3); ?>>
        <p class="font-mono text-[11px] uppercase tracking-[0.2em] text-slate-500">Options across the portfolio</p>
        <ul class="mt-4 flex flex-wrap gap-2">
          <?php foreach ($options as $option) : ?>
            <li class="rounded-sm bg-brand-50 px-3.5 py-2 text-sm font-medium text-brand-800"><?php echo esc_html($option); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
