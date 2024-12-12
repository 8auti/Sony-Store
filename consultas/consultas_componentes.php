<?php

    function getCategorias(PDO $conexion){
        $consulta = $conexion->query('SELECT id_categoria, nombre_categoria FROM categorias');
        $categorias = $consulta->fetchAll(PDO::FETCH_ASSOC);

        return $categorias;
    }

    function removeProduct(PDO $conexion, $id){
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
            INSERT INTO productos (nombre_producto, descripcion, precio, id_categoria, nombre_categoria, url_imagen, stock)
            VALUES (:nombre, :descripcion, :precio, :id_categoria, :nombre_categoria, :url_imagen, :stock)
        ');

        if (isset($data['nombre'])) {
            $consulta->bindParam(':nombre', $data['nombre']);
        } else {
            $consulta->bindParam(':nombre', 'Placeholder');
        }

        if (isset($data['descripcion'])) {
            $consulta->bindParam(':descripcion', $data['descripcion']);
        } else {
            $consulta->bindParam(':descripcion', 'Placeholder');
        }

        if (isset($data['precio'])) {
            $consulta->bindParam(':precio', $data['precio']);
        } else {
            $consulta->bindParam(':precio', 100.0);
        }

        if (isset($data['id_categoria'])) {
            $consulta->bindParam(':id_categoria', $data['id_categoria']);
            $consulta->bindParam(':nombre_categoria', getCategorias($conexion)[$data['id_categoria']]['nombre_categoria']);
        }

        if (isset($data['url_imagen'])) {
            $consulta->bindParam(':url_imagen', $data['url_imagen']);
        } else {
            $consulta->bindParam(':url_imagen', 'https://www.svgrepo.com/show/508699/landscape-placeholder.svg');
        }

        if (isset($data['stock'])) {
            $consulta->bindParam(':stock', $data['stock']);
        } else {
            $consulta->bindParam(':stock', 1);
        }

        $consulta->execute();
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
    
        $consulta->bindParam(':id_producto', $data['id_producto'], PDO::PARAM_INT);
        $consulta->bindParam(':nombre_producto', $data['name'], PDO::PARAM_STR);

        $consulta->bindParam(':id_categoria', $data['id_categoria']);
        $consulta->bindParam(':nombre_categoria', getCategorias($conexion)[$data['id_categoria']]['nombre_categoria']);

        $consulta->bindParam(':descripcion', $data['description'], PDO::PARAM_STR);
        $consulta->bindParam(':precio', $data['price'], PDO::PARAM_STR);
        $consulta->bindParam(':url_imagen', $data['image'], PDO::PARAM_STR);
        $consulta->bindParam(':stock', $stock, PDO::PARAM_INT);
    
        return $consulta->execute();
    }

?>