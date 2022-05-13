<div class="modal fade padre" id="padre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog formulario">
        <div class="modal-content datos">
            <div class="modal-header" style="background-color: #563d7c !important;">
                <h6 class="modal-title" style="color: #fff; text-align: center;">
                    Actualizar Información
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form method="POST"  id="formulario_usuario">
              

                <div class="modal-body" id="cont_modal">
                    <!--lo nuevo-->

                    <div class="form-group kol">
                        
                        
                       <input type="text" class="form-control" id="id1" name="id1" disabled >

                        <!--nombre-->
                        <div class="formulario__grupo " id="grupo__nombre">
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
                            <div class="formulario__grupo-input">

                                <input type="text" class="form-control" name="correo" id="correo" >
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">
                                El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.
                            </p>
                        </div>
                        <p>desea cambiar su clave</p>
                        <p>
                            Sí <input type="radio" name="interesado" value="si" id="interesadoPositivo"> <br>
                            No <input type="radio" name="interesado" value="no" id="interesadoNegativo" checked>
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

                            <!-- validacion de formulario -->
                            <div class="formulario__mensaje2 alert alert-primary" role='alert' id="formulario__mensaje2" role='alert'>


                                <label class="mensaje"><i class="fas fa-exclamation-triangle"></i><b>Error:</b> Por favor rellena el formulario correctamente</label>

                            </div>
                            <div class="modal-footer" style="margin-right: 23%;">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary formulario__btn" id="formulario__btn">Guardar Cambios</button>
                            </div>
            </form>

        </div>
    </div>
</div>