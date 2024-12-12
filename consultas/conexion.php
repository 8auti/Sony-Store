<?php
try {
    $conexion = new PDO('mysql:host=localhost;dbname=tienda_pc', 'root', '');
    session_start();
    $user = $_SESSION['user'] ?? null;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $logout = $_POST['logout'] ?? '';
        if ($logout == 'true') {
            session_destroy();
            header("Location: /nexus/index.php");
            exit;
        }
    }
} catch (PDOException $e) {
    header("Location: /nexus/pages/error.html");
    exit;
}
