<?php

function theme_scripts_method(){
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array (), 1.0, false);
}

add_action( 'wp_enqueue_scripts', 'theme_scripts_method');

add_filter( 'auto_update_plugin', '__return_true' );

add_theme_support( 'post-thumbnails' );

if ( function_exists('register_sidebar') )

register_sidebar();

?>