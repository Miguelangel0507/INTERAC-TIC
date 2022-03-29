<?php
//REGISTRO DE USUARIO
if(isset($_POST)){
    $nombre = $_POST['nombre'];
    $username = $_POST['nombre_personaje'];
    $email = $_POST['correo'];
    $contraseña = $_POST['password'];
    $contraseña_fuerte = password_hash($contraseña, PASSWORD_BCRYPT);
    require("conexion.php");

    $query = $pdo->prepare("call SP_datos_usuario ('$nombre','$username','$email','$contraseña_fuerte')");
    $query->execute();
}
?>