<?php
session_start();
require_once 'Conexion.php';
$con = new Conexion();


if(isset($_SESSION['consulta'])){
    if($_SESSION['consulta']>0){
        $idP =$_SESSION['consulta'];
        $sql = "SELECT * FROM productos  WHERE id = $idP ";
       
    }else{
          $sql = "SELECT * FROM productos ORDER BY id DESC";
    }
}else{
    $sql = "SELECT * FROM productos ORDER BY id DESC";
}
$resultado = mysqli_query($con->Conectar(), $sql);


while ($row = mysqli_fetch_array($resultado)) {
    
    // Rellenar la variable datos
    $datos = "'".
                $row['id']. "||".
                $row['nombre_producto']."||".
                $row['nombre_empleado']."||".
                $row['precio_producto'] 
            ."'";
    


    echo '<tr>';
    echo '<td>' . $row['nombre_producto'] . '</td>';
    echo '<td>' . $row['nombre_empleado'] . '</td>';
    echo '<td>' . $row['precio_producto'] . '</td>';
    echo '<td>' . $row['fecha_compra'] . '</td>';
    echo '<td><button onclick = "agregarDatosForm('.$datos.')" data-toggle="modal" data-target="#exampleModalCenter" class="icon-accion"><img src="iconos/icon-editar.png" alt=""></button></td>';
    echo '<td><button  onclick="eliminarProducto(' . $row['id'] . ')"  class="icon-accion"><img src="iconos/icon-borrar.png" alt=""></button></td>';
    echo '</tr>';

    

}
unset($_SESSION['consulta']);








