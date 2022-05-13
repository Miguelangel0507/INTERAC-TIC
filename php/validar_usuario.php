<?php
    if (isset($_POST)) {
        session_start();
        //Se traen los datos ingresados por el usuario
        $username = $_POST['username'];
        $contraseña = $_POST['contraseña'];
        //se hace conexxion a la base de dat
        require("conexion.php");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //se hace la consulta a la tabla usuarios mediante el username
        $query = $pdo->prepare("SELECT * FROM usuarios INNER JOIN datosusuario on usuarios.id_username=datosusuario.id_datos_usuario WHERE username='$username'");
        $query->execute();

        $usuario = $query->fetch(PDO::FETCH_ASSOC);
        if ($usuario) {
        //se compara la contraseña ingresada con la guardada en el registro
            if (password_verify($contraseña, $usuario["contraseña"])) {
                //se valida el estado del usuario
                if ($usuario["estado"] == 1) {
                    //se valida el rol del usuario y se direcciona segun su rol
                    if ($usuario["rol_usuario"]  == 1) {
                        $_SESSION['id_usuario'] = $usuario["id_username"];
                        header("location: ../usuario");
                    } else {
                        $_SESSION['id_usuario'] = $usuario["id_username"];
                        $_SESSION['estado'] = $usuario["estado"];
                        $_SESSION['nombre'] = $usuario["nombre"];
                        $_SESSION['email'] = $usuario["email"];
                        $_SESSION['contra'] = $usuario['contraseña'];
                        //   header("location:perfil_admin.php?id=".$usuario."");
                        header("location: ../administrador/index.php");
                    }
                } else {
                    echo "<div class='alert alert-primary' role='alert'><i class='fas fa-exclamation-triangle'></i>Su estado es inactivo</div>";
                }
            } else {
                echo "<div class='alert alert-primary' role='alert'><i class='fas fa-exclamation-triangle'></i>verfica tu usuario y contraseña</div>";
            }
        } else {
            echo "<div class='alert alert-primary' role='alert'>verfica tu usuario y contraseña</div>";                        
        }
    }
                ?>
