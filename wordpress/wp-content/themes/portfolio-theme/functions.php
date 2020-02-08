<?php



function portfolio_files() {
  wp_enqueue_script('javascript', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
  wp_enqueue_script('font-awesome', '//use.fontawesome.com/releases/v5.12.0/js/all.js');
  wp_enqueue_style('portfolio_main_styles', get_stylesheet_uri());
  wp_enqueue_style('portfolio_main_styles', get_template_directory_uri(), '../scss/main.scss');
}

get_background_image();
add_theme_support('post-thumbnails');
add_action('wp_enqueue_scripts', 'portfolio_files');