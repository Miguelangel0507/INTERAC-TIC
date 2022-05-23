<?php
//REGISTRO DE USUARIO

require("conexion.php");
//se traen los datos ingresadados por el usuario
$nombre = $_POST['nombre'];
$username = $_POST['nombre_personaje'];
$email = $_POST['correo'];
$contraseña = $_POST['password'];


$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = $pdo->prepare("SELECT  username FROM usuarios WHERE username = '$username' ");
$query->execute();
$datos =$query->fetchAll(PDO::FETCH_ASSOC);

//otra
$query = $pdo->prepare("SELECT  email FROM datosusuario  WHERE email = '$email' ");
$query->execute();
$datos2 =$query->fetchAll(PDO::FETCH_ASSOC);

if($datos){
    echo "nom_ocupado";
}else if($datos2){
    echo "email_ocupado";
}else{
    //se encripta la contraseña
    $contraseña_fuerte = password_hash($contraseña,  PASSWORD_BCRYPT,["COST"=>11]);
    //se inserta los datos a la base de datos
    $query = $pdo->prepare("call SP_datos_usuario ('$nombre','$email','$username','$contraseña_fuerte')");
    $query->execute();
    if($query){
        echo "guardados";
    }else{
        echo "error";
    }
}

    
?>