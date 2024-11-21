<?php
function getProducts(PDO $conexion)
{
    $consulta = $conexion->query('SELECT nombre_producto, descripcion, precio, id_categoria, nombre_categoria, url_imagen FROM productos');
    $products = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}
function getProductsByCategory(PDO $conexion, $categoryName)
{
    $consulta = $conexion->prepare('
        SELECT p.nombre_producto, p.descripcion, p.precio, p.id_categoria, c.nombre_categoria, p.url_imagen
        FROM productos p
        INNER JOIN categorias c ON p.id_categoria = c.id_categoria
        WHERE c.nombre_categoria = :categoryName
    ');
    $consulta->bindParam(':categoryName', $categoryName, PDO::PARAM_STR);
    $consulta->execute();
    $products = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}
?>
?>