<?php
require_once('../consultas/conexion.php');
require_once('../consultas/consultas_usuarios.php');

$error = null;
$email = false;
$password = false;

if (!isset($_SESSION['user'])) {
  header('Location: /nexus/index.php');
  exit;
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

      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-3">
            <h2>Perfil usuario</h2>
            <form id="profileForm">
              <div class="mb-3 text-center">
                <label for="profile_pic" class="form-label">Foto de perfil</label>
                <div class="mb-2">
                  <img id="profilePreview" src="" alt="Profile Preview" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                </div>
                <input type="url" class="form-control" id="profile_pic" name="profile_pic" placeholder="Cambiar Imagen URL" onchange="updatePreview()">
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" maxlength="20" placeholder="Enter name" required>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Cambiar email" required>
              </div>

              <a href="#changePasswordModal" class="mb-3 cursor-pointer text-primary fst-italic d-block" id="changePassword">Cambiar contraseña?</a>

              <div class="password-fields" id="changePasswordModal">
                <div class="mb-3">
                  <label for="password" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Ingresar contraseña">
                </div>

                <div class="mb-3">
                  <label for="confirmPassword" class="form-label">Confirm Contraseña</label>
                  <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirmar contraseña">
                </div>
                <a href="#" class="mb-3 cursor-pointer text-danger fst-italic d-block">Cancelar</a>
              </div>

              <button type="submit" class="btn btn-light mb-3">Actualizar</button>
            </form>
          </div>
        </div>
      </div>
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