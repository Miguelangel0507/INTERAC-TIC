<?php
require ('../../php/conexion.php');
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = $pdo->prepare("SELECT * FROM trivia_nivel1 ");
$query->execute();


//print_r($sopa);

 ?>