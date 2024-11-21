<?php
function getProducts(PDO $conexion)
{
    $consulta = $conexion->query('SELECT id_producto, nombre_producto, descripcion, precio, id_categoria, nombre_categoria, url_imagen FROM productos');
    $products = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}
function getProductsByCategory(PDO $conexion, $categoryName)
{
    $consulta = $conexion->prepare('
        SELECT p.id_producto, p.nombre_producto, p.descripcion, p.precio, p.id_categoria, c.nombre_categoria, p.url_imagen
        FROM productos p
        INNER JOIN categorias c ON p.id_categoria = c.id_categoria
        WHERE c.nombre_categoria = :categoryName
    ');
    $consulta->bindParam(':categoryName', $categoryName, PDO::PARAM_STR);
    $consulta->execute();
    $products = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}
function getProductById(PDO $conexion, $productId)
{
    $consulta = $conexion->prepare('SELECT id_producto, nombre_producto, descripcion, precio, id_categoria, nombre_categoria, url_imagen FROM productos WHERE id_producto = :id_producto');
    $consulta->bindParam(':id_producto', $productId, PDO::PARAM_INT);
    $consulta->execute();
    $product = $consulta->fetch(PDO::FETCH_ASSOC);
    return $product;
}

?>