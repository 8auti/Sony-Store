<?php
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=tienda_pc', 'root', '');
    }catch(PDOException $e){
        header("Location: ./pages/error.html");
        exit;
    }
?>