<?php
// Secciones de contenido reutilizables para páginas informativas. $args['sections'] es una lista;
// cada sección tiene 'type' y sus datos. El fondo alterna blanco / gris salvo que se indique 'bg'
// (white | slate | dark). Tipos:
//   intro      eyebrow, lead, text, note, facts (label => valor), image (archivo de uploads)
//   cards      eyebrow, title, text, items (title, text, href, icon, image, meta), cols (2|3|4)
//   checklist  eyebrow, title, text, items (textos)
//   steps      eyebrow, title, text, items (title, text)
//   table      eyebrow, title, text, head (array), rows (array de arrays; las celdas pueden ser arrays = lista), note
//   documents  eyebrow, title, text, query (tax => slug, ej. array('pwd_doc_type' => 'certification')), empty
//   split      eyebrow, title, text, image, button (label, href, variante), reverse
$sections = $args['sections'] ?? array();
$backgrounds = array('white' => 'bg-white', 'slate' => 'bg-slate-50', 'dark' => 'bg-brand-950 text-white');
$grid_cols = array(2 => 'sm:grid-cols-2', 3 => 'sm:grid-cols-2 lg:grid-cols-3', 4 => 'sm:grid-cols-2 lg:grid-cols-4');

$heading = function ($section, $dark, $class = 'max-w-2xl') {
  echo '<div ' . pwd_reveal() . ' class="' . esc_attr($class) . '">';
  if (!empty($section['eyebrow'])) printf('<p class="eyebrow %s">%s</p>', $dark ? 'text-brand-100' : 'text-brand-600', esc_html($section['eyebrow']));
  if (!empty($section['title'])) printf('<h2 class="mt-4 text-3xl font-semibold tracking-tight lg:text-4xl %s">%s</h2>', $dark ? '' : 'text-slate-900', esc_html($section['title']));
  if (!empty($section['text'])) printf('<p class="mt-4 text-lg leading-relaxed %s">%s</p>', $dark ? 'text-white/70' : 'text-slate-600', esc_html($section['text']));
  echo '</div>';
};

