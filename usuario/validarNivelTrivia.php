<?php
session_start();
$id = $_SESSION['id_usuario'];
if($id != "invitado"){
require("/xampp/htdocs/INTERAC-TIC/php/conexion.php");
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //se hace la consulta a la tabla usuarios mediante el username
    $query = $pdo->prepare("SELECT * FROM `puntostrivia` WHERE id_puntos_trivia =  $id");
    $query->execute();
    $niveles = $query->fetch(PDO::FETCH_ASSOC);
    if($niveles["puntos_nivel1"] < 80){
        echo 1;
    }else if($niveles["puntos_nivel2"] < 80){
        echo 2;
    }else{
        echo 3;
    }
}else{
    if($_SESSION['puntos_trivia1'] <= 80){
        echo 1;
    }else if($_SESSION['puntos_trivia2'] <= 80){
        echo 2;
    }else{
        echo 3;
    }
}
?>