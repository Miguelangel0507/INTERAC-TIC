<div class="modal fade" id="Childresn<?php echo $dataCliente['id_datos_usuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="height: auto;">
    <div class="modal-header" style="background-color: #563d7c !important;height: 63px;">
        <h6 class="modal-title" style="color: #fff; text-align: center;font-size: 22px;">
            Información del usuario jugador
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <div class="detalle">
          <h4>Informacion</h4>
          <div class="todo">
            <div class="por">

              <label style="font-size: 20px;">&nbsp &nbsp ID:&nbsp &nbsp</label>
              <label style="font-size: 20px;">&nbsp &nbsp Nombre:&nbsp &nbsp</label>
              <label style="font-size: 20px;">&nbsp &nbsp Nombre jugador:&nbsp &nbsp</label>
              <label style="font-size: 20px;">&nbsp &nbsp Estado:&nbsp &nbsp</label>
              <label style="font-size: 20px;">&nbsp &nbsp Email:&nbsp &nbsp</label>


            </div>


            <div class="nombres">
              <label><?php echo $dataCliente['id_datos_usuario'] ?> </label>
              <label><?php echo $dataCliente['nombre'] ?> </label>
              <label><?php echo $dataCliente['username'] ?> </label>
              <label><?php echo $dataCliente['estado'] ?> </label>
              <label><?php echo $dataCliente['email'] ?></label>
            </div>
          </div>
          <hr>

          <!--datos de la base de datos-->
                <h4>Puntos</h4>
          <div class="todo2">
            <dl class="pri">
              <dd style="font-size: 25px;"> Puntos trivia</dd>
              <label>Nivel 1:&nbsp &nbsp </label> <?php echo $dataCliente['t1'] ?> <br>
              <label>Nivel 2:&nbsp &nbsp </label> <?php echo $dataCliente['t2'] ?><br>
              <label>Nivel 3:&nbsp &nbsp </label> <?php echo $dataCliente['t3'] ?>
            </dl>
            <dl class="seg">
              <dd style="font-size: 25px;"> Puntos sopa</dd>
              <label>Nivel 1:&nbsp &nbsp </label> <?php echo $dataCliente['s1'] ?> <br>
              <label>Nivel 2:&nbsp &nbsp </label> <?php echo $dataCliente['s2'] ?><br>
              <label>Nivel 3:&nbsp &nbsp </label> <?php echo $dataCliente['s3'] ?>
            </dl>
          </div>
        </div>
    </div>
  </div>
</div>