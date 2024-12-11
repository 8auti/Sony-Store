<?php
require_once('../../consultas/conexion.php');
require_once('../../consultas/consultas_componentes.php');

// Fetch product details if an ID is provided
if (isset($_GET['id'])) {
    $productId = $_GET['id'];
    $product = getProductById($conexion, $productId);
}

// Default values in case the product is not found or the ID is invalid
$title = $product['nombre_producto'] ?? 'Unknown Product';
$imageUrl = $product['url_imagen'] ?? 'https://via.placeholder.com/150';
$category = $product['nombre_categoria'] ?? 'Unknown Category';
$price = $product['precio'] ?? '0.00';
$description = $product['descripcion'] ?? 'No description available';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Product - Nexus Store</title>
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
        <a href="/admin/products" class="btn btn-light my-3">Go Back</a>
        <div class="row justify-content-md-center">
          <div class="col-md-6">
            <h1>Edit Product</h1>

            <!-- Loading/Error Message Placeholder -->
            <div id="loading" style="display: none;"><h2>Loading...</h2></div>
            <div id="error" style="display: none;"><h2>Error message</h2></div>

            <form action="/admin/update_product.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($productId); ?>">

              <div class="form-group my-3">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter name" value="<?php echo htmlspecialchars($title); ?>">
              </div>

              <div class="form-group my-3">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" class="form-control" placeholder="Enter price" value="<?php echo htmlspecialchars($price); ?>">
              </div>

              <div class="form-group my-3">
                <label for="images">Image</label>
                <input type="text" id="images" class="form-control" placeholder="Image URL" value="<?php echo htmlspecialchars($imageUrl); ?>" disabled>

                <!-- Image Scroll Section -->
                <div class="row my-3 overflow-scroll flex-nowrap">
                  <div class="col-md-4">
                    <img src="<?php echo htmlspecialchars($imageUrl); ?>" alt="<?php echo htmlspecialchars($title); ?>" class="img-fluid">
                    <button type="button" class="btn btn-danger mt-2 w-100">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </div>
                </div>

                <input type="file" id="upload" name="image" class="form-control my-3" multiple>
              </div>

              <div class="form-group my-3">
                <label for="brand">Brand</label>
                <input type="text" id="brand" name="brand" class="form-control" placeholder="Enter brand">
              </div>

              <div class="form-group my-3">
                <label>Stock</label>
                <div class="row justify-content-md-center align-items-center">
                  <div class="col-md-12">
                    <input type="number" id="stock" name="stock" class="form-control " placeholder="Stock">
                  </div>
                </div>
              </div>

              <div class="form-group my-3">
                <label for="category">Category</label>
                <input type="text" id="category" name="category" class="form-control" placeholder="Enter category" value="<?php echo htmlspecialchars($category); ?>">
              </div>

              <div class="form-group my-3">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control" rows="4" style="min-height: 120px;" placeholder="Enter description"><?php echo htmlspecialchars($description); ?></textarea>
              </div>

              <button class="btn btn-primary" type="submit">Update</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <?php require('../../layout/_footer.php') ?>
    </main>
  </aside>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>