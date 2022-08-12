<?php 

function meu_estilo_css(){
  add_theme_support('wocommerce');
  add_theme_support('woof');
}

add_action('after_setup_theme', 'meu_estilo_css');

function woof_css(){
  wp_register_style('woof', get_template_directory_uri() . '/' . 'style.css', [], '1.0.0');
  wp_enqueue_style('woof', get_template_directory_uri() . '/' . 'style.css', [], '1.0.0');
}

add_action( 'wp_enqueue_scripts', 'woof_css');

function altera_classe_preco(){
  return 'preco';
}

add_filter( 'woocommerce_product_price_class', 'altera_classe_preco');

function antes_do_produto(){
  echo "<div> Meu conteúdo antes </div>";
  echo "Olá pessoal";
}

add_action( 'woocommerce_before_single_product', 'antes_do_produto');

require "inc/exibir-produtos.php";


register_nav_menu( 'wp_nav_menu', 'Menu de Navegação' );
















?>