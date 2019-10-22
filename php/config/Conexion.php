<?php

require_once 'Config.php';

class Conexion {

    //VARIABLES
    private $servidor;
    private $usuario;
    private $password;
    private $basedatos;
    private $conexion;
    

    //CONSTRUCTOR
    function __construct() {
        $this->servidor = SERVIDOR;
        $this->usuario = USUARIO;
        $this->password = PASSWORD;
        $this->basedatos = BASE_DE_DATOS;
    }

    //FUNCIÓN CONECTAR A LA BASE DE DATOS
    public function Conectar() {
        return $this->conexion = new mysqli($this->servidor, $this->usuario, $this->password, $this->basedatos);
        if ($this->conexion->connect_errno) {
            die("Error al conectarse a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error);
        }
       
    }

    //FUNCIÓN PARA CERRAR LA CONEXION A LA BASE DE DATOS
    public function cerrarConexion() {
        $this->conexion->close();
    }

    

}
