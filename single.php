<?php
// Entrada del blog: encabezado, imagen destacada y contenido con estilos de @tailwindcss/typography.

get_header(); ?>

<main id="content">
  <?php while (have_posts()) : the_post(); ?>
    <article>
      <header class="bg-slate-50 py-16 lg:py-24">
        <div class="site-container"><div class="mx-auto max-w-3xl">
          <nav aria-label="Breadcrumb" class="text-sm text-slate-500">
            <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="transition-colors hover:text-brand-700">Blog & News</a>
          </nav>
          <h1 class="mt-6 text-4xl font-semibold tracking-tight text-slate-900 sm:text-5xl"><?php the_title(); ?></h1>
          <time datetime="<?php echo esc_attr(get_the_date('c')); ?>" class="mt-6 block text-slate-500"><?php echo esc_html(get_the_date()); ?></time>
        </div></div>
      </header>

      <div class="bg-white py-16 lg:py-20">
        <div class="site-container"><div class="mx-auto max-w-3xl">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large', array('class' => 'mb-12 aspect-[3/2] w-full rounded-sm object-cover')); ?>
          <?php endif; ?>
          <div class="prose prose-slate max-w-none prose-a:text-brand-700 prose-headings:tracking-tight">
            <?php the_content(); ?>
          </div>
          <div class="mt-16 border-t border-slate-200 pt-8">
            <?php echo pwd_arrow_link('Back to Blog & News', home_url('/blog/')); ?>
          </div>
        </div></div>
      </div>
    </article>
  <?php endwhile; ?>

  <?php
  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Ready to start your project?',
    'ctas' => array(
      array('label' => 'Request a Quote', 'text' => 'Share your openings and our team will follow up.', 'href' => '/request-a-quote/'),
      array('label' => 'Explore Products', 'text' => 'Every window and door style.', 'href' => '/products/'),
      array('label' => 'Contact Us', 'text' => 'Talk to our team.', 'href' => '/contact/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
