
<?php 
function exibir_produtos($products){
  ?>
  <ul class="lista-produtos">
    <?php foreach($products as $product) { ?>
    <li class="item-produto">
      <a href="<?= $product->get_permalink(); ?>">
        <div class="info-produto">
          <?= $product->get_image(); ?>
          <h2><?= $product->get_name(); ?> - <span><?= $product->get_price_html(); ?></span> </h2> 
        </div>
      </a>
    </li>
    <?php } ?>
  </ul>
  <?php 
}
?>

<?php 
function produtos_mais_vendidos($quantidade){
  $args  = [
    'limit' => $quantidade,
    'orderby' => 'date',
    'order' => 'DESC'
  ];
  return wc_get_products($args);
}
?>

