
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

          <section>
              <article>
                <div>
                  <h2>¿Quiénes somos?</h2>
                  <p>
                    En <strong>Nexus</strong>, somos mucho más que una tienda de productos gaming; somos un equipo apasionado por los videojuegos y la tecnología. Nos dedicamos a ofrecer los mejores accesorios y productos para gamers que buscan no solo calidad, sino una experiencia de juego inigualable.
                  </p>
                  <p>
                    Sabemos que el mundo de los videojuegos es mucho más que una simple afición: es una forma de vida, una comunidad global y, sobre todo, una pasión que merece ser respaldada por el mejor equipamiento. Por eso, seleccionamos cuidadosamente cada producto que ofrecemos, garantizando solo lo mejor en términos de rendimiento, durabilidad y diseño.
                  </p>

                  <h3>Lo que nos diferencia</h3>
                  <article class = "diferencia">
                    <figcaption class = "column">
                      <img src="../img/Studio.png" class="img-fluid" alt="...">
                    </figcaption>
                      <ol class = "column">
                        <li>
                          <strong>Calidad Premium:</strong> Trabajamos con las marcas más reconocidas del mercado, ofreciéndote productos de gama alta para llevar tu experiencia gaming al siguiente nivel.
                        </li>
                        <li>
                          <strong>Variedad:</strong> Ya sea que busques una nueva PC gamer, un teclado mecánico, auriculares de alta fidelidad, o cualquier otro accesorio, en Nexus tenemos todo lo que necesitas para equiparte como un verdadero profesional.
                        </li>
                        <li>
                          <strong>Atención al cliente personalizada:</strong> Sabemos que cada gamer tiene necesidades únicas, por eso nos esforzamos por brindarte un servicio de atención al cliente excepcional, ayudándote a elegir el producto perfecto para ti.
                        </li>
                        <li>
                          <strong>Envíos rápidos y seguros:</strong> Entendemos que lo que más deseas es disfrutar de tus productos cuanto antes, por lo que te garantizamos envíos rápidos y seguros para que no tengas que esperar mucho para comenzar a jugar.
                        </li>
                        <li>
                          <Strong>Ofertas exclusivas: </Strong>Aprovecha nuestras promociones y descuentos especiales diseñados para que puedas obtener productos de alta calidad al mejor precio del mercado. ¡La mejor tecnología ahora está al alcance de todos!
                        </li>
                      </ol>
                  </article>
                  <h3>
                    Nuestra Mision  
                  </h3>
                    <p>
                    Nuestra misión es brindar a cada gamer una experiencia de compra excepcional, ofreciendo productos de la más alta calidad a precios competitivos, y asegurando que cada compra sea un paso más hacia un rendimiento de juego superior.
                    </p>
                </div>
              </article>
          </section>
    <!-- Footer -->
    <?php require('../layout/_footer.php')?>
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
