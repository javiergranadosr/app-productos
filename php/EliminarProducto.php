<?php

require_once 'config/Producto.php';


if (isset($_POST)) {

    //OBTENER DATOS MEDIANTE POST
    $idProducto = isset($_POST['id']) ? $_POST['id'] : false;


    if ($idProducto) {
        $producto = new Producto();
        $producto->setId($idProducto);

        $eliminarProducto = $producto->eliminarProducto();

        if ($eliminarProducto) {
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
