<?php
require_once('../../consultas/conexion.php');
require_once('../../consultas/consultas_usuarios.php');

if (isset($_GET['id'])) {
  $userId = $_GET['id'];
  $user = getUserById($conexion, $userId);
} else {
  header("Location: /nexus/admin/users.php");
  exit;
}

$nombre_usuario = $user["nombre_usuario"] ?? "Unknown Name";
$email_usuario = $user["email_usuario"] ?? "Unknown Email";
$rol_usuario = $user["rol_usuario"] ?? "Unknown Rol";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nexus Store - Admin Editar Usuario</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous" />
  <script
    src="https://kit.fontawesome.com/592dce0dd2.js"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../styles/style.css" />
</head>

<body>
  <!-- Mobile Nav & Header -->
  <?php require('../../layout/_navMobile.php') ?>
  <?php require('../../layout/_headerMobile.php') ?>

  <aside class="container-fluid">
    <!-- Nav -->
    <?php require('../../layout/_nav.php') ?>

    <main class="col p-3 z-4 min-h-80vh">
      <!-- Header -->
      <?php require('../../layout/_header.php') ?>

      <div class="container my-5">
        <a href="/nexus/admin/users.php" class="btn btn-light my-3 text-dark">Ir Atrás</a>
        <div class="row justify-content-md-center">
          <div class="col-xs-12 col-md-6">
            <h1>Editar Usuario</h1>
            <form action="#" method="POST">
              <div class="form-group my-4" controlid="name">
                <label for="name">Nombre</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  name="name"
                  placeholder="Enter name"
                  value="<?php echo htmlspecialchars($nombre_usuario); ?>"
                  required />
              </div>

              <div class="form-group my-4" controlid="email">
                <label for="email">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Enter email"
                  value="<?php echo htmlspecialchars($email_usuario); ?>"
                  required />
              </div>

              <div class="form-group my-4" controlid="isadmin">
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="isadmin"
                    name="isadmin"
                    <?php echo ($rol_usuario === 'admin') ? 'checked' : ''; ?> />
                  <label class="form-check-label" for="isadmin">Es Administrador</label>
                </div>
              </div>

              <button type="submit" class="btn btn-primary">Update</button>
            </form>
          </div>
        </div>
      </div>
    </main>
  </aside>

  <!-- Footer -->
  <?php require('../../layout/_footer.php') ?>
  </aside>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>