<!DOCTYPE html>
<?php
session_start();
?>
<?php include "../php/validacion.php"; ?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link type="text/css" rel="shortcut icon" href="img/logo-mywebsite-urian-viera.svg" />
  <title>Eliminar - Actualizar </title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/cargando.css">
  <link rel="stylesheet" type="text/css" href="../css/maquinawrite.css">
  <link rel="stylesheet" href="../css/estyle.css">
  <link rel="stylesheet" href="admin.css">
</head>
<?php include("menus.php"); ?>

<body onunload="opepopup()">
  <div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
  </div>

  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="body">
        <div class="row clearfix">
          <div class="col-sm-7" style="display: contents;">
            <div class="row">
              <div class="col-md-12 p">
                <h2 id="titulo">Datos usuarios</h2>
                <div class="table-responsive" style="align-items: center;">
                  <table class="table table-bordered table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include("registro.php");
                      while ($dataCliente = $query->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                          <td><?php echo $dataCliente['id_datos_usuario']; ?></td>
                          <td><?php echo $dataCliente['nombre']; ?></td>
                          <td><?php echo $dataCliente['email']; ?></td>
                          <td><?php echo $dataCliente['estado']; ?></td>
                          <td><?php echo $dataCliente['rol_usuario']; ?></td>
                          <td>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteChildresn<?php echo $dataCliente['id_datos_usuario']; ?>">Eliminar</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn<?php echo $dataCliente['id_datos_usuario']; ?>">Modificar</button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Childresn<?php echo $dataCliente['id_datos_usuario']; ?>">Detalles</button>
                          </td>
                        </tr>
                        <!--Ventana Modal para Actualizar--->
                        <?php include('ModalEditar.php'); ?>
                        <?php include('Modal_detalle.php'); ?>
                        <!--Ventana Modal para la Alerta de Eliminar--->
                        <?php include('ModalEliminar.php'); ?>
                      <?php } ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<script type="text/javascript">
  function openpopup() {
    window.open("logout.asp", "", "width=300,height=338")
  }
</script>
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/delete.js"></script>

</html>