<?php
session_start();
$idP = $_POST['dato'];
$_SESSION['consulta']=$idP;
echo $idP;

