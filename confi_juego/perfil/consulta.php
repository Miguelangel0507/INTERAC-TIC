<?php
session_start();
require('../../php/conexion.php');
$id=$_SESSION['id_usuario'];
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = $pdo->prepare("SELECT nombre, email, estado, id_username FROM datosusuario 
INNER JOIN usuarios on usuarios.id_username=datosusuario.id_datos_usuario
WHERE datosusuario.id_datos_usuario =$id");
$query->execute();
$datos =$query->fetchAll(PDO::FETCH_ASSOC);
echo (json_encode($datos));
?>