<?php
// Sección: proyectos destacados en slideshow. Cada slide documenta producto, aplicación, alcance y requerimientos.
// Fotos de obra reales: pwd_project_photos() (inc/gallery-data.php), con sus pendientes de confirmación.
$projects = pwd_project_photos();

$fields = array(
  'product' => array('icon' => 'package', 'label' => 'Product'),
  'application' => array('icon' => 'building', 'label' => 'Application'),
  'scope' => array('icon' => 'ruler', 'label' => 'Scope'),
  'requirements' => array('icon' => 'clipboard-check', 'label' => 'Requirements'),
);

$interval = 6000; // ms por proyecto
?>
<section
  data-slideshow
  data-interval="<?php echo esc_attr($interval); ?>"
  style="--slide-interval: <?php echo esc_attr($interval); ?>ms"
  class="bg-brand-gradient py-20 text-white lg:py-28"
>
  <div class="site-container grid gap-12 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="flex flex-col lg:col-span-5">
      <p class="eyebrow text-brand-300">Projects</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight lg:text-4xl">Premium products at work.</h2>
      <p class="mt-6 text-lg leading-relaxed text-white/70">
        See how Premium products are applied across residential, multifamily, and commercial work. Each featured project documents the product, application, scope, and project requirements.
      </p>

      <ol class="mt-10 border-t border-white/15">
        <?php foreach ($projects as $i => $project) : ?>
          <li class="border-b border-white/15">
            <button
              type="button"
              data-slide-to="<?php echo esc_attr($i); ?>"
              aria-current="<?php echo $i === 0 ? 'true' : 'false'; ?>"
              aria-label="<?php echo esc_attr(sprintf('Show project %d: %s', $i + 1, $project['title'])); ?>"
              class="group relative flex w-full items-center gap-5 py-4 pl-5 text-left"
            >
              <span class="absolute inset-y-0 left-0 w-0.5 overflow-hidden bg-white/15">
                <span class="absolute inset-0 origin-top scale-y-0 bg-brand-300 group-aria-current:animate-slide-progress motion-reduce:group-aria-current:animate-none motion-reduce:group-aria-current:scale-y-100"></span>
              </span>
              <span class="font-mono text-xs text-white/40 transition-colors group-aria-current:text-brand-300"><?php echo esc_html(sprintf('%02d', $i + 1)); ?></span>
              <span class="flex-1 font-medium text-white/60 transition-colors group-hover:text-white group-aria-current:text-white"><?php echo esc_html($project['title']); ?></span>
              <span class="font-mono text-[11px] tracking-[0.15em] text-white/40 uppercase"><?php echo esc_html($project['application']); ?></span>
            </button>
          </li>
        <?php endforeach; ?>
      </ol>

      <div class="mt-10">
        <?php echo pwd_button('View Projects', home_url('/projects/'), 'light'); ?>
      </div>
    </div>

    <div <?php echo pwd_reveal(1, 150); ?> class="grid lg:col-span-7">
      <?php foreach ($projects as $i => $project) : ?>
        <article
          data-slide
          <?php echo $i === 0 ? 'data-active' : ''; ?>
          class="group pointer-events-none flex flex-col opacity-0 transition-opacity duration-700 ease-in-out [grid-area:1/1] data-active:pointer-events-auto data-active:opacity-100"
        >
          <div class="relative overflow-hidden rounded-sm bg-brand-900">
            <img
              src="<?php echo esc_url(pwd_upload_sized($project['photos'][0], '1536x1152')); ?>"
              alt="<?php echo esc_attr($project['title'] . ' with Premium windows'); ?>"
              loading="lazy"
              decoding="async"
              class="aspect-[3/2] w-full object-cover transition-transform duration-[7000ms] ease-linear group-data-active:scale-110 motion-reduce:transition-none motion-reduce:group-data-active:scale-100"
            >
            <span class="absolute top-4 left-4 rounded-sm bg-white/90 px-3 py-1.5 font-mono text-[11px] tracking-[0.15em] text-slate-900 uppercase backdrop-blur">
              <?php echo esc_html(sprintf('%02d / %s', $i + 1, $project['title'])); ?>
            </span>
          </div>

          <dl class="relative z-10 grid grid-cols-2 gap-x-6 gap-y-5 bg-white p-6 text-slate-900 sm:grid-cols-4 lg:mx-6 lg:-mt-14 lg:rounded-sm lg:shadow-xl lg:shadow-black/30">
            <?php foreach ($fields as $key => $field) : ?>
              <div>
                <dt class="flex items-center gap-2 text-xs font-semibold tracking-wide text-brand-700 uppercase">
                  <?php echo pwd_icon($field['icon'], 'size-4 shrink-0'); ?>
                  <?php echo esc_html($field['label']); ?>
                </dt>
                <dd class="mt-2 text-sm leading-relaxed text-slate-700"><?php echo esc_html($project[$key]); ?></dd>
              </div>
            <?php endforeach; ?>
          </dl>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
