<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/8bac99961f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/perfil_usuario.css">
</head>

<body>
    <?php include "HeaderUsario.php"; ?>
    <div class="body">
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
            <div class="btns">
                <button type='button' class='btn btn-danger' onclick=Eliminar()><i class='fas fa-trash-alt'></i> Eliminar Usuario</button>
                <button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#staticBackdrop'><i class='far fa-edit' onclick=Editar()></i> Editar Datos</button>
            </div>
        </div>

    </div>


    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Editar datos usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="formulario_usuario">
                        <!-- Grupo: Nombre -->
                        <div class="formulario__grupo " id="grupo__nombre">
                            <input type="text" class="form-control" name="editar_nombre" id="editar_nombre" placeholder="Nombres" aria-label="Username" aria-describedby="basic-addon1" />
                        </div>
                        <!-- Grupo: Nombre_personaje -->
                        <div class="formulario__grupo" id="grupo__nombre_personaje">
                            <input type="text" class="form-control" name="editar_nombre_personaje" id="editar_nombre_personaje" placeholder=" Nombra tu personaje" aria-label="Username" aria-describedby="basic-addon1" />
                        </div>
                        <!-- Grupo: correo -->
                        <div class="formulario__grupo" id="grupo__correo">
                            <input type="text" class="form-control" name="editar_correo" id="editar_correo" placeholder="Correo electronico" aria-label="Correo electronico" aria-describedby="basic-addon1" />
                        </div>
                        <!-- Grupo: contraseña -->
                        <div class="formulario__grupo" id="grupo__password">
                            <input type="password" class="form-control" name="editar_password" id="editar_password" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" />
                        </div>
                        <!-- Grupo: contraseña 2 -->
                        <div class="formulario__grupo" id="grupo__password2">
                            <input type="password" class="form-control" name="editar_password2" id="editar_password2" placeholder="Validar Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" />
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <input type="button" class="btn btn-primary formulario_boton" data-bs-dismiss="modal"id="formulario_boton"  value="Actualizar">
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="PerfilUsuario.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>
