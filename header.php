<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( 'name' ) ?> | <?php the_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php get_product_search_form(); ?>

<?php
wp_nav_menu([
  'menu' => 'categorias',
  'container' => 'nav',
  'container_class' => 'menu-categorias'
])
?>

<?php 
  $cart_count = WC()->cart->get_cart_contents_count();
  if ($cart_count){
    echo $cart_count;
  }
?>

