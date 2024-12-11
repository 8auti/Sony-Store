<?php

    function getUsers(PDO $conexion)
    {
        $consulta = $conexion->query('SELECT id_usuario, nombre_usuario, contraseña_usuario, email_usuario, rol_usuario FROM users');
        $users = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    function addUser(PDO $conexion, array $data){
        $consulta = $conexion->prepare('
        INSERT INTO usuarios (id_usuario, nombre_usuario, contraseña_usuario, email_usuario, rol_usuario)
        VALUES (:id, :nombre, :email, :contraseña, "user")
        ');
        
        $consulta->bindValue(':id', $data['id']);
        $consulta->bindValue(':nombre', $data['nombre']);
        $consulta->bindValue(':email', $data['email']);
        $consulta->bindValue(':contraseña', $data['contraseña']);
    }
?>