<?php

require_once('../consultas/conexion.php');
require_once('../consultas/consultas_componentes.php');

$products = getProducts($conexion) ?? [];
$productosEnGaleria = 8;

$products = array_slice($products,rand(1,count($products)-$productosEnGaleria),$productosEnGaleria); // Array, Offset, Cantidad de productos a cargar
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nexus Store - Carrito</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/592dce0dd2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../styles/style.css" />
  </head>
  <body>
    
    <!-- Mobile Nav & Header -->
    <?php require('../layout/_navMobile.php')?>
    <?php require('../layout/_headerMobile.php')?>
    
    <aside class="container-fluid">
      <!-- Nav -->
      <?php require('../layout/_nav.php')?>
        <main class="col p-3 z-4">
          <!-- Header -->
          <?php require('../layout/_header.php')?>

          <!-- Cards -->
          <section
            id="cards"
            class="d-lg-none row justify-content-center align-items-end gap-4 my-5 px-3"
          >
            <article
              class="col-7 rounded-3 dual-card bg-grey-300 row justify-content-center align-items-center"
            >
              <div class="col-6 mt-4">
                <img
                  class="w-100 filter-contrast-0"
                  src="https://static.thenounproject.com/png/3986338-200.png"
                  alt="Credit card"
                />
              </div>
              <div class="col-6 mt-4">
                <span class="d-block">Mes / Año</span>
                <span class="d-block">07 / 2028</span>
              </div>
              <p class="text-uppercase fw-bolder mt-4">Tony Montana</p>
              <p class="mt-5">* * * * 0463</p>
              <p class="p-3 col-12 align-self-end text-end">VISA</p>
            </article>
            <article
              class="col-5 rounded-3 aspect-card-half bg-grey h-50 d-flex justify-content-center align-items-center flex-column"
            >
              <a href="#add-credit-card">
                <div
                  class="bg-grey-300 aspect-square rounded-circle text-center align-middle display-6 fw-bolder p-0 m-0 h-40px"
                >
                  +
                </div>
              </a>
              <p class="mt-3 fw-bolder">Añadir nueva Tarjeta de Credito</p>
            </article>
          </section>

          <!-- Credit Card Modal -->
          <div id="add-credit-card" class="modal">
            <div class="modal-content bg-grey">
              <a href="#cards" class="close">&times;</a>
              <div class="bg-grey p-3 rounded-3">
                <h3>Detalles de Tarjeta</h3>
                <p class="text-uppercase text-secondary fw-bolder">
                  Seleccionar tipo de tarjeta
                </p>
                <form action="#cards">
                  <div class="d-flex gap-2 flex-wrap">
                    <button
                      class="p-1 px-4 bg-grey-300 border-0 rounded-3 fw-bolder"
                      id="visaButton"
                      name="paymentMethod"
                      value="VISA"
                    >
                      VISA
                    </button>
                    <button
                      class="p-1 px-4 bg-grey-100 border-0 rounded-3 fw-bolder"
                      id="paypalButton"
                      name="paymentMethod"
                      value="Paypal"
                    >
                      Paypal
                    </button>
                    <button
                      class="p-1 px-4 bg-grey-100 border-0 rounded-3 fw-bolder"
                      id="mastercardButton"
                      name="paymentMethod"
                      value="MasterCard"
                    >
                      MasterCard
                    </button>
                  </div>
                  <div class="my-4">
                    <label class="d-block mb-2" for="cardNumber"
                      >Numero de tarjeta</label
                    >
                    <input
                      required
                      class="form-control border-bottom-only"
                      type="number"
                      id="cardNumber"
                      name="cardNumber"
                    />
                  </div>
                  <div class="my-4">
                    <label class="d-block mb-2" for="nameLastname"
                      >Ultimo Nombre</label
                    >
                    <input
                      required
                      class="form-control border-bottom-only"
                      type="text"
                      id="nameLastname"
                      name="nameLastname"
                    />
                  </div>
                  <div class="my-4">
                    <label class="d-block mb-2" for="dni">DNI</label>
                    <input
                      required
                      class="form-control border-bottom-only"
                      type="number"
                      id="dni"
                      name="dni"
                    />
                  </div>
                  <div class="row my-4">
                    <div class="col-6">
                      <label class="m-0 p-0 w-100 mb-2" for="expiryDate"
                        >Fecha de Expiracion</label
                      >
                      <input
                        required
                        class="form-control border-bottom-only m-0 p-0 w-100"
                        type="date"
                        id="expiryDate"
                        name="expiryDate"
                      />
                    </div>
                    <div class="col-6">
                      <label class="m-0 p-0 w-100 mb-2" for="cvv">CVV</label>
                      <input
                        required
                        class="form-control border-bottom-only m-0 p-0 w-100"
                        type="number"
                        id="cvv"
                        name="cvv"
                      />
                    </div>
                  </div>
                  <input
                    class="w-100 py-3 bg-grey-300 border-0 rounded-3 fw-bolder"
                    type="submit"
                    value="CHECKOUT"
                    id="checkoutButton"
                    name="checkoutButton"
                  />
                </form>
              </div>
            </div>
          </div>


          <?php 
            $productosEnCarrito = rand(1,4);
            $productosAleatorios = array_slice($products,rand(1,count($products)-$productosEnCarrito),$productosEnCarrito); // Array, Offset, Cantidad de productos a cargar
          ?>

          <div class="container-fluid px-1">
            <div class="row justify-content-center">
              <section class="col-12 col-lg-8">
              <?php $total = 0 ?>
              <?php foreach ($productosAleatorios as $productoCarrito) : 
                $title = $productoCarrito['nombre_producto'] ?? 'Unknown Product';
                $imageUrl = $productoCarrito['url_imagen'] ?? 'https://via.placeholder.com/150';
                $price = $productoCarrito['precio'] ?? '. . .';
                $total += $price;
                ?>
                <article
                  class="row align-items-center justify-content-center bg-grey-100 mb-3 rounded-3"
                >
                  
                  <div class="col-6 col-lg-5 d-flex align-items-center">
                    <figure class="row m-0">
                      <img class="col-7 aspect-square fit-contain"
                      src="<?php echo $imageUrl ?>"
                      alt="<?php echo $title ?>" />
                    </figure>
                    <p class="col-5 d-none d-lg-block m-0">
                      <?php echo $title ?>
                    </p>
                  </div>
                  

                  <div
                    class="col-6 d-lg-none d-flex flex-column justify-content-start align-items-start gap-2"
                  >
                    <p class="m-0">
                      <?php echo $title ?>
                    </p>
                    <div class="text-secondary fw-bolder">Sin Color</div>
                    <div
                      class="row flex-row-reverse justify-content-center align-items-baseline w-100"
                    >
                      <div class="col-6 d-flex align-items-center">
                        <button
                          class="rounded-circle aspect-square border-0 h-30px"
                        >
                          +
                        </button>
                        <span class="mx-2"><?php echo rand(1,3)?></span>
                        <button
                          class="rounded-circle aspect-square border-0 h-30px"
                        >
                          -
                        </button>
                      </div>
                      <div class="col-6 fw-bolder"><?php echo $price ?></div>
                    </div>
                  </div>

                  <div
                    class="d-none d-lg-block col-2 col-lg-2 text-secondary fw-bolder"
                  >
                    No Color
                  </div>
                  <div class="d-none d-lg-block col-2 col-lg-3">
                    <div
                      class="d-flex justify-content-center align-items-baseline"
                    >
                      <button
                        class="rounded-circle aspect-square border-0 h-30px"
                      >
                        +
                      </button>
                      <span class="mx-2"><?php echo rand(1,3)?></span>
                      <button
                        class="rounded-circle aspect-square border-0 h-30px"
                      >
                        -
                      </button>
                    </div>
                  </div>
                  <div class="d-none d-lg-block col-2 col-lg-2 fw-bolder">
                    <?php echo $price?>
                  </div>
                </article>
              <?php endforeach ?>
                <section class="row text-center justify-content-between mt-4">
                  <div
                    class="cursor-pointer col-6 col-lg-3 text-secondary my-3 p-0 pe-2"
                  >
                    <article class="pe-2 bg-grey-300 py-4 rounded-3">
                      <a href="./product-detail.php">Volver a comprar</a>
                    </article>
                  </div>
                  <div
                    class="cursor-pointer col-6 col-lg-3 text-secondary my-3 p-0 ps-2"
                  >
                    <article class="ps-2 bg-grey-300 py-4 rounded-3">
                      <a href="../index.php">Volver a Home</a>
                    </article>
                  </div>
                  <article
                    class="col-12 col-lg-3 bg-grey-300 py-4 rounded-3 text-secondary my-3"
                  >
                    Subtotal:
                    <span class="text-light fw-bolder ps-2">$<?php echo $total ?></span>
                  </article>
                </section>
              </section>

              <section class="d-none d-lg-block col-lg-4">
                <div class="bg-grey p-3 rounded-3">
                  <h3>Detalles de Tarjeta</h3>
                  <p class="text-uppercase text-secondary fw-bolder">
                    seleccionar tipo de tarjeta
                  </p>
                  <form action="">
                    <div class="d-flex gap-2 flex-wrap">
                      <button
                        class="p-1 px-4 bg-grey-300 border-0 rounded-3 fw-bolder"
                        id="visaButton"
                        name="paymentMethod"
                        value="VISA"
                      >
                        VISA
                      </button>
                      <button
                        class="p-1 px-4 bg-grey-100 border-0 rounded-3 fw-bolder"
                        id="paypalButton"
                        name="paymentMethod"
                        value="Paypal"
                      >
                        Paypal
                      </button>
                      <button
                        class="p-1 px-4 bg-grey-100 border-0 rounded-3 fw-bolder"
                        id="mastercardButton"
                        name="paymentMethod"
                        value="MasterCard"
                      >
                        MasterCard
                      </button>
                    </div>
                    <div class="my-4">
                      <label class="d-block mb-2" for="cardNumber"
                        >Card Number</label
                      >
                      <input
                        required
                        class="form-control border-bottom-only"
                        type="number"
                        id="cardNumber"
                        name="cardNumber"
                      />
                    </div>
                    <div class="my-4">
                      <label class="d-block mb-2" for="nameLastname"
                        >Ultimo nombre</label
                      >
                      <input
                        required
                        class="form-control border-bottom-only"
                        type="text"
                        id="nameLastname"
                        name="nameLastname"
                      />
                    </div>
                    <div class="my-4">
                      <label class="d-block mb-2" for="dni">DNI</label>
                      <input
                        required
                        class="form-control border-bottom-only"
                        type="number"
                        id="dni"
                        name="dni"
                      />
                    </div>
                    <div class="row my-4">
                      <div class="col-6">
                        <label class="m-0 p-0 w-100 mb-2" for="expiryDate"
                          >Fecha de Expiracion</label
                        >
                        <input
                          required
                          class="form-control border-bottom-only m-0 p-0 w-100"
                          type="date"
                          id="expiryDate"
                          name="expiryDate"
                        />
                      </div>
                      <div class="col-6">
                        <label class="m-0 p-0 w-100 mb-2" for="cvv">CVV</label>
                        <input
                          required
                          class="form-control border-bottom-only m-0 p-0 w-100"
                          type="number"
                          id="cvv"
                          name="cvv"
                        />
                      </div>
                    </div>
                    <input
                      class="w-100 py-3 bg-grey-300 border-0 rounded-3 fw-bolder"
                      type="submit"
                      value="CHECKOUT"
                      id="checkoutButton"
                      name="checkoutButton"
                    />
                  </form>
                </div>
              </section>
            </div>
          </div>
          <!-- Productos -->
          <section class="row">
            <h2 class="text-center mt-5">Los usuarios tambien compraron</h2>
            <?php require('../layout/_productsContainer.php')?>
          </section>

          <?php
            $categorias=[
              'Motherboards','Tarjetas Gráficas','Memorias RAM','Monitores','Coolers','Gabinetes','Fuentes','Perifericos'
            ];
            $categoriaRandom = $categorias[rand(0,7)];
            $products=getProductsByCategory($conexion,$categoriaRandom);
            $products = array_slice($products,0,$productosEnGaleria);
          ?>

          

          <!-- Related Products -->
          <section class="row">
            <h2 class="text-center mb-4 mt-5">Productos relacionados</h2>
            <?php require('../layout/_productsContainer.php')?>
          </section>
        </main>
      </div>
    </aside>

    <!-- Footer -->
    <?php require('../layout/_footer.php')?>
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
