<?php
// Need support: si los documentos no responden el requisito, ir al contacto técnico/de proyecto
// (no al formulario general de consumidor).
?>
<section class="bg-brand-950 py-20 text-white lg:py-24">
  <div class="site-container grid items-center gap-10 lg:grid-cols-12">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-8">
      <p class="eyebrow text-brand-100">Need support</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight lg:text-4xl">Not answered in the published documents?</h2>
      <p class="mt-4 max-w-2xl text-lg leading-relaxed text-white/70">
        When a project requirement isn&rsquo;t covered by the published documentation, talk directly with our technical and project-support team.
      </p>
    </div>
    <div <?php echo pwd_reveal(1); ?> class="lg:col-span-4 lg:justify-self-end">
      <?php echo pwd_button('Contact Project Support', home_url('/professionals/request-support/'), 'light'); ?>
    </div>
  </div>
</section>
