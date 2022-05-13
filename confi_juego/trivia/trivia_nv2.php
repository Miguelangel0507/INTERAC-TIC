<!DOCTYPE html>
<?php
session_start();
include("../validacion.php") ?>
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
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar1 navbar-expand-lg1 navbar-light1 bg-light1">

        <div class="collapse1 navbar-collapse1" id="navbarNav">
            <p class="pa"> <b><span style="color: white;">Preguntas trivia nivel 2</span> </b></p>
            <ul class="navbar-nav1">

                <li class="nav-item1 active1">
                    <a class="nav-link1" href="../../administrador/index.php"><b> Home</b> <span class="sr-only1"></span></a>
                </li>

                <li class="nav-item1">
                    <a class="nav-link1" href="../perfil/perfil_admin.php"><b>Perfil</b></a>
                </li>
                <li class="nav-item1 active1">
                    <a class="nav-link1" href="../salir.php"><b> Salir</b> <span class="sr-only1"></span></a>
                </li>

            </ul>
        </div>
    </nav>


    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-sm-7">
                        <div class="row">
                            <div class="col-md-12 p">
                                <div class="table-responsive" style="align-items: center;">
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr class="tr">
                                                <th scope="col">ID</th>
                                                <th scope="col">pregunata</th>
                                                <th scope="col">Respuesta A</th>
                                                <th scope="col">Respuesta B</th>
                                                <th scope="col">Respuesta C</th>
                                                <th scope="col">Respuesta D</th>
                                                <th scope="col">Respuesta correcta</th>
                                                <th scope="col">Editar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include("php/consul_nv2.php");
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
                                                <?php include('php/modal_nv2.php'); ?>




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
    <nav aria-label="Page navigation example " style="padding-left: 635px;">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="./trivia.php" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="trivia.php">1</a></li>
            <li class="page-item"><a class="page-link" href="../trivia/trivia.php">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="trivia_nv3.php">4</a></li>
            <li class="page-item">
                <a class="page-link" href="trivia_nv3.php" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>

</body>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="pasar.js"></script>

</html>