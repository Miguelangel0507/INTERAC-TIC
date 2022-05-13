
<!--ventana para Update--->
<div class="modal fade" id="editChildresn<?php echo $dataCliente['id_datos_usuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #563d7c !important;display: block;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="recib_Update.php">
        <input type="hidden" name="id" value="<?php echo $dataCliente['id_datos_usuario']; ?>">

            <div class="modal-body" id="cont_modal">
                <!--lo nuevo-->
              
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label" style="font-family: cursive;">Estado: <br> <span style="color: gray;"> 1.activo </span><br><span  style="color: gray;"> 2.inactivar</span></label>
                  <input type="number"  style=" margin-top: 8px;" min="1" max="2"  name="estado" class="form-control" value="<?php echo $dataCliente['estado']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label" style="font-family: cursive;">Rol: <br> <span  style="color: gray;"> 1.jugador</span><br> <span  style="color: gray;"> 2.administrador</span></label>
                  <input type="number" style=" margin-top: 8px;" min="1" max="2"  name="rol" class="form-control" value="<?php echo $dataCliente['rol_usuario']; ?>" required="true">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->
