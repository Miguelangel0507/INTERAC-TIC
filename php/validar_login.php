<?php
session_start();
if ($_POST) {
    $username = $_POST['username'];
    $contra = $_POST['contraseña'];
    require("conexion.php");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->prepare("SELECT * FROM usuarios INNER JOIN datosusuario on usuarios.id_username=datosusuario.id_datos_usuario WHERE username = '$username'");
    $query->execute();

    $usuario = $query->fetch(PDO::FETCH_ASSOC);

    //echo $usuario["contraseña"];
    if (isset($usuario)) {
        if (password_verify($contra, $usuario["contraseña"])) {
            if ($usuario["estado"] == 1) {
                if ($usuario["rol_usuario"] == 1) {
                    $_SESSION['id_usuario'] = $usuario["id_username"];
                    echo 1;
                } else {
                    $_SESSION['id_usuario'] = $usuario["id_username"];
                    echo 2;
                }
            } else {
                echo "inactivo";
            }
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }
}else{
    $_SESSION['id_usuario'] = "invitado";
    $_SESSION['puntos_sopa1']  = 0;
    $_SESSION['puntos_sopa2']  = 0;
    $_SESSION['puntos_sopa3']  = 0;
    $_SESSION['puntos_trivia1']  = 0;
    $_SESSION['puntos_trivia2']  = 0;
    $_SESSION['puntos_trivia3']  = 0;
    echo "ingreso";
}
