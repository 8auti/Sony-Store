<?php

require_once('../consultas/conexion.php');
require_once('../consultas/consultas_usuarios.php');

$error = null;

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$nombre = $_POST['nombre'] ?? null;
$nombre = test_input($nombre);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? null;
    $contraseña = $_POST['contraseña'] ?? null;

    $user = login($conexion, $email, $contraseña);

    if ($user) {
        $_SESSION['user'] = $user;
        header('Location: /nexus/index.php');
    } else {
        $error = 'Los datos son incorrectos.';
    }
}
?>