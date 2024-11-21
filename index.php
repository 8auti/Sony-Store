<?php

require_once('./consultas/conexion.php');
require_once('./consultas/consultas_componentes.php');
$products = getProducts($conexion);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nexus Store - Home</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous" />
  <script
    src="https://kit.fontawesome.com/592dce0dd2.js"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./styles/style.css" />
</head>

<body>

  <!-- Mobile Nav & Header -->
  <?php require('layout/_navMobile.php') ?>
  <?php require('layout/_headerMobile.php') ?>

  <aside class="container-fluid">
    <!-- Nav -->
    <?php require('layout/_nav.php') ?>

    <main class="col z-4">
      <!-- Header -->
      <?php require('layout/_header.php') ?>

      <section class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item h-40vh active">
            <img
              src="./img/banner-logitech.png"
              class="d-block w-100 h-100 fit-cover object-left"
              alt="Nexus Store Banner 1" />
          </div>
          <div class="carousel-item h-40vh">
            <img
              src="./img/sony-banner.png"
              class="d-block w-100 h-100 fit-cover object-left"
              alt="Nexus Store Banner 2" />
          </div>
        </div>
      </section>

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
      <?php require('layout/_productsContainer.php') ?>

      <!-- Best 4 Gaming Section -->
      <section>
        <h2 class="my-4">Recomendado para Gaming</h2>
        <section class="d-none d-lg-flex row">
          <article class="pe-2 col-6 dual-card border-gaming-card rounded">
            <div
              class="dual-card d-flex flex-column justify-content-between rounded gaming-card-1">
              <div>
                <span class="ms-3 mt-3 d-block fw-bolder text-secondary">Controles</span>
                <span class="ms-3 d-block fw-bolder text-secondary">Gamer</span>
              </div>
              <p class="ms-3 fw-bolder">PS5 DualSense™ Control Inalambrico</p>
            </div>
          </article>
          <article class="ps-2 col-6">
            <div
              class="dual-card border-gaming-card d-flex flex-column justify-content-between rounded gaming-card-2 bg-grey-200">
              <div>
                <span class="ms-3 mt-3 d-block fw-bolder text-secondary">Auriculares</span>
                <span class="ms-3 d-block fw-bolder text-secondary">Gamer</span>
              </div>
              <p class="ms-3 fw-bolder">HyperX Cloud Stinger</p>
            </div>
          </article>
        </section>

        <!-- Gaming Section Carrousel 4 Mobile -->
        <div
          id="carouselExampleIndicators"
          class="carousel slide d-block d-md-none">
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
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div
                class="dual-card d-flex flex-column justify-content-between rounded gaming-card-1">
                <div>
                  <span class="ms-3 mt-3 d-block fw-bolder text-secondary">Controles</span>
                  <span class="ms-3 d-block fw-bolder text-secondary">Gamer</span>
                </div>
                <p class="ms-3 fw-bolder">
                  PS5 DualSense™ Control Inalambrico
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <div
                class="dual-card border-gaming-card d-flex flex-column justify-content-between rounded gaming-card-2 bg-grey-200">
                <div>
                  <span class="ms-3 mt-3 d-block fw-bolder text-secondary">Auriculares</span>
                  <span class="ms-3 d-block fw-bolder text-secondary">Gamer</span>
                </div>
                <p class="ms-3 fw-bolder">HyperX Cloud Stinger</p>
              </div>
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
      </section>
    </main>
    </div>
  </aside>

  <?php require('layout/_footer.php') ?>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>