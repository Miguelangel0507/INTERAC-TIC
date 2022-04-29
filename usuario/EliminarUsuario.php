<?php

session_start();
$id = $_SESSION['id_usuario'];
include ("../php/conexion.php");

$query = $pdo->prepare("DELETE FROM `datosusuario` WHERE id_datos_usuario = $id");
$query->execute();

if($query){
    echo true;
}else{
    echo false;
}


?>