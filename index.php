<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>inicio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style_login.css" />
</head>

<body>
    <!--registro-->
    <div class="padre">
        
        <div class="row">
            <div class="logo">
                <img src="img/descarga.png" alt="logo " />
            </div>
            <div class="formulario">
                <form action="" method="post" id="form_login">
                    <div class="form-group text-center pt-3">
                        <h1>Iniciar sesion</h1>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Ingrese su usuario "  aria-label="Username" aria-describedby="basic-addon1" />
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="password" class="form-control" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña " />
                    </div>
                    <div class="form-group mx-sm-4 pb-2">
                        
                        <input type="submit" id="ingresar" class="btn btn-block ingresar" onclick="envio_datos()" value="INGRESAR" />
                    </div>
                </form>
                <?php
                if ($_POST) {
                    session_start();
                    //Se traen los datos ingresados por el usuario
                    $username = $_POST['username'];
                    $contraseña = $_POST['contraseña'];
                    //se hace conexxion a la base de datos
                    require("php/conexion.php");
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    //se hace la consulta a la tabla usuarios mediante el username
                    $query = $pdo->prepare("SELECT * FROM usuarios WHERE username='$username'");
                    $query->execute();

                    $usuario = $query->fetch(PDO::FETCH_ASSOC);
                    if ($usuario) {
                        //se compara la contraseña ingresada con la guardada en el registro
                        if (password_verify($contraseña, $usuario["contraseña"])) {
                            //se valida el estado del usuario
                            if ($usuario["estado"] == 1) {
                                //se valida el rol del usuario y se direcciona segun su rol
                                if ($usuario["rol_usuario"]  == 1) {
                                    header("location: usuario/usuario.html");
                                } else {
                                    header("location: administrador/administrador.html");
                                }
                            } else {
                                echo "<div class='alert alert-primary' role='alert'><i class='fas fa-exclamation-triangle'></i>Su estado es inactivo</div>";
                            }
                        } else {
                            echo "<div class='alert alert-primary' role='alert'><i class='fas fa-exclamation-triangle'></i>verfica tu usuario y contraseña</div>";
                            //header("location: ../index.html");
                        }
                    } else {
                        echo "<div class='alert alert-primary' role='alert'>verfica tu usuario y contraseña</div>";
                    }
                }
                ?>


                <!--recuperar contraseña-->
                <div class="form-group mx-sm-4 text-center">
                    <span class=" "><a href="# " class="olvide">¿Olvidaste tu contraseña?</a></span>
                    <hr />
                </div>
                <!--registro-->
                <div class="form-group text-center">
                    <span><a href="registro.html" class="crear">Crear cuenta nueva</a></span><br />
                    <label for="" class="o">o</label><br />
                    <span><a href="# " class="crear">Ingresar como invitado</a></span><br />
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF " crossorigin="anonymous "></script>
</body>

</html>