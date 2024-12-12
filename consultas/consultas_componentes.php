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
    $consulta = $conexion->prepare('SELECT id_producto, nombre_producto, descripcion, precio, id_categoria, nombre_categoria, url_imagen, stock FROM productos WHERE id_producto = :id_producto');
    $consulta->bindParam(':id_producto', $productId, PDO::PARAM_INT);
    $consulta->execute();
    $product = $consulta->fetch(PDO::FETCH_ASSOC);
    return $product;
}

function addProduct(PDO $conexion, $data)
{
    $consulta = $conexion->prepare('
        INSERT INTO productos (nombre_producto, descripcion, precio, id_categoria, url_imagen, stock)
        VALUES (:nombre, :descripcion, :precio, :id_categoria, :url_imagen, :stock)
    ');

    $consulta->bindValue(':nombre', $data['nombre'] ?? 'Placeholder', PDO::PARAM_STR);
    $consulta->bindValue(':descripcion', $data['descripcion'] ?? 'Placeholder', PDO::PARAM_STR);
    $consulta->bindValue(':precio', $data['precio'] ?? 100.0, PDO::PARAM_STR);
    $consulta->bindValue(':id_categoria', $data['id_categoria'] ?? 1, PDO::PARAM_INT);
    $consulta->bindValue(':url_imagen', $data['url_imagen'] ?? 'default_image_url', PDO::PARAM_STR);
    $consulta->bindValue(':stock', $data['stock'] ?? 1, PDO::PARAM_INT);

    return $consulta->execute();
}


function setProduct(PDO $conexion, $data)
{
    $consulta = $conexion->prepare('
            UPDATE productos SET 
                nombre_producto = :nombre_producto,
                descripcion = :descripcion,
                id_categoria = :id_categoria,
                nombre_categoria = :nombre_categoria,
                precio = :precio,
                url_imagen = :url_imagen,
                stock = :stock
            WHERE id_producto = :id_producto
        ');

        $stock = $data['stock'] > 0 ?? 0;
        $image = strlen(trim($data['image'])) <= 0  ? 'https://www.svgrepo.com/show/508699/landscape-placeholder.svg': $data['image'];

        $consulta->bindParam(':id_producto', $data['id_producto'], PDO::PARAM_INT);
        $consulta->bindParam(':nombre_producto', $data['name'], PDO::PARAM_STR);

    $consulta->bindParam(':id_producto', $data['id_producto'], PDO::PARAM_INT);
    $consulta->bindParam(':nombre_producto', $data['name'], PDO::PARAM_STR);

        $consulta->bindParam(':descripcion', $data['description'], PDO::PARAM_STR);
        $consulta->bindParam(':precio', $data['price'], PDO::PARAM_STR);
        $consulta->bindParam(':url_imagen', $image, PDO::PARAM_STR);
        $consulta->bindParam(':stock', $stock, PDO::PARAM_INT);
    
        return $consulta->execute();
    }

    $consulta->bindParam(':descripcion', $data['description'], PDO::PARAM_STR);
    $consulta->bindParam(':precio', $data['price'], PDO::PARAM_STR);
    $consulta->bindParam(':url_imagen', $data['image'], PDO::PARAM_STR);
    $consulta->bindParam(':stock', $stock, PDO::PARAM_INT);

    return $consulta->execute();
}

?>
