<?php
// Suscripción de marketing OPCIONAL y SEPARADA de las descargas (brief): no bloquea ningún brochure
// y solo pide el email. Se envía con EmailJS (PWD_EMAILJS_NEWSLETTER_TEMPLATE_ID).
$input = 'block w-full rounded-sm border border-white/20 bg-white/10 px-4 py-3 text-[15px] text-white outline-none transition-colors placeholder:text-white/50 focus:border-white focus:ring-2 focus:ring-white/20';
?>
<section class="bg-brand-950 py-20 text-white lg:py-24">
  <div class="site-container grid items-center gap-10 lg:grid-cols-12 lg:gap-16">
    <div <?php echo pwd_reveal(); ?> class="lg:col-span-5">
      <p class="eyebrow text-brand-100">Optional</p>
      <h2 class="mt-4 text-3xl font-semibold tracking-tight lg:text-4xl">Get new literature by email</h2>
      <p class="mt-4 text-lg leading-relaxed text-white/70">
        Subscribe to hear about new brochures and product updates. Downloads above never require a subscription.
      </p>
    </div>

    <form <?php echo pwd_emailjs_attrs('PWD_EMAILJS_NEWSLETTER_TEMPLATE_ID', 'Literature subscription', 'Thank you. You are subscribed to product literature updates.'); ?> <?php echo pwd_reveal(1); ?> class="lg:col-span-6 lg:col-start-7">
      <div class="flex flex-col gap-3 sm:flex-row">
        <label for="sub-email" class="sr-only">Email</label>
        <input id="sub-email" name="email" type="email" required autocomplete="email" placeholder="you@company.com" class="<?php echo $input; ?> sm:flex-1">
        <button type="submit" class="btn-sweep group inline-flex justify-center rounded-sm bg-white px-6 py-3 text-[15px] font-medium text-brand-900 transition-colors duration-300 [--sweep-color:var(--color-brand-600)] hover:text-white disabled:cursor-wait disabled:opacity-60">
          <span class="inline-flex items-center gap-2">Subscribe</span>
        </button>
      </div>

      <div aria-hidden="true" class="absolute -left-[9999px]">
        <label for="sub-website">Website</label>
        <input id="sub-website" name="website" type="text" tabindex="-1" autocomplete="off">
      </div>

      <label class="mt-4 flex items-start gap-3 text-sm leading-relaxed text-white/60">
        <input type="checkbox" name="consent" value="Yes" required class="mt-1 size-4 shrink-0 accent-brand-500">
        <span>
          I agree to receive marketing emails from Premium Windows &amp; Doors. Unsubscribe anytime. See our
          <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" class="font-medium text-white underline underline-offset-2">Privacy Policy</a>.
        </span>
      </label>

      <p data-form-status role="status" aria-live="polite" hidden class="mt-4 text-sm font-medium data-[type=error]:text-red-300 data-[type=info]:text-white/70 data-[type=success]:text-emerald-300"></p>
    </form>
  </div>
</section>
