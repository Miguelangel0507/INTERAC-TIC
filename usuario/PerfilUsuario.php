<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Usuario</title>
    <script src="https://kit.fontawesome.com/8bac99961f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/perfil_usuario.css">
</head>

<body>
    <?php
    session_start();
    include "../php/validacion.php"; //validacion de que el usuario este logueado
    include "HeaderUsario.php"; ?>
    <div class="body">
        <!--contenedor datos usuario-->
        <div class="cont_DatosUsuario">
            <h2>Datos Usuario</h2>
            <div id="container_datos">
                <div>
                    <label>Nombre:</label><br>
                    <label>Correo: </label><br>
                    <label> Username:</label><br>
                </div>
                <div id="DatosUsuario">
                    <label id="nombre"></label><br>
                    <label id="correo"></label><br>
                    <label id="username"></label><br>
                </div>
            </div>
            <div>
                <!--mensaje de alerta de jugador invitado-->
                <div id="mensaje_invitado" style="display: none">
                    <div class='alert alert-primary' id="alerta" role='alert'>Estas como jugador invitado por lo tanto no tienes datos ingresados, para ingresar tus datos debes ir al registro de usuario.
                        <a class='btn btn-success' href="../registro.html" role="button"> Ir a registro de usuario</a>
                    </div>
                </div>
                <!--botones para eliminar y actualizar usuario-->
                <div id="cont_btns" style="display: none">
                    <div class="btns">
                        <button type='button' id="btn_eliminar" class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#M_eliminar'><i class='fas fa-trash-alt'></i> Eliminar Usuario</button>
                        <button type='button' id="btn_actualizar" class='btn btn-success' data-bs-toggle='modal' data-bs-target='#actualizar_datos'><i class='far fa-edit'></i> Editar Datos</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Modal actualizar datos-->
    <div class="modal fade" id="actualizar_datos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Editar datos usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="reset_mensaje()"></button>
                </div>
                <div class="modal-body padre" id="padre">
                    <form method="POST" id="formulario_usuario">
                        <!--nombre-->
                        <div class="formulario__grupo " id="grupo__nombre">
                            <p class="info">Nombre:</p>
                            <div class="formulario__grupo-input">
                                <input type="text" class="form-control" name="nombres" id="nombres">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">
                                El nombre tiene que ser de 4 a 16 dígitos y solo puede contener letras
                            </p>
                        </div>
                        <!--username-->
                        <div class="formulario__grupo" id="grupo__nombre_personaje">
                            <p class="info">Nombre de usuario:</p>
                            <div class="formulario__grupo-input">
                                <input type="text" class="form-control" name="nombre_personaje" id="nombre_personaje" placeholder="Nombra tu personaje" aria-label="Username" aria-describedby="basic-addon1" />
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">
                                El nombre del personaje tiene que ser de 4 a 16 dígitos y no contener espacio, solo puede contener numeros, letras y guion bajo
                            </p>
                        </div>
                        <!--correo-->
                        <div class="formulario__grupo" id="grupo__correo">
                            <p class="info">Correo:</p>
                            <div class="formulario__grupo-input">
                                <input type="text" class="form-control" name="editar_correo" id="editar_correo">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">
                                El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.
                            </p>
                        </div>
                        <!--checkbox -->
                        <p style="margin: 0px;">¿Desea cambiar su clave?</p>
                        <p id="checkbox">
                            <label class="list-group-item">
                                No <input type="radio" name="interesado" value="no" id="interesadoNegativo" checked>
                            </label>
                            <label class="list-group-item">
                                Sí <input type="radio" name="interesado" value="si" id="interesadoPositivo"> <br>
                            </label>
                        </p>
                        <!--contraseñas-->
                        <div class="formulario__grupo" id="grupo__password">
                            <div class="formulario__grupo-input">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Nueva clave" disabled>
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">
                                La contraseña tiene que ser de 8 dígitos y contener una letra mayuscula
                            </p>
                            <!--contraseñas 2<label class="la" for="">Validar contraseña:&nbsp </label>-->
                            <div class="formulario__grupo" id="grupo__password2">
                                <div class="formulario__grupo-input">
                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="Validar clave" disabled>
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario__input-error">
                                    Ambas contraseñas deben ser iguales.
                                </p>
                            </div>
                            <div class="v">
                                <input type="checkbox" onclick="ver2()" id="v" disabled> <label id="v" for="v" class="ver_contra"> &nbsp Ver contraseña</label>
                            </div>
                            <!-- validacion de formulario -->
                            <div class="formulario__mensaje2 alert alert-primary" role='alert' id="formulario__mensaje2" role='alert'>
                                <label class="mensaje"><i class="fas fa-exclamation-triangle"></i><b>Error:</b> Por favor rellena el formulario correctamente</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="reset_mensaje()">Cerrar</button>
                    <button type="submit" class="btn btn-primary formulario__btn" id="formulario__btn">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>

    <!--MODAL ELIMINAR CUENTA-->
    <div class="modal fade" id="M_eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label>Para eliminar el usuario debes escribir la palabra "ELIMINAR".</label>
                    <input type="text" class="form-control" name="text_eliminar" id="text_eliminar" placeholder="ELIMINAR" aria-label="Username" aria-describedby="basic-addon1" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger btn_eliminar" id="btn_eliminarDatos"><i class="fas fa-trash-alt"></i> Eliminar Usuario</button>
                </div>
            </div>
        </div>
    </div>

    <script src="PerfilUsuario.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script><!-- jQuery -->

</body>

</html>