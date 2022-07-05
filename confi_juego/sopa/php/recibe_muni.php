<?php
if(isset($_POST)){
    require("../../../php/conexion.php");
    $id=$_POST['id_muni'];
    $cambio = $_POST['muni'];
}

$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$update = $pdo->prepare("UPDATE  sopa_nivel3 set palabra = '$cambio' WHERE id_palabra = $id ");
$update->execute();
$result_update =$update->fetch(PDO::FETCH_ASSOC);

echo "<script type='text/javascript'>
        window.location='../index.php';
    </script>";



?>