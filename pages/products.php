<?php

require_once('../consultas/conexion.php');
require_once('../consultas/consultas_componentes.php');

if (isset($_GET['category'])) {
    $categoryName = $_GET['category'];
    $products = getProductsByCategory($conexion, $categoryName);
}

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
            <!-- Products -->
            <?php require('../layout/_productsContainer.php') ?>
        </main>
    </aside>

    <?php require('../layout/_footer.php') ?>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>