<?php
if (!isset($product) || !is_array($product)) {
    echo "Invalid product data.";
    return;
}

require_once __DIR__ . '/../../consultas/consultas_componentes.php';

$title = $product['nombre_producto'] ?? 'Unknown Product';
$imageUrl = $product['url_imagen'] ?? 'https://via.placeholder.com/150';
$category = $product['nombre_categoria'];

?>

<article class="col-6 col-md-4 col-lg-3 text-center product-card my-3 p-1">
    <div class="p-1 bg-grey-100 h-100">
        <a href="./pages/product-detail.php">
            <figure class="product-card">
                <img
                    class="w-100 aspect-square fit-contain"
                    src="<?= htmlspecialchars($imageUrl, ENT_QUOTES, 'UTF-8'); ?>"
                    alt="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>" />
                <figcaption>
                    <?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>
                </figcaption>
            </figure>
        </a>
        <p class="text-secondary fw-bolder text-uppercase"><?= htmlspecialchars($category, ENT_QUOTES, 'UTF-8'); ?></p>
    </div>
</article>