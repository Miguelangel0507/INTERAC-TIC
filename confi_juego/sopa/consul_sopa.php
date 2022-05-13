<?php
require ('../../php/conexion.php');
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = $pdo->prepare("SELECT * FROM categoriasopa");
$query->execute();
$sopa = array();




    ?>