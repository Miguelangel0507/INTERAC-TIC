<!-- Ventana modal para eliminar -->
<div class="modal fade" id="deleteChildresn<?php echo $dataCliente['id_datos_usuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" style="color: #fff; text-align: center;font-size: 22px;">
          Eliminar jugador
        </h6>
      </div>
      <div class="modal-body">
        <label>¿Realmente deseas eliminar a <strong ><?php echo $dataCliente['nombre']; ?></strong> ?</label>
      </div>
      <div class="modal-footer">
        <form method="POST" action="eliminar.php">
          <input type="hidden" id="id" name="id" value="<?php echo $dataCliente['id_datos_usuario']; ?>">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <!--button type="button" class="btn btn-danger btnBorrar" id="btnBorrar"  data-dismiss="modal">Borrar</button-->
          <button class="btn btn-danger btnBorrar">Eliminar</button>
        </form>
      </div>

    </div>

  </div>
</div>
<!---fin ventana eliminar--->