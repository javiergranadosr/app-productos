<?php

require_once 'config/Producto.php';


if (isset($_POST)) {
    //OBTENER DATOS MEDIANTE POST
    $idProducto = isset($_POST['id']) ? $_POST['id'] : false;
    $nombreProducto = isset($_POST['nombre_productoA']) ? $_POST['nombre_productoA'] : false;
    $nombreEmpleado = isset($_POST['nombre_empleadoA']) ? $_POST['nombre_empleadoA'] : false;
    $precioProducto = isset($_POST['precio_productoA']) ? $_POST['precio_productoA'] : false;
     
    if ($idProducto && $nombreProducto && $nombreEmpleado && $precioProducto) {
        $producto = new Producto();
        $producto->setId($idProducto);
        $producto->setNombreProducto($nombreProducto);
        $producto->setNombreEmpleado($nombreEmpleado);
        $producto->setPrecioProducto($precioProducto);


        $actualizarProducto = $producto->actualizarProducto();

        if ($actualizarProducto) {
            echo 'ok';
            
        } else {

            echo 'error1';
        }
    } else {
        echo 'error2';
    }
} else {
    echo 'error3';
}


