<?php
/*
 * Template Name: Warranty
 *
 * /warranty/. Garantías vigentes y anteriores con descarga directa.
 * Fuente: premiumwindows.com/warranty/ (revisado 2026-10-03). Los PDFs se importan con
 * `wp pwd import-product-docs` (pwd_site_documents()) y se buscan por su ruta en uploads.
 */

pwd_seo(
  'Window & Door Warranty | Premium Windows & Doors',
  'Download the Premium Windows & Doors limited lifetime warranty for vinyl and aluminum products, plus legacy warranties for earlier purchases.',
  '/warranty/'
);

// ID del adjunto por su ruta en uploads (0 si aún no se importó).
$attachment = function ($file) {
  $ids = get_posts(array('post_type' => 'attachment', 'post_status' => 'inherit', 'posts_per_page' => 1, 'fields' => 'ids', 'meta_key' => '_wp_attached_file', 'meta_value' => $file));
  return $ids[0] ?? 0;
};

$warranties = array(
  array(
    'eyebrow' => 'Current warranty',
    'title' => 'Limited Lifetime Warranty',
    'text' => 'Effective September 15, 2026, for products purchased on or after that date.',
    'docs' => array(
      'Vinyl products: Zenith, Timeless, Serene and Elegance' => '2026/09/Premium_Vinyl_Products_Limited_Lifetime_Warranty_FINAL_2026-09-15.pdf',
      'Aluminum products: Aluminum Series' => '2026/09/Premium_Aluminum_Products_Limited_Lifetime_Warranty_2026-09-15.pdf',
    ),
  ),
  array(
    'eyebrow' => 'Legacy warranties',
    'title' => 'Earlier purchases',
    'text' => 'If your products were purchased before September 15, 2026, the warranty in effect at the time of purchase applies.',
    'docs' => array(
      'Lifetime Warranty: December 16, 2025 to September 14, 2026' => '2026/02/Premium-Windows-Lifetime-Warranty-Zenith-Serene-Elegance-Timeless-2025-12-16.pdf',
      'Warranty: purchases before September 30, 2025' => '2020/05/PremiumWindowsWarranty.pdf',
    ),
  ),
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'breadcrumbs' => array(array('Resources', '/resources/'), array('Warranty', '/warranty/')),
    'eyebrow' => 'Warranty',
    'title' => array(
      array('Built to last for decades.', 'light'),
      array('Backed by a lifetime warranty.', 'accent'),
    ),
    'text' => 'Every Premium window and door is backed by a limited lifetime warranty, providing peace of mind that every view in your home is built to last.',
    'image' => array('1536' => '2026/09/VIZ-ZENITH-LA-FARMHOUSE-Family-Room-A.jpg'),
    'buttons' => array(
      array('Download Warranty', '#warranties', 'light'),
      array('Request Service', home_url('/service-request/'), 'outline-light'),
    ),
  ));
  ?>

  <section id="warranties" class="scroll-mt-28 bg-white py-20 lg:py-28">
    <div class="site-container space-y-16">
      <?php foreach ($warranties as $group) : ?>
        <div class="grid gap-10 lg:grid-cols-12 lg:gap-16">
          <div <?php echo pwd_reveal(); ?> class="lg:col-span-4">
            <p class="eyebrow text-brand-600"><?php echo esc_html($group['eyebrow']); ?></p>
            <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900"><?php echo esc_html($group['title']); ?></h2>
            <p class="mt-4 leading-relaxed text-slate-600"><?php echo esc_html($group['text']); ?></p>
          </div>
          <ul <?php echo pwd_reveal(1); ?> class="divide-y divide-slate-200 self-center border-y border-slate-200 lg:col-span-8">
            <?php foreach ($group['docs'] as $label => $file) :
              $id = $attachment($file); ?>
              <li class="flex flex-col gap-3 py-5 sm:flex-row sm:items-center">
                <span class="flex size-11 shrink-0 items-center justify-center rounded-sm bg-brand-50 text-brand-700"><?php echo pwd_icon('shield-check', 'size-5'); ?></span>
                <span class="flex-1 font-medium text-slate-900"><?php echo esc_html($label); ?></span>
                <?php echo $id ? pwd_download_button($id) : pwd_arrow_link('PDF', pwd_upload_url($file)); ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <?php
  get_template_part('template-parts/sections', null, array('sections' => array(
    array(
      'type' => 'steps',
      'bg' => 'slate',
      'eyebrow' => 'Warranty service',
      'title' => 'How to request warranty service',
      'items' => array(
        array('title' => 'Find your order details', 'text' => 'Your dealer name and order reference number help us identify the product.'),
        array('title' => 'Submit a service request', 'text' => 'Describe the issue and the affected opening in the service request form.'),
        array('title' => 'Our team follows up', 'text' => 'The service team reviews the request and contacts you with next steps.'),
      ),
    ),
  )));

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Need help with an installed product?',
    'ctas' => array(
      array('label' => 'Service Request', 'text' => 'Report an issue with installed Premium products.', 'href' => '/service-request/'),
      array('label' => 'Contact Us', 'text' => 'Questions about warranty coverage? Talk to our team.', 'href' => '/contact/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
