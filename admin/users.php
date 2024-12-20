<?php

require_once('../consultas/conexion.php');
require_once('../consultas/consultas_componentes.php');
require_once('../consultas/consultas_usuarios.php');

if ($user['rol_usuario'] !== 'admin') {
  header("Location: /nexus/index.php");
  exit;
}

$pagina = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$filtrarPorRol = $_GET['filtrarRol'] ?? null;

$users = getUsers($conexion, $filtrarPorRol);

$length = count($users);
$elementosPorPagina = 8;
$paginas = ceil($length / $elementosPorPagina);

$users = array_slice($users, ($pagina - 1) * $elementosPorPagina, $elementosPorPagina);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nexus Store - Admin Usuarios</title>
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

    <main class="col z-4" style="min-height: 80vh;">
      <!-- Header -->
      <?php require('../layout/_header.php'); ?>
      <div class="container mt-5">
        <h1 class="my-5 text-center">Usuarios</h1>

        <div>
          <form action="" method="get" class="form-inline d-flex gap-3">
            <select class="form-select form-select-lg form-control mb-3 bg-dark text-light" aria-label=".form-select-lg example" name="filtrarRol">
              <option selected>Filtrar Rol</option>
              <option value="user">Usuario</option>
              <option value="admin">Admin</option>
            </select>

            <button type="submit" class="btn btn-primary mb-3">Enviar</button>
          </form>
        </div>
        
        <div class="row justify-content-md-center">
          <div class="col-12">
            <!-- Check if users are available -->
            <?php if ($users): ?>
              <table class="table table-striped table-bordered table-hover table-sm table-dark">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th class="d-none d-md-table-cell">IMG</th>
                    <th class="text-center">NOMBRE</th>
                    <th class="d-none d-md-table-cell">EMAIL</th>
                    <th class="text-center">ADMIN</th>
                    <th class="text-center">EDITAR</th>
                    <th class="text-center">ELIMINAR</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($users as $user): ?>
                    <tr>
                      <td><?php echo htmlspecialchars($user['id_usuario']); ?></td>
                      <td class="text-center d-none d-md-table-cell"><img
                          class="rounded-circle h-100 text-center"
                          style="aspect-ratio: 1/1; object-fit:cover; width: 40px"
                          src="<?php echo $user['imagen_perfil'] ?? 'https://res.cloudinary.com/dtnk8oggj/image/upload/v1721083530/boom-recorder/placeholders/v3der7jjr4ljprscr9dj.png'; ?>"
                          alt="Perfil de usuario" /></td>
                      <td><?php echo htmlspecialchars($user['nombre_usuario']); ?></td>
                      <td class="d-none d-md-table-cell">
                        <a href="mailto:<?php echo htmlspecialchars($user['email_usuario']); ?>">
                          <?php echo htmlspecialchars($user['email_usuario']); ?>
                        </a>
                      </td>
                      <td class="text-center">
                        <?php echo $user['rol_usuario'] === 'admin' ? '<i class="fas fa-check" style="color: green;"></i>' : '<i class="fas fa-times" style="color: red;"></i>'; ?>
                      </td>
                      <td class="text-center">
                        <a href="/nexus/admin/edit/user.php?id=<?php echo $user['id_usuario']; ?>/edit">
                          <button class="btn btn-light btn-sm">
                            <i class="fas fa-edit"></i>
                          </button>
                        </a>
                      </td>
                      <td class="text-center">
                        <form action="/nexus/consultas/delete_user.php" method="post" style="display:inline;">
                          <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($user['id_usuario']); ?>">
                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Estás seguro que quieres borrar este usuario?');">
                            <i class="fas fa-trash"></i>
                          </button>
                        </form>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>

            <?php else: ?>
              <p>No users found.</p>
            <?php endif; ?>

            <!-- Pagination -->
            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center">
                <?php for ($i = 1; $i <= $paginas; $i++): ?>
                  <li class="page-item <?php echo $i === $pagina ? 'active' : ''; ?>">
                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                  </li>
                <?php endfor; ?>
              </ul>
            </nav>
          </div>
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