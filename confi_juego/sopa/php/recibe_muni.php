<?php
if(isset($_POST)){
    require("../../../php/conexion.php");
    $id=$_POST['id_muni'];
    $cambio = $_POST['muni'];
    echo $id;
    
    echo $cambio;
}

$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$update = $pdo->prepare("UPDATE  categoriasopa set municipios_risaralda = '$cambio' WHERE id_categoria = $id ");
$update->execute();
$result_update =$update->fetch(PDO::FETCH_ASSOC);

echo "<script type='text/javascript'>
        window.location='../index.php';
    </script>";



?>