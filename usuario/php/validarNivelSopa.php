<?php
session_start();
$id = $_SESSION['id_usuario'];
if($id != "invitado"){//se valida si el jugador es usuario o invitado
    require("../../php/conexion.php");
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //se hace la consulta a la tabla usuarios mediante el username
    $query = $pdo->prepare("SELECT * FROM `puntossopa` WHERE id_puntos_sopa =  $id");//se traen los puntos del jugador
    $query->execute();
    $niveles = $query->fetch(PDO::FETCH_ASSOC);
    if($niveles["puntos_nivel1"] <= 80){//se valida en que nivel esta el usuario
        echo 1;
    }else if($niveles["puntos_nivel2"] <= 80){
        echo 2;
    }else{
        echo 3;
    }
}else{//jugador invitado
    if($_SESSION['puntos_sopa1'] <= 80){//se valida en que nivel esta el usuario
        echo 1;
    }else if($_SESSION['puntos_sopa2'] <= 80){
        echo 2;
    }else{
        echo 3;
    }
}
?>