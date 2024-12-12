<?php
require_once('./conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $userId = $_POST['user_id'] ?? '';

  if (empty($userId)) {
    die("User ID is required");
  }


  function deleteUser(PDO $conexion, $userId)
  {
    $consulta = $conexion->prepare('DELETE FROM usuarios WHERE id_usuario = :id_usuario');
    $consulta->bindParam(':id_usuario', $userId, PDO::PARAM_INT);

    if ($consulta->execute()) {

      if ($consulta->rowCount() > 0) {
        return true;
      } else {
        return false;
      }
    } else {

      $errorInfo = $consulta->errorInfo();
      die("Error deleting user: " . $errorInfo[2]);
    }
  }


  if (deleteUser($conexion, $userId)) {
    header("Location: /nexus/admin/users.php");
    exit();
  } else {
    echo "User could not be deleted or was not found.";
  }
} else {

  die("Invalid request method");
}
