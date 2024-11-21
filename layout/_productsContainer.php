<?php
if (!isset($products) || !is_array($products)) {
    echo "No se encontraron productos.";
    return;
}
?>

<section class="row">
    <?php foreach ($products as $product): ?>
        <?php
        require __DIR__ . '/_productCard.php';
        ?>
    <?php endforeach; ?>
</section>