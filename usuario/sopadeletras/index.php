<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Juego Sopa</title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../css/style_sopa.css" />
</head>

<body>
    <div class="padre">
        <div class="row">
            <div class="encabezado">
                <div class="title">
                    <h1>Sopa de letras de <?php echo $_SESSION['decision']?></h1>
                </div>
                <!--lo nuevo-->
                <div class="cont">
                    <div class="tiempo">
                        <h2>Tiempo:</h2>
                        <h2 align="center" id="cuenta">000</h2>
                    </div>
                    <div>
                    <input id="mk" type="button" name="comenzar" value="Comenzar juego" onclick="contar=60,despegar()" />
                    </div>
                </div>
            </div>
            <!--<label for="">puntos:</label>
            <p id="puntos">000</p>-->

            <div class="contenedor_central">
                <div>
                <div id="puzzle"></div>
                </div>
                
                <div id="cont_words">
                    <div class="cont_puntos">
                    <label for="">Puntos:</label>
                    <p id="puntos">000</p>
                    </div>
                    <div id="words"></div>
                </div>
                
            </div>
            <script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            <script type="text/javascript" src="wordfind.js"></script>
            <script type="text/javascript" src="wordfindgame.js"></script>
            <script>
                //var words = ["calor", "camilo", "jorge"];

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
        </div>
    </div>
</body>

</html>