<?php get_header(); ?>

<?php 


?>
<?= 



$products = produtos_em_promocao(10);

exibir_produtos($products);
?>

<?php 

  echo get_the_posts_pagination();

?>
<?php get_footer(); ?>