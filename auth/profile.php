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

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$nombre = $_POST['name'] ?? null;
$nombre = test_input($nombre);

$email = $_POST['email'] ?? null;
$email = filter_var($email, FILTER_VALIDATE_EMAIL);

$image_url = $_POST['profile_pic'] ?? null;
$image_url = filter_var($image_url, FILTER_VALIDATE_URL);

$password = $_POST['password'] ?? null;
$password = test_input($password);
$password = strlen($password) > 0 ? $password : null;

$password2 = $_POST['confirmPassword'] ?? null;
$password2 = test_input($password2);
$password2 = strlen($password2) > 0 ? $password2 : null;

$errores = [];
$cambios = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($nombre)) {
    $errores[] = 'Nombre no puede estar vacio';
  }

  if ($nombre !== $user['nombre_usuario'] && isset($nombre)) {
    $_SESSION['user']['nombre_usuario']=$nombre;
    $user['nombre_usuario']=$nombre;
    setName($conexion, $user['id_usuario'], $nombre);
    $cambios[] = 'Se cambio el Nombre con exito.';
  }

  if (empty($email)) {
    $errores[] = 'Email no puede estar vacio';
  }

  if ($email !== $user['email_usuario'] && isset($email)) {
    $_SESSION['user']['email_usuario']=$email;
    $user['email_usuario']=$email;
    setEmail($conexion, $user['id_usuario'], $email);
    $cambios[] = 'Se cambio el Email con exito.';
  }

  if ($image_url !== $user['imagen_perfil'] && isset($image_url)) {
    $_SESSION['user']['imagen_perfil']=$image_url;
    $user['imagen_perfil']=$image_url;
    setProfileIcon($conexion, $user['id_usuario'], $image_url);
    $cambios[] = 'Se cambio la foto de perfil con exito.';
  }

  if (isset($password) && isset($password2)) {
    // Contraseña es distinta a confirmar contraseña
    if ($password !== $password2) {
      $errores[] = 'Las contraseñas no coinciden.';
    } else {
      // Minimo y maximo de caracteres
      if (strlen($password) < 8 || strlen($password) > 24) {
        $errores[] = 'La contraseña ingresada debe tener de 8 a 24 caracteres.';
      } else { // Se cumplen todas las condiciones, cambiar la contraseña
        $_SESSION['user']['password_usuario']=$password;
        $user['password_usuario']=$password;
        setPassword($conexion, $user['id_usuario'], $password);
        $cambios[] = 'Se cambio la Contraseña con exito.';
      }
    }
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

      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-3">
            <h2 class="text-center mb-5">Perfil de Usuario</h2>

            <ul>
              <?php foreach ($cambios as $cambio) : ?>
                <li class="text-light bg-success text-center"><?php echo $cambio ?></li>
              <?php endforeach ?>
            </ul>

            <ul>
              <?php foreach ($errores as $error) : ?>
                <li class="text-light bg-danger text-center"><?php echo $error ?></li>
              <?php endforeach ?>
            </ul>

            <form id="profileForm" method="post" action="">
              <div class="mb-3">
                <div class="mb-4 text-center">
                  <img id="profilePreview" src="<?php echo $user['imagen_perfil'] ?>" alt="Profile Preview" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                </div>
                <label for="profile_pic" class="form-label">Foto de perfil</label>
                <input type="url" class="form-control" id="profile_pic" name="profile_pic" placeholder="Cambiar Imagen URL" onchange="updatePreview()" value="<?php echo $user['imagen_perfil'] ?>">
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" maxlength="20" placeholder="Ingresar nombre" value="<?php echo $user['nombre_usuario']?>">
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Cambiar email" value="<?php echo $user['email_usuario']?>">
              </div>

              <a href="#changePasswordModal" class="mb-3 cursor-pointer text-primary fst-italic d-block" id="changePassword">Cambiar contraseña?</a>

              <div class="password-fields" id="changePasswordModal">
                <div class="mb-3">
                  <label for="password" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Ingresar contraseña">
                </div>

                <div class="mb-3">
                  <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
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