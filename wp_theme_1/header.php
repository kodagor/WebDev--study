<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script>
        for(var e,l='footer header nav article section aside figure'.split(' ');e=l.pop();document.createElement(e));
    </script>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="wrapper">
      <header>
        <h1>HooDev</h1>
        <nav>
          <?php wp_nav_menu(array('theme_location' => 'poziome-menu-test', 'depth' => 2)); ?>
        </nav>
      </header>