$auto = 0;
foreach ($sections as $section) :
  $bg = $section['bg'] ?? ($auto++ % 2 ? 'slate' : 'white');
  $dark = $bg === 'dark';
  $id = !empty($section['id']) ? sprintf(' id="%s"', esc_attr($section['id'])) : '';
  ?>
  <section<?php echo $id; ?> class="scroll-mt-28 py-20 lg:py-28 <?php echo $backgrounds[$bg]; ?>">
    <div class="site-container">
      <?php switch ($section['type']) :
        case 'intro': ?>
          <div class="grid items-center gap-14 lg:grid-cols-12 lg:gap-16">
            <div <?php echo pwd_reveal(); ?> class="<?php echo !empty($section['image']) || !empty($section['facts']) ? 'lg:col-span-7' : 'lg:col-span-9'; ?>">
              <?php if (!empty($section['eyebrow'])) : ?><h2 class="eyebrow text-brand-600"><?php echo esc_html($section['eyebrow']); ?></h2><?php endif; ?>
              <p class="mt-6 text-2xl leading-snug font-medium tracking-tight text-slate-900 lg:text-3xl"><?php echo esc_html($section['lead']); ?></p>
              <?php if (!empty($section['text'])) : ?><p class="mt-6 text-lg leading-relaxed text-slate-600"><?php echo esc_html($section['text']); ?></p><?php endif; ?>
              <?php if (!empty($section['note'])) : ?>
                <div class="mt-8 flex gap-4 rounded-sm border-l-4 border-brand-600 bg-brand-50 p-5">
                  <?php echo pwd_icon('file-text', 'mt-0.5 size-5 shrink-0 text-brand-700'); ?>
                  <p class="text-[15px] leading-relaxed text-slate-700"><?php echo esc_html($section['note']); ?></p>
                </div>
              <?php endif; ?>
            </div>
            <?php if (!empty($section['image'])) : ?>
              <div <?php echo pwd_reveal(1, 150); ?> class="lg:col-span-5">
                <img src="<?php echo esc_url(pwd_upload_url($section['image'])); ?>" alt="<?php echo esc_attr($section['image_alt'] ?? ''); ?>" loading="lazy" decoding="async" class="aspect-[4/3] w-full rounded-sm object-cover shadow-2xl shadow-brand-950/15">
              </div>
            <?php elseif (!empty($section['facts'])) : ?>
              <dl <?php echo pwd_reveal(1); ?> class="divide-y divide-slate-200 rounded-sm border border-slate-200 bg-white lg:col-span-4 lg:col-start-9">
                <?php foreach ($section['facts'] as $label => $value) : ?>
                  <div class="flex items-center justify-between gap-4 px-6 py-4">
                    <dt class="shrink-0 text-sm text-slate-500"><?php echo esc_html($label); ?></dt>
                    <dd class="text-right font-semibold text-slate-900"><?php echo esc_html($value); ?></dd>
                  </div>
                <?php endforeach; ?>
              </dl>
            <?php endif; ?>
          </div>
          <?php break;

        case 'cards':
          $heading($section, $dark); ?>
          <ul class="mt-12 grid gap-6 <?php echo $grid_cols[$section['cols'] ?? 3]; ?>">
            <?php foreach ($section['items'] as $i => $item) :
              $tag = !empty($item['href']) ? 'a' : 'div';
              $href = !empty($item['href']) ? ' href="' . esc_url(preg_match('#^https?://#', $item['href']) ? $item['href'] : home_url($item['href'])) . '"' : '';
              $card = $dark ? 'border-white/10 bg-white/5' : 'border-slate-200 bg-white';
              $hover = $tag === 'a' ? ($dark ? 'transition-colors hover:border-white/40 hover:bg-white/10' : 'transition-colors hover:border-brand-600') : ''; ?>
              <li <?php echo pwd_reveal($i % 4); ?>>
                <<?php echo $tag . $href; ?> <?php echo $tag === 'a' ? 'data-tilt' : ''; ?> class="group flex h-full flex-col overflow-hidden rounded-sm border <?php echo $card . ' ' . $hover; ?>">
                  <?php if (!empty($item['image'])) : ?>
                    <img src="<?php echo esc_url(pwd_upload_url($item['image'])); ?>" alt="<?php echo esc_attr($item['title']); ?>" loading="lazy" decoding="async" class="<?php echo esc_attr($item['image_class'] ?? 'aspect-[3/2] w-full object-cover'); ?>">
                  <?php endif; ?>
                  <span class="flex flex-1 flex-col p-6">
                    <?php if (!empty($item['icon'])) : ?>
                      <span class="mb-5 flex size-11 items-center justify-center rounded-full <?php echo $dark ? 'bg-white/10 text-brand-100' : 'bg-brand-50 text-brand-700'; ?>"><?php echo pwd_icon($item['icon'], 'size-5'); ?></span>
                    <?php endif; ?>
                    <?php if (!empty($item['meta'])) : ?>
                      <span class="mb-3 self-start rounded-sm bg-brand-50 px-2 py-0.5 text-xs font-medium text-brand-800"><?php echo esc_html($item['meta']); ?></span>
                    <?php endif; ?>
                    <span class="text-lg font-semibold tracking-tight <?php echo $dark ? '' : 'text-slate-900'; ?>"><?php echo esc_html($item['title']); ?></span>
                    <?php if (!empty($item['text'])) : ?>
                      <span class="mt-2 text-sm leading-relaxed <?php echo $dark ? 'text-white/70' : 'text-slate-600'; ?>"><?php echo esc_html($item['text']); ?></span>
                    <?php endif; ?>
                    <?php if ($tag === 'a') : ?>
                      <span class="mt-auto inline-flex items-center gap-2 pt-5 text-sm font-medium <?php echo $dark ? 'text-brand-100' : 'text-brand-700'; ?>">
                        <?php echo esc_html($item['link'] ?? 'Learn more'); ?>
                        <?php echo pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1'); ?>
                      </span>
                    <?php endif; ?>
                  </span>
                </<?php echo $tag; ?>>
              </li>
            <?php endforeach; ?>
          </ul>
          <?php break;

        case 'checklist': ?>
          <div class="grid gap-12 lg:grid-cols-12 lg:gap-16">
            <?php $heading($section, $dark, 'lg:col-span-5'); ?>
            <ul class="grid gap-px self-center overflow-hidden rounded-sm sm:grid-cols-2 lg:col-span-7 <?php echo $dark ? 'bg-white/10' : 'bg-slate-200'; ?>">
              <?php foreach ($section['items'] as $i => $item) : ?>
                <li <?php echo pwd_reveal($i % 2); ?> class="flex items-center gap-4 p-6 font-medium <?php echo $dark ? 'bg-brand-950' : 'bg-white text-slate-900'; ?>">
                  <?php echo pwd_icon('badge-check', 'size-6 shrink-0 text-brand-500') . esc_html($item); ?>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php break;

        case 'steps':
          $heading($section, $dark); ?>
          <ol class="mt-12 grid gap-6 <?php echo $grid_cols[min(4, max(2, count($section['items'])))]; ?>">
            <?php foreach ($section['items'] as $i => $item) : ?>
              <li <?php echo pwd_reveal($i); ?> class="rounded-sm border p-7 <?php echo $dark ? 'border-white/10 bg-white/5' : 'border-slate-200 bg-white'; ?>">
                <span class="font-mono text-sm <?php echo $dark ? 'text-brand-100' : 'text-brand-600'; ?>"><?php echo sprintf('%02d', $i + 1); ?></span>
                <h3 class="mt-4 text-lg font-semibold tracking-tight <?php echo $dark ? '' : 'text-slate-900'; ?>"><?php echo esc_html($item['title']); ?></h3>
                <p class="mt-2 text-sm leading-relaxed <?php echo $dark ? 'text-white/70' : 'text-slate-600'; ?>"><?php echo esc_html($item['text']); ?></p>
              </li>
            <?php endforeach; ?>
          </ol>
          <?php break;

        case 'table':
          $heading($section, $dark); ?>
          <div <?php echo pwd_reveal(1); ?> class="mt-12 overflow-x-auto rounded-sm border border-slate-200 bg-white">
            <table class="w-full min-w-[640px] text-left text-sm">
              <thead class="bg-slate-50 text-slate-500">
                <tr>
                  <?php foreach ($section['head'] as $cell) : ?>
                    <th scope="col" class="px-5 py-4 font-medium"><?php echo esc_html($cell); ?></th>
                  <?php endforeach; ?>
                </tr>
              </thead>
              <tbody class="divide-y divide-slate-200 text-slate-700">
                <?php foreach ($section['rows'] as $row) : ?>
                  <tr>
                    <?php foreach (array_values($row) as $c => $cell) : ?>
                      <<?php echo $c ? 'td' : 'th scope="row"'; ?> class="px-5 py-4 align-top <?php echo $c ? '' : 'font-semibold text-slate-900'; ?>">
                        <?php if (is_array($cell)) : ?>
                          <ul class="space-y-1"><?php foreach ($cell as $line) printf('<li>%s</li>', esc_html($line)); ?></ul>
                        <?php else : ?>
                          <?php echo esc_html($cell); ?>
                        <?php endif; ?>
                      </<?php echo $c ? 'td' : 'th'; ?>>
                    <?php endforeach; ?>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <?php if (!empty($section['note'])) : ?>
            <p class="mt-4 text-sm text-slate-500"><?php echo esc_html($section['note']); ?></p>
          <?php endif; ?>
          <?php break;

        case 'documents':
          $tax_query = array('relation' => 'AND');
          foreach ($section['query'] as $taxonomy => $slug) $tax_query[] = array('taxonomy' => $taxonomy, 'field' => 'slug', 'terms' => $slug);
          $docs = get_posts(array('post_type' => 'attachment', 'post_status' => 'inherit', 'post_mime_type' => 'application/pdf', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC', 'tax_query' => $tax_query));
          $heading($section, $dark); ?>
          <div <?php echo pwd_reveal(1); ?> class="mt-12">
            <?php if ($docs) : ?>
              <ul class="divide-y divide-slate-200 border-y border-slate-200">
                <?php foreach ($docs as $doc) : ?>
                  <li class="flex flex-col gap-3 py-4 sm:flex-row sm:items-center">
                    <span class="flex size-10 shrink-0 items-center justify-center rounded-sm bg-brand-50 text-brand-700"><?php echo pwd_icon('file-text', 'size-5'); ?></span>
                    <span class="flex-1 font-medium text-slate-900"><?php echo esc_html($doc->post_title); ?></span>
                    <?php echo pwd_download_button($doc->ID); ?>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php else : ?>
              <div class="rounded-sm border border-dashed border-slate-300 bg-white p-10 text-center">
                <p class="text-lg font-semibold text-slate-900"><?php echo esc_html($section['empty'] ?? 'Documents are being added.'); ?></p>
                <p class="mx-auto mt-2 max-w-md text-slate-600">Our team can send the document you need for your project.</p>
                <div class="mt-6 flex justify-center"><?php echo pwd_button('Contact Us', home_url('/contact/')); ?></div>
              </div>
            <?php endif; ?>
          </div>
          <?php break;

        case 'split':
          $reverse = !empty($section['reverse']); ?>
          <div class="grid items-center gap-12 lg:grid-cols-12 lg:gap-16">
            <div <?php echo pwd_reveal(); ?> class="lg:col-span-6 <?php echo $reverse ? 'lg:order-last' : ''; ?>">
              <img src="<?php echo esc_url(pwd_upload_url($section['image'])); ?>" alt="<?php echo esc_attr($section['image_alt'] ?? ''); ?>" loading="lazy" decoding="async" class="aspect-[3/2] w-full rounded-sm object-cover shadow-2xl shadow-brand-950/15">
            </div>
            <div <?php echo pwd_reveal(1, 150); ?> class="lg:col-span-5 <?php echo $reverse ? '' : 'lg:col-start-8'; ?>">
              <?php if (!empty($section['eyebrow'])) : ?><p class="eyebrow <?php echo $dark ? 'text-brand-100' : 'text-brand-600'; ?>"><?php echo esc_html($section['eyebrow']); ?></p><?php endif; ?>
              <h2 class="mt-4 text-3xl font-semibold tracking-tight lg:text-4xl <?php echo $dark ? '' : 'text-slate-900'; ?>"><?php echo esc_html($section['title']); ?></h2>
              <p class="mt-6 text-lg leading-relaxed <?php echo $dark ? 'text-white/70' : 'text-slate-600'; ?>"><?php echo esc_html($section['text']); ?></p>
              <?php if (!empty($section['button'])) : ?>
                <div class="mt-8"><?php echo pwd_button($section['button'][0], home_url($section['button'][1]), $section['button'][2] ?? 'outline'); ?></div>
              <?php endif; ?>
            </div>
          </div>
          <?php break;
      endswitch; ?>
    </div>
  </section>
<?php endforeach;
