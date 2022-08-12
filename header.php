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






<form action="<?php bloginfo('url'); ?>/loja/" method="get">
  <input type="text" name="s" placeholder="Buscar" id="s" value="<?php the_search_query(); ?>">
  <input type="text" name="post_type" value="product" id="">
  <input type="submit" value="Buscar">
</form>


<?php get_product_search_form(); ?>


<?php 
wp_nav_menu([
  'menu' => 'categorias',
  'container' => false,
  'menu_class' => false
  ]);
?>