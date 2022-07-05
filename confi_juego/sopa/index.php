<!DOCTYPE html>
<?php
session_start();
include("../../php/validacion.php") ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Configuracion Sopa de letras</title>
  <script src="https://kit.fontawesome.com/8bac99961f.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="https://www.risaralda.gov.co/info/gobrisaralda/web/portal/img/favicon.png">
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

  <!--Tabla Nivel 1-->
  <h4 class="h4_nivelsopa">Palabras sopa de letras nivel 1 (Tecnologias Tic).</h4>
  <div class="tabla clearfix">
    <div class="contenedor_tabla">
      <div class="table-responsive" style="align-items: center;">
        <table class="table table-bordered table-striped table-hover">
          <thead>
            <tr class="tr">
              <th scope="col">Palabra</th>
              <th scope="col">Editar</th>
              <th scope="col">Palabra</th>
              <th scope="col">Editar</th>
              <th scope="col">Palabra</th>
              <th scope="col">Editar</th>
              <th scope="col">Palabra</th>
              <th scope="col">Editar</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include("php/consul_sopan1.php");
            $cuenta = 0;
            for ($i = 1; $i <= 8; $i = $i + 4) { ?>
              <tr>
                <td><?php echo ($nivel1[$cuenta][1]); ?></td>
                <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tecnologia<?php echo $nivel1[$cuenta][0];?>">Actualizar</button> </td>
                <?php include("tecno.php"); $cuenta++;  ?>
                <td><?php echo ($nivel1[$cuenta][1]); ?></td>
                <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tecnologia<?php echo $nivel1[$cuenta][0];?>">Actualizar</button> </td>
                <?php include("tecno.php"); $cuenta++;  ?>
                <td><?php echo ($nivel1[$cuenta][1]); ?></td>
                <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tecnologia<?php echo $nivel1[$cuenta][0];?>">Actualizar</button> </td>
                <?php include("tecno.php"); $cuenta++;  ?>
                <td><?php echo ($nivel1[$cuenta][1]); ?></td>
                <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tecnologia<?php echo $nivel1[$cuenta][0];?>">Actualizar</button> </td>
                <?php include("tecno.php"); $cuenta++;  ?>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <hr class="hr_tablasopa">

  <!--Tabla nivel 2-->
  <h4 class="h4_nivelsopa">Palabras sopa de letras nivel 2 (Sitios turisticos).</h4>
  <div class="tabla clearfix">
    <div class="contenedor_tabla">
      <div class="table-responsive" style="align-items: center;">
        <table class="table table-bordered table-striped table-hover">
          <thead>
            <tr class="tr">
              <th scope="col">Palabra</th>
              <th scope="col">Editar</th>
              <th scope="col">Palabra</th>
              <th scope="col">Editar</th>
              <th scope="col">Palabra</th>
              <th scope="col">Editar</th>
              <th scope="col">Palabra</th>
              <th scope="col">Editar</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include("php/consul_sopan2.php");
            $cuenta = 0 ;
            for ($i = 1; $i <= 11; $i = $i + 4) { ?>
              <tr>
                <td><?php echo ($nivel2[$cuenta][1]); ?></td>
                <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#turismo<?php echo $nivel2[$cuenta][0]; ?>">Actualizar</button> </td>
                <?php include("turis.php"); $cuenta++;?>
                <td><?php echo ($nivel2[$cuenta][1]); ?></td>
                <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#turismo<?php echo $nivel2[$cuenta][0]; ?>">Actualizar</button> </td>
                <?php include("turis.php"); $cuenta++;?>
                <td><?php echo ($nivel2[$cuenta][1]); ?></td>
                <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#turismo<?php echo $nivel2[$cuenta][0]; ?>">Actualizar</button> </td>
                <?php include("turis.php"); $cuenta++;?>
                <?php
                if($cuenta == 11) { ?>
                  <td></td>
                  <td></td>
          <?php } else {?>
                  <td><?php echo ($nivel2[$cuenta][1]); ?></td>
                  <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#turismo<?php echo $nivel2[$cuenta][0]; ?>">Actualizar</button> </td>
                  <?php include("turis.php"); $cuenta++;?>
          <?php } ?>
                
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <hr class="hr_tablasopa">

  <!--Tabla Nivel 3-->
  <h4 class="h4_nivelsopa">Palabras sopa de letras nivel 3 (Municipios de Risaralda).</h4>
  <div class="tabla clearfix">
    <div class="contenedor_tabla">
      <div class="table-responsive" style="align-items: center;">
        <table class="table table-bordered table-striped table-hover">
          <thead>
            <tr class="tr">
              <th scope="col">Palabra</th>
              <th scope="col">Editar</th>
              <th scope="col">Palabra</th>
              <th scope="col">Editar</th>
              <th scope="col">Palabra</th>
              <th scope="col">Editar</th>
              <th scope="col">Palabra</th>
              <th scope="col">Editar</th>
            </tr>
          </thead>
          <tbody>
          <?php
            include("php/consul_sopan3.php");
            $cuenta = 0 ;
            for ($i = 1; $i <= 14; $i = $i + 4) { ?>
              <tr>
                <td><?php echo ($nivel3[$cuenta][1]); ?></td>
                <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#municipio<?php echo $nivel3[$cuenta][0]; ?>">Actualizar</button> </td>
                <?php include("muni.php"); $cuenta++;?>
                <td><?php echo ($nivel3[$cuenta][1]); ?></td>
                <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#municipio<?php echo $nivel3[$cuenta][0]; ?>">Actualizar</button> </td>
                <?php include("muni.php"); $cuenta++;?>
                <?php
                if($cuenta >= 14) { ?>
                  <td></td>
                  <td></td>
          <?php } else {?>
                  <td><?php echo ($nivel3[$cuenta][1]); ?></td>
                  <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#municipio<?php echo $nivel3[$cuenta][0]; ?>">Actualizar</button> </td>
                  <?php include("muni.php"); $cuenta++;?>
          <?php } ?>
                <?php
                if($cuenta >= 14) { ?>
                  <td></td>
                  <td></td>
          <?php } else {?>
                  <td><?php echo ($nivel3[$cuenta][1]); ?></td>
                  <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#municipio<?php echo $nivel3[$cuenta][0]; ?>">Actualizar</button> </td>
                  <?php include("muni.php"); $cuenta++;?>
          <?php } ?>
                
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>

</html>