<?php
require_once('../consultas/conexion.php');
require_once('../consultas/consultas_usuarios.php');

$error = null;
$email = false;
$password = false;

if (isset($_SESSION['user'])) {
  header('Location: /nexus/index.php');
  exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'] ?? false;
  $password = $_POST['password'] ?? false;

  if ($email && $password) {
    $user = login($conexion, $email, $password);

    if ($user) {
      $_SESSION['user'] = $user;
      header('Location: /nexus/index.php');
      exit;
    } else {
      $error = 'Los datos son incorrectos.';
    }
  } else {
    $error = 'Por favor, completa todos los campos.';
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nexus Store - Iniciar Sesion</title>
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
    <main class="col p-3 z-4" style="min-height: 80vh;">
      <!-- Header -->
      <?php require('../layout/_header.php') ?>

      <section class="container mt-5">
        <div class="row justify-content-md-center">
          <div class="col-12 col-md-6">
            <h1>Iniciar Sesion</h1>
            <form action="" method="post">
              <div class="form-group my-3">
                <label for="email">Email</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  class="form-control"
                  required
                  placeholder="Enter email" />
              </div>
              <div class="form-group my-3">
                <label for="password">Contraseña</label>
                <input
                  type="password"
                  id="password"
                  name="password"
                  class="form-control"
                  required
                  placeholder="Enter password" />
              </div>
              <!-- Forgot Password -->
              <div class="row py-3">
                <div class="col fst-italic">
                  Olvidaste tu contraseña? <a class="text-primary fst-normal" href="/auth/nexus/forgot-password">Restablecer Contraseña</a>
                </div>
              </div>
              <button type="submit" class="btn btn-primary my-3">Iniciar Sesión</button>

              <!-- Mostrar mensaje de error si existe -->
              <?php if ($error): ?>
                <p class="alert alert-danger"><?= htmlspecialchars($error) ?></p>
              <?php endif; ?>
            </form>
            <div class="row py-3">
              <div class="col">
                Nuevo Comprador? <a class="text-primary" href="/nexus/auth/register.php">Registrarse</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

  </aside>
  <!-- Footer -->
  <?php require('../layout/_footer.php') ?>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>