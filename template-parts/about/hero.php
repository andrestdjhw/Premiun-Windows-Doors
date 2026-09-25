<?php
// Hero de About. Reemplazar la imagen por una foto real de la planta en Corona cuando exista.
get_template_part('template-parts/page-hero', null, array(
  'eyebrow' => 'About Premium',
  'title' => array(
    array('Manufacturing', 'light'),
    array('Windows & Doors', 'accent'),
    array('in California Since 2001.', 'medium'),
  ),
  'image' => array(
    '1536' => '2026/09/Residential-1536x1024.jpg',
    '2048' => '2026/09/Residential-2048x1365.jpg',
    '2560' => '2026/09/Residential-scaled.jpg',
  ),
));
