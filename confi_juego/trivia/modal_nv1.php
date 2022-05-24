<div class="modal fade" id="nivel<?php echo $dataCliente['id_pregunta']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #563d7c !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          Actualizar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="php/nv1.php">
        <input type="hidden" name="id_turis" value="<?php echo $dataCliente['id_pregunta']; ?>">
        <div class="modal-body" id="cont_modal">
          <!--lo nuevo-->
          <div class="form-group kol">
            <label for="recipient-name" class="col-form-label">Numero de pregunta:</label>
            <input type="text" name="id" class="form-control" value="<?php echo $dataCliente['id_pregunta']; ?>" required="true" readonly>
            <label for="recipient-name" class="col-form-label">Pregunta:</label>
            <input type="text" name="pre" class="form-control" value="<?php echo $dataCliente['pregunta']; ?>" required="true">
            <label for="recipient-name" class="col-form-label">Posibles respuestas:</label>
            <label for="a">A:&nbsp &nbsp    <input type="text" id="a" name="a" class="form-control" value="<?php echo $dataCliente['respuesta1']; ?>" required="true"></label>
            <label>B:&nbsp &nbsp <input type="text" name="b" class="form-control" value="<?php echo $dataCliente['respuesta2']; ?>" required="true"></label>
            <label>C:&nbsp &nbsp<input type="text" name="c" class="form-control" value="<?php echo $dataCliente['respuesta3']; ?>" required="true"></label>
            <label>D:&nbsp&nbsp <input type="text" name="d" class="form-control" value="<?php echo $dataCliente['respuesta4']; ?>" required="true"></label>
            <label for="recipient-name" class="col-form-label">Respuesta correcta:</label>
            <input type="text" name="co" class="form-control" value="<?php echo $dataCliente['respuesta_correcta']; ?>" required="true" readonly>
            <label>Actualizar nueva respuesta correcta</label>
            <div class="radio">
              <label for="A" class="list-group-item">A &nbsp &nbsp <input type="radio" name="res" id="A" value="A" required="true"></label>
              <label for="B" class="list-group-item">B &nbsp &nbsp <input type="radio" name="res" id="B" value="B" required="true"></label>
              <label for="C" class="list-group-item">C &nbsp &nbsp <input type="radio" name="res" id="C" value="C" required="true"></label>
              <label for="D" class="list-group-item">D &nbsp &nbsp <input type="radio" name="res" id="D" value="D" required="true"></label>
            </div>
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