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
    <link rel="stylesheet"  href="/INTERAC-TIC/usuario/sopadeletras/style.css"/>
</head>

<body>
    <h1>Sopa de letras</h1>

    
    <!--lo nuevo-->
    <h2 align="center">Pulsa para iniciar la cuenta atrás.</h2>
    <p></p>
    <!--<form action="#" name="laCuenta">-->
        <p align="center">
            <input id="mk" type="button" name="comenzar" value="Empezar la cuenta atrás." onclick="contar=1000,despegar()" /> ...
        </p>
    <!--</form>-->
    <!--<form action="" >-->
        <label for="">puntos:</label>
        <p id="puntos">0</p>
    <!--</form>  -->      
    <h1 align="center" id="cuenta"></h1>

    <p>apurate y Juega</p>
    
    <div id="words"></div>
    <p>

        <div id="puzzle"></div>

    </p>
    <script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="wordfind.js"></script>
    <script type="text/javascript" src="wordfindgame.js"></script>
    <script>
        //var words = ["calor", "camilo", "jorge"];

        // iniciar juego
        var gamePuzzle = wordfindgame.create(<?php echo json_encode($_SESSION['array']);?>, "#puzzle", "#words");

        // cree solo un rompecabezas, sin completar los espacios en blanco e imprima en la consola
        var puzzle = wordfind.newPuzzle(words, {
            height: 18,
            width: 18,
            fillBlanks: false,
        });
        wordfind.print(puzzle);
    </script>
</body>

</html>