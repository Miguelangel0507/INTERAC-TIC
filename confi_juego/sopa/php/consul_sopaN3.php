<?php
require ('../../php/conexion.php');
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = $pdo->prepare("SELECT * FROM `sopa_nivel3`");
$query->execute();
$palabras = array();

$nivel3 = $query->fetchAll();