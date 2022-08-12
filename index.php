<?php get_header(); ?>
  <?php if(have_posts()) {
    while(have_posts()){
      the_post();
      $product_id = get_the_ID();
      echo "<br>";
      the_title();
      echo "<br>";
      the_content();

      echo $product_id;
      $product = wc_get_product($product_id);
      
      echo $product->get_image();
      
      echo $product->get_price_html();

      echo "<pre>";



    }
  }
  ?>
<?php get_footer(); ?>