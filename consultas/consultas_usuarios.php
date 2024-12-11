<?php
    function addUser(PDO $conexion, array $data){
        $consulta = $conexion->prepare('
        INSERT INTO usuarios (id_usuario, nombre_usuario, password_usuario, email_usuario, rol_usuario)
        VALUES (:id, :nombre, :email, :password, "user")
        ');
        
        $consulta->bindValue(':id', $data['id']);
        $consulta->bindValue(':nombre', $data['nombre']);
        $consulta->bindValue(':email', $data['email']);
        $consulta->bindValue(':password', $data['password']);

        $consulta->execute();
    }

    function getUsers(PDO $conexion, $rol) {
        $users = [];
    
        if ($rol) {
            $consulta = $conexion->prepare('SELECT id, nombre, email, rol FROM usuarios WHERE rol = :rol');
            $consulta->bindValue(':rol', $rol);
            $consulta->execute();
            $users = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $consulta = $conexion->query('SELECT id, nombre, email, rol FROM usuarios');
            $users = $consulta->fetchAll(PDO::FETCH_ASSOC);
        }
    
        return $users;
    }

    function getUserByEmail(PDO $conexion, $email) {
        $consulta = $conexion->prepare('
            SELECT id, nombre, rol
            FROM usuarios
            WHERE email = :email
        ');
    
        $consulta->bindValue(':email', $email);
    
        $consulta->execute();
    
        $user = $consulta->fetch(PDO::FETCH_ASSOC);
    
        return $user;
    }

    function changeEmail(PDO $conexion, $email){
        $consulta = $conexion->prepare('
            SELECT id_usuario, nombre_usuario, rol_usuario
            FROM usuarios
            WHERE email_usuario = :email
        ');

        $consulta->bindValue(':password', $email);

        $consulta->execute();
    }

    function changePassword(PDO $conexion, $password){
        $consulta = $conexion->prepare('
            SELECT id_usuario, nombre_usuario, rol_usuario
            FROM usuarios
            WHERE password_usuario = :password
        ');

        $consulta->bindValue(':password', $password);

        $consulta->execute();
    }

    function login(PDO $conexion, $email, $password) {
        $consulta = $conexion->prepare('
            SELECT id_usuario, nombre_usuario, rol_usuario
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
    
?>