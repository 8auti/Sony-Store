
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nexus Store - Checkout</title>
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
                <span class="d-block">Month / Year</span>
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
              <p class="mt-3 fw-bolder">Add new Credit Card</p>
            </article>
          </section>

          <section>
            <article>
              <div>
                <p>
                  Nosotros 
                </p>
              </div>
            </article>
          </section>



          <!-- Related Products -->
          <section class="row">
            <h2 class="text-center mb-4 mt-5">Related Products</h2>
            <article class="col-6 col-md-4 col-lg-3 text-center p-1">
              <div class="p-1 bg-grey-100 h-100">
                <a href="./product-detail.php">
                  <figure class="product-card">
                    <img
                      class="w-100 aspect-square fit-contain"
                      src="../img/sony-vertical-grip.webp"
                      alt="Vertical Grip VG-C5"
                    />
                    <figcaption>Vertical Grip VG-C5</figcaption>
                  </figure>
                </a>
                <p class="text-secondary fw-bolder text-uppercase">
                  CAMERAS ACCESORIES
                </p>
              </div>
            </article>
            <article class="col-6 col-md-4 col-lg-3 text-center p-1">
              <div class="p-1 bg-grey-100 h-100">
                <a href="./product-detail.php">
                  <figure class="product-card">
                    <img
                      class="w-100 aspect-square fit-contain"
                      src="../img/sony-pistol-mic.webp"
                      alt="Pistol microphone ECM-G1"
                    />
                    <figcaption>Pistol microphone ECM-G1</figcaption>
                  </figure>
                </a>
                <p class="text-secondary fw-bolder text-uppercase">
                  CAMERAS ACCESORIES
                </p>
              </div>
            </article>
            <article class="col-6 col-md-4 col-lg-3 text-center p-1">
              <div class="p-1 bg-grey-100 h-100">
                <a href="./product-detail.php">
                  <figure class="product-card">
                    <img
                      class="w-100 aspect-square fit-contain"
                      src="../img/sony-lens.webp"
                      alt="FE PZ 16-35 mm F4 G Lens"
                    />
                    <figcaption>FE PZ 16-35 mm F4 G Lens</figcaption>
                  </figure>
                </a>
                <p class="text-secondary fw-bolder text-uppercase">
                  CAMERAS ACCESORIES
                </p>
              </div>
            </article>
            <article class="col-6 col-md-4 col-lg-3 text-center p-1">
              <div class="p-1 bg-grey-100 h-100">
                <a href="./product-detail.php">
                  <figure class="product-card">
                    <img
                      class="w-100 aspect-square fit-contain"
                      src="../img/sony-ps4-camera.webp"
                      alt="PlayStation VR CAMERA V2"
                    />
                    <figcaption>PlayStation VR CAMERA V2</figcaption>
                  </figure>
                </a>
                <p class="text-secondary fw-bolder text-uppercase">
                  Playstation Accessories
                </p>
              </div>
            </article>
            <article class="col-6 col-md-4 col-lg-3 text-center p-1">
              <div class="p-1 bg-grey-100 h-100">
                <a href="./product-detail.php">
                  <figure class="product-card">
                    <img
                      class="w-100 aspect-square fit-contain"
                      src="../img/sony-headphones-silver.webp"
                      alt="WH-1000XM4 Wireless Noise Cancelling Headphones"
                    />
                    <figcaption>
                      WH-1000XM4 Wireless Noise Cancelling Headphones
                    </figcaption>
                  </figure>
                </a>
                <p class="text-secondary fw-bolder text-uppercase">
                  HEADPHONES
                </p>
              </div>
            </article>
            <article class="col-6 col-md-4 col-lg-3 text-center p-1">
              <div class="p-1 bg-grey-100 h-100">
                <a href="./product-detail.php">
                  <figure class="product-card">
                    <img
                      class="w-100 aspect-square fit-contain"
                      src="../img/sony-psn.png"
                      alt="PS Gift Card $25"
                    />
                    <figcaption>PS Gift Card $25</figcaption>
                  </figure>
                </a>
                <p class="text-secondary fw-bolder text-uppercase">PSN CARDS</p>
              </div>
            </article>
            <article class="col-6 col-md-4 col-lg-3 text-center p-1">
              <div class="p-1 bg-grey-100 h-100">
                <a href="./product-detail.php">
                  <figure class="product-card">
                    <img
                      class="w-100 aspect-square fit-contain"
                      src="../img/sony-headphones-inzone-h9.jpg"
                      alt="INZONE H9 Wireless Noise Canceling"
                    />
                    <figcaption>INZONE H9 Wireless Noise Canceling</figcaption>
                  </figure>
                </a>
                <p class="text-secondary fw-bolder text-uppercase">
                  HEADPHONES
                </p>
              </div>
            </article>
            <article class="col-6 col-md-4 col-lg-3 text-center p-1">
              <div class="p-1 bg-grey-100 h-100">
                <a href="./product-detail.php">
                  <figure class="product-card">
                    <img
                      class="w-100 aspect-square fit-contain"
                      src="../img/sony-ps4-vr.webp"
                      alt="PlayStation VR"
                    />
                    <figcaption>PlayStation VR</figcaption>
                  </figure>
                </a>
                <p class="text-secondary fw-bolder text-uppercase">
                  Playstation Accessories
                </p>
              </div>
            </article>
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
