<?php
if (!isset($products) || !is_array($products)) {
    echo "No products data available.";
    return;
}

$categoria = isset($_GET['category']) ? $_GET['category'] : null;
$pagina = isset($_GET['page']) ? (int)$_GET['page'] : null;

$length = count($products);
$elementosPorPagina = 4;
$paginas = ceil($length/$elementosPorPagina);

$products = array_slice($products, ($pagina-1)*$elementosPorPagina, $elementosPorPagina)
?>

<section class="row">
    <?php foreach ($products as $product): ?>
        <?php
        require __DIR__ . '/_productCard.php';
        ?>
    <?php endforeach; ?>
</section>

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center"">
        <li class="page-item"><a class="page-link" href="#">Atras</a></li>

        <?php for ($i=1; $i <= $paginas; $i++) : ?>
        <li class="page-item"><a class="page-link" href="/nexus/pages/products.php?category=<?php echo $categoria ?>&page=<?php echo $i ?>"> <?php echo $i ?> </a></li>
        <?php endfor ?>

        <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
    </ul>
</nav>