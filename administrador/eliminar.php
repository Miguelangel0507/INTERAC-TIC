<?php
// Codigo que elimina un usuario de la base datos
if(isset($_POST)){
    require("../php/conexion.php");
    $id =$_POST['id'];
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $delete = $pdo->prepare("DELETE FROM datosusuario WHERE id_datos_usuario = $id");
    $delete->execute();
    echo    "<script type='text/javascript'>
            window.location='index.php';
            </script>";
}

?>