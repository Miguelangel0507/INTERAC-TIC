<!--sub menu detalles de la pagina del administrador-->
<div class="modal fade" id="Childresn<?php echo $dataCliente['id_datos_usuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content" style="height: auto;">
      <div class="modal-header" style="background-color: #563d7c !important;height: 63px;">
        <h6 class="modal-title" style="color: #fff; text-align: center;font-size: 22px; width:95%;">
          Información del usuario jugador
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="detalle">
        <div class="contenedores">
          <h4>Informacion</h4>
          <div class="todo">
            <div class="por">
              <label style="font-size: 18px;">&nbsp &nbsp ID:</label>
              <label style="font-size: 18px;">&nbsp &nbsp Nombre:</label>
              <label style="font-size: 18px;">&nbsp &nbsp Username:</label>
              <label style="font-size: 18px;">&nbsp &nbsp Estado:</label>
              <label style="font-size: 18px;">&nbsp &nbsp Email:</label>
            </div>
            <div class="nombres">
              <label  style="font-size: 18px;"><?php echo $dataCliente['id_datos_usuario'] ?> </label>
              <label  style="font-size: 18px;"><?php echo $dataCliente['nombre'] ?> </label>
              <label  style="font-size: 18px;"><?php echo $dataCliente['username'] ?> </label>
              <label  style="font-size: 18px;"><?php echo $dataCliente['estado'] ?> </label>
              <label  style="font-size: 18px;"><?php echo $dataCliente['email'] ?></label>
            </div>
          </div>
        </div>

        <hr class="separador_info">

        <!--datos de la base de datos-->
        <div class="contenedores">
          <h4>Puntos</h4>
          <div class="todo2">
            <dl class="pri">
              <h6 style="font-size: 25px;"> Puntos trivia</h6>
              <label>Nivel 1:&nbsp &nbsp </label> <?php echo $dataCliente['t1'] ?> <br>
              <label>Nivel 2:&nbsp &nbsp </label> <?php echo $dataCliente['t2'] ?><br>
              <label>Nivel 3:&nbsp &nbsp </label> <?php echo $dataCliente['t3'] ?>
            </dl>
            <dl class="seg">
              <h6 style="font-size: 25px;"> Puntos sopa</h6>
              <label>Nivel 1:&nbsp &nbsp </label> <?php echo $dataCliente['s1'] ?> <br>
              <label>Nivel 2:&nbsp &nbsp </label> <?php echo $dataCliente['s2'] ?><br>
              <label>Nivel 3:&nbsp &nbsp </label> <?php echo $dataCliente['s3'] ?>
            </dl>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>