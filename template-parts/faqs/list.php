<?php
// Lista de FAQs en acordeones (<details>, funciona sin JS). Con JS: búsqueda y filtro por categoría.
// $args['groups']: array de id, title, items (array de pregunta, respuesta HTML).
$groups = $args['groups'] ?? array();
?>
<section data-faq class="bg-white py-16 lg:py-24">
  <div class="site-container grid gap-10 lg:grid-cols-12 lg:gap-16">
    <aside class="lg:col-span-4 xl:col-span-3">
      <div class="lg:sticky lg:top-32">
        <label for="faq-search" class="font-mono text-[11px] uppercase tracking-[0.2em] text-slate-500">Search questions</label>
        <input
          id="faq-search"
          type="search"
          data-faq-search
          placeholder="e.g. warranty, drawings…"
          class="mt-3 block w-full rounded-sm border border-slate-300 bg-white px-4 py-3 text-[15px] text-slate-900 outline-none transition-colors placeholder:text-slate-400 focus:border-brand-600 focus:ring-2 focus:ring-brand-600/20"
        >

        <nav aria-label="FAQ categories" class="mt-8">
          <p class="font-mono text-[11px] uppercase tracking-[0.2em] text-slate-500">Categories</p>
          <ul class="mt-3 space-y-1 border-l border-slate-200">
            <?php foreach ($groups as $group) : ?>
              <li>
                <a href="#faq-<?php echo esc_attr($group['id']); ?>" class="-ml-px flex items-center justify-between border-l border-transparent py-1.5 pl-4 text-[15px] text-slate-600 transition-colors hover:border-brand-600 hover:text-brand-700">
                  <?php echo esc_html($group['title']); ?>
                  <span class="font-mono text-xs text-slate-400"><?php echo count($group['items']); ?></span>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </nav>
      </div>
    </aside>

    <div class="lg:col-span-8 xl:col-span-9">
      <?php foreach ($groups as $group) : ?>
        <div id="faq-<?php echo esc_attr($group['id']); ?>" data-faq-group class="scroll-mt-32 pb-12 last:pb-0">
          <h2 <?php echo pwd_reveal(); ?> class="text-2xl font-semibold tracking-tight text-slate-900"><?php echo esc_html($group['title']); ?></h2>
          <div class="mt-4 divide-y divide-slate-200 border-y border-slate-200">
            <?php foreach ($group['items'] as $item) : ?>
              <details data-faq-item class="group">
                <summary class="flex cursor-pointer list-none items-start justify-between gap-6 py-5 text-lg font-medium text-slate-900 transition-colors hover:text-brand-700 [&::-webkit-details-marker]:hidden">
                  <?php echo esc_html($item[0]); ?>
                  <span class="mt-1 flex size-6 shrink-0 items-center justify-center rounded-full bg-brand-50 text-brand-700 transition-transform duration-300 group-open:rotate-45">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" class="size-3.5"><path d="M12 5v14M5 12h14" /></svg>
                  </span>
                </summary>
                <div class="max-w-3xl pb-6 leading-relaxed text-slate-600 [&_a]:font-medium [&_a]:text-brand-700 [&_a]:underline [&_a]:underline-offset-2 [&_a:hover]:text-brand-900">
                  <?php echo wp_kses_post($item[1]); ?>
                </div>
              </details>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>

      <p data-faq-empty hidden class="rounded-sm border border-dashed border-slate-300 p-8 text-center text-slate-600">
        No questions match your search. Try another word or <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="font-medium text-brand-700 underline underline-offset-2">contact us</a>.
      </p>
    </div>
  </div>
</section>
