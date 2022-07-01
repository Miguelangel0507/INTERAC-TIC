<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>inicio</title>
    <link rel="shortcut icon" href="https://www.risaralda.gov.co/info/gobrisaralda/web/portal/img/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style_login.css" />
</head>

<body>
    <!--registro-->
    <div class="padre">
        <!--<div class="padre2">-->
        <div class="row">
            <div class="logo">
                <img src="img/descarga.png" alt="logo " />
            </div>
            <div class="formulario">
                <form method="post" id="form_login">
                    <div class="form-group text-center pt-3">
                        <h1>Iniciar sesion</h1>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Ingrese su usuario " aria-label="Username" aria-describedby="basic-addon1" />
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="password" class="form-control" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña " />
                        <div class="v" styel="position:relative; top:11px">
                            <input type="checkbox" onclick="ver()"> &nbsp Ver contraseña
                        </div>
                    </div>
                    <div class="form-group mx-sm-4 pb-2">
                        <input type="submit" id="ingresar" class="btn btn-block ingresar" value="INGRESAR" />
                    </div>
                </form>
                <div class='alert alert-primary' id="alerta" role='alert'></div>
                <!--recuperar contraseña-->
                <div class="form-group mx-sm-4 text-center">
                    <span class=" "><a href="recuperar_clave/index.php" class="olvide">¿Olvidaste tu contraseña?</a></span>
                </div>
                <hr />
                <!--registro-->
                <div class="form-group text-center">
                    <a href="registro.html" class="crear">Crear cuenta nueva</a></ <label for="" class="o">o</label>
                    <a id="btn_invitado" class="crear">Ingresar como invitado</a>
                </div>
            </div>
            <!--</div>-->
        </div>
    </div>
    <script src="js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF " crossorigin="anonymous "></script>
</body>

</html>