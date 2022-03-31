<?php
if(isset($_POST)){
    session_start();
    //Se traen los datos ingresados por el usuario
    $username = $_POST['username'];
    $contraseña = $_POST['contraseña'];
    //se hace conexxion a la base de datos
    require("conexion.php");
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //se hace la consulta a la tabla usuarios mediante el username
    $query = $pdo->prepare("SELECT * FROM usuarios WHERE username='$username'");
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    //se compara la contraseña ingresada con la guardada en el registro
    if(password_verify($contraseña, $usuario["contraseña"])) {
        echo "ok";
        //se valida el estado del usuario
        /*if($usuario["estado"] == 1 ){
            //se valida el rol del usuario y se direcciona segun su rol
            if($usuario["rol_usuario"]  == 1){
                echo "ok_usuario";
                //header("location: ../usuario/usuario.html");
            }else{
                echo "ok_administrador";
                //header("location: ../administrador/administrador.html");
            }
        }else{
            echo "error";
            //header("location: ../index.html");
        }*/
    }else{
        //echo "error";
        //header("location: ../index.html");
    } 
    
}




?>