<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/ic/favicon.ico?v=3">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/ic/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/ic/favicon-16x16.png" sizes="16x16" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/ic/touch-icon-57.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/ic/touch-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/ic/touch-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/ic/touch-icon-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/ic/touch-icon-180.png">

    <?php wp_head(); ?>

  </head>

  <body>
    <!--[if lt IE 10]>
      <p class="browsehappy">Din browser kan ikke følge med vores toptunede side! Opgradér venligst din browser <a href="http://browsehappy.com/">her</a> for at forbedre din oplevelse af internettet.</p>
    <![endif]-->

    <!--//////////////////// Navigation \\\\\\\\\\\\\\\\\\\\-->
    <header>

      <div class="nav_open">
        <div class="nav_open_inner">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <div class="container">

      <?php
        $defaults = array(
          'menu'            => 'Hovedmenu',
          'theme_location'  => 'Hovedmenu',
          'depth'           => 2,
          // 'container'       => 'div',
          'container_class' => 'nav-wrap',
          // 'container_id'    => 'nav-main',
          'menu_class'      => 'nav nav-hidden',
          'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
        );
        wp_nav_menu( $defaults );
      ?>

      </div>

    </header>
