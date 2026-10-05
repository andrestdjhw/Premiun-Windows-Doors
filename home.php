<?php
// Índice del blog (/blog/, página de entradas asignada en pwd_ensure_template_pages()).
pwd_seo(
  'Blog & News | Premium Windows & Doors',
  'News, product updates and window and door guides from Premium Windows & Doors.',
  '/blog/'
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'Blog & News',
    'title' => array(
      array('Ideas, guides and news', 'light'),
      array('from Premium.', 'accent'),
    ),
    'image' => array('1536' => '2026/09/VIZ-Timeless-Interior-Bay-Nook.jpg'),
  ));
  ?>

  <section class="bg-white py-20 lg:py-28">
    <div class="site-container">
      <?php if (have_posts()) : ?>
        <ul class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
          <?php $i = 0; while (have_posts()) : the_post(); ?>
            <li <?php echo pwd_reveal($i++ % 3); ?>>
              <a href="<?php the_permalink(); ?>" data-tilt class="group flex h-full flex-col overflow-hidden rounded-sm border border-slate-200 bg-white transition-colors hover:border-brand-600">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('medium_large', array('class' => 'aspect-[3/2] w-full object-cover', 'loading' => 'lazy')); ?>
                <?php else : ?>
                  <?php echo pwd_media('', get_the_title(), 'aspect-[3/2] w-full'); ?>
                <?php endif; ?>
                <span class="flex flex-1 flex-col p-6">
                  <time datetime="<?php echo esc_attr(get_the_date('c')); ?>" class="text-sm text-slate-500"><?php echo esc_html(get_the_date()); ?></time>
                  <span class="mt-2 text-lg font-semibold tracking-tight text-slate-900"><?php the_title(); ?></span>
                  <span class="mt-2 text-sm leading-relaxed text-slate-600"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 24)); ?></span>
                  <span class="mt-auto inline-flex items-center gap-2 pt-5 text-sm font-medium text-brand-700">
                    Read more
                    <?php echo pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1'); ?>
                  </span>
                </span>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>

        <?php
        $pagination = paginate_links(array('type' => 'array', 'prev_text' => '&larr;', 'next_text' => '&rarr;'));
        if ($pagination) : ?>
          <nav aria-label="Blog pagination" class="mt-12 flex flex-wrap gap-2 [&_.current]:bg-brand-800 [&_.current]:text-white [&>*]:inline-flex [&>*]:min-w-10 [&>*]:justify-center [&>*]:rounded-sm [&>*]:border [&>*]:border-slate-200 [&>*]:bg-white [&>*]:px-3 [&>*]:py-2 [&>*]:text-sm">
            <?php echo implode('', $pagination); ?>
          </nav>
        <?php endif; ?>
      <?php else : ?>
        <div class="rounded-sm border border-dashed border-slate-300 p-10 text-center">
          <p class="text-lg font-semibold text-slate-900">New articles are on the way.</p>
          <div class="mt-6 flex justify-center"><?php echo pwd_button('Explore Products', home_url('/products/'), 'outline'); ?></div>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer();
