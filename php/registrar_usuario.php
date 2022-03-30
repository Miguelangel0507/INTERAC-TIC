<?php
//REGISTRO DE USUARIO
if(isset($_POST)){
    //se traen los datos ingresadados por el usuario
    $nombre = $_POST['nombre'];
    $username = $_POST['nombre_personaje'];
    $email = $_POST['correo'];
    $contraseña = $_POST['password'];
    //se encripta la contraseña
    $contraseña_fuerte = password_hash($contraseña,  PASSWORD_BCRYPT,["COST"=>11]);
    //se crea la conexion a la base de datos
    require("conexion.php");
    //se inserta los datos a la base de datos
    $query = $pdo->prepare("call SP_datos_usuario ('$nombre','$email','$username','$contraseña_fuerte')");
    $query->execute();
}
?>