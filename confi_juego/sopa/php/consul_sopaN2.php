<?php
require ('../../php/conexion.php');
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = $pdo->prepare("SELECT * FROM `sopa_nivel2`");
$query->execute();
$palabras = array();

$nivel2 = $query->fetchAll();
$total_palabras = count($nivel2);