<?php
/*
 * Template Name: Professionals
 *
 * /professionals/ ("Work With Premium" del mega menú). Índice por audiencia: arquitectos, developers/GCs y dealers.
 * Los textos y enlaces replican el mega menú (src/components/Navbar/navData.js).
 */

pwd_seo(
  'For Professionals | Architects, Contractors & Dealers | Premium',
  'Tools, technical documentation and support for architects, specifiers, developers, general contractors and dealers working with Premium windows and doors.',
  '/professionals/'
);

$audiences = array(
  array(
    'title' => 'Architects & Specifiers',
    'href' => '/professionals/architects-specifiers/',
    'text' => 'Design with confidence. Access technical resources, drawings, certifications and support.',
    'image' => '2026/09/ArchitectsSpecifiers-768x512.jpg',
    'links' => array('Technical Resources' => '/resources/technical/', 'Specifications' => '/professionals/specifications/', 'Finish & Glass Options' => '/professionals/finish-glass-options/', 'Request Support' => '/professionals/request-support/'),
  ),
  array(
    'title' => 'Developers & General Contractors',
    'href' => '/professionals/developers-general-contractors/',
    'text' => 'Reliable solutions for projects of any scale, with consistent quality and dedicated project support.',
    'image' => '2026/09/DevelopersGeneralContractors-768x512.jpg',
    'links' => array('Multifamily Solutions' => '/solutions/multifamily/', 'Commercial Solutions' => '/solutions/commercial/', 'Project Support' => '/professionals/project-support/', 'Request a Quote' => '/request-a-quote/'),
  ),
  array(
    'title' => 'Dealers & Distributors',
    'href' => '/professionals/dealers-distributors/',
    'text' => 'A strong partner for your business: high-quality products, marketing support and a seamless ordering experience.',
    'image' => '2026/09/DealersDistributors-768x512.jpg',
    'links' => array('Dealer Program' => '/professionals/dealer-program/', 'iQuote Login' => '/iquote/', 'Marketing Resources' => '/professionals/marketing-resources/', 'Become a Dealer' => '/professionals/become-a-dealer/'),
  ),
);

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'For Professionals',
    'title' => array(
      array('Built to', 'light'),
      array('bring your vision to life.', 'accent'),
    ),
    'text' => 'Tools, documentation and support for architects, developers, contractors and dealers, from concept to completion.',
    'image' => array('1536' => '2026/09/ArchitectsSpecifiers-scaled.jpg'),
    'buttons' => array(
      array('Technical Resources', home_url('/resources/technical/'), 'light'),
      array('Request Support', home_url('/professionals/request-support/'), 'outline-light'),
    ),
  ));
  ?>

  <section class="bg-white py-20 lg:py-28">
    <div class="site-container">
      <div <?php echo pwd_reveal(); ?> class="max-w-2xl">
        <p class="eyebrow text-brand-600">Who we work with</p>
        <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 lg:text-4xl">Support for every role on the project</h2>
      </div>
      <ul class="mt-12 grid gap-6 lg:grid-cols-3">
        <?php foreach ($audiences as $i => $audience) : ?>
          <li <?php echo pwd_reveal($i); ?> class="flex h-full flex-col overflow-hidden rounded-sm border border-slate-200 bg-white">
            <a href="<?php echo esc_url(home_url($audience['href'])); ?>" class="group block overflow-hidden">
              <img src="<?php echo esc_url(pwd_upload_url($audience['image'])); ?>" alt="<?php echo esc_attr($audience['title']); ?>" loading="lazy" decoding="async" class="aspect-[3/2] w-full object-cover transition-transform duration-500 group-hover:scale-105">
            </a>
            <div class="flex flex-1 flex-col p-7">
              <h3 class="text-xl font-semibold tracking-tight text-slate-900">
                <a href="<?php echo esc_url(home_url($audience['href'])); ?>" class="hover:text-brand-700"><?php echo esc_html($audience['title']); ?></a>
              </h3>
              <p class="mt-3 leading-relaxed text-slate-600"><?php echo esc_html($audience['text']); ?></p>
              <ul class="mt-6 divide-y divide-slate-200 border-t border-slate-200">
                <?php foreach ($audience['links'] as $label => $href) : ?>
                  <li class="py-3 text-sm"><?php echo pwd_arrow_link($label, home_url($href)); ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <?php
  get_template_part('template-parts/sections', null, array('sections' => array(
    array(
      'type' => 'cards',
      'bg' => 'slate',
      'eyebrow' => 'Quick links',
      'title' => 'Resources professionals use most',
      'cols' => 3,
      'items' => array(
        array('icon' => 'file-text', 'title' => 'Product Catalog', 'text' => 'Every product with its key specifications.', 'href' => '/resources/product-catalog/'),
        array('icon' => 'layers', 'title' => 'Brochures', 'text' => 'Series literature to share with clients.', 'href' => '/resources/brochures/'),
        array('icon' => 'award', 'title' => 'Certifications', 'text' => 'AAMA, NFRC and ASTM references.', 'href' => '/resources/certifications/'),
        array('icon' => 'shield-check', 'title' => 'Warranty Information', 'text' => 'Current and legacy warranty documents.', 'href' => '/warranty/'),
        array('icon' => 'file-badge', 'title' => 'Service Request', 'text' => 'Service for installed Premium products.', 'href' => '/service-request/'),
        array('icon' => 'badge-check', 'title' => 'Contact Sales', 'text' => 'Talk to our team about your project.', 'href' => '/contact/'),
      ),
    ),
  )));

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Have a project in mind?',
    'ctas' => array(
      array('label' => 'Request a Quote', 'text' => 'Share your openings and our team will follow up.', 'href' => '/request-a-quote/'),
      array('label' => 'Become a Dealer', 'text' => 'Grow your business with Premium products.', 'href' => '/professionals/become-a-dealer/'),
      array('label' => 'Start a Conversation', 'text' => 'Our team is here to help.', 'href' => '/contact/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
