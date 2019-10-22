<?php

require_once 'Conexion.php';

class Producto {

    private $id;
    private $nombreProducto;
    private $nombreEmpleado;
    private $precioProducto;

    function __construct() {
        
    }

    function getId() {
        return $this->id;
    }

    function getNombreProducto() {
        return $this->nombreProducto;
    }

    function getNombreEmpleado() {
        return $this->nombreEmpleado;
    }

    function getPrecioProducto() {
        return $this->precioProducto;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombreProducto($nombreProducto) {
        $this->nombreProducto = $nombreProducto;
    }

    function setNombreEmpleado($nombreEmpleado) {
        $this->nombreEmpleado = $nombreEmpleado;
    }

    function setPrecioProducto($precioProducto) {
        $this->precioProducto = $precioProducto;
    }

    //FUNCION PARA AGREGAR PRODUCTO
    public function guardarProducto() {
        $con = new Conexion();
        $sql = "INSERT INTO `productos` (`id`, `nombre_producto`, `nombre_empleado`, `precio_producto`, `fecha_compra`) VALUES (NULL, '{$this->getNombreProducto()}', '{$this->getNombreEmpleado()}', '{$this->getPrecioProducto()}', CURRENT_TIMESTAMP)";

        // RESULTADO DE LA QUERY
        $resultado_query = mysqli_query($con->Conectar(), $sql);

        $resultado = false;
        if ($resultado_query) {
            $resultado = true;
            $con->cerrarConexion();
        }

        return $resultado;
    }

    //FUNCION PARA ELIMINAR PRODUCTO
    public function eliminarProducto() {
        $con = new Conexion();
        $sql = "DELETE FROM `productos` WHERE `id` = '{$this->getId()}';";

        // RESULTADO DE LA QUERY
        $resultado_query = mysqli_query($con->Conectar(), $sql);

        $resultado = false;
        if ($resultado_query) {
            $resultado = true;
            $con->cerrarConexion();
        }

        return $resultado;
    }

    //FUNCION PARA ACTUALIZAR PRODUCTO
    public function actualizarProducto() {
        $con = new Conexion();
        $sql = "UPDATE `productos` SET `nombre_producto` = '{$this->getNombreProducto()}', `nombre_empleado` = '{$this->getNombreEmpleado()}', `precio_producto` = '{$this->getPrecioProducto()}' WHERE `productos`.`id` = {$this->getId()}";


        // RESULTADO DE LA QUERY
        $resultado_query = mysqli_query($con->Conectar(), $sql);

        $resultado = false;
        if ($resultado_query) {
            $resultado = true;
            $con->cerrarConexion();
        }

        return $resultado;
    }

}
