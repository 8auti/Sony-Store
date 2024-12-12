<?php

require_once('../consultas/conexion.php');
require_once('../consultas/consultas_componentes.php');
require_once('../consultas/consultas_usuarios.php');

if ($user['rol_usuario'] !== 'admin') {
    header("Location: /nexus/index.php");
    exit;
}

$pagina = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$products = getProducts($conexion);

$length = count($products);
$elementosPorPagina = 8;
$paginas = ceil($length / $elementosPorPagina);


$products = array_slice($products, ($pagina - 1) * $elementosPorPagina, $elementosPorPagina);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nexus Store - Admin Productos</title>
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
    <?php require('../layout/_navMobile.php'); ?>
    <?php require('../layout/_headerMobile.php'); ?>

    <aside class="container-fluid">
        <!-- Nav -->
        <?php require('../layout/_nav.php'); ?>

        <main class="col z-4 min-h-80vh">
            <!-- Header -->
            <?php require('../layout/_header.php'); ?>

            <div class="container mt-5 p-0 p-sm-3">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-5">
                        <h1>Productos</h1>
                    </div>
                    <div class="col-md-5 text-md-end">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <input
                                    type="text"
                                    placeholder="Buscar Productos..."
                                    class="form-control">
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-primary w-100">
                                    <i class="fas fa-plus"></i> Crear Producto
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Table -->
                <table class="table table-striped table-bordered table-hover table-sm mt-4 table-dark">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th class="text-center">IMAGEN</th>
                            <th>NOMBRE</th>
                            <th>PRECIO</th>
                            <th class="d-none d-sm-table-cell">CATEGORIA</th>
                            <th>STOCK</th>
                            <th class="text-center">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($product['id_producto']); ?></td>
                                <td class="text-center">
                                    <img src="<?php echo htmlspecialchars($product['url_imagen']); ?>" alt="<?php echo htmlspecialchars($product['nombre_producto']); ?>" width="50">
                                </td>
                                <td><a href="#"><?php echo htmlspecialchars($product['nombre_producto']); ?></a></td>
                                <td><?php echo htmlspecialchars($product['precio']); ?></td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="/nexus/pages/products.php?category=<?php echo urlencode($product['nombre_categoria']); ?>">
                                        <?php echo htmlspecialchars($product['nombre_categoria']); ?>
                                    </a>
                                </td>
                                <td class="text-center"><?php echo htmlspecialchars($product['stock']); ?></td>
                                <td class="text-center">
                                    <a class="btn btn-light btn-sm" href="/nexus/admin/edit/product.php?id=<?php echo $product["id_producto"]; ?>">
                                        <i class="fas fa-edit text-dark"></i>
                                    </a>
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>


                <!-- Pagination -->
                <nav>
                    <ul class="pagination justify-content-center">
                        <?php for ($i = 1; $i <= $paginas; $i++): ?>
                            <li class="page-item  <?php echo ($i == $pagina) ? 'active' : ''; ?>">
                                <a class="page-link bg-dark" href="?page=<?php echo $i; ?>">
                                    <?php echo $i; ?>
                                </a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </nav>
            </div>
        </main>
    </aside>

    <?php require('../layout/_footer.php'); ?>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>