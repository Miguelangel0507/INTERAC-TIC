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
  <link rel="stylesheet" href="style_sopa.css">
</head>

<body>
  <!--Encabezado-->
  <nav class="navbar1 navbar-expand-lg1 navbar-light1 bg-light1">
    <div class="collapse1 navbar-collapse1" id="navbarNav">
      <!--logo-->
      <p class="title_sopa pa"> <b><span style="color: white;">Sopa de letras Nivel 2.</span> </b></p>
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
  <ul class="pagination pagination_juegos">
    <li class="page-item active">
      <div>
        <a class="page-link" href="#">Sopa de letras</a>
      </div>
    </li>
    <li class="page-item">
      <div>
        <a class="page-link" href="../trivia/trivia.php">Trivia</a>
      </div>
    </li>
  </ul>

  <!--Paginacion Niveles-->
  <ul class="pagination pagination_niveles">
    <li class="page-item">
      <div>
        <a class="page-link" href="index.php">Nivel 1</a>
      </div>
    </li>
    <li class="page-item active">
      <div>
        <a class="page-link" href="#">Nivel 2</a>
      </div>
    </li>
    <li class="page-item">
      <div>
        <a class="page-link" href="sopa_nv3.php">Nivel 3</a>
      </div>
    </li>
  </ul>

  <!--Cuerpo-->

  <!--Tabla nivel 2-->
  <div class="div_titulo">
    <h4 class="h4_titulo">Palabras de la sopa de letras, categoria sitios turisticos.</h4>
  </div>
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
            $cuenta = 0;
            for ($i = 1; $i <= $total_palabras; $i = $i + 4) { ?>
              <tr>
                <?php if ($cuenta < $total_palabras) { ?>
                  <td><?php echo ($nivel2[$cuenta][1]); ?></td>
                  <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#turismo<?php echo $nivel2[$cuenta][0]; ?>">Actualizar</button> </td>
                  <?php include("turis.php");
                  $cuenta++; ?>
                <?php } else { ?>
                  <td></td>
                  <td></td>
                <?php }  ?>

                <?php if ($cuenta < $total_palabras) { ?>
                  <td><?php echo ($nivel2[$cuenta][1]); ?></td>
                  <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#turismo<?php echo $nivel2[$cuenta][0]; ?>">Actualizar</button> </td>
                  <?php include("turis.php");
                  $cuenta++; ?>
                <?php } else { ?>
                  <td></td>
                  <td></td>
                <?php }  ?>

                <?php if ($cuenta < $total_palabras) { ?>
                  <td><?php echo ($nivel2[$cuenta][1]); ?></td>
                  <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#turismo<?php echo $nivel2[$cuenta][0]; ?>">Actualizar</button> </td>
                  <?php include("turis.php");
                  $cuenta++; ?>
                <?php } else { ?>
                  <td></td>
                  <td></td>
                <?php }  ?>

                <?php if ($cuenta < $total_palabras) { ?>
                  <td><?php echo ($nivel2[$cuenta][1]); ?></td>
                  <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#turismo<?php echo $nivel2[$cuenta][0]; ?>">Actualizar</button> </td>
                  <?php include("turis.php");
                  $cuenta++; ?>
                <?php } else { ?>
                  <td></td>
                  <td></td>
                <?php }  ?>
              <?php } ?>

              </tr>

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