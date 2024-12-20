<?php
$mensajePostFormulario="";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

  $tema = $_POST['tema'] ?? null;
  $tema = test_input($tema);

  $email = $_POST['email'] ?? null;
  $email = filter_var($email, FILTER_VALIDATE_EMAIL);

  $telefono = $_POST['telefono'] ?? null;
  $telefono = filter_var($telefono, FILTER_VALIDATE_INT);

  $mensaje = $_POST['mensaje'] ?? null;
  $mensaje = test_input($mensaje);

  $errores = [];

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($tema)) {
      $errores[] = 'Usted debe ingresar un Tema';
    }
    if (empty($email)) {
      $errores[] = 'Usted debe ingresar un Email';
    }
    if (empty($telefono)) {
      $errores[] = 'Usted debe ingresar un Telefono';
    }
    if (empty($mensaje)) {
      $errores[] = 'Usted debe ingresar un Mensaje';
    }

    if (empty($errores)) {
      $mensajePostFormulario = 'Formulario completado. Nos pondremos en contacto.';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nexus Store - Contacto</title>
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
  <?php require('../layout/_contact_nav.php') ?>
  <main class="container mb-5">
    <h1 class="text-center mt-5 mb-3">Centro de Soporte</h1>
    <h2 class="text-center mb-5">Como podemos ayudarte?</h2>

    <!-- Mensajes de error -->
    <ul>
      <?php foreach($errores as $error) : ?>
        <li class="text-light bg-danger"><?php echo $error ?></li>
      <?php endforeach ?>
    </ul>
    
    <!-- Mensaje de formulario completado -->
    <h2 class="text-center mb-5 text-light bg-success"> <?php echo $mensajePostFormulario ?> </h2>

    <section class="row justify-content-center align-items-start">
      <article class="col-12 col-md-6 text-center">
        <h3 class="text-start">Contactanos</h3>
        <p class="text-start w-75">
          Completa el formulario para reportar un error o consultar sobre algo que no hayas encontrado en el FAQ
        </p>
      </article>

      <article class="col-12 col-md-6 text-start">
        <form action="contact.php" method="post">

          <div class="mt-2">
            <label for="">Tema:</label>
            <input
              class="rounded-3 border-0 mt-1 bg-grey py-1 ps-2 w-100"
              type="text"
              name="tema"
              value="<?php echo $tema ?>"
              placeholder="Seleccionar tema"
              required />
          </div>

          <div class="mt-2">
            <label for="">Email:</label>
            <input
              class="rounded-3 border-0 mt-1 bg-grey py-1 ps-2 w-100"
              type="email"
              name="email"
              placeholder="Email"
              value="<?php echo $email ?>"
              required />
          </div>

          <div class="mt-2">
            <label for="">Telefono:</label>
            <input
              class="rounded-3 border-0 mt-1 bg-grey py-1 ps-2 w-100"
              type="number"
              name="telefono"
              placeholder="Telefono"
              value="<?php echo $telefono ?>"
              required />
          </div>

          <div class="mt-2">
            <label for="">Mensaje:</label>
            <textarea
              class="rounded-3 border-0 mt-1 bg-grey py-1 ps-2 w-100 h-150px"
              name="mensaje"
              placeholder="Tu mensaje"
              required></textarea>
          </div>

          <input
            class="bg-grey-300 border-0 rounded-3 p-1 px-3 mt-2"
            type="submit"
            value="Enviar" />
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
            class="bg-grey mb-4 p-4 d-flex justify-content-around align-items-center">
            <div class="cursor-pointer">
              <p>Como comprar</p>
              <span>Some more >></span>
            </div>
            <i class="fa-solid fa-3x fa-cart-shopping"></i>
          </article>
        </div>
        <div class="col-12 col-md-6">
          <article
            class="bg-grey mb-4 p-4 d-flex justify-content-around align-items-center">
            <div class="cursor-pointer">
              <p>Pagos y Facturacion</p>
              <span>Ver mas >></span>
            </div>
            <i class="fa-solid fa-3x fa-credit-card"></i>
          </article>
        </div>
        <div class="col-12 col-md-6">
          <article
            class="bg-grey mb-4 p-4 d-flex justify-content-around align-items-center">
            <div class="cursor-pointer">
              <p>Delivery de Producto</p>
              <span>Ver mas >></span>
            </div>
            <i class="fa-solid fa-3x fa-truck"></i>
          </article>
        </div>
        <div class="col-12 col-md-6">
          <article
            class="bg-grey mb-4 p-4 d-flex justify-content-around align-items-center">
            <div class="cursor-pointer">
              <p>Cambios o Devoluciones</p>
              <span>Ver mas >></span>
            </div>
            <i class="fa-solid fa-3x fa-box-open"></i>
          </article>
        </div>
        <div class="col-12 col-md-6">
          <article
            class="bg-grey mb-4 p-4 d-flex justify-content-around align-items-center">
            <div class="cursor-pointer">
              <p>Garantia y soporte</p>
              <span>Ver mas >></span>
            </div>
            <i class="fa-solid fa-3x fa-hand-holding"></i>
          </article>
        </div>
        <div class="col-12 col-md-6">
          <article
            class="bg-grey mb-4 p-4 d-flex justify-content-around align-items-center">
            <div class="cursor-pointer">
              <p>Privacidad</p>
              <span>Ver mas >></span>
            </div>
            <i class="fa-solid fa-3x fa-shield-halved"></i>
          </article>
        </div>
        <div class="col-12">
          <article
            class="bg-grey mb-4 p-4 d-flex justify-content-around align-items-center">
            <div class="cursor-pointer">
              <p>Necesitas mas ayuda?</p>
              <span>Ver mas >></span>
            </div>
            <i class="fa-regular fa-3x fa-comments"></i>
          </article>
        </div>
      </section>
    </section>
  </main>

  <!-- Footer -->
  <?php require('../layout/_footer.php') ?>

</body>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"></script>

</html>