<div class="modal fade padre" id="padre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog formulario">
        <div class="modal-content datos">
            <div class="modal-header" >
                <h6 class="modal-title">
                    Actualizar Información
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="formulario_usuario">
                <div class="modal-body" id="cont_modal">
                    <div class=" kol">
                        <p class="info">Id:</p>
                        <input type="text" class="form-control info-id" id="id1" name="id1" disabled>
                        <!--nombre-->
                        <div class="formulario__grupo " id="grupo__nombre">
                            <p class="info">Nombre:</p>
                            <div class="formulario__grupo-input">
                                <input type="text" class="form-control" name="nombre1" id="nombre1">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">
                                El nombre tiene que ser de 4 a 16 dígitos y solo puede contener letras
                            </p>
                        </div>

                        <!--correo-->
                        <div class="formulario__grupo" id="grupo__correo">
                            <p class="info">Correo:</p>
                            <div class="formulario__grupo-input">
                                <input type="text" class="form-control" name="correo" id="correo">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">
                                El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.
                            </p>
                        </div>

                        <!--cambiar contraseña-->
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
                            <div class="formulario__grupo" id="grupo__password2">
                                <div class="formulario__grupo-input password2">
                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="Validar clave" disabled>
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario__input-error">
                                    Ambas contraseñas deben ser iguales.
                                </p>
                                <div class="v" >
                                    <input type="checkbox" onclick="ver2()" id="v" disabled> <label id="v" for="v"> &nbsp Ver contraseña</label>
                                </div>
                            </div>

                            <!-- validacion de formulario -->
                            <div class="formulario__mensaje2 alert alert-primary" role='alert' id="formulario__mensaje2" role='alert'>
                                <label class="mensaje"><i class="fas fa-exclamation-triangle"></i><b>Error:</b> Por favor rellena el formulario correctamente</label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary formulario__btn" id="formulario__btn">Guardar Cambios</button>
                            </div>
            </form>

        </div>
    </div>
</div>