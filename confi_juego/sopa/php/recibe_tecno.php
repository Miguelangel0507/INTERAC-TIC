<?php

require("../../../php/conexion.php");

$id=$_REQUEST['id_tecno'];
$cambio = $_REQUEST['tecno'];
echo $id;

echo $cambio;
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$update = $pdo->prepare("UPDATE  categoriasopa set tecnologias_tic = '$cambio' WHERE id_categoria = $id ");
$update->execute();
$result_update =$update->fetch(PDO::FETCH_ASSOC);

echo "<script type='text/javascript'>
        window.location='../index.php';
    </script>";



?>