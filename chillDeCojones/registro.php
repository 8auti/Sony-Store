<?php

require_once('../consultas/conexion.php');
require_once('../consultas/consultas_usuarios.php');

$usuarios = getUsers($conexion) ?? [];

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

$contraseña = $_POST['nombre'] ?? null;
$contraseña = test_input($nombre);

$errores = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($nombre)) {
        $errores[] = 'Usted debe ingresar un Nombre';
    }
    if (empty($email)) {
        $errores[] = 'Usted debe ingresar un Email';
    }
    if (empty($contraseña)) {
        $errores[] = 'Usted debe ingresar una Contraseña';
    }

    if (empty($errores)) {
        
        addUser($conexion, [
            'id'=> count($usuarios)+1, // Revisar <--
            'nombre'=>$nombre,
            'email'=>$email,
            'contraseña'=>$contraseña,
        ]);

        header("Location: /nexus/pages/login.php");
    }
}
?>