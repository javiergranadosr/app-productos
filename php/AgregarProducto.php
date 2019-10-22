<?php

require_once 'config/Producto.php';


if (isset($_POST)) {


    //OBTENER DATOS MEDIANTE POST
    $nombreProducto = isset($_POST['nombre_producto']) ? $_POST['nombre_producto'] : false;
    $nombreEmpleado = isset($_POST['nombre_empleado']) ? $_POST['nombre_empleado'] : false;
    $precioProducto = isset($_POST['precio_producto']) ? $_POST['precio_producto'] : false;

    if ($nombreProducto && $nombreEmpleado && $precioProducto) {
        $producto = new Producto();
        $producto->setNombreProducto($nombreProducto);
        $producto->setNombreEmpleado($nombreEmpleado);
        $producto->setPrecioProducto($precioProducto);


        $guardarProducto = $producto->guardarProducto();

        if ($guardarProducto) {
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


