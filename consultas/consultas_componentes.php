<?php

function getCategorias(PDO $conexion)
{
    $consulta = $conexion->query('SELECT id_categoria, nombre_categoria FROM categorias');
    $categorias = $consulta->fetchAll(PDO::FETCH_ASSOC);

    return $categorias;
}

function removeProduct(PDO $conexion, $id)
{
    $consulta = $conexion->prepare('SELECT id_producto, nombre_producto, descripcion, precio, id_categoria, nombre_categoria, url_imagen FROM productos WHERE id_producto = :id_producto');
    $consulta->bindParam(':id_producto', $productId, PDO::PARAM_INT);
    $consulta->execute();
    $product = $consulta->fetch(PDO::FETCH_ASSOC);
    return $product;
}

function getProducts(PDO $conexion)
{
    $consulta = $conexion->query('SELECT id_producto, nombre_producto, descripcion, precio, id_categoria, nombre_categoria, url_imagen, stock FROM productos');
    $products = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}

function getProductsByCategory(PDO $conexion, $categoryName)
{
    $consulta = $conexion->prepare('
            SELECT p.id_producto, p.nombre_producto, p.descripcion, p.precio, p.id_categoria, c.nombre_categoria, p.url_imagen, p.stock
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
    $consulta = $conexion->prepare('SELECT id_producto, nombre_producto, descripcion, precio, id_categoria, nombre_categoria, url_imagen, stock FROM productos WHERE id_producto = :id_producto');
    $consulta->bindParam(':id_producto', $productId, PDO::PARAM_INT);
    $consulta->execute();
    $product = $consulta->fetch(PDO::FETCH_ASSOC);
    return $product;
}
function addProduct(PDO $conexion, $data)
{
    $consulta = $conexion->prepare('
        INSERT INTO productos (nombre_producto, descripcion, precio, nombre_categoria, id_categoria, url_imagen, stock)
        VALUES (:nombre, :descripcion, :precio, :nombre_categoria, :id_categoria, :url_imagen, :stock)
    ');

    $nombre = $data['nombre'] ?? 'Placeholder';
    $descripcion = $data['descripcion'] ?? 'Placeholder';
    $precio = $data['precio'] ?? '100.0';
    $id_categoria = $data['id_categoria'] ?? 0; 
    $url_imagen = $data['url_imagen'] ?? 'https://www.svgrepo.com/show/508699/landscape-placeholder.svg';
    $stock = $data['stock'] ?? 1;

    $consulta->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $consulta->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
    $consulta->bindParam(':precio', $precio, PDO::PARAM_STR);
    $consulta->bindParam(':nombre_categoria', getCategorias($conexion)[$data['id_categoria']]['nombre_categoria']);
    $consulta->bindParam(':id_categoria', $id_categoria, PDO::PARAM_INT);
    $consulta->bindParam(':url_imagen', $url_imagen, PDO::PARAM_STR);
    $consulta->bindParam(':stock', $stock, PDO::PARAM_INT);

    return $consulta->execute();
}


function setProduct(PDO $conexion, $data)
{
    $consulta = $conexion->prepare('
        UPDATE productos SET 
          nombre_producto = :nombre,
          descripcion = :descripcion,
          nombre_categoria = :nombre_categoria,
          id_categoria = :id_categoria,
          precio = :precio,
          url_imagen = :url_imagen,
          stock = :stock
        WHERE id_producto = :id_producto
      ');

    $stock = $data['stock'] > 0 ?? 0;
    $precio = $data['precio'] > 0 ?? 0;
    $image = strlen(trim($data['url_imagen'])) <= 0 ? 'https://www.svgrepo.com/show/508699/landscape-placeholder.svg' : $data['url_imagen'];

    $consulta->bindParam(':id_producto', $data['id_producto'], PDO::PARAM_INT);
    $consulta->bindParam(':nombre', $data['nombre'], PDO::PARAM_STR);
    $consulta->bindParam(':nombre_categoria', getCategorias($conexion)[$data['id_categoria']]['nombre_categoria']);
    $consulta->bindParam(':id_categoria', $data['id_categoria'], PDO::PARAM_INT);
    $consulta->bindParam(':descripcion', $data['descripcion'], PDO::PARAM_STR);
    $consulta->bindParam(':precio', $precio, PDO::PARAM_STR);
    $consulta->bindParam(':url_imagen', $image, PDO::PARAM_STR);
    $consulta->bindParam(':stock', $stock, PDO::PARAM_INT);

    return $consulta->execute();
}
