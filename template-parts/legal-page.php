<?php
// Plantilla compartida de las páginas legales.
// $args: title, updated, intro, sections (array de id, title, content), related (label, href).
$legal = wp_parse_args($args, array('title' => get_the_title(), 'updated' => '', 'intro' => '', 'sections' => array(), 'related' => null));
?>

<main id="content" class="bg-white">
  <header class="border-b border-slate-200 bg-slate-50">
    <div class="mx-auto max-w-[1536px] px-5 py-14 xl:px-10 xl:py-20 2xl:px-12">
      <p class="text-xs font-semibold uppercase tracking-[0.16em] text-brand-600">Legal</p>
      <h1 class="mt-3 text-4xl font-semibold tracking-tight text-slate-900 xl:text-5xl"><?php echo esc_html($legal['title']); ?></h1>
      <?php if ($legal['updated']) : ?>
        <p class="mt-4 text-sm text-slate-500">Last updated: <?php echo esc_html($legal['updated']); ?></p>
      <?php endif; ?>
      <?php if ($legal['intro']) : ?>
        <p class="mt-6 max-w-3xl text-lg leading-relaxed text-slate-600"><?php echo esc_html($legal['intro']); ?></p>
      <?php endif; ?>
    </div>
  </header>

  <div class="mx-auto grid max-w-[1536px] gap-10 px-5 py-12 lg:grid-cols-12 lg:gap-12 xl:px-10 xl:py-16 2xl:px-12">
    <aside class="lg:col-span-4 xl:col-span-3">
      <details class="group rounded-sm border border-slate-200 lg:sticky lg:top-40 lg:border-0" open>
        <summary class="flex cursor-pointer list-none items-center justify-between px-4 py-3 text-xs font-semibold uppercase tracking-[0.16em] text-slate-900 lg:pointer-events-none lg:px-0 lg:pt-0 [&::-webkit-details-marker]:hidden">
          On this page
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true" class="size-4 transition-transform group-open:rotate-180 lg:hidden"><path d="m6 9 6 6 6-6" /></svg>
        </summary>
        <ol class="space-y-1 border-t border-slate-200 px-4 py-3 text-sm lg:border-l lg:border-t-0 lg:px-0 lg:py-0">
          <?php foreach ($legal['sections'] as $i => $section) : ?>
            <li>
              <a href="#<?php echo esc_attr($section['id']); ?>" class="block py-1 text-slate-600 transition-colors hover:text-brand-700 lg:-ml-px lg:border-l lg:border-transparent lg:pl-4 lg:hover:border-brand-600">
                <?php echo esc_html(($i + 1) . '. ' . $section['title']); ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ol>
      </details>
    </aside>

    <article class="prose prose-slate max-w-3xl lg:col-span-8 prose-headings:tracking-tight prose-a:text-brand-700 prose-h2:mt-12 prose-h2:text-2xl [&>section:first-child>h2]:mt-0">
      <?php foreach ($legal['sections'] as $i => $section) : ?>
        <section id="<?php echo esc_attr($section['id']); ?>" class="scroll-mt-40">
          <h2><?php echo esc_html(($i + 1) . '. ' . $section['title']); ?></h2>
          <?php echo $section['content']; // Contenido estático definido en la plantilla de la página. ?>
        </section>
      <?php endforeach; ?>

      <?php if ($legal['related']) : ?>
        <p class="mt-12 border-t border-slate-200 pt-6 text-sm">
          See also our <a href="<?php echo esc_url($legal['related']['href']); ?>"><?php echo esc_html($legal['related']['label']); ?></a>.
        </p>
      <?php endif; ?>
    </article>
  </div>
</main>
