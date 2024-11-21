<?php
function getProducts(PDO $conexion)
{
    $consulta = $conexion->query('SELECT nombre_producto, descripcion, precio, id_categoria,nombre_categoria, url_imagen FROM productos');
    $products = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}
