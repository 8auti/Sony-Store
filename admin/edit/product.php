<?php
require_once('../../consultas/conexion.php');
require_once('../../consultas/consultas_componentes.php');

if ($user['rol_usuario'] !== 'admin') {
  header("Location: /nexus/index.php");
  exit;
}

$productId = null;
$isNewProduct = true;
$product = array(
  'nombre_producto' => 'Nuevo Producto',
  'url_imagen' => 'https://www.svgrepo.com/show/508699/landscape-placeholder.svg',
  'nombre_categoria' => 'Unknown Category',
  'precio' => '0.00',
  'descripcion' => 'No hay descripcion disponible',
  'stock' => 0,
  'id_categoria' => ''
);

if (isset($_GET['id'])) {
  $productId = $_GET['id'];
  $product = getProductById($conexion, $productId);
  $isNewProduct = false;
  $productCategoryId = $product['id_categoria'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $productData = array(
    'id_producto' => $_POST['product_id'] ?? '',
    'nombre' => $_POST['name'] ?? '',
    'id_categoria' => $_POST['id_categoria'] ?? '',
    'descripcion' => $_POST['description'] ?? '',
    'precio' => $_POST['price'] ?? '',
    'stock' => $_POST['stock'] ?? '',
    'url_imagen' => $_POST['image'] ?? '',
  );

  if ($isNewProduct) {
    if (addProduct($conexion, $productData)) {
      header("Location: /nexus/admin/products.php");
      exit;
    } else {
      $error = "Error creating new product.";
      echo "<div class='alert alert-danger'>$error</div>";
    }
  } else {
    if (setProduct($conexion, $productData)) {
      header("Location: /nexus/admin/products.php");
      exit;
    } else {
      $error = "Error updating product information.";
      echo "<div class='alert alert-danger'>$error</div>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nexus Store - Admin <?php echo $isNewProduct ? "Crear" : "Editar" ?> Producto</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous" />
  <script
    src="https://kit.fontawesome.com/592dce0dd2.js"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../styles/style.css" />
</head>

<body>
  <!-- Mobile Nav & Header -->
  <?php require('../../layout/_navMobile.php') ?>
  <?php require('../../layout/_headerMobile.php') ?>

  <aside class="container-fluid">
    <!-- Nav -->
    <?php require('../../layout/_nav.php') ?>

    <main class="col p-3 z-4">
      <!-- Header -->
      <?php require('../../layout/_header.php') ?>
      <div class="container my-5">
        <a href="/nexus/admin/products.php" class="btn btn-light text-dark my-3">Ir Atrás</a>
        <div class="row justify-content-md-center">
          <div class="col-md-6">
            <h1><?php echo $isNewProduct ? "Crear" : "Editar" ?> Producto</h1>

            <form action="#" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($productId); ?>">

              <div class="form-group my-3">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter name" value="<?php echo htmlspecialchars($product['nombre_producto']); ?>">
              </div>

              <div class="form-group my-3">
                <label for="price">Precio</label>
                <input type="number" id="price" name="price" step="0.01" class="form-control" placeholder="Enter price" value="<?php echo htmlspecialchars($product['precio']); ?>">
              </div>

              <div class="form-group my-3">
                <label for="image">Imagen</label>
                <input type="text" id="image" name="image" class="form-control" placeholder="Image URL" value="<?php echo htmlspecialchars($product['url_imagen']); ?>">

                <!-- Image Scroll Section -->
                <div class="row my-3 overflow-scroll flex-nowrap">
                  <div class="col-md-4">
                    <img src="<?php echo htmlspecialchars($product['url_imagen']); ?>" alt="<?php echo htmlspecialchars($product['nombre_producto']); ?>" class="img-fluid">
                    <button type="button" class="btn btn-danger mt-2 w-100">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </div>
                </div>
              </div>

              <div class="form-group my-3">
                <label>Stock</label>
                <div class="row justify-content-md-center align-items-center">
                  <div class="col-md-12">
                    <input type="number" id="stock" name="stock" class="form-control" placeholder="Stock" value="<?php echo htmlspecialchars($product['stock']); ?>">
                  </div>
                </div>
              </div>

              <div class="form-group my-3">
    <select class="form-select" aria-label="Default select example" name="id_categoria" id="id_categoria" aria-required="true" aria-invalid="false">
        <option value="">Seleccionar Categoria</option>
        <option value="1" <?php echo ($productCategoryId == 1) ? 'selected' : ''; ?>>Motherboards</option>
        <option value="2" <?php echo ($productCategoryId == 2) ? 'selected' : ''; ?>>Procesadores</option>
        <option value="3" <?php echo ($productCategoryId == 3) ? 'selected' : ''; ?>>Tarjetas Gráficas</option>
        <option value="4" <?php echo ($productCategoryId == 4) ? 'selected' : ''; ?>>Memorias RAM</option>
        <option value="5" <?php echo ($productCategoryId == 5) ? 'selected' : ''; ?>>Almacenamiento</option>
        <option value="6" <?php echo ($productCategoryId == 6) ? 'selected' : ''; ?>>Monitores</option>
        <option value="7" <?php echo ($productCategoryId == 7) ? 'selected' : ''; ?>>Coolers</option>
        <option value="8" <?php echo ($productCategoryId == 8) ? 'selected' : ''; ?>>Refrigeracion</option>
        <option value="9" <?php echo ($productCategoryId == 9) ? 'selected' : ''; ?>>Gabinetes</option>
        <option value="10" <?php echo ($productCategoryId == 10) ? 'selected' : ''; ?>>Fuentes</option>
        <option value="11" <?php echo ($productCategoryId == 11) ? 'selected' : ''; ?>>Perifericos</option>
    </select>
</div>

              <div class="form-group my-3">
                <label for="description">Descripción</label>
                <textarea id="description" name="description" class="form-control" rows="4" style="min-height: 120px;" placeholder="Enter description"><?php echo htmlspecialchars($product['descripcion']); ?></textarea>
              </div>

              <button class="btn btn-primary" type="submit"><?php echo $isNewProduct ? 'Crear' : 'Actualizar'; ?></button>
            </form>
          </div>
        </div>
      </div>

    </main>
  </aside>
  <!-- Footer -->
  <?php require('../../layout/_footer.php') ?>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>