<!DOCTYPE html>
<?php
session_start();
include("../../php/validacion.php") ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/8bac99961f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../../css/cargando.css">
  <link rel="stylesheet" type="text/css" href="../../css/maquinawrite.css">
  <link rel="stylesheet" href="../../css/estyle.css">
  <link rel="stylesheet" href="../trivia/style.css">
</head>

<body>
  <!--Encabezado-->
  <nav class="navbar1 navbar-expand-lg1 navbar-light1 bg-light1">
    <div class="collapse1 navbar-collapse1" id="navbarNav">
      <!--logo-->
      <p class="title_sopa pa"> <b><span style="color: white;">Palabras de la sopa de letras</span> </b></p>
      <!--checkbox-->
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <!--lista-->
      <ul class="navbar-nav1">
        <li class="nav-item1 active1">
          <a class="nav-link1" href="../../administrador/index.php"><b> Usuarios</b> <span class="sr-only1"></span></a>
        </li>
        <li class="nav-item1">
          <a class="nav-link1" href="#"><b> Configurar juego</b></a>
        </li>
        <li class="nav-item1">
          <a class="nav-link1" href="../perfil/perfil_admin.php"><b>Perfil</b></a>
        </li>
        <li class="nav-item1">
          <a class="nav-link1" href="../../php/salir.php"><b>Salir</b></a>
        </li>
      </ul>
    </div>
  </nav>

  <!--Paginacion -->
  <ul class="pagination">
    <li class="page-item">
      <div>
        <a class="page-link" href="#">Sopa de letras</a>
      </div>
    </li>
    <li class="page-item">
      <div>
        <a class="page-link" href="../trivia/trivia.php">Trivia</a>
      </div>
    </li>
    <li class="page-item">
      <div>
        <a class="page-link" href="../trivia/trivia.php" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </div>
    </li>
  </ul>

  <!--Cuerpo-->
  <div class="tabla clearfix">
    <div class="contenedor_tabla">
      <div class="table-responsive" style="align-items: center;">
        <table class="table table-bordered table-striped table-hover">
          <thead>
            <tr class="tr">
              <th scope="col">ID</th>
              <th scope="col">Municipios risaralda</th>
              <th scope="col">Editar</th>
              <th scope="col">Tecnologias TIC</th>
              <th scope="col">Editar</th>
              <th scope="col">Sitios turisticos</th>
              <th scope="col">Editar </th>
            </tr>
          </thead>
          <tbody>
            <?php
            include("consul_sopa.php");
            while ($preguntas = $query->fetch(PDO::FETCH_ASSOC)) { ?>
              <tr>
                <td><?php echo $preguntas['id_categoria']; ?></td>
                <td><?php echo $preguntas['municipios_risaralda']; ?></td>
                <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#municipio<?php echo $preguntas['id_categoria']; ?>">Actualizar</button> </td>
                <td><?php echo $preguntas['tecnologias_tic']; ?></td>
                <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tecnologia<?php echo $preguntas['id_categoria']; ?>"> Actualizar</button> </td>
                <td><?php echo $preguntas['sitios_turisticos']; ?></td>
                <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#turismo<?php echo $preguntas['id_categoria']; ?>"> Actualizar</button> </td>
              </tr>
              <?php include("muni.php"); ?>
              <?php include("turis.php"); ?>
              <?php include("tecno.php"); ?>
            <?php } ?>
        </table>
      </div>
    </div>
  </div>


</body>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>

</html>