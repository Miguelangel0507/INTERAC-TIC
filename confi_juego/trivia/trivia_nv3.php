<!DOCTYPE html>
<?php
session_start();
include("../../php/validacion.php") ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuracion Trivia-tic Nivel 3</title>
    <script src="https://kit.fontawesome.com/8bac99961f.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="https://www.risaralda.gov.co/info/gobrisaralda/web/portal/img/favicon.png">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../css/cargando.css">
    <link rel="stylesheet" type="text/css" href="../../css/maquinawrite.css">
    <link rel="stylesheet" href="../../css/estyle.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--Encabezado-->
    <nav class="navbar1 navbar-expand-lg1 navbar-light1 bg-light1">
        <div class="collapse1 navbar-collapse1" id="navbarNav">
            <!--Logo-->
            <p class="pa"> <b><span style="color: white;">Trivia nivel 3</span> </b></p>
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

    <!--Paginacion-->
    <div class="div_pagination">
        <ul class="ul_paginacion pagination">
            <li class="page-item">
                <a class="page-link" href="trivia_nv2.php" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="../sopa/index.php">
                    <div class="a-pagination"> Sopa de letras</div>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="trivia.php">
                    <div class="a-pagination"> Trivia nivel 1</div>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="trivia_nv2.php">
                    <div class="a-pagination"> Trivia nivel 2</div>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">
                <div class="a-pagination"> Trivia nivel 3</div>
                </a>
            </li>
        </ul>
    </div>

    <!--Cuerpo-->
    <div class="tabla clearfix">
        <div class="contenedor_tabla">
            <div class="table-responsive" style="align-items: center;">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="tr">
                            <th scope="col">ID</th>
                            <th scope="col">pregunata</th>
                            <th scope="col">Respuesta, A</th>
                            <th scope="col">Respuesta, B</th>
                            <th scope="col">Respuesta, C</th>
                            <th scope="col">Respuesta, D</th>
                            <th scope="col">Respuesta correcta</th>
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("php/consul_nv3.php");
                        while ($dataCliente = $query->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                                <td><?php echo $dataCliente['id_pregunta']; ?></td>
                                <td><?php echo $dataCliente['pregunta']; ?></td>
                                <td><?php echo $dataCliente['respuesta1']; ?></td>
                                <td><?php echo $dataCliente['respuesta2']; ?></td>
                                <td><?php echo $dataCliente['respuesta3']; ?></td>
                                <td><?php echo $dataCliente['respuesta4']; ?></td>
                                <td><?php echo $dataCliente['respuesta_correcta']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nivel<?php echo $dataCliente['id_pregunta']; ?>">
                                        Modificar
                                    </button>
                                </td>
                            </tr>
                            <!--Ventana Modal para Actualizar--->
                            <?php include('php/modal_nv3.php'); ?>
                        <?php } ?>
                </table>
            </div>
        </div>
    </div>

</body>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="pasar.js"></script>

</html>