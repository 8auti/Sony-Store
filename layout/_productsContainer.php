<?php
$products = getProducts($conexion);

if (!isset($products) || !is_array($products)) {
    echo "No products data available.";
    return;
}
?>

<section class="row">
    <?php foreach ($products as $product): ?>
        <?php
        require __DIR__ . '/../ui/Products/ProductCard.php';
        ?>
    <?php endforeach; ?>
</section>