<?php
// CTA final del resumen de soluciones.
get_template_part('template-parts/cta-cards', null, array(
  'title' => 'Not sure where to start?',
  'ctas' => array(
    array('label' => 'Request a Quote', 'text' => 'Share your project and our team will follow up.', 'href' => '/request-a-quote/'),
    array('label' => 'Find the Right Series', 'text' => 'Compare the five series side by side.', 'href' => '/compare-series/'),
    array('label' => 'Talk to Our Team', 'text' => 'Questions about products, documentation or support.', 'href' => '/contact/'),
  ),
));
