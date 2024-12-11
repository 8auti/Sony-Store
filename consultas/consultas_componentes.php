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

    function setProduct(PDO $conexion, $data)
    {
        $consulta = $conexion->prepare('
            SELECT nombre_producto, descripcion, precio, id_categoria, url_imagen, stock
            FROM productos
            WHERE nombre_producto = :nombre
            AND descripcion = :descripcion
            AND precio = :precio
            AND id_categoria = :id_categoria
            AND url_imagen = :url_imagen
            AND stock = :stock
        ');

        if (isset($data['nombre'])) {
            $consulta->bindParam(':nombre', $data['nombre']);
        }

        if (isset($data['descripcion'])) {
            $consulta->bindParam(':descripcion', $data['descripcion']);
        }

        if (isset($data['precio'])) {
            $consulta->bindParam(':precio', $data['precio']);
        }

        if (isset($data['id_categoria'])) {
            $consulta->bindParam(':id_categoria', $data['id_categoria']);
        //  $consulta->bindParam(':nombre_categoria', $data['id_categoria']); // se podria hacer automaticamente con el id categoria
        }

        if (isset($data['url_imagen'])) {
            $consulta->bindParam(':url_imagen', $data['url_imagen']);
        }

        if (isset($data['stock'])) {
            $consulta->bindParam(':stock', $data['stock']);
        }

        $consulta->execute();
    }

?>