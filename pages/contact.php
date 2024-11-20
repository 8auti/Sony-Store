<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nexus Store - Contact</title>
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
    
    <main class="container mb-5">
      <h1 class="text-center mt-5 mb-3">Support Center</h1>
      <h2 class="text-center mb-5">How can we help you?</h2>

      <section class="row justify-content-center align-items-start">
        <article class="col-12 col-md-6 text-center">
          <h3 class="text-start">Contact us</h3>
          <p class="text-start w-75">
            Complete the form to report a bug or inquire about anything you
            could not find in the FAQ.
          </p>
        </article>
        <article class="col-12 col-md-6 text-start">
          <form action="">
            <div class="mt-2">
              <label for="">Subject:</label>
              <input
                class="rounded-3 border-0 mt-1 bg-grey py-1 ps-2 w-100"
                type="text"
                placeholder="Select Subject"
              />
            </div>
            <div class="mt-2">
              <label for="">Message:</label>
              <textarea
                class="rounded-3 border-0 mt-1 bg-grey py-1 ps-2 w-100 h-150px"
                placeholder="Your Message"
              ></textarea>
            </div>
            <input
              class="bg-grey-300 border-0 rounded-3 p-1 px-3 mt-2"
              type="submit"
              value="Send message"
            />
          </form>
        </article>
      </section>

      <style>
        .article-spacing {
          margin-bottom: 15px;
        }
      </style>

      <section class="container">
        <h2 class="text-center my-5">FAQs</h2>
        <section class="row justify-content-center align-items-center mt-5">
          <div class="col-12 col-md-6">
            <article
              class="bg-grey mb-4 p-4 d-flex justify-content-around align-items-center"
            >
              <div class="cursor-pointer">
                <p>How to buy</p>
                <span>Some more >></span>
              </div>
              <i class="fa-solid fa-3x fa-cart-shopping"></i>
            </article>
          </div>
          <div class="col-12 col-md-6">
            <article
              class="bg-grey mb-4 p-4 d-flex justify-content-around align-items-center"
            >
              <div class="cursor-pointer">
                <p>Payments and invoicing</p>
                <span>Some more >></span>
              </div>
              <i class="fa-solid fa-3x fa-credit-card"></i>
            </article>
          </div>
          <div class="col-12 col-md-6">
            <article
              class="bg-grey mb-4 p-4 d-flex justify-content-around align-items-center"
            >
              <div class="cursor-pointer">
                <p>Product delivery</p>
                <span>Some more >></span>
              </div>
              <i class="fa-solid fa-3x fa-truck"></i>
            </article>
          </div>
          <div class="col-12 col-md-6">
            <article
              class="bg-grey mb-4 p-4 d-flex justify-content-around align-items-center"
            >
              <div class="cursor-pointer">
                <p>Exchanges or returns</p>
                <span>Some more >></span>
              </div>
              <i class="fa-solid fa-3x fa-box-open"></i>
            </article>
          </div>
          <div class="col-12 col-md-6">
            <article
              class="bg-grey mb-4 p-4 d-flex justify-content-around align-items-center"
            >
              <div class="cursor-pointer">
                <p>Warranty and support</p>
                <span>Some more >></span>
              </div>
              <i class="fa-solid fa-3x fa-hand-holding"></i>
            </article>
          </div>
          <div class="col-12 col-md-6">
            <article
              class="bg-grey mb-4 p-4 d-flex justify-content-around align-items-center"
            >
              <div class="cursor-pointer">
                <p>Privacy</p>
                <span>Some more >></span>
              </div>
              <i class="fa-solid fa-3x fa-shield-halved"></i>
            </article>
          </div>
          <div class="col-12">
            <article
              class="bg-grey mb-4 p-4 d-flex justify-content-around align-items-center"
            >
              <div class="cursor-pointer">
                <p>Need more help?</p>
                <span>Some more >></span>
              </div>
              <i class="fa-regular fa-3x fa-comments"></i>
            </article>
          </div>
        </section>
      </section>
    </main>
    
    <!-- Footer -->
    <?php require('../layout/_footer.php')?>
    
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
</html>
