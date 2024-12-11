<?php
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=tienda_pc', 'root', '');
        session_start();
    }catch(PDOException $e){
        header("Location: /nexus/pages/error.html");
        exit;
    }
?>