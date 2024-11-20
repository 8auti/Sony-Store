
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

          <!-- Credit Card Modal -->
          <div id="add-credit-card" class="modal">
            <div class="modal-content bg-grey">
              <a href="#cards" class="close">&times;</a>
              <div class="bg-grey p-3 rounded-3">
                <h3>Card Detail</h3>
                <p class="text-uppercase text-secondary fw-bolder">
                  select card tye
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
                      >Name Lastname</label
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
                        >Expiry Date</label
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

          <div class="container-fluid px-1">
            <div class="row justify-content-center">
              <section class="col-12 col-lg-8">
                <article
                  class="row align-items-center justify-content-center bg-grey-100 mb-3 rounded-3"
                >
                  <div class="col-6 col-lg-5 d-flex align-items-center">
                    <figure class="row m-0">
                      <img class="col-7 aspect-square fit-contain"
                      src="../img/sony-tv.jfif" alt="4K Ultra HD Smart TV with
                      Google TV 65"" />
                    </figure>
                    <p class="col-5 d-none d-lg-block m-0">
                      4K Ultra HD Smart TV with Google TV 65"
                    </p>
                  </div>
                  <div
                    class="col-6 d-lg-none d-flex flex-column justify-content-start align-items-start gap-2"
                  >
                    <p class="m-0">
                      WH-CH720N Wireless Noise Cancelling Headphones
                    </p>
                    <div class="text-secondary fw-bolder">No Color</div>
                    <div
                      class="row flex-row-reverse justify-content-center align-items-baseline w-100"
                    >
                      <div class="col-6 d-flex align-items-center">
                        <button
                          class="rounded-circle aspect-square border-0 h-30px"
                        >
                          +
                        </button>
                        <span class="mx-2">2</span>
                        <button
                          class="rounded-circle aspect-square border-0 h-30px"
                        >
                          -
                        </button>
                      </div>
                      <div class="col-6 fw-bolder">$350.00</div>
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
                      <span class="mx-2">2</span>
                      <button
                        class="rounded-circle aspect-square border-0 h-30px"
                      >
                        -
                      </button>
                    </div>
                  </div>
                  <div class="d-none d-lg-block col-2 col-lg-2 fw-bolder">
                    $350.00
                  </div>
                </article>
                <article
                  class="row align-items-center justify-content-center bg-grey-100 mb-3 rounded-3"
                >
                  <div class="col-6 col-lg-5 d-flex align-items-center">
                    <figure class="row m-0">
                      <img
                        class="col-7 aspect-square fit-contain"
                        src="../img/sony-headphones.webp"
                        alt="WH-CH720N Wireless Noise Cancelling Headphones"
                      />
                    </figure>
                    <p class="col-5 d-none d-lg-block m-0">
                      WH-CH720N Wireless Noise Cancelling Headphones
                    </p>
                  </div>
                  <div
                    class="col-6 d-lg-none d-flex flex-column justify-content-start align-items-start gap-2"
                  >
                    <p class="m-0">
                      WH-CH720N Wireless Noise Cancelling Headphones
                    </p>
                    <div class="text-secondary fw-bolder">Black</div>
                    <div
                      class="row flex-row-reverse justify-content-center align-items-baseline w-100"
                    >
                      <div class="col-6 d-flex align-items-center">
                        <button
                          class="rounded-circle aspect-square border-0 h-30px"
                        >
                          +
                        </button>
                        <span class="mx-2">2</span>
                        <button
                          class="rounded-circle aspect-square border-0 h-30px"
                        >
                          -
                        </button>
                      </div>
                      <div class="col-6 fw-bolder">$64.00</div>
                    </div>
                  </div>
                  <div class="d-none d-lg-block col-2 col-lg-2 fw-bolder">
                    Black
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
                      <span class="mx-2">2</span>
                      <button
                        class="rounded-circle aspect-square border-0 h-30px"
                      >
                        -
                      </button>
                    </div>
                  </div>
                  <div class="d-none d-lg-block col-2 col-lg-2 fw-bolder">
                    $64.00
                  </div>
                </article>
                <article
                  class="row align-items-center justify-content-center bg-grey-100 mb-3 rounded-3"
                >
                  <div class="col-6 col-lg-5 d-flex align-items-center">
                    <figure class="row m-0">
                      <img
                        class="col-7 aspect-square fit-contain"
                        src="../img/sony-camera.webp"
                        alt="Full Frame Mirrorless Digital Camera ILCE-7M3 A7I (Body
                        only)"
                      />
                    </figure>
                    <p class="col-5 d-none d-lg-block m-0">
                      Full Frame Mirrorless Digital Camera ILCE-7M3 A7I (Body
                      only)
                    </p>
                  </div>
                  <div
                    class="col-6 d-lg-none d-flex flex-column justify-content-start align-items-start gap-2"
                  >
                    <p class="m-0">
                      Full Frame Mirrorless Digital Camera ILCE-7M3 A7I (Body
                      only)
                    </p>
                    <div class="text-secondary fw-bolder">No Color</div>
                    <div
                      class="row flex-row-reverse justify-content-center align-items-baseline w-100"
                    >
                      <div class="col-6 d-flex align-items-center">
                        <button
                          class="rounded-circle aspect-square border-0 h-30px"
                        >
                          +
                        </button>
                        <span class="mx-2">2</span>
                        <button
                          class="rounded-circle aspect-square border-0 h-30px"
                        >
                          -
                        </button>
                      </div>
                      <div class="col-6 fw-bolder">$3100.00</div>
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
                      <span class="mx-2">2</span>
                      <button
                        class="rounded-circle aspect-square border-0 h-30px"
                      >
                        -
                      </button>
                    </div>
                  </div>
                  <div class="d-none d-lg-block col-2 col-lg-2 fw-bolder">
                    $3100.00
                  </div>
                </article>
                <article
                  class="row align-items-center justify-content-center bg-grey-100 mb-3 rounded-3"
                >
                  <div class="col-6 col-lg-5 d-flex align-items-center">
                    <figure class="row m-0">
                      <img
                        class="col-7 aspect-square fit-contain"
                        src="../img/sony-ps5.webp"
                        alt="Standard Console PlayStation®5"
                      />
                    </figure>
                    <p class="col-5 d-none d-lg-block">
                      Standard Console PlayStation®5
                    </p>
                  </div>
                  <div
                    class="col-6 d-lg-none d-flex flex-column justify-content-start align-items-start gap-2"
                  >
                    <p class="m-0">Standard Console PlayStation®5</p>
                    <div class="text-secondary fw-bolder">White</div>
                    <div
                      class="row flex-row-reverse justify-content-center align-items-baseline w-100"
                    >
                      <div class="col-6 d-flex align-items-center">
                        <button
                          class="rounded-circle aspect-square border-0 h-30px"
                        >
                          +
                        </button>
                        <span class="mx-2">2</span>
                        <button
                          class="rounded-circle aspect-square border-0 h-30px"
                        >
                          -
                        </button>
                      </div>
                      <div class="col-6 fw-bolder">$600.00</div>
                    </div>
                  </div>
                  <div class="d-none d-lg-block col-2 col-lg-2 fw-bolder">
                    White
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
                      <span class="mx-2">2</span>
                      <button
                        class="rounded-circle aspect-square border-0 h-30px"
                      >
                        -
                      </button>
                    </div>
                  </div>
                  <div class="d-none d-lg-block col-2 col-lg-2 fw-bolder">
                    $600.00
                  </div>
                </article>
                <section class="row text-center justify-content-between mt-4">
                  <div
                    class="cursor-pointer col-6 col-lg-3 text-secondary my-3 p-0 pe-2"
                  >
                    <article class="pe-2 bg-grey-300 py-4 rounded-3">
                      <a href="./product-detail.html">Back to Shopping</a>
                    </article>
                  </div>
                  <div
                    class="cursor-pointer col-6 col-lg-3 text-secondary my-3 p-0 ps-2"
                  >
                    <article class="ps-2 bg-grey-300 py-4 rounded-3">
                      <a href="../index.html">Back to Home</a>
                    </article>
                  </div>
                  <article
                    class="col-12 col-lg-3 bg-grey-300 py-4 rounded-3 text-secondary my-3"
                  >
                    Subtotal:
                    <span class="text-light fw-bolder ps-2">$8228.00</span>
                  </article>
                </section>
              </section>

              <section class="d-none d-lg-block col-lg-4">
                <div class="bg-grey p-3 rounded-3">
                  <h3>Card Detail</h3>
                  <p class="text-uppercase text-secondary fw-bolder">
                    select card tye
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
                        >Name Lastname</label
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
                          >Expiry Date</label
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
          <!-- Products -->
          <section class="row">
            <h2 class="text-center mt-5">Users Also Bought</h2>
            <article class="col-6 col-md-4 col-lg-3 text-center p-1">
              <div class="p-1 bg-grey-100 h-100">
                <a href="./product-detail.php">
                  <figure class="product-card">
                    <img
                      class="w-100 aspect-square fit-contain"
                      src="../img/sony-speaker-xp500.jpg"
                      alt="XP500 Portable Wireless Speaker"
                    />
                    <figcaption>XP500 Portable Wireless Speaker</figcaption>
                  </figure>
                </a>
                <p class="text-secondary fw-bolder text-uppercase">
                  WIRELESS SPEAKERS
                </p>
              </div>
            </article>
            <article class="col-6 col-md-4 col-lg-3 text-center p-1">
              <div class="p-1 bg-grey-100 h-100">
                <a href="./product-detail.php">
                  <figure class="product-card">
                    <img
                      class="w-100 aspect-square fit-contain"
                      src="../img/sony-tv-2.jfif"
                      alt="4K Ultra HD Smart TV with Google TV 65"
                    />
                    <figcaption>
                      4K Ultra HD Smart TV with Google TV 65"
                    </figcaption>
                  </figure>
                </a>
                <p class="text-secondary fw-bolder text-uppercase">
                  TELEVISIONS
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
                      src="../img/sony-speaker.jfif"
                      alt="EXTRA BASS™ XB13 portable wireless speaker"
                    />
                    <figcaption>
                      EXTRA BASS™ XB13 portable wireless speaker
                    </figcaption>
                  </figure>
                </a>
                <p class="text-secondary fw-bolder text-uppercase">
                  PORTABLE SPEAKERS
                </p>
              </div>
            </article>
            <article class="col-6 col-md-4 col-lg-3 text-center p-1">
              <div class="p-1 bg-grey-100 h-100">
                <a href="./product-detail.php">
                  <figure class="product-card">
                    <img
                      class="w-100"
                      src="../img/sony-headphones.webp"
                      alt="WH-CH720N Wireless Noise Cancelling Headphones"
                    />
                    <figcaption>
                      WH-CH720N Wireless Noise Cancelling Headphones
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
                      src="../img/sony-speaker-3.jpg"
                      alt="Sony Bluetooth speaker MHC-V13/M"
                    />
                    <figcaption>Sony Bluetooth speaker MHC-V13/M</figcaption>
                  </figure>
                </a>
                <p class="text-secondary fw-bolder text-uppercase">
                  WIRELESS SPEAKERS
                </p>
              </div>
            </article>
            <article class="col-6 col-md-4 col-lg-3 text-center p-1">
              <div class="p-1 bg-grey-100 h-100">
                <a href="./product-detail.php">
                  <figure class="product-card">
                    <img
                      class="w-100 aspect-square fit-contain"
                      src="../img/sony-joystick-ps5.webp"
                      alt="PS5 DualSense™ Wireless Control"
                    />
                    <figcaption>PS5 DualSense™ Wireless Control</figcaption>
                  </figure>
                </a>
                <p class="text-secondary fw-bolder text-uppercase">
                  Playstation Accessories
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
