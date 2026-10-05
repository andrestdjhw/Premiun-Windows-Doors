<?php
// Galería de /projects/: renders de producto (archviz) del sitio actual, premiumwindows.com/inspiration/
// (revisado 2026-10-03). Cada imagen: archivo de uploads, título, serie y estilos que muestra (slugs de pwd_style).
// PENDIENTE: reemplazar o complementar con proyectos reales aprobados por el cliente.
function pwd_gallery_data() {
  return array(
    array('image' => '2026/09/VIZ-Serene-Home-Woods.jpg', 'title' => 'Serene Home Woods', 'series' => 'serene', 'styles' => array('horizontal-sliding', 'picture', 'single-hung', 'patio-sliding')),
    array('image' => '2026/09/VIZ-Aluminum-Home-Desert-House-Front.jpg', 'title' => 'Aluminum Home Desert House Front', 'series' => 'aluminum', 'styles' => array('casement-awning', 'horizontal-sliding', 'picture', 'patio-sliding')),
    array('image' => '2026/09/VIZ-Aluminum-Home-Desert-House-Front-Side.jpg', 'title' => 'Aluminum Home Desert House Front Side', 'series' => 'aluminum', 'styles' => array('casement-awning', 'horizontal-sliding', 'picture', 'patio-sliding')),
    array('image' => '2026/09/VIZ-PetDoor-Timeless-Exterior-Back-Yard.jpg', 'title' => 'Pet Door Timeless Exterior Back Yard', 'series' => 'timeless', 'styles' => array('horizontal-sliding', 'picture', 'single-hung', 'patio-sliding')),
    array('image' => '2026/09/VIZ-PetDoor-Timeless-Interior-Green-Room.jpg', 'title' => 'Pet Door Timeless Interior Green Room', 'series' => 'timeless', 'styles' => array('horizontal-sliding', 'patio-sliding')),
    array('image' => '2026/09/VIZ-Timeless-Building-Apartment-1.jpg', 'title' => 'Timeless Building Apartment', 'series' => 'timeless', 'styles' => array('horizontal-sliding', 'picture', 'patio-sliding')),
    array('image' => '2026/09/VIZ-Timeless-Building-Apartment-3.jpg', 'title' => 'Timeless Building Apartment', 'series' => 'timeless', 'styles' => array('horizontal-sliding', 'picture', 'patio-sliding')),
    array('image' => '2026/09/VIZ-Timeless-Building-Apartment-2.jpg', 'title' => 'Timeless Building Apartment', 'series' => 'timeless', 'styles' => array('horizontal-sliding', 'picture', 'patio-sliding')),
    array('image' => '2026/09/VIZ-Timeless-Building-Hotel-1.jpg', 'title' => 'Timeless Building Hotel', 'series' => 'timeless', 'styles' => array('horizontal-sliding', 'patio-sliding')),
    array('image' => '2026/09/VIZ-Timeless-Building-Hotel-3.jpg', 'title' => 'Timeless Building Hotel', 'series' => 'timeless', 'styles' => array('horizontal-sliding', 'patio-sliding')),
    array('image' => '2026/09/VIZ-Timeless-Building-Hotel-2.jpg', 'title' => 'Timeless Building Hotel', 'series' => 'timeless', 'styles' => array('horizontal-sliding', 'patio-sliding')),
    array('image' => '2026/09/VIZ-Timeless-Home-Luxury-Back.jpg', 'title' => 'Timeless Home Luxury Back', 'series' => 'timeless', 'styles' => array('horizontal-sliding', 'picture', 'patio-sliding')),
    array('image' => '2026/09/VIZ-Timeless-Home-Luxury-Front-Side.jpg', 'title' => 'Timeless Home Luxury Front Side', 'series' => 'timeless', 'styles' => array('horizontal-sliding', 'picture', 'single-hung')),
    array('image' => '2026/09/VIZ-Timeless-Home-Luxury-Front.jpg', 'title' => 'Timeless Home Luxury Front', 'series' => 'timeless', 'styles' => array('horizontal-sliding', 'picture', 'single-hung')),
    array('image' => '2026/09/VIZ-Timeless-Interior-Bay-Nook.jpg', 'title' => 'Timeless Interior Bay Nook', 'series' => 'timeless', 'styles' => array('horizontal-sliding', 'picture', 'single-hung')),
    array('image' => '2026/09/VIZ-Timeless-Interior-Dining-Room-1.jpg', 'title' => 'Timeless Interior Dining Room', 'series' => 'timeless', 'styles' => array('picture', 'single-hung')),
    array('image' => '2026/09/VIZ-ZENITH-LA-FARMHOUSE-Back-Yard.jpg', 'title' => 'Zenith LA Farmhouse Back Yard', 'series' => 'zenith', 'styles' => array('casement-awning', 'horizontal-sliding', 'picture', 'french-swing', 'patio-sliding')),
    array('image' => '2026/09/VIZ-ZENITH-LA-FARMHOUSE-Dining-Room-6.jpg', 'title' => 'Zenith LA Farmhouse Dining Room', 'series' => 'zenith', 'styles' => array('picture')),
    array('image' => '2026/09/VIZ-ZENITH-LA-FARMHOUSE-Family-Room-A.jpg', 'title' => 'Zenith LA Farmhouse Family Room', 'series' => 'zenith', 'styles' => array('arch-special-shape', 'picture')),
    array('image' => '2026/09/VIZ-ZENITH-LA-FARMHOUSE-Front-Straight.jpg', 'title' => 'Zenith LA Farmhouse Front Straight', 'series' => 'zenith', 'styles' => array('arch-special-shape', 'horizontal-sliding', 'picture')),
    array('image' => '2026/09/VIZ-ZENITH-LA-FARMHOUSE-Front.jpg', 'title' => 'Zenith LA Farmhouse Front', 'series' => 'zenith', 'styles' => array('arch-special-shape', 'picture')),
    array('image' => '2026/09/VIZ-ZENITH-LA-FARMHOUSE-Pool-Living-Room.jpg', 'title' => 'Zenith LA Farmhouse Pool Living Room', 'series' => 'zenith', 'styles' => array('patio-sliding')),
    array('image' => '2026/09/VIZ-ZENITH-WHITE-HOUSE-Back-Doors.jpg', 'title' => 'Zenith White House Back Doors', 'series' => 'zenith', 'styles' => array('horizontal-sliding', 'picture', 'patio-sliding')),
    array('image' => '2026/09/VIZ-ZENITH-WHITE-HOUSE-Back.jpg', 'title' => 'Zenith White House Back', 'series' => 'zenith', 'styles' => array('casement-awning', 'horizontal-sliding', 'picture', 'patio-sliding')),
    array('image' => '2026/09/VIZ-ZENITH-WHITE-HOUSE-Front.jpg', 'title' => 'Zenith White House Front', 'series' => 'zenith', 'styles' => array('horizontal-sliding', 'picture', 'french-swing', 'patio-sliding')),
    array('image' => '2026/09/VIZ-Timeless-Interior-Nook.jpg', 'title' => 'Timeless Interior Nook', 'series' => 'timeless', 'styles' => array('single-hung')),
    array('image' => '2026/09/VIZ-Timeless-Home-Basic-Front.jpg', 'title' => 'Timeless Home Basic Front', 'series' => 'timeless', 'styles' => array('arch-special-shape', 'horizontal-sliding', 'picture', 'single-hung')),
    array('image' => '2026/09/VIZ-Timeless-Home-Basic-Back.jpg', 'title' => 'Timeless Home Basic Back', 'series' => 'timeless', 'styles' => array('arch-special-shape', 'horizontal-sliding', 'picture', 'single-hung', 'patio-sliding')),
  );
}
