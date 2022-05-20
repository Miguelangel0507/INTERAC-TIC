<?php
session_start();
$id = $_SESSION['id_usuario'];
if($id != "invitado"){
    require ("../php/conexion.php");
    $consulta=$pdo->prepare("SELECT datosusuario.nombre, datosusuario.email, usuarios.username FROM datosusuario INNER JOIN usuarios ON datosusuario.id_datos_usuario = usuarios.id_username WHERE id_datos_usuario = $id");
    $consulta->execute();
    $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
    echo (json_encode($datos));
}else{
    echo (json_encode("invitado"));
}
