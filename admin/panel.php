<?php

require_once('../consultas/conexion.php');
require_once('../consultas/consultas_componentes.php');
require_once('../consultas/consultas_usuarios.php');

$user = $_SESSION['user'] ?? null;
if ($user['rol_usuario'] !== 'admin') {
  header("Location: /nexus/index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nexus Store - Admin</title>
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
  <?php require('../layout/_navMobile.php'); ?>
  <?php require('../layout/_headerMobile.php'); ?>

  <aside class="container-fluid">
    <!-- Nav -->
    <?php require('../layout/_nav.php'); ?>

    <main class="col z-4 min-h-80vh" style="min-height: 80vh;">
      <!-- Header -->
      <?php require('../layout/_header.php'); ?>

      <div class="container mt-5 text-center">
        <h1>Panel de Administración</h1>

        <div class="row justify-content-between align-items-center mt-5">
          <a class="d-inline-block col-4 bg-grey-300" href="/nexus/admin/products.php">
            <h2 class="my-5">Productos</h2>
          </a>
          <a class="d-inline-block col-4 bg-grey-300" href="/nexus/admin/users.php">
            <h2 class="my-5">Usuarios</h2>
          </a>
        </div>
      </div>
    </main>
  </aside>

  <?php require('../layout/_footer.php'); ?>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>