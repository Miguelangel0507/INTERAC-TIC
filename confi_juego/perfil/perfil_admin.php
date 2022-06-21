<?php
session_start();
include "../../php/validacion.php" ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil Adminstrador</title>
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../../css/cargando.css">
  <link rel="stylesheet" type="text/css" href="../../css/maquinawrite.css">
  <link rel="shortcut icon" href="https://www.risaralda.gov.co/info/gobrisaralda/web/portal/img/favicon.png">
  <link rel="stylesheet" href="../../css/estyle.css">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="../../administrador/menu.css">
  <style>
    .nav-link1 {
      text-decoration: none !important;
    }
  </style>
</head>

<body>
  <!--Encabezado-->
  <nav class="navbar1 navbar-expand-lg1 navbar-light1 bg-light1">
    <div class="collapse1 navbar-collapse1" id="navbarNav">
      <!--Logo-->
      <p class="pa"> <b><span style="color: white;">Administrador</span> </b></p>
      <!--checkbox-->
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <!--lista-->
      <ul class="navbar-nav1 seccion_pag">
        <li class="nav-item1 active1">
          <a class="nav-link1" href="../../administrador/index.php"><b>Usuarios</b> <span class="sr-only1"></span></a>
        </li>
        <li class="nav-item1">
          <a class="nav-link1" href="../sopa/index.php"><b>Configurar juego</b></a>
        </li>
        <li class="nav-item1">
          <a class="nav-link1" href="#"><b>Perfil</b></a>
        </li>
        <li class="nav-item1">
          <a class="nav-link1" href="../../php/salir.php"><b>Salir</b></a>
        </li>
      </ul>
    </div>
  </nav>

  <!--Cuerpo-->
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
      <div class="b">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#padre">Modificar</button>
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