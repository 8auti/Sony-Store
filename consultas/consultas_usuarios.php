<?php
function addUser(PDO $conexion, array $data)
{
    $consulta = $conexion->prepare('
        INSERT INTO usuarios (id_usuario, nombre_usuario, password_usuario, email_usuario, rol_usuario)
        VALUES (:id, :nombre, :email, :password, "user")
        ');

    $consulta->bindValue(':id_usuario', $data['id_usuario']);
    $consulta->bindValue(':nombre', $data['nombre']);
    $consulta->bindValue(':email', $data['email']);
    $consulta->bindValue(':password', $data['password']);

    $consulta->execute();
}

function getUsers(PDO $conexion, $rol)
{
    $users = [];

    if ($rol) {
        $consulta = $conexion->prepare('SELECT id_usuario, nombre_usuario, email_usuario, rol_usuario, imagen_perfil FROM usuarios WHERE rol_usuario = :rol_usuario');
        $consulta->bindValue(':rol_usuario', $rol);
        $consulta->execute();
        $users = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $consulta = $conexion->query('SELECT id_usuario, nombre_usuario, email_usuario, rol_usuario, imagen_perfil FROM usuarios');
        $users = $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    return $users;
}

function getUserByEmail(PDO $conexion, $email)
{
    $consulta = $conexion->prepare('
            SELECT id_usuario, nombre_usuario, rol_usuario
            FROM usuarios
            WHERE email_usuario = :email_usuario
        ');

    $consulta->bindValue(':email_usuario', $email);

    $consulta->execute();

    $user = $consulta->fetch(PDO::FETCH_ASSOC);

    return $user;
}

function getUserById(PDO $conexion, $id)
{
    $consulta = $conexion->prepare('
            SELECT id_usuario, nombre_usuario, email_usuario, rol_usuario
            FROM usuarios
            WHERE id_usuario = :id_usuario
        ');

    $consulta->bindValue(':id_usuario', $id);

    $consulta->execute();

    $user = $consulta->fetch(PDO::FETCH_ASSOC);

    return $user;
}

function setEmail(PDO $conexion, $email)
{
    $consulta = $conexion->prepare('
            SELECT id_usuario, nombre_usuario, rol_usuario
            FROM usuarios
            WHERE email_usuario = :email
        ');

    $consulta->bindValue(':password', $email);

    $consulta->execute();
}

function setRol(PDO $conexion, $rol)
{
    $consulta = $conexion->prepare('
            SELECT rol_usuario
            FROM usuarios
            WHERE rol_usuario = :rol
        ');

    if ($rol == 'admin' | $rol == 'user') {
        $consulta->bindValue(':rol', $rol);
        $consulta->execute();
    }
}

function setPassword(PDO $conexion, $password)
{
    $consulta = $conexion->prepare('
            SELECT id_usuario, nombre_usuario, rol_usuario
            FROM usuarios
            WHERE password_usuario = :password
        ');

    $consulta->bindValue(':password', $password);

    $consulta->execute();
}

function login(PDO $conexion, $email, $password)
{
    $consulta = $conexion->prepare('
            SELECT id_usuario, nombre_usuario, rol_usuario, imagen_perfil
            FROM usuarios
            WHERE email_usuario = :email
            AND password_usuario = :password
        ');

    $consulta->bindValue(':email', $email);
    $consulta->bindValue(':password', $password);

    $consulta->execute();

    $user = $consulta->fetch(PDO::FETCH_ASSOC);

    return $user;
}
