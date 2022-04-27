<?php
session_start();
$id_user = $_SESSION['id_usuario'];
require ("../php/conexion.php");
$consulta=$pdo->prepare("SELECT datosusuario.nombre, datosusuario.email, usuarios.username FROM datosusuario INNER JOIN usuarios ON datosusuario.id_datos_usuario = usuarios.id_username WHERE id_datos_usuario = $id_user");
$consulta->execute();
$datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
echo (json_encode($datos));
?>