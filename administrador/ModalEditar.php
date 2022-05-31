<!--ventana para Update--->
<div class="modal fade" id="editChildresn<?php echo $dataCliente['id_datos_usuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" style="color: #fff; text-align: center;font-size: 22px;">
          Actualizar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="recib_Update.php">
        <input type="hidden" name="id" value="<?php echo $dataCliente['id_datos_usuario']; ?>">
        <div class="modal-body  body-editar" id="cont_modal">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Estado:</label> <br>
            <div class="datos">
              <span> 1. Activo </span> <br>
              <span> 2. Inactivo</span>
            </div>
            <input type="number" style=" margin-top: 8px;" min="1" max="2" name="estado" class="form-control edit-input" value="<?php echo $dataCliente['estado']; ?>" required="true">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Rol: </label> <br>
            <div class="datos">
              <span> 1. Jugador</span> <br>
              <span> 2. Administrador</span>
            </div>
            <input type="number" style=" margin-top: 8px;" min="1" max="2" name="rol" class="form-control edit-input" value="<?php echo $dataCliente['rol_usuario']; ?>" required="true">
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