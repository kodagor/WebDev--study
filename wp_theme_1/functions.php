<?php

  function register_my_menus() {
    register_nav_menus(
      array(
        'poziome-menu-test' => __('Poziome menu testowe'),
        'pionowe-menu-test' => __('Pionowe menu testowe')
      )
    );
  }

  add_action('init', 'register_my_menus');

  add_theme_support('post_thumbnails');
  set_post_thumbnail_size(290, 220);
  add_image_size('post-icon', 290, 220, true);

  if (function_exists ('register_sidebar')) {
    register_sidebar(array(
      'name' => 'Widget Prawa Kolumna',
      'before_widget' => '<div class="new-widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_title' => '</h2>',
    ));
  }
?>