<div class="modal fade" id="municipio<?php echo $nivel3[$cuenta][0]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header" >
        <h6 class="modal-title" >
          Actualizar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="php/recibe_muni.php">
        <input type="hidden" name="id_muni" value="<?php echo $nivel3[$cuenta][0]; ?>">
        <div class="modal-body" id="cont_modal">
          <div class="form-group contenedor_info">
            <label for="recipient-name" class="col-form-label">Palabra a Editar:</label>
            <input type="text" name="muni" class="form-control" value="<?php echo $nivel3[$cuenta][1]; ?>" required="true">
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