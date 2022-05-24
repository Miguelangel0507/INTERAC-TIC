<div class="modal fade" id="turismo<?php echo $preguntas['id_categoria']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #563d7c !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          Actualizar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="php/recibe_turis.php">
        <input type="hidden" name="id_turis" value="<?php echo $preguntas['id_categoria']; ?>">
        <div class="modal-body" id="cont_modal">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Palabra a Editar:</label>
            <input type="text" name="turis" class="form-control" value="<?php echo $preguntas['sitios_turisticos']; ?>" required="true">
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