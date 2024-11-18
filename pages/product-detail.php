<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sony Store - Product Detail</title>
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
          <section class="container-fluid">
            <section class="row justify-content-center align-items-stretch">
              <article class="d-none d-lg-block col-lg-3 detail-card">
                <figure>
                  <img
                    class="w-100 aspect-square fit-contain"
                    src="../img/sony-ps5.webp"
                    alt="PS5"
                  />
                  <figcaption class="text-center">PS5</figcaption>
                </figure>
                <div class="row mt-5">
                  <img
                    class="col-3 aspect-square fit-cover p-1"
                    src="../img/sony-joystick-ps5-1.webp"
                    alt="sony-joystick-ps5-1"
                  />
                  <img
                    class="col-3 aspect-square fit-cover p-1"
                    src="../img/sony-joystick-ps5-2.webp"
                    alt="sony-joystick-ps5-2"
                  />
                  <img
                    class="col-3 aspect-square fit-cover p-1"
                    src="../img/sony-joystick-ps5-3.webp"
                    alt="sony-joystick-ps5-3"
                  />
                  <img
                    class="col-3 aspect-square fit-cover p-1"
                    src="../img/sony-joystick-ps5-4.webp"
                    alt="sony-joystick-ps5-4"
                  />
                  <img
                    class="col-3 aspect-square fit-cover p-1"
                    src="../img/sony-joystick-ps5-5.webp"
                    alt="sony-joystick-ps5-5"
                  />
                </div>
              </article>
              <article class="col-lg-6">
                <!-- Carrousel on Mobile -->
                <div
                  id="carouselExampleIndicators"
                  class="d-lg-none d-block carousel slide"
                  data-bs-ride="carousel"
                >
                  <div class="carousel-indicators">
                    <button
                      type="button"
                      data-bs-target="#carouselExampleIndicators"
                      data-bs-slide-to="0"
                      class="active"
                      aria-current="true"
                      aria-label="Slide 1"
                    ></button>
                    <button
                      type="button"
                      data-bs-target="#carouselExampleIndicators"
                      data-bs-slide-to="1"
                      aria-label="Slide 2"
                    ></button>
                    <button
                      type="button"
                      data-bs-target="#carouselExampleIndicators"
                      data-bs-slide-to="2"
                      aria-label="Slide 3"
                    ></button>
                    <button
                      type="button"
                      data-bs-target="#carouselExampleIndicators"
                      data-bs-slide-to="3"
                      aria-label="Slide 4"
                    ></button>
                    <button
                      type="button"
                      data-bs-target="#carouselExampleIndicators"
                      data-bs-slide-to="4"
                      aria-label="Slide 5"
                    ></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="../img/sony-joystick-ps5-1.webp" class="d-block
                      w-100 h-100 fit-contain aspect-square alt="Image 1" />
                    </div>
                    <div class="carousel-item">
                      <img src="../img/sony-joystick-ps5-2.webp" class="d-block
                      w-100 h-100 fit-contain aspect-square alt="Image 2" />
                    </div>
                    <div class="carousel-item">
                      <img src="../img/sony-joystick-ps5-3.webp" class="d-block
                      w-100 h-100 fit-contain aspect-square alt="Image 3" />
                    </div>
                    <div class="carousel-item">
                      <img src="../img/sony-joystick-ps5-4.webp" class="d-block
                      w-100 h-100 fit-contain aspect-square alt="Image 4" />
                    </div>
                    <div class="carousel-item">
                      <img src="../img/sony-joystick-ps5-5.webp" class="d-block
                      w-100 h-100 fit-contain aspect-square alt="Image 5" />
                    </div>
                  </div>
                  <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev"
                  >
                    <span
                      class="carousel-control-prev-icon"
                      aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next"
                  >
                    <span
                      class="carousel-control-next-icon"
                      aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>

                <figure class="bg-grey-300 p-3 d-none d-lg-block">
                  <img
                    class="w-100"
                    src="../img/sony-joystick-ps5.webp"
                    alt="PS5 Dualsense Wireless Control"
                  />
                  <figcaption class="text-secondary fw-bolder">
                    Playstation Accesories
                  </figcaption>
                </figure>
                <h1 class="text-uppercase my-4">
                  PS5 Dualsense Wireless Control
                </h1>
                <section class="my-3">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star text-secondary"></i>
                </section>
                <section class="row justify-content-between align-items-start">
                  <p class="col-4 display-6 fw-bolder">$150.00</p>
                  <div class="col-8 row align-items-center">
                    <a href="./checkout.html" class="d-contents">
                      <div
                        class="col-8 bg-pill rounded-pill p-1 px-3 text-center"
                      >
                        Order Now
                      </div>
                    </a>
                    <div class="col-4">
                      <i
                        class="fa-regular fa-2xl fa-heart"
                        aria-hidden="true"
                      ></i>
                    </div>
                  </div>
                </section>
              </article>
              <article class="row col-12 col-lg-3 p-0 m-0">
                <div class="mb-2 col-4 col-lg-12 m-0 p-1">
                  <figure
                    class="bg-grey-100 aspect-square m-0 d-flex flex-column justify-content-center align-items-center rounded h-150px w-100 product-color"
                  >
                    <img
                      class="w-100 fit-contain h-75"
                      src="../img/sony-joystick-red.png"
                      alt="PS5 Joystick Color Red"
                    />
                    <figcaption class="text-center">Color: RED</figcaption>
                  </figure>
                </div>
                <div class="mb-2 col-4 col-lg-12 m-0 p-1">
                  <figure
                    class="bg-grey-100 aspect-square m-0 d-flex flex-column justify-content-center align-items-center rounded h-150px w-100 product-color"
                  >
                    <img
                      class="w-100 fit-contain h-75"
                      src="../img/sony-joystick-black.png"
                      alt="PS5 Joystick Color Black"
                    />
                    <figcaption class="text-center">Color: BLACK</figcaption>
                  </figure>
                </div>
                <div class="mb-2 col-4 col-lg-12 m-0 p-1">
                  <figure
                    class="bg-grey-100 aspect-square m-0 d-flex flex-column justify-content-center align-items-center rounded h-150px w-100 product-color"
                  >
                    <img
                      class="w-100 fit-contain h-75"
                      src="../img/sony-joystick-purple.png"
                      alt="PS5 Joystick Color Purple"
                    />
                    <figcaption class="text-center">Color: PURPLE</figcaption>
                  </figure>
                </div>
              </article>
            </section>
          </section>
          <section>
            <h2 class="mb-4 mt-5">Product Description</h2>
            <section class="row">
              <article class="col-12 col-md-6">
                <iframe
                  class="w-100 aspect-video"
                  src="https://www.youtube.com/embed/RkC0l4iekYo?si=O9u0g5yQ7rpeTd1U"
                  title="YouTube video player"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin"
                  allowfullscreen
                ></iframe>
              </article>
              <article class="col-12 col-md-6">
                <h3>Dualsense Wireless Control</h3>
                <p class="text-secondary">Playstation 5 - Play Has No Limits</p>
                <p class="fw-light">
                  Discover a deeper, more immersive gaming experience* that
                  brings the action to life in the palms of your hands. The
                  Dualsense wireless controller offer immersive haptic
                  feedback**, dynamic adaptive triggers** and a built-in
                  microphone, all integrated into an iconic and comfortable
                  design.
                </p>
                <p class="text-orange fw-bolder">
                  USB charging cable not included
                </p>
              </article>
            </section>
          </section>
          <section>
            <h2 class="mb-4 mt-5">Reviews</h2>
            <section class="row">
              <article class="col-12 col-md-6">
                <div class="container mt-5">
                  <div class="row mb-2">
                    <div class="col-md-2">
                      <span class="review-label color-light">5 Stars</span>
                    </div>
                    <div class="col-md-10">
                      <div class="review-bar rounded-pill bg-light">
                        <div class="h-100 bg-grey rounded-pill w-75"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-md-2">
                      <span class="review-label color-light">4 Stars</span>
                    </div>
                    <div class="col-md-10">
                      <div class="review-bar rounded-pill bg-light">
                        <div class="h-100 bg-grey rounded-pill w-50"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-md-2">
                      <span class="review-label color-light">3 Stars</span>
                    </div>
                    <div class="col-md-10">
                      <div class="review-bar rounded-pill bg-light">
                        <div class="h-100 bg-grey rounded-pill w-25"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-md-2">
                      <span class="review-label color-light">2 Stars</span>
                    </div>
                    <div class="col-md-10">
                      <div class="review-bar rounded-pill bg-light">
                        <div class="h-100 bg-grey rounded-pill w-10"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-md-2">
                      <span class="review-label color-light">1 Star</span>
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
                class="col-12 col-md-3 mt-3 bg-grey-100 p-3 rounded px-4"
              >
                <p class="fw-bolder">General Reviews</p>
                <span class="d-inline-block display-6 fw-bolder align-top"
                  >4.5</span
                >
                <div class="d-inline-block ms-2">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <p class="fw-light text-small align-bottom text-secondary">
                    432 Reviews
                  </p>
                </div>
                <p class="fw-light">
                  398 out of 423 (88%) reviews recommend this product
                </p>
              </article>
              <article class="col-12 col-md-3 mt-3">
                <p class="fw-bolder">Review a product</p>
                <div class="d-flex gap-2">
                  <span class="cursor-pointer bg-light p-2 rounded text-center"
                    ><i class="text-dark fa-xl fa-regular fa-star"></i
                  ></span>
                  <span class="cursor-pointer bg-light p-2 rounded text-center"
                    ><i class="text-dark fa-xl fa-regular fa-star"></i
                  ></span>
                  <span class="cursor-pointer bg-light p-2 rounded text-center"
                    ><i class="text-dark fa-xl fa-regular fa-star"></i
                  ></span>
                  <span class="cursor-pointer bg-light p-2 rounded text-center"
                    ><i class="text-dark fa-xl fa-regular fa-star"></i
                  ></span>
                  <span class="cursor-pointer bg-light p-2 rounded text-center"
                    ><i class="text-dark fa-xl fa-regular fa-star"></i
                  ></span>
                </div>
                <p class="fw-light mt-2">
                  To add a review, a valid email address is required for
                  verification purposes.
                </p>
              </article>
            </section>
          </section>
          <!-- Products -->
          <section class="row">
            <h2 class="text-center mb-4 mt-5">Related Products</h2>
            <article class="col-6 col-md-4 col-lg-3 text-center p-1">
              <div class="p-1 bg-grey-100 h-100">
                <a href="./product-detail.html">
                  <figure class="product-card">
                    <img
                      class="w-100 aspect-square fit-contain"
                      src="../img/sony-headphones-inzone-h7.jpg"
                      alt="INZONE H7 Wireless Noise Cancelling Headphones"
                    />
                    <figcaption>
                      INZONE H7 Wireless Noise Cancelling Headphones
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
                <a href="./product-detail.html">
                  <figure class="product-card">
                    <img
                      class="w-100 aspect-square fit-contain"
                      src="../img/sony-ps5-vr-2.webp"
                      alt="PlayStation® VR2"
                    />
                    <figcaption>PlayStation® VR2</figcaption>
                  </figure>
                </a>
                <p class="text-secondary fw-bolder text-uppercase">
                  Playstation Accessories
                </p>
              </div>
            </article>
            <article class="col-6 col-md-4 col-lg-3 text-center p-1">
              <div class="p-1 bg-grey-100 h-100">
                <a href="./product-detail.html">
                  <figure class="product-card">
                    <img
                      class="w-100 aspect-square fit-contain"
                      src="../img/sony-ps-move.webp"
                      alt="PlayStation Move | motion controls"
                    />
                    <figcaption>PlayStation Move | motion controls</figcaption>
                  </figure>
                </a>
                <p class="text-secondary fw-bolder text-uppercase">
                  Playstation Accessories
                </p>
              </div>
            </article>
            <article class="col-6 col-md-4 col-lg-3 text-center p-1">
              <div class="p-1 bg-grey-100 h-100">
                <a href="./product-detail.html">
                  <figure class="product-card">
                    <img
                      class="w-100 aspect-square fit-contain"
                      src="../img/sony-joystick-silver.png"
                      alt="Wireless DUALSHOCK®4 Silver Controller"
                    />
                    <figcaption>
                      Wireless DUALSHOCK®4 Silver Controller
                    </figcaption>
                  </figure>
                </a>
                <p class="text-secondary fw-bolder text-uppercase">
                  Playstation Accessories
                </p>
              </div>
            </article>
            <article class="col-6 col-md-4 col-lg-3 text-center p-1">
              <div class="p-1 bg-grey-100 h-100">
                <a href="./product-detail.html">
                  <figure class="product-card">
                    <img
                      class="w-100 aspect-square fit-contain"
                      src="../img/sony-ps5-camera.webp"
                      alt="Sony Playstation 5 Camera Original HD 1080p 1080p PS5"
                    />
                    <figcaption>
                      Sony Playstation 5 Camera Original HD 1080p 1080p PS5
                    </figcaption>
                  </figure>
                </a>
                <p class="text-secondary fw-bolder text-uppercase">
                  Playstation Accessories
                </p>
              </div>
            </article>
            <article class="col-6 col-md-4 col-lg-3 text-center p-1">
              <div class="p-1 bg-grey-100 h-100">
                <a href="./product-detail.html">
                  <figure class="product-card">
                    <img
                      class="w-100 aspect-square fit-contain"
                      src="../img/sony-joystick-edge.webp"
                      alt="PS5 Dualsense EDGE ZCP1 Case"
                    />
                    <figcaption>PS5 Dualsense EDGE ZCP1 Case</figcaption>
                  </figure>
                </a>
                <p class="text-secondary fw-bolder text-uppercase">
                  Playstation Accessories
                </p>
              </div>
            </article>
            <article class="col-6 col-md-4 col-lg-3 text-center p-1">
              <div class="p-1 bg-grey-100 h-100">
                <a href="./product-detail.html">
                  <figure class="product-card">
                    <img
                      class="w-100 aspect-square fit-contain"
                      src="../img/sony-ps5.webp"
                      alt="Standard Console PlayStation®5"
                    />
                    <figcaption>Standard Console PlayStation®5</figcaption>
                  </figure>
                </a>
                <p class="text-secondary fw-bolder text-uppercase">CONSOLES</p>
              </div>
            </article>
            <article class="col-6 col-md-4 col-lg-3 text-center p-1">
              <div class="p-1 bg-grey-100 h-100">
                <a href="./product-detail.html">
                  <figure class="product-card">
                    <img
                      class="w-100 aspect-square fit-contain"
                      src="../img/sony-home-theatre.png"
                      alt="5.1-channel home theater with wireless rear speakers |
                      HT-S40R"
                    />
                    <figcaption>
                      5.1-channel home theater with wireless rear speakers |
                      HT-S40R
                    </figcaption>
                  </figure>
                </a>
                <p class="text-secondary fw-bolder text-uppercase">
                  HOME THEATRE
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
