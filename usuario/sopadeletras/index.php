<?php
session_start();
include("../../php/validacion.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Juego Sopa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../css/style_sopa.css" />
    <link rel="shortcut icon" href="https://www.risaralda.gov.co/info/gobrisaralda/web/portal/img/favicon.png">
</head>


<body>
    <div class="padre">
        <div class="row">
            <div class="encabezado">
                <div class="title">
                    <h1>Sopa de letras de <?php echo $_SESSION['decision'] ?></h1>
                    <input type="hidden" id="deci" value="<?php echo $_SESSION['decision']?>">
                </div>
                <div class="cont">
                    <div class="tiempo">
                        <h2>Tiempo:</h2>
                        <h2 align="center" id="cuenta">000</h2>
                    </div>
                    <div id="salir">
                        <a href="../index.php"><input type="button" class="btn btn-danger" value="Salir"></a>
                    </div>
                </div>
            </div>
            <div class="contenedor_central">
                <div id="instrucciones">
                    <h2>Instrucciones del juego</h2> 
                    <ol id="lista_instrucciones">
                        <li>En la parte derecha de la pagina estan ubicadas las palabras que debes encontrar en la sopa de letras.</li>
                        <li>Al encontrar una de las palabras debes dar click en la letra inicial de la palabra y debes llevar el cursor hasta la ultima letra.</li>
                        <li>Cada palabra encontrada te da 10 puntos, el minimo de puntos requeridos para ganar esta prueba es de <b><?php echo $_SESSION['minimo_puntaje'] ?></b> puntos.</li>
                        <li>Si el tiempo llega a cero y no has conseguido el puntaje minimo para ganar la prueba, debereas repetir el nivel</li>
                        <b>¡Ya estas listo para comenzar a jugar!</b>
                    </ol>
                    <div id="comenzar">
                        <input id="btn_empezar" class="btn btn-success" type="button" name="comenzar" id="comenzar" value="Comenzar juego" onclick="despegar()" />
                    </div>
                </div>
                <div id="puzzle"></div>
            </div>
            <div id="cont_words">
                <div class="cont_puntos">
                    <b for="">Puntos:</b>
                    <b id="puntos">000</b>
                </div>
                <div id="words"></div>
            </div>
        </div>
        <script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script type="text/javascript" src="wordfind.js"></script>
        <script type="text/javascript" src="wordfindgame.js"></script>
        <script>
            // iniciar juego
            var gamePuzzle = wordfindgame.create(<?php echo json_encode($_SESSION['array']); ?>, "#puzzle", "#words");

            // cree solo un rompecabezas, sin completar los espacios en blanco e imprima en la consola
            var puzzle = wordfind.newPuzzle(words, {
                height: 18,
                width: 18,
                fillBlanks: false,
            });
            wordfind.print(puzzle);
        </script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF " crossorigin="anonymous "></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="wordfind.js"></script>
    </div>
    </div>
</body>

</html>