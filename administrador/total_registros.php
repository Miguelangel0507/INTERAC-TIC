<?php
require ('../php/conexion.php');
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = $pdo->prepare('SELECT COUNT(*) AS total_usuarios from datosusuario');
$query->execute();
$total_datos = $query->fetch(PDO::FETCH_ASSOC);
$total_registro = $total_datos['total_usuarios'];


