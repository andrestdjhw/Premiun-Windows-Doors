<?php
// Tabla comparativa: material y estilos de ventana/puerta por serie (pwd_product_matrix()).
$series = pwd_series_data();
$matrix = pwd_product_matrix();
$groups = array('windows' => 'Windows', 'doors' => 'Doors');
$check = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" class="mx-auto size-5 text-brand-600"><path d="M20 6 9 17l-5-5" /></svg><span class="sr-only">Available</span>';
$dash = '<span aria-hidden="true" class="text-slate-300">&mdash;</span><span class="sr-only">Not available</span>';
?>
<section id="compare" class="scroll-mt-28 bg-slate-50 py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
      <p class="eyebrow text-brand-600">Compare the series</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Material and styles, side by side</h2>
      <p class="mt-4 text-lg leading-relaxed text-slate-600">Availability varies by series. Confirm exact options and configurations on each product page.</p>
    </div>

    <div <?php echo pwd_reveal(1); ?> class="mt-12 overflow-x-auto rounded-sm border border-slate-200 bg-white">
      <table class="w-full min-w-[720px] text-left text-sm">
        <caption class="sr-only">Premium series compared by material and available window and door styles</caption>
        <thead>
          <tr class="border-b border-slate-200">
            <th scope="col" class="w-1/4 px-6 py-5 font-mono text-[11px] font-normal uppercase tracking-[0.2em] text-slate-500">Series</th>
            <?php foreach ($series as $slug => $item) : ?>
              <th scope="col" class="px-4 py-5 text-center">
                <a href="<?php echo esc_url(home_url('/series/' . $slug . '/')); ?>" class="text-base font-semibold text-slate-900 transition-colors hover:text-brand-700"><?php echo esc_html($item['name']); ?></a>
              </th>
            <?php endforeach; ?>
          </tr>
        </thead>
        <tbody class="divide-y divide-slate-200">
          <tr>
            <th scope="row" class="px-6 py-4 font-medium text-slate-900">Material</th>
            <?php foreach ($series as $item) : ?>
              <td class="px-4 py-4 text-center text-slate-700"><?php echo esc_html($item['material']); ?></td>
            <?php endforeach; ?>
          </tr>
          <?php foreach ($groups as $group => $label) : ?>
            <tr class="bg-slate-50">
              <th scope="colgroup" colspan="<?php echo count($series) + 1; ?>" class="px-6 py-3 font-mono text-[11px] font-normal uppercase tracking-[0.2em] text-brand-700"><?php echo esc_html($label); ?></th>
            </tr>
            <?php foreach ($matrix[$group] as $style) : ?>
              <tr>
                <th scope="row" class="px-6 py-4 font-medium">
                  <a href="<?php echo esc_url(home_url($style['href'])); ?>" class="text-slate-900 transition-colors hover:text-brand-700"><?php echo esc_html($style['name']); ?></a>
                </th>
                <?php foreach ($series as $slug => $item) : ?>
                  <td class="px-4 py-4 text-center"><?php echo isset($style['series'][$slug]) ? $check : $dash; ?></td>
                <?php endforeach; ?>
              </tr>
            <?php endforeach; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>
