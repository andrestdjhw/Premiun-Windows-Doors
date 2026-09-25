<?php
// Página Terms & Conditions (slug: terms-and-conditions). La crea pwd_ensure_legal_pages().
get_header();

$c = pwd_contact_info();
$company = esc_html($c['company']);
$address = esc_html($c['address']);
$email = esc_html($c['email']);
$phone = esc_html($c['phone']);
$privacy_url = esc_url(home_url('/privacy-policy/'));

$sections = array(
  array(
    'id' => 'acceptance',
    'title' => 'Acceptance of These Terms',
    'content' => <<<HTML
<p>These Terms &amp; Conditions ("Terms") govern your use of the {$company} website (the "Website"). By accessing or using the Website, you agree to these Terms and to our <a href="{$privacy_url}">Privacy Policy</a>. If you do not agree, please do not use the Website.</p>
<p>In these Terms, "we," "us" and "our" refer to {$company}, and "you" refers to any person or business using the Website.</p>
HTML
  ),
  array(
    'id' => 'use-of-website',
    'title' => 'Use of the Website',
    'content' => <<<HTML
<p>You may use the Website for lawful purposes only, including learning about our products, requesting quotes, accessing resources and contacting our team. You agree not to:</p>
<ul>
  <li>Use the Website in any way that violates applicable laws or regulations;</li>
  <li>Submit false, misleading or fraudulent information, or impersonate any person or business;</li>
  <li>Send spam, unsolicited advertising or automated submissions through our forms;</li>
  <li>Attempt to gain unauthorized access to the Website, its servers or any connected systems;</li>
  <li>Introduce viruses, malware or any other harmful code;</li>
  <li>Scrape, copy or harvest content or data from the Website by automated means without our written permission.</li>
</ul>
HTML
  ),
  array(
    'id' => 'forms-submissions',
    'title' => 'Forms and Submissions',
    'content' => <<<HTML
<p>When you submit a form on the Website, such as a quote request, contact form, service request or dealer application, you agree that the information you provide is accurate and complete and that you are authorized to share it.</p>
<p>Our forms are delivered through <strong>EmailJS</strong>, a third-party email service. By submitting a form, you acknowledge that your information will be transmitted through EmailJS to our team, as described in our <a href="{$privacy_url}">Privacy Policy</a>.</p>
<p>By providing your email address and phone number, you agree that we may contact you by email or phone about your request. Submitting a form does not create a customer, dealer or business relationship, and we may decline any request at our discretion.</p>
HTML
  ),
  array(
    'id' => 'quotes-products-pricing',
    'title' => 'Quotes, Products and Pricing',
    'content' => <<<HTML
<p>Product descriptions, images, specifications, performance ratings, colors and finishes shown on the Website are provided for general information. Actual products may vary, and we may change product lines, specifications and availability at any time without notice.</p>
<p>Any quote, estimate or pricing information provided through the Website or in response to a form submission is <strong>not a binding offer</strong>. Quotes are subject to final measurements, project review, product availability and written confirmation. All sales are governed exclusively by the written sales agreement, order confirmation and applicable warranty documents provided at the time of purchase.</p>
HTML
  ),
  array(
    'id' => 'warranty',
    'title' => 'Warranty Information',
    'content' => <<<HTML
<p>Product warranties are provided only through the written warranty documents that apply to each product. Warranty information on the Website is a summary for convenience and does not modify, extend or replace the terms of the applicable written warranty.</p>
HTML
  ),
  array(
    'id' => 'intellectual-property',
    'title' => 'Intellectual Property',
    'content' => <<<HTML
<p>All content on the Website, including text, images, logos, product names, drawings, catalogs, brochures, technical documents and design, is owned by {$company} or its licensors and is protected by copyright, trademark and other laws.</p>
<p>You may view and download materials for your personal use or for evaluating and specifying our products in your projects. You may not otherwise copy, modify, distribute, sell or publicly display any content without our prior written permission.</p>
HTML
  ),
  array(
    'id' => 'third-party-links',
    'title' => 'Third-Party Links and Services',
    'content' => <<<HTML
<p>The Website may contain links to third-party websites and services, such as Google Maps, social media platforms, the Better Business Bureau and partner portals. These links are provided for convenience. We do not control and are not responsible for their content, policies or practices, and your use of them is at your own risk and subject to their terms.</p>
HTML
  ),
  array(
    'id' => 'disclaimer',
    'title' => 'Disclaimer of Warranties',
    'content' => <<<HTML
<p>The Website and all content are provided <strong>"as is" and "as available"</strong>, without warranties of any kind, express or implied, including warranties of merchantability, fitness for a particular purpose and non-infringement. We do not warrant that the Website will be uninterrupted, error-free or free of harmful components, or that the information on it is complete or current.</p>
<p>Information on the Website is not professional, engineering or code-compliance advice. Always consult qualified professionals and local building codes for your specific project.</p>
HTML
  ),
  array(
    'id' => 'limitation-of-liability',
    'title' => 'Limitation of Liability',
    'content' => <<<HTML
<p>To the fullest extent permitted by law, {$company} and its owners, employees and partners will not be liable for any indirect, incidental, special, consequential or punitive damages, or any loss of profits, data or business, arising out of or related to your use of, or inability to use, the Website, even if we have been advised of the possibility of such damages.</p>
<p>Nothing in these Terms limits any liability that cannot be limited under applicable law.</p>
HTML
  ),
  array(
    'id' => 'indemnification',
    'title' => 'Indemnification',
    'content' => <<<HTML
<p>You agree to indemnify and hold harmless {$company} from any claims, losses, damages and expenses, including reasonable attorneys' fees, arising from your misuse of the Website, your violation of these Terms or your violation of any rights of a third party.</p>
HTML
  ),
  array(
    'id' => 'governing-law',
    'title' => 'Governing Law',
    'content' => <<<HTML
<p>These Terms are governed by the laws of the State of California, without regard to its conflict of law rules. Any dispute arising out of or related to these Terms or the Website will be brought exclusively in the state or federal courts located in Riverside County, California, and you consent to the jurisdiction of those courts.</p>
HTML
  ),
  array(
    'id' => 'changes',
    'title' => 'Changes to These Terms',
    'content' => <<<HTML
<p>We may update these Terms from time to time. When we do, we will revise the "Last updated" date at the top of this page. Your continued use of the Website after changes are posted means you accept the updated Terms.</p>
<p>If any provision of these Terms is found to be unenforceable, the remaining provisions will remain in full force and effect.</p>
HTML
  ),
  array(
    'id' => 'contact-us',
    'title' => 'Contact Us',
    'content' => <<<HTML
<p>If you have any questions about these Terms, please contact us:</p>
<p>
  <strong>{$company}</strong><br>
  {$address}<br>
  Email: <a href="mailto:{$email}">{$email}</a><br>
  Phone: <a href="{$c['phoneHref']}">{$phone}</a>
</p>
HTML
  ),
);

get_template_part('template-parts/legal-page', null, array(
  'title' => 'Terms & Conditions',
  'updated' => 'September 24, 2026',
  'intro' => 'Please read these Terms & Conditions carefully. They explain the rules for using our website, submitting forms and relying on the information we publish.',
  'sections' => $sections,
  'related' => array('label' => 'Privacy Policy', 'href' => home_url('/privacy-policy/')),
));

get_footer();
