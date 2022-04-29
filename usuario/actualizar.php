<?php
if(isset($_POST)){
    session_start();
    $id = $_SESSION['id_usuario'];
    $nombre = $_POST['nombres'];
    $username = $_POST['nombre_personaje'];
    $correo = $_POST['editar_correo'];
    $password = $_POST['password'];
    $contraseña_fuerte = password_hash($password,  PASSWORD_BCRYPT,["COST"=>11]);
    
    require("../php/conexion.php");
    $consulta = $pdo->prepare("UPDATE datosusuario INNER JOIN usuarios 
    ON usuarios.id_username = datosusuario.id_datos_usuario
    SET datosusuario.nombre = '$nombre', 
    datosusuario.email = '$correo', 
    usuarios.username = '$username', 
    usuarios.contraseña = '$contraseña_fuerte' 
    WHERE datosusuario.id_datos_usuario = $id");
    $consulta->execute();
    if($consulta){
        echo true;
    }else{
        echo false;
    }

}
