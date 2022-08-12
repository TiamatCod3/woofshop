
<h1>Essa é a página inicial</h1>

<?php get_header(); ?>
  <?php if(have_posts()) {
    while(have_posts()){
      the_post();
      the_title();
      the_content();
    }
  }
  ?>
  
  <?php 
  $produtos = produtos_mais_vendidos(3);   
  exibir_produtos($produtos);
  ?>

<?php get_footer(); ?>