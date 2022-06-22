<?php
require('../php/conexion.php');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (empty($_GET['busqueda'])) {
    $query = $pdo->prepare('SELECT COUNT(*) AS total_usuarios from datosusuario');
    $query->execute();
    $total_datos = $query->fetch(PDO::FETCH_ASSOC);
    $total_registro = $total_datos['total_usuarios'];
} else {
    $busqueda = $_GET['busqueda'];
    $query = $pdo->prepare('SELECT COUNT(*) AS total_usuarios from datosusuario where nombre like "%' . $busqueda . '%" OR datosusuario.email LIKE "%' . $busqueda . '%"');
    $query->execute();
    $total_datos = $query->fetch(PDO::FETCH_ASSOC);
    $total_registro = $total_datos['total_usuarios'];
}
