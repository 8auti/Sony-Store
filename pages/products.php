<?php

require_once('../consultas/conexion.php');
require_once('../consultas/consultas_componentes.php');

$categoria = isset($_GET['category']) ? $_GET['category'] : null;

if ($categoria) {
    $products = getProductsByCategory($conexion, $categoria);
}

$pagina = isset($_GET['page']) ? (int)$_GET['page'] : null;

$length = count($products);
$elementosPorPagina = 4;
$paginas = ceil($length/$elementosPorPagina);

$products = array_slice($products, ($pagina-1)*$elementosPorPagina, $elementosPorPagina)

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nexus Store - Products</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous" />
    <script
        src="https://kit.fontawesome.com/592dce0dd2.js"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/style.css" />
</head>

<body>

    <!-- Mobile Nav & Header -->
    <?php require('../layout/_navMobile.php') ?>
    <?php require('../layout/_headerMobile.php') ?>

    <aside class="container-fluid">
        <!-- Nav -->
        <?php require('../layout/_nav.php') ?>

        <main class="col z-4">
            <!-- Header -->
            <?php require('../layout/_header.php') ?>

            <!-- Categorias -->
            <section
                class="d-flex flex-wrap align-items-flex-end gap-3 my-4 flex-center-mobile">
                <h2 class="m-0 p-0 me-5">Categorias</h2>
                <ul class="d-flex gap-3 m-0 p-0">
                    <li
                        class="cursor-pointer badge bg-pill-selected px-4 rounded-pill p-2">
                        Top
                    </li>
                    <li class="cursor-pointer badge bg-pill px-4 rounded-pill p-2">
                        Popular
                    </li>
                    <li class="cursor-pointer badge bg-pill px-4 rounded-pill p-2">
                        Mas Vendidos
                    </li>
                </ul>
            </section>

            <!-- Productos -->
            <?php require('../layout/_productsContainer.php') ?>

            <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center"">
                <li class="page-item"><a class="page-link" href="#">Atras</a></li>

                <?php for ($i=1; $i <= $paginas; $i++) : ?>
                <li class="page-item"><a class="page-link" href="/nexus/pages/products.php?category=<?php echo $categoria ?>&page=<?php echo $i ?>"> <?php echo $i ?> </a></li>
                <?php endfor ?>

                <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
            </ul>
</nav>
        </main>
    </aside>

    <?php require('../layout/_footer.php') ?>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>