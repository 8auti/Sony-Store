<?php
require_once('./conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $productId = $_POST['product_id'] ?? '';

  if (empty($productId)) {
    die("Product ID is required");
  }

  function deleteProduct(PDO $conexion, $productId)
  {
    $consulta = $conexion->prepare('DELETE FROM productos WHERE id_producto = :id_producto');
    $consulta->bindParam(':id_producto', $productId, PDO::PARAM_INT);

    if ($consulta->execute()) {

      if ($consulta->rowCount() > 0) {
        return true;
      } else {
        return false;
      }
    } else {

      $errorInfo = $consulta->errorInfo();
      die("Error deleting product: " . $errorInfo[2]);
    }
  }


  if (deleteProduct($conexion, $productId)) {
    header("Location: /nexus/admin/products.php");
    exit();
  } else {
    echo "Product could not be deleted or was not found.";
  }
} else {

  die("Invalid request method");
}
