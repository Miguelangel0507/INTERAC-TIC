<?php
session_start();
$id = $_SESSION['id_usuario'];
if($id != "invitado"){
    require("/xampp/htdocs/INTERAC-TIC/php/conexion.php");
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //se hace la consulta a la tabla usuarios mediante el username
    $query = $pdo->prepare("SELECT * FROM `puntossopa` WHERE id_puntos_sopa =  $id");
    $query->execute();
    $niveles = $query->fetch(PDO::FETCH_ASSOC);
    if($niveles["puntos_nivel1"] <= 80){
        echo 1;
    }else if($niveles["puntos_nivel2"] <= 80){
        echo 2;
    }else{
        echo 3;
    }
}else{
    if($_SESSION['puntos_sopa1'] <= 80){
        echo 1;
    }else if($_SESSION['puntos_sopa2'] <= 80){
        echo 2;
    }else{
        echo 3;
    }
}
?>