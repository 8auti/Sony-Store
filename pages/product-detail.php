<?php
require_once('../consultas/conexion.php');
require_once('../consultas/consultas_componentes.php');

if (isset($_GET['id'])) {
  $productId = $_GET['id'];
  $product = getProductById($conexion, $productId);
}

$title = $product['nombre_producto'] ?? 'Unknown Product';
$imageUrl = $product['url_imagen'] ?? 'https://www.svgrepo.com/show/508699/landscape-placeholder.svg';
$category = $product['nombre_categoria'] ?? 'Unknown Category';
$price = $product['precio'] ?? '. . .';
$description = $product['descripcion'] ?? '. . .';

if ($category) {
  $products = getProductsByCategory($conexion, $category);
  $limiteProductos = 8;

  // Eliminar el producto que estamos viendo de la tabla productos, asi no aparece en productos relacionados.
  $findKey = array_search($product, $products);
  unset($products[$findKey]);

  // Poner un limite a cuantos productos se van a cargar
  array_slice($products,0,$limiteProductos);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nexus Store - Producto</title>
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

    <main class="col p-3 z-4">
      <!-- Header -->
      <?php require('../layout/_header.php') ?>
      <section class="container-fluid">
        <section class="row justify-content-start align-items-stretch">
          <article class="d-none d-lg-block col-lg-3 detail-card">
            <figure>
              <img
                class="w-100 aspect-square fit-contain flip-horizontal"
                src="<?php echo $imageUrl ?>"
                alt="<?php echo $title ?>" />
              <figcaption class="text-center"><?php echo $title ?></figcaption>
            </figure>
            <div class="row mt-5">
              <img
                class="col-3 aspect-square fit-cover p-1 rotate-1"
                src="<?php echo $imageUrl ?>"
                alt="<?php echo $title ?>" />
              <img
                class="col-3 aspect-square fit-cover p-1 rotate-2"
                src="<?php echo $imageUrl ?>"
                alt="<?php echo $title ?>" />
              <img
                class="col-3 aspect-square fit-cover p-1 rotate-3"
                src="<?php echo $imageUrl ?>"
                alt="<?php echo $title ?>" />
              <img
                class="col-3 aspect-square fit-cover p-1 rotate-4"
                src="<?php echo $imageUrl ?>"
                alt="<?php echo $title ?>" />
            </div>
          </article>
          <article class="col-lg-8">
            <!-- Carrousel on Mobile -->
            <div
              id="carouselExampleIndicators"
              class="d-lg-none d-block carousel slide"
              data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="0"
                  class="active"
                  aria-current="true"
                  aria-label="Slide 1"></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="3"
                  aria-label="Slide 4"></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="4"
                  aria-label="Slide 5"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?php echo $imageUrl ?>" class=" w-100 h-100 fit-contain aspect-square" alt=" Image 1" />
                </div>
                <div class="carousel-item">
                  <img src="<?php echo $imageUrl ?>" class=" w-100 h-100 fit-contain aspect-square" alt=" Image 2" />
                </div>
                <div class="carousel-item">
                  <img src="<?php echo $imageUrl ?>" class=" w-100 h-100 fit-contain aspect-square" alt=" Image 3" />
                </div>
                <div class="carousel-item">
                  <img src="<?php echo $imageUrl ?>" class=" w-100 h-100 fit-contain aspect-square" alt=" Image 4" />
                </div>
                <div class="carousel-item">
                  <img src="<?php echo $imageUrl ?>" class=" w-100 h-100 fit-contain aspect-square" alt=" Image 5" />
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

            <figure class="bg-grey-300 p-3 d-none d-lg-block">
              <img
                class="w-100"
                src="<?php echo $imageUrl ?>"
                alt="PS5 Dualsense Wireless Control" />
              <figcaption class="text-secondary fw-bolder">
                <?php echo $category ?>
              </figcaption>
            </figure>
            <h1 class="text-uppercase my-4">
              <?php echo $title ?>
            </h1>
            <section class="my-3">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star text-secondary"></i>
            </section>
            <section class="row justify-content-between align-items-start">
              <p class="col-4 display-6 fw-bolder"><?php echo $price ?></p>
              <div class="col-8 row align-items-center">
                <a href="./checkout.php" class="d-contents">
                  <div
                    class="col-8 bg-pill rounded-pill p-1 px-3 text-center">
                    Pedir ahora
                  </div>
                </a>
                <div class="col-4">
                  <i
                    class="fa-regular fa-2xl fa-heart"
                    aria-hidden="true"></i>
                </div>
              </div>
            </section>
          </article>
        </section>
      </section>

      <section>
        <h2 class="mb-4 mt-5">Descripcion de Producto</h2>
        <h4><?php echo $description ?></h4>
      </section>

      <section>
        <h2 class="mb-4 mt-5">Reviews</h2>
        <section class="row">
          <article class="col-12 col-md-6">
            <div class="container mt-5">
              <div class="row mb-2">
                <div class="col-md-2">
                  <span class="review-label color-light">5 Estrellas</span>
                </div>
                <div class="col-md-10">
                  <div class="review-bar rounded-pill bg-light">
                    <div class="h-100 bg-grey rounded-pill" style="width:<?php echo rand(0,100) ?>%" ></div>
                  </div>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-2">
                  <span class="review-label color-light">4 Estrellas</span>
                </div>
                <div class="col-md-10">
                  <div class="review-bar rounded-pill bg-light">
                    <div class="h-100 bg-grey rounded-pill" style="width:<?php echo rand(0,100) ?>%" ></div>
                  </div>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-2">
                  <span class="review-label color-light">3 Estrellas</span>
                </div>
                <div class="col-md-10">
                  <div class="review-bar rounded-pill bg-light">
                    <div class="h-100 bg-grey rounded-pill" style="width:<?php echo rand(0,100) ?>%" ></div>
                  </div>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-2">
                  <span class="review-label color-light">2 Estrellas</span>
                </div>
                <div class="col-md-10">
                  <div class="review-bar rounded-pill bg-light">
                    <div class="h-100 bg-grey rounded-pill" style="width:<?php echo rand(0,100) ?>%" ></div>
                  </div>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-2">
                  <span class="review-label color-light">1 Estrellas</span>
                </div>
                <div class="col-md-10">
                  <div class="review-bar rounded-pill bg-light">
                    <div class="h-100 bg-grey rounded-pill w-5"></div>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <article
            class="col-12 col-md-3 mt-3 bg-grey-100 p-3 rounded px-4">
            <p class="fw-bolder">Reseñas Generales</p>
            <?php 
              $reviewsTotales = rand(0, 600);
              $reviewsBuenas = rand(0,  $reviewsTotales);
              $tasaBuenas = ($reviewsBuenas / $reviewsTotales)*5;
              $tasaBuenas = round($tasaBuenas,2);

              $porcentaje = ($reviewsBuenas / $reviewsTotales) * 100;
              $porcentaje = round($porcentaje,2);
            ?>
            <span class="d-inline-block display-6 fw-bolder align-top"><?php echo "{$tasaBuenas}/5" ?></span>
            <div class="d-inline-block ms-2">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <p class="fw-light text-small align-bottom text-secondary">
                <?php echo $reviewsTotales ?> Reseñas
              </p>
            </div>
            <p class="fw-light">
              <?php 
              
              ?>

              <?php echo $reviewsBuenas ?> de <?php echo $reviewsTotales ?> (<?php echo $porcentaje ?>%) Reseñas recomendaron este producto
            </p>
          </article>
          <article class="col-12 col-md-3 mt-3">
            <p class="fw-bolder">Hacer una Reseña al producto</p>
            <div class="d-flex gap-2">
              <span class="cursor-pointer bg-light p-2 rounded text-center"><i class="text-dark fa-xl fa-regular fa-star"></i></span>
              <span class="cursor-pointer bg-light p-2 rounded text-center"><i class="text-dark fa-xl fa-regular fa-star"></i></span>
              <span class="cursor-pointer bg-light p-2 rounded text-center"><i class="text-dark fa-xl fa-regular fa-star"></i></span>
              <span class="cursor-pointer bg-light p-2 rounded text-center"><i class="text-dark fa-xl fa-regular fa-star"></i></span>
              <span class="cursor-pointer bg-light p-2 rounded text-center"><i class="text-dark fa-xl fa-regular fa-star"></i></span>
            </div>
            <p class="fw-light mt-2">
              Para añadir una reseña, una direccion de email verificada es necesaria por razones de verificacion.
            </p>
          </article>
        </section>
      </section>
      <!-- Products -->
      <section class="row">
        <h2 class="text-center mb-4 mt-5">Productos Relacionados</h2>

        <?php require('../layout/_productsContainer.php') ?>
      </section>
    </main>
    </div>
  </aside>

  <!-- Footer -->
  <?php require('../layout/_footer.php') ?>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>