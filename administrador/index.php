<!DOCTYPE html>
<html lang="es">
<?php
session_start();
?>
<!--include de la validacion session-->
<?php include "../php/validacion.php"; ?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link type="text/css" rel="shortcut icon" href="img/logo-mywebsite-urian-viera.svg" />
  <link rel="shortcut icon" href="https://www.risaralda.gov.co/info/gobrisaralda/web/portal/img/favicon.png">
  <title>Usuarios eliminar-Actualizar </title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/cargando.css">
  <link rel="stylesheet" type="text/css" href="../css/maquinawrite.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/estyle.css">
  <link rel="stylesheet" href="admin.css">
</head>
<!--traemos el cabecero del menu-->
<?php include("menus.php"); ?>

<body onunload="opepopup()">

  <div class="clearfix">
    <h2 id="titulo">Datos usuarios</h2>
    <form method="get" class="form_search">
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="busqueda" id="busqueda" placeholder="Buscar por nombre, correo electronico, estado o rol..." aria-label="Recipient's username" aria-describedby="button-addon2">
        <select name="tipo_usuario" id="tipo_usuario">
          <option value="todos">Todos</option>
          <option value="admin">Administradores</option>
          <option value="user">Usuarios</option>
        </select>
        <input type="submit" value="Buscar" class="btn btn-outline-secondary">
      </div>
    </form>

    <div class="contenedor_tabla">
      <div class="table-responsive">
        <!--Tabla de Registros-->
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
            include("total_registros.php");
            if ($total_registro == 0) { ?>
              
              <td colspan="6">
              <div class='alert alert-primary alert_user' id="alerta" role='alert'>No se encontro ningun usuario o administrador</div>
              </td>
              <?php
            } else {
              $por_pagina = 5;

              if (empty($_GET['pagina'])) {
                $pagina = 1;
              } else {
                $pagina = $_GET['pagina'];
              }
              $desde = ($pagina - 1) * $por_pagina;
              $total_paginas = ceil($total_registro / $por_pagina);
              // traemos la consulta y la pasamos a la tabla
              include("registro.php");
              while ($dataCliente = $query->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                  <td><?php echo $dataCliente['id_datos_usuario']; ?></td>
                  <td><?php echo $dataCliente['nombre']; ?></td>
                  <td><?php echo $dataCliente['email']; ?></td>
                  <td><?php echo $dataCliente['estado']; ?></td>
                  <td><?php echo $dataCliente['rol_usuario']; ?></td>
                  <td>
                    <div class="btns_info_usuarios">
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteChildresn<?php echo $dataCliente['id_datos_usuario']; ?>">Eliminar</button>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn<?php echo $dataCliente['id_datos_usuario']; ?>">Modificar</button>
                      <button type="button" class="btn btn-primary btn_detalles" data-toggle="modal" data-target="#Childresn<?php echo $dataCliente['id_datos_usuario']; ?>">Detalles</button>
                    </div>
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

    <!--Paginador-->
    <nav aria-label="Page navigation example">
      <ul class="pagination pagination_usuarios">
        <li class="page-item">
          <?php if ($pagina > 1) {
                if (empty($_GET['busqueda']) && empty($_GET['tipo_usuario'])) {
                  echo '<a class="page-link" href="?pagina=' . $pagina - 1 . ' " aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>';
                } else {
                  echo '<a class="page-link" href="?pagina=' . $pagina - 1 . '&busqueda=' . $_GET["busqueda"] . '&tipo_usuario=' . $_GET["tipo_usuario"] . ' " aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>';
                }
              }
          ?>
        </li>
        <?php
              for ($i = 1; $i <= $total_paginas; $i++) {
                if (empty($_GET['busqueda']) && empty($_GET['tipo_usuario'])) {
                  echo '<li class="page-item"><a class="page-link" href="?pagina=' . $i . '">' . $i . '</a></li>';
                } else {
                  echo '<li class="page-item"><a class="page-link" href="?pagina=' . $i . '&busqueda=' . $_GET["busqueda"] . '&tipo_usuario=' . $_GET["tipo_usuario"] . '">' . $i . '</a></li>';
                }
              }
        ?>
        <li class="page-item">
        <?php if ($pagina != $total_paginas) {
                if (empty($_GET['busqueda']) && empty($_GET['tipo_usuario'])) {
                  echo '<a class="page-link" href="&pagina=' . $pagina + 1 . '" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>';
                } else {
                  echo '<a class="page-link" href="?pagina=' . $pagina + 1 . '&busqueda=' . $_GET["busqueda"] . '&tipo_usuario=' . $_GET["tipo_usuario"] . '" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>';
                }
              }
            }
        ?>
        </li>
      </ul>
    </nav>
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