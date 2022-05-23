<?php
session_start();
$id = $_SESSION['id_usuario'];//se recupera el id del jugador
if($id != "invitado"){//se valida de que el usuario este logueado o es un jugador invitado
    require ("../php/conexion.php");
    $consulta=$pdo->prepare("SELECT datosusuario.nombre, datosusuario.email, usuarios.username FROM datosusuario INNER JOIN usuarios ON datosusuario.id_datos_usuario = usuarios.id_username WHERE id_datos_usuario = $id");
    $consulta->execute();//se teran los datos del usuario
    $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
    echo (json_encode($datos));//se devuelven los datos del usuario mediente un JSON
}else{
    echo (json_encode("invitado"));//se devuelve "INVITADO" para identificar que es un jugador invitado
}
