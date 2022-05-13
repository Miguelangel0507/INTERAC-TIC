<?php
if(isset($_POST)){
    require("../php/conexion.php");
    session_start();
    $id = $_SESSION['id_usuario'];
    $nombre = $_POST['nombres'];
    $username = $_POST['nombre_personaje'];
    $correo = $_POST['editar_correo'];

    if(isset($_POST['password'])){
        $password = $_POST['password'];
        $contraseña_fuerte = password_hash($password,  PASSWORD_BCRYPT,["COST"=>11]);
        $consulta = $pdo->prepare("UPDATE datosusuario INNER JOIN usuarios 
        ON usuarios.id_username = datosusuario.id_datos_usuario
        SET datosusuario.nombre = '$nombre', 
        datosusuario.email = '$correo', 
        usuarios.username = '$username', 
        usuarios.contraseña = '$contraseña_fuerte' 
        WHERE datosusuario.id_datos_usuario = $id");
        $consulta->execute();
    }else{
        $consulta = $pdo->prepare("UPDATE datosusuario INNER JOIN usuarios 
        ON usuarios.id_username = datosusuario.id_datos_usuario
        SET datosusuario.nombre = '$nombre', 
        datosusuario.email = '$correo', 
        usuarios.username = '$username'
        WHERE datosusuario.id_datos_usuario = $id");
    }
    $consulta->execute();
    if($consulta){
        echo true;
    }else{
        echo false;
    }

}
