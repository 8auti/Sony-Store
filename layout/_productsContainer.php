<?php
require_once 'utils/product_list.php';

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
