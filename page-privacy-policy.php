<?php
// Página Privacy Policy (slug: privacy-policy). La crea pwd_ensure_legal_pages().
get_header();

$c = pwd_contact_info();
$company = esc_html($c['company']);
$address = esc_html($c['address']);
$email = esc_html($c['email']);
$phone = esc_html($c['phone']);
$terms_url = esc_url(home_url('/terms-and-conditions/'));

$sections = array(
  array(
    'id' => 'information-we-collect',
    'title' => 'Information We Collect',
    'content' => <<<HTML
<p>We collect personal information that you choose to give us, and a limited amount of technical information that is collected automatically when you visit our website.</p>
<h3>Information you provide</h3>
<p>When you request a quote, contact us, submit a service or warranty request, apply to become a dealer or otherwise fill out a form on our website, we may collect:</p>
<ul>
  <li>Your name, email address and phone number;</li>
  <li>Your company name, role and professional details (for architects, contractors, developers and dealers);</li>
  <li>Your project address, city or ZIP code;</li>
  <li>Project details such as product interests, quantities, timelines and any message you include.</li>
</ul>
<h3>Information collected automatically</h3>
<p>Like most websites, our servers and service providers may automatically record information such as your IP address, browser type, device type, pages visited, referring page and the date and time of your visit. This information is used to operate, secure and improve the website.</p>
<p>We do not knowingly collect sensitive personal information, such as Social Security numbers, financial account numbers or health information, through our website. Please do not include this information in form submissions.</p>
HTML
  ),
  array(
    'id' => 'how-we-use-information',
    'title' => 'How We Use Your Information',
    'content' => <<<HTML
<p>We use the information we collect to:</p>
<ul>
  <li>Respond to your inquiries and prepare quotes;</li>
  <li>Provide product information, technical documentation and project support;</li>
  <li>Process service, warranty and dealer requests;</li>
  <li>Communicate with you about your project or request by email or phone;</li>
  <li>Maintain the security of our website and prevent spam and abuse;</li>
  <li>Understand how our website is used so we can improve it;</li>
  <li>Comply with legal obligations and enforce our <a href="{$terms_url}">Terms &amp; Conditions</a>.</li>
</ul>
<p>We will only send you marketing communications if you have asked to receive them or where otherwise permitted by law, and you can opt out at any time.</p>
HTML
  ),
  array(
    'id' => 'website-forms-emailjs',
    'title' => 'Website Forms and EmailJS',
    'content' => <<<HTML
<p>Our website forms are powered by <strong>EmailJS</strong>, a third-party email delivery service. When you submit a form, the information you enter is sent directly from your browser to EmailJS, which delivers it to our team by email. Our website does not store form submissions in its own database.</p>
<p>EmailJS acts as a service provider on our behalf and processes your information only to deliver your message to us. EmailJS may keep a temporary record of sent messages as part of its service. You can learn more in the <a href="https://www.emailjs.com/legal/privacy-policy/" target="_blank" rel="noopener noreferrer">EmailJS Privacy Policy</a>.</p>
<p>Once your message reaches us, it is stored in our business email systems and handled according to this Privacy Policy.</p>
HTML
  ),
  array(
    'id' => 'how-we-share-information',
    'title' => 'How We Share Your Information',
    'content' => <<<HTML
<p><strong>We do not sell your personal information, and we do not share it for cross-context behavioral advertising.</strong> We only share personal information in the following situations:</p>
<ul>
  <li><strong>Service providers</strong> that help us operate our business and website, such as EmailJS (form delivery), web hosting and email providers. They may only use the information to provide services to us.</li>
  <li><strong>Authorized dealers and installation partners</strong>, when needed to respond to your request, prepare a quote or complete your project in your area.</li>
  <li><strong>Legal and safety reasons</strong>, when required by law, subpoena or court order, or to protect the rights, property or safety of our company, our customers or others.</li>
  <li><strong>Business transfers</strong>, as part of a merger, acquisition or sale of assets, in which case your information remains subject to this policy.</li>
</ul>
HTML
  ),
  array(
    'id' => 'cookies-third-party-links',
    'title' => 'Cookies and Third-Party Links',
    'content' => <<<HTML
<p>Our website may use cookies and similar technologies that are necessary for it to work properly and to understand how visitors use it. You can control or delete cookies through your browser settings; some features may not function correctly if cookies are disabled.</p>
<p>Our website links to third-party websites and services, including Google Maps, Facebook, Instagram, LinkedIn, the Better Business Bureau and Google Business Profile. These services have their own privacy policies, and we are not responsible for their practices. We encourage you to review their policies before providing them any information.</p>
HTML
  ),
  array(
    'id' => 'data-retention-security',
    'title' => 'Data Retention and Security',
    'content' => <<<HTML
<p>We keep personal information only for as long as reasonably necessary for the purposes described in this policy, such as responding to your request, supporting your project and warranty, and meeting legal, accounting or reporting requirements. When information is no longer needed, we delete it or de-identify it.</p>
<p>We use reasonable administrative, technical and physical safeguards to protect your information. Form submissions are transmitted over encrypted (HTTPS) connections. However, no method of transmission over the internet or electronic storage is completely secure, and we cannot guarantee absolute security.</p>
HTML
  ),
  array(
    'id' => 'california-privacy-rights',
    'title' => 'Your California Privacy Rights',
    'content' => <<<HTML
<p>If you are a California resident, the California Consumer Privacy Act, as amended by the California Privacy Rights Act (together, the "CCPA"), gives you the following rights regarding your personal information:</p>
<ul>
  <li><strong>Right to know</strong> the categories and specific pieces of personal information we have collected about you, the sources, the purposes and the categories of third parties with whom we share it;</li>
  <li><strong>Right to delete</strong> personal information we have collected from you, subject to certain exceptions;</li>
  <li><strong>Right to correct</strong> inaccurate personal information;</li>
  <li><strong>Right to opt out</strong> of the sale or sharing of personal information. As explained above, we do not sell or share your personal information;</li>
  <li><strong>Right to non-discrimination</strong> for exercising any of these rights.</li>
</ul>
<p>In the past 12 months, we have collected the following categories of personal information for the business purposes described in this policy: identifiers (such as name, email, phone and IP address), professional information, and internet or network activity information. We collect this information directly from you and from your use of our website.</p>
<p>To exercise your rights, email us at <a href="mailto:{$email}">{$email}</a> or call us toll-free at <a href="{$c['phoneHref']}">{$phone}</a>. We will need to verify your identity before responding, and you may use an authorized agent to submit a request on your behalf. We will respond within the timeframes required by law.</p>
<p>We also honor Global Privacy Control (GPC) browser signals as a valid request to opt out of the sale or sharing of personal information.</p>
HTML
  ),
  array(
    'id' => 'childrens-privacy',
    'title' => "Children's Privacy",
    'content' => <<<HTML
<p>Our website is intended for adults and businesses and is not directed to children under 16. We do not knowingly collect personal information from children. If you believe a child has provided us with personal information, please contact us and we will delete it.</p>
HTML
  ),
  array(
    'id' => 'changes',
    'title' => 'Changes to This Policy',
    'content' => <<<HTML
<p>We may update this Privacy Policy from time to time. When we do, we will revise the "Last updated" date at the top of this page. If we make material changes, we will provide additional notice on our website. We encourage you to review this policy periodically.</p>
HTML
  ),
  array(
    'id' => 'contact-us',
    'title' => 'Contact Us',
    'content' => <<<HTML
<p>If you have any questions about this Privacy Policy or how we handle your personal information, please contact us:</p>
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
  'title' => 'Privacy Policy',
  'updated' => 'September 24, 2026',
  'intro' => "This Privacy Policy explains how {$c['company']} collects, uses and protects the personal information you share with us when you visit our website or submit a form.",
  'sections' => $sections,
  'related' => array('label' => 'Terms & Conditions', 'href' => home_url('/terms-and-conditions/')),
));

get_footer();
