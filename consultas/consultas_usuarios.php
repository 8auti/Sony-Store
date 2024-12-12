<?php
function addUser(PDO $conexion, array $data)
{
    $consulta = $conexion->prepare('
        INSERT INTO usuarios (nombre_usuario, email_usuario, password_usuario, rol_usuario)
        VALUES (:nombre, :email, :password, "user")
        ');

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

function setName(PDO $conexion, $userId, $name)
{
    $consulta = $conexion->prepare('
        UPDATE usuarios
        SET nombre_usuario = :name
        WHERE id_usuario = :id
    ');

    $consulta->bindValue(':name', $name);
    $consulta->bindValue(':id', $userId);

    return $consulta->execute();
}


function setEmail(PDO $conexion, $userId, $email)
{
    $consulta = $conexion->prepare('
        UPDATE usuarios
        SET email_usuario = :email
        WHERE id_usuario = :id
    ');

    $consulta->bindValue(':email', $email);
    $consulta->bindValue(':id', $userId);

    return $consulta->execute();
}


function setRol(PDO $conexion, $userId, $rol)
{
    if ($rol === 'admin' || $rol === 'user') {
        $consulta = $conexion->prepare('
            UPDATE usuarios
            SET rol_usuario = :rol
            WHERE id_usuario = :id
        ');

        $consulta->bindValue(':rol', $rol);
        $consulta->bindValue(':id', $userId);

        return $consulta->execute();
    }

    return false; 
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
