<!-- Ventana modal para eliminar -->
<div class="modal fade" id="deleteChildresn<?php echo $dataCliente['id_datos_usuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">
                ¿Realmente deseas eliminar a ?
            </h4>
        </div>

        <div class="modal-body">
          <strong style="text-align: center !important"> 
            <?php echo $dataCliente['nombre']; ?>
        
          </strong>
        </div>
        
        <div class="modal-footer">
        <form method="POST"  action="eliminar.php">
        <input type="hidden" id="id" name="id" value="<?php echo $dataCliente['id_datos_usuario']; ?>">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <!--button type="button" class="btn btn-danger btnBorrar" id="btnBorrar"  data-dismiss="modal">Borrar</button-->
       <button class="btn btn-danger btnBorrar" >eliminar</button>
        </form>
        </div>
        
        </div>

      </div>
</div>
<!---fin ventana eliminar--->