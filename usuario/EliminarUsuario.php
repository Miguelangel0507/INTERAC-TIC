<?php
session_start();
$id = $_SESSION['id_usuario'];
include ("../php/conexion.php");
$query = $pdo->prepare("DELETE FROM `datosusuario` WHERE id_datos_usuario = $id");// se elimina el usuario de la base de datos
$query->execute();
if($query){
    echo true;
}else{
    echo false;
}


?>