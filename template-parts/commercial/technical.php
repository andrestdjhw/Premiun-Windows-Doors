<?php
// Technical access: información fácil de encontrar antes de la etapa de cotización o submittal.
$resources = array(
  array('icon' => 'file-text', 'title' => 'Drawings', 'href' => '/resources/technical-drawings/'),
  array('icon' => 'award', 'title' => 'Certifications', 'href' => '/resources/certifications/'),
  array('icon' => 'layers', 'title' => 'Frame details', 'href' => '/professionals/specifications/'),
  array('icon' => 'badge-check', 'title' => 'Glazing', 'href' => '/capabilities/glass-options/'),
  array('icon' => 'file-badge', 'title' => 'Finishes', 'href' => '/capabilities/finishes-colors/'),
  array('icon' => 'shield-check', 'title' => 'Hardware', 'href' => '/capabilities/hardware/'),
  array('icon' => 'factory', 'title' => 'Project contacts', 'href' => '/contact/'),
);
?>
<section class="bg-brand-950 py-20 text-white lg:py-28">
  <div class="site-container grid gap-12 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-4">
      <p class="eyebrow text-brand-100">Technical access</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight lg:text-4xl">Find it before the quote or submittal stage.</h2>
      <p class="mt-4 text-lg leading-relaxed text-white/70">
        Drawings, certifications, frame details, glazing, finishes, hardware, and project contacts&mdash;easy to find when the specification is still being written.
      </p>
      <div class="mt-8">
        <?php echo pwd_button('Technical Resources', home_url('/professionals/technical-resources/'), 'light'); ?>
      </div>
    </div>

    <ul class="grid gap-3 self-center sm:grid-cols-2 lg:col-span-8">
      <?php foreach ($resources as $i => $item) : ?>
        <li <?php echo pwd_reveal($i % 2); ?>>
          <a href="<?php echo esc_url(home_url($item['href'])); ?>" data-tilt class="group flex items-center gap-4 rounded-sm border border-white/10 bg-white/5 p-5 transition-colors hover:border-white/40 hover:bg-white/10">
            <span class="flex size-11 shrink-0 items-center justify-center rounded-full bg-white/10 text-brand-100">
              <?php echo pwd_icon($item['icon'], 'size-5'); ?>
            </span>
            <span class="flex-1 font-medium"><?php echo esc_html($item['title']); ?></span>
            <?php echo pwd_icon('arrow-right', 'size-4 text-brand-100 transition-transform group-hover:translate-x-1'); ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
