<?php 

function meu_estilo_css(){
  add_theme_support('woocommerce');
  add_theme_support('woof');
}

add_action('after_setup_theme', 'meu_estilo_css');

function woof_css(){
  wp_register_style('woof', get_template_directory_uri() . '/' . 'style.css', [], '1.0.0');
  wp_enqueue_style('woof', get_template_directory_uri() . '/' . 'style.css', [], '1.0.0');
}
add_action( 'wp_enqueue_scripts', 'woof_css');

require "inc/exibir-produtos.php";

function woof_loop_shop_per_page(){
  return 6;
}

register_nav_menus( ['Categorias'] );

add_filter('loop_shop_per_page', 'woof_loop_shop_per_page');

















?>