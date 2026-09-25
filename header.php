<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>document.documentElement.classList.add('js')</script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class('font-sans text-slate-900 antialiased'); ?>>
    <?php wp_body_open(); ?>
    <div
      id="navbar-root"
      class="sticky top-0 z-50 h-[116px] bg-white transition-[top] duration-300 ease-out motion-reduce:transition-none data-topbar-hidden:-top-10 xl:h-[140px]"
      data-config="<?php echo esc_attr(wp_json_encode(pwd_navbar_config())); ?>"
    ></div>
