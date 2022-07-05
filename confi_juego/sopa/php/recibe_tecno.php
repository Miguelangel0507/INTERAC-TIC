<?php
require("../../../php/conexion.php");

$id=$_POST['id_tecno'];
$cambio = $_POST['tecno'];

$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$update = $pdo->prepare("UPDATE  sopa_nivel1 set palabra = '$cambio' WHERE id_palabra = $id ");
$update->execute();

echo "<script type='text/javascript'>
        window.location='../index.php';
    </script>";
?>