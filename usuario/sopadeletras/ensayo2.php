<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>juego sopa</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <h1>Sopa de letras</h1>
    <form action="datos2.php" method="POST" id="eleccion">
        <label>¿Que nivel deseas jugar?</label><br>
        <input type="button" id="boton1" value="Nivel 1" >
        <input type="button" id="boton2" value="Nivel 2" >
        <input type="button" id="boton3" value="Nivel 3" >
        
    </form>
    


    <!--lo nuevo-->
    <div id="contenido" class="contenido">
        <h2 align="center">Pulsa para iniciar la cuenta atrás.</h2>
        <p></p>

        <p align="center">
            <input id="mk" type="button" name="comenzar" value="Empezar la cuenta atrás." onclick="contar=1000,despegar()" /> ...
        </p>
        <label for="">puntos:</label>
        <p id="puntos">0</p>
        <h1 align="center" id="cuenta"></h1>

        <p>apurate y Juega</p>
        <p>
        <div id="puzzle"></div>
        </p>

        <div id="words"></div>
        <script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="wordfind.js"></script>
        <script type="text/javascript" src="wordfindgame.js"></script>
        
        <!--<script>
             //iniciar juego
            var gamePuzzle = wordfindgame.create(<?php //echo json_encode($_SESSION["array"]); ?>, "#puzzle", "#words");
                //cree solo un rompecabezas, sin completar los espacios en blanco e imprima en la consola
            var puzzle = wordfind.newPuzzle(words, {
                height: 18,
               width: 18,
               fillBlanks: false,
            });
            wordfind.print(puzzle);
        </script>-->
        <a href="../index.php">salir</a>
        <input type="button" value="Salir" id="salir">
        <script>
            salir.addEventListener("click", () => {
                alert("Salir script");
                document.getElementById("contenido").style.display = "none";
                validarJugador();
                })
        </script>

        <script src="validacion.js"></script>
    </div>
</body>

</html>