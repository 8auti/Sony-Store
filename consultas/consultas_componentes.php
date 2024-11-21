<?php
function getUsuarios(PDO $conexion){
    $consulta = $conexion -> query('SELECT nombre_producto, descripcion, precio, id_categoria, nombre_imagen FROM productos');
    $componentes = $consulta ->fetchAll(PDO::FETCH_ASSOC);
    return $componentes;
}
?>