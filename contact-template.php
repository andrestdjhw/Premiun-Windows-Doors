<?php
/*
 * Template Name: Contact
 *
 * /contact/. Datos de contacto (pwd_contact_info()) y formulario general.
 * Fuente de dirección, horario, teléfono y fax: premiumwindows.com/contact/ (revisado 2026-10-03).
 */

pwd_seo(
  'Contact Premium Windows & Doors | Corona, CA',
  'Contact Premium Windows & Doors in Corona, California. Call 800-608-0252, email our team or send a message about products, projects or service.',
  '/contact/'
);

$contact = pwd_contact_info();

get_header(); ?>

<main id="content">
  <?php
  get_template_part('template-parts/page-hero', null, array(
    'eyebrow' => 'Contact Us',
    'title' => array(
      array('Talk to the team that', 'light'),
      array('builds your windows.', 'accent'),
    ),
    'text' => 'Questions about products, a project or an existing order? We’re here Monday through Friday.',
    'image' => array('1536' => '2026/09/ZENITH_Series.jpg'),
    'buttons' => array(
      array('Send a Message', '#message', 'light'),
      array('Call ' . $contact['phone'], $contact['phoneHref'], 'outline-light'),
    ),
  ));

  $details = array(
    array('icon' => 'factory', 'label' => 'Address', 'value' => $contact['address'], 'href' => $contact['mapUrl'], 'link' => 'Get directions'),
    array('icon' => 'file-text', 'label' => 'Phone', 'value' => $contact['phone'], 'href' => $contact['phoneHref'], 'link' => 'Call us'),
    array('icon' => 'file-badge', 'label' => 'Email', 'value' => $contact['email'], 'href' => 'mailto:' . $contact['email'], 'link' => 'Email us'),
    array('icon' => 'award', 'label' => 'Office hours', 'value' => $contact['hours'], 'href' => '', 'link' => 'Fax ' . $contact['fax']),
  );
  ?>
  <section class="bg-slate-50 py-16 lg:py-20">
    <ul class="site-container grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
      <?php foreach ($details as $i => $item) : ?>
        <li <?php echo pwd_reveal($i); ?> class="flex h-full flex-col rounded-sm border border-slate-200 bg-white p-6">
          <span class="flex size-11 items-center justify-center rounded-full bg-brand-50 text-brand-700"><?php echo pwd_icon($item['icon'], 'size-5'); ?></span>
          <p class="mt-5 text-sm text-slate-500"><?php echo esc_html($item['label']); ?></p>
          <p class="mt-1 font-semibold text-slate-900"><?php echo esc_html($item['value']); ?></p>
          <?php if ($item['href']) : ?>
            <div class="mt-auto pt-4 text-sm"><?php echo pwd_arrow_link($item['link'], $item['href']); ?></div>
          <?php else : ?>
            <p class="mt-auto pt-4 text-sm text-slate-600"><?php echo esc_html($item['link']); ?></p>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <?php
  get_template_part('template-parts/form', null, array(
    'id' => 'message',
    'eyebrow' => 'Send a message',
    'title' => 'How can we help?',
    'text' => 'Choose a topic so your message reaches the right team.',
    'points' => array(
      'Pricing for a project? Use Request a Quote for faster routing.',
      'Issue with installed product? Use the Service Request form.',
      'Drawings or specs? Technical documents download directly.',
    ),
    'aside' => sprintf(
      '<img src="%s" alt="Premium Windows & Doors facility in Corona, California" loading="lazy" decoding="async" class="mt-10 aspect-[4/3] w-full rounded-sm object-cover">',
      esc_url(pwd_upload_url('2026/01/PRM-Location-Image-1.jpg'))
    ),
    'form_name' => 'Contact',
    'template' => 'PWD_EMAILJS_CONTACT_TEMPLATE_ID',
    'submit' => 'Send Message',
    'groups' => array(
      array('fields' => array(
        array('name' => 'name', 'label' => 'Full name', 'required' => true, 'autocomplete' => 'name'),
        array('name' => 'email', 'label' => 'Email', 'type' => 'email', 'required' => true, 'autocomplete' => 'email'),
        array('name' => 'phone', 'label' => 'Phone', 'type' => 'tel', 'autocomplete' => 'tel'),
        array('name' => 'topic', 'label' => 'Topic', 'type' => 'select', 'required' => true, 'options' => array('Products', 'A project', 'Becoming a dealer', 'Existing order', 'Service or warranty', 'Other')),
        array('name' => 'message', 'label' => 'Message', 'type' => 'textarea', 'required' => true),
      )),
    ),
  ));

  get_template_part('template-parts/cta-cards', null, array(
    'title' => 'Other ways we can help',
    'ctas' => array(
      array('label' => 'Request a Quote', 'text' => 'Share your openings and our team will follow up.', 'href' => '/request-a-quote/'),
      array('label' => 'Service Request', 'text' => 'Report an issue with installed Premium products.', 'href' => '/service-request/'),
      array('label' => 'Technical Resources', 'text' => 'Drawings and installation guides, no form required.', 'href' => '/resources/technical/'),
    ),
  ));
  ?>
</main>

<?php get_footer();
