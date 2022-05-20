<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../../css/cargando.css">
  <link rel="stylesheet" type="text/css" href="../../css/maquinawrite.css">
  <link rel="stylesheet" href="../../css/estyle.css">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="../../administrador/menu.css">

</head>

<body>
<?php
session_start();
include "../validacion.php"?>
  <nav class="navbar1 navbar-expand-lg1 navbar-light1 bg-light1">

    <div class="collapse1 navbar-collapse1" id="navbarNav">
      <p class="pa"> <b><span style="color: white;">Administrador</span> </b></p>
      <ul class="navbar-nav1">

        <li class="nav-item1 active1">
          <a class="nav-link1" href="../../administrador/index.php"><b> Home</b> <span class="sr-only1"></span></a>
        </li>
        <li class="nav-item1">
          <a class="nav-link1" href="../sopa/index.php"><b> Configurar juego</b></a>
        </li>
        <li class="nav-item1">
          <a class="nav-link1" href="../salir.php"><b> Salir</b></a>
        </li>



      </ul>
    </div>
  </nav>
  <div class="todo2">
    <div class="id padre" id="padre2">



      <H3>Perfil administrador</H3>
      <div class="todo">
        <div class="ubicar1">
          <label for="">ID:</label>
          <label for="">Estado:</label>
          <label for="">Nombre:</label>
          <label for="">Email:</label>
        </div>

        <div class="ubicar2">
          <label id="i"></label>
          <label id="es"></label>
          <label id="n"></label>
          <label id="e"></label>
        </div>
      </div>
      <!--a href="#" class="btn btn-primary" style="margin-left: 4%;color: blue;">&nbspSalir</a-->
      <div class="b">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#padre">
          Modificar
        </button>
        <a href="../../administrador/index.php" class="btn btn-danger btnBorrar">Regresar</a>
      </div>
    </div>
   

  </div>
 <?php include("modal_admin.php"); ?>
</body>



<script src="../../js/jquery.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
<script src="js/validar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</html>