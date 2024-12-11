<?php
    function addUser(PDO $conexion, array $data){
        $consulta = $conexion->prepare('
        INSERT INTO usuarios (id_usuario, nombre_usuario, contraseña_usuario, email_usuario, rol_usuario)
        VALUES (:id, :nombre, :email, :contraseña, "user")
        ');
        
        $consulta->bindValue(':id', $data['id']);
        $consulta->bindValue(':nombre', $data['nombre']);
        $consulta->bindValue(':email', $data['email']);
        $consulta->bindValue(':contraseña', $data['contraseña']);

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

    function login(PDO $conexion, $email, $contraseña) {
        $consulta = $conexion->prepare('
            SELECT id, nombre, rol
            FROM usuarios
            WHERE email = :email
            AND contraseña = :contraseña
        ');
    
        $consulta->bindValue(':email', $email);
        $consulta->bindValue(':contraseña', $contraseña);
    
        $consulta->execute();
    
        $user = $consulta->fetch(PDO::FETCH_ASSOC);
    
        return $user;
    }
?>