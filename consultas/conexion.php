<?php
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=tienda_pc', 'root', '');
        session_start();
        $user = $_SESSION['user'] ?? null;
    }catch(PDOException $e){
        header("Location: /nexus/pages/error.html");
        exit;
    }
?>