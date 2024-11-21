<?php
$products = getProducts($conexion);
var_dump($products[0]);

if (!isset($products) || !is_array($products)) {
    echo "No products data available.";
    return;
}
?>

<section class="row">
    <?php foreach ($products as $product): ?>
        <?php 
        require 'ui/Products/ProductCard.php'; 
        ?>
    <?php endforeach; ?>
</section>
