<?php
if(isset($_POST)){
    require("../../php/conexion.php");
    
    session_start();
    $id = $_SESSION['id_usuario'];
    $nombre = $_POST['nombres'];
    $username = $_POST['nombre_personaje'];
    $correo = $_POST['editar_correo'];

    if(isset($_POST['password'])){ //se valida si viene algo en el campo de contraseña para Actualizar o no el campo de contraseña
        $password = $_POST['password'];
        $contraseña_fuerte = password_hash($password,  PASSWORD_BCRYPT,["COST"=>11]);//se encripta la contraseña
        $consulta = $pdo->prepare("UPDATE datosusuario INNER JOIN usuarios 
        ON usuarios.id_username = datosusuario.id_datos_usuario
        SET datosusuario.nombre = '$nombre', 
        datosusuario.email = '$correo', 
        usuarios.username = '$username', 
        usuarios.contraseña = '$contraseña_fuerte' 
        WHERE datosusuario.id_datos_usuario = $id");//se hace la actualizacion de los datos en la base de datos con contraseña
        $consulta->execute();
    }else{//no trae nada en el campo de contraseña
        $consulta = $pdo->prepare("UPDATE datosusuario INNER JOIN usuarios 
        ON usuarios.id_username = datosusuario.id_datos_usuario
        SET datosusuario.nombre = '$nombre', 
        datosusuario.email = '$correo', 
        usuarios.username = '$username'
        WHERE datosusuario.id_datos_usuario = $id");//se hace la actualizacion de los datos en la base de datos sin contraseña
    }
    $consulta->execute();
    if($consulta){//devuelve un true o un false depende si se hizo la consulta correctamente
        echo true;
    }else{
        echo false;
    }

}
