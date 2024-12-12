<?php

require_once('../consultas/conexion.php');
require_once('../consultas/consultas_usuarios.php');

$usuarios = getUsers($conexion, null) ?? [];

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$nombre = $_POST['nombre'] ?? null;
$nombre = test_input($nombre);

$email = $_POST['email'] ?? null;
$email = filter_var($email, FILTER_VALIDATE_EMAIL);

$password = $_POST['password'] ?? null;
$password = test_input($password);

$password2 = $_POST['password2'] ?? null;
$password2 = test_input($password2);

$errores = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($nombre)) {
        $errores[] = 'Usted debe ingresar un Nombre';
    }
    if (empty($email)) {
        $errores[] = 'Usted debe ingresar un Email';
    }
    if (empty($password) || empty($password2)) {
        $errores[] = 'Usted debe ingresar una Contraseña';
    }
    if ($password !== $password2) {
        $errores[] = 'Las contraseñas no coinciden.';
    } else {
        if (strlen($password) < 8 || strlen($password) > 24) {
            $errores[] = 'La contraseña ingresada debe tener de 8 a 24 caracteres.';
        }
    }
    if (getUserByEmail($conexion, $email) == true) {
        $errores[] = 'El Email ingresado ya esta en uso.';
    }

    if (empty($errores)) {
        
        addUser($conexion, [
            'nombre'=>$nombre,
            'email'=>$email,
            'password'=>$password,
        ]);

        header("Location: /nexus/auth/login.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nexus Store - Registro</title>
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
                        <h1>Registrarse</h1>

                        <!-- Mensajes de error -->
                        <ul>
                        <?php foreach($errores as $error) : ?>
                            <li class="text-light bg-danger"><?php echo $error ?></li>
                        <?php endforeach ?>
                        </ul>

                        <form action="" method="post">
                            <div class="form-group my-3">
                                <label for="email">Nombre</label>
                                <input
                                    type="text"
                                    id="nombre"
                                    name="nombre"
                                    class="form-control"
                                    required
                                    placeholder="Nombre"
                                    value="<?php echo $nombre ?>"/>
                            </div>
                            <div class="form-group my-3">
                                <label for="email">Email</label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="form-control"
                                    required
                                    placeholder="Email"
                                    value="<?php echo $email ?>"/>
                            </div>
                            <div class="form-group my-3">
                                <label for="password">Contraseña</label>
                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    class="form-control"
                                    required
                                    placeholder="Contraseña"
                                    value="<?php echo $password ?>"/>
                            </div>
                            <div class="form-group my-3">
                                <label for="password">Volver a introducir Contraseña</label>
                                <input
                                    type="password"
                                    id="password2"
                                    name="password2"
                                    class="form-control"
                                    required
                                    placeholder="Contraseña"
                                    value="<?php echo $password2 ?>"/>
                            </div>
                            
                            <button type="submit" class="btn btn-primary my-3">Registrarse</button>

                        </form>
                        <div class="row py-3">
                            <div class="col">
                                Ya estas registrado? <a class="text-primary" href="/nexus/auth/login.php">Iniciar Sesion</a>
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