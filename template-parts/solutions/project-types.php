<?php
// Por tipo de proyecto (mismos enlaces del mega menú Solutions → By Project Type).
$types = array(
  array('icon' => 'factory', 'title' => 'New Construction', 'text' => 'Windows and doors specified from the start of the build.', 'href' => '/solutions/new-construction/'),
  array('icon' => 'layers', 'title' => 'Replacement & Retrofit', 'text' => 'Made-to-order sizes for existing openings.', 'href' => '/solutions/replacement/'),
  array('icon' => 'file-badge', 'title' => 'Remodel & Renovation', 'text' => 'New openings and styles for changing spaces.', 'href' => '/solutions/remodel/'),
  array('icon' => 'award', 'title' => 'Energy Upgrades', 'text' => 'Higher-performance glass and frames for greater efficiency.', 'href' => '/solutions/energy-upgrades/'),
);
?>
<section class="bg-white py-20 lg:py-28">
  <div class="site-container">
    <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
      <p class="eyebrow text-brand-600">By project type</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Or start with the type of project</h2>
    </div>

    <ul class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
      <?php foreach ($types as $i => $type) : ?>
        <li <?php echo pwd_reveal($i); ?>>
          <a href="<?php echo esc_url(home_url($type['href'])); ?>" data-tilt class="group flex h-full flex-col rounded-sm border border-slate-200 bg-white p-7 transition-colors hover:border-brand-600">
            <span class="flex size-12 items-center justify-center rounded-full bg-brand-50 text-brand-700">
              <?php echo pwd_icon($type['icon'], 'size-6'); ?>
            </span>
            <span class="mt-6 text-lg font-semibold tracking-tight text-slate-900"><?php echo esc_html($type['title']); ?></span>
            <span class="mt-2 text-sm leading-relaxed text-slate-600"><?php echo esc_html($type['text']); ?></span>
            <span class="mt-auto inline-flex items-center gap-2 pt-6 text-sm font-medium text-brand-700">
              Learn more
              <?php echo pwd_icon('arrow-right', 'size-4 transition-transform group-hover:translate-x-1'); ?>
            </span>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
