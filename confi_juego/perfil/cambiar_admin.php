<?php
session_start();
require('../../php/conexion.php');
$id= $_SESSION['id_usuario'];
 $n=$_POST['nombre1'];
 $c=$_POST['correo'];
 
 $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['password'])){
    $contra =$_POST['password'];
    $contra_fuerte = password_hash($contra,  PASSWORD_BCRYPT,["COST"=>11]);
    $query = $pdo->prepare("UPDATE datosusuario INNER JOIN usuarios 
    ON usuarios.id_username = datosusuario.id_datos_usuario
    SET datosusuario.nombre = '$n', 
    datosusuario.email = '$c', 
    usuarios.contraseña = '$contra_fuerte' 
    WHERE datosusuario.id_datos_usuario = $id");
    $query->execute();
    if($query){
        echo true;
    }else{
        echo false;
    }
}else{
    $query = $pdo->prepare("UPDATE datosusuario SET nombre = '$n', email ='$c' WHERE id_datos_usuario = $id");
    $query->execute(); 
    if($query){
        echo true;
    }else{
        echo false;
    }
}



?>