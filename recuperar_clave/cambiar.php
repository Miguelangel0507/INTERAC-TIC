<!DOCTYPE html>
<!-- nueva clave-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva contraseña</title>
    <link rel="stylesheet" href="../css/style_registro.css" />
    <link rel="shortcut icon" href="https://www.risaralda.gov.co/info/gobrisaralda/web/portal/img/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <style>
        .contenedor {
            background-color: white;
            border-radius: 15px;
            width: 404px;
            text-align: center;
            padding: 23px;
            align-items: center;
            margin-top: 80px;
        }

        body {
            display: flex;
            justify-content: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        .formulario__input-error {
            margin-top: 10px;
            text-align: left;
        }
        .formulario__mensaje2{
            margin: 10px 0px 0px;
        }

        @media(max-width:492px) {
            .contenedor {
                width: 80%;
            }
        }
    </style>
</head>

<body>
    <?php
    $ll =  array();
    $ll = $_REQUEST['id'];
    ?>

    <diV class="contenedor" id="padre">
        <form method="POST" id="formulario_usuario">
            <h4>Ingresa tu nueva contraseña.</h4>
            <!-- Grupo: contraseña -->
            <div class="formulario__grupo" id="grupo__password">
                <div class="formulario__grupo-input">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Nueva contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" />
                    <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $ll ?>">
                    <input type="hidden" name="id_fecha" id="id_fecha" value="<?php echo $fecha ?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">
                    La contraseña tiene que ser de 8 dígitos y contener una letra mayuscula.
                </p>
            </div>

            <!-- Grupo: contraseña 2 -->
            <div class="formulario__grupo" id="grupo__password2">
                <div class="formulario__grupo-input">
                    <input type="password" class="form-control" name="password2" id="password2" placeholder="Confirmar contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" />
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">
                    Ambas contraseñas deben ser iguales.
                </p>
                <div class="v">
                    <input type="checkbox" onclick="ver2()" id="v"> <label for="v">&nbsp Ver contraseña</label>
                </div>
            </div>
            <!--boton de registro-->
            <button type="submit" class="btn btn-primary formulario__btn" id="formulario__btn">Cambiar</button>
            <span class="spinner"></span>
            <!-- validacion de formulario -->
            <div class="formulario__mensaje2 alert alert-primary" role='alert' id="formulario__mensaje2" role='alert'>
                <label class="mensaje">Por favor rellena el formulario correctamente.</label>
            </div>
        </form>
    </diV>
    <!--</div>
            </div>
        </div>
    </div>-->
    <script src="correo.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>