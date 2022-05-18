<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/index_usuario.css">
</head>

<body>
    <?php
    include "validacion.php";
    include "HeaderUsario.php"; ?>
    <div class="cards">
        <div class="card card1" style="width: 18rem;">
            <img src="../img/SopaLetras2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title">Sopa de letras</h2>
                <p class="card-text">¿Que nivel deseas jugar?</p>
                <form action="" method="POST" id="eleccion">
                    <input type="button" class="botones" id="botonSopa1" value="Nivel 1"><br>
                    <input type="button" class="botones" id="botonSopa2" value="Nivel 2"><br>
                    <input type="button" class="botones" id="botonSopa3" value="Nivel 3"><br>
                </form>
            </div>
        </div>
        <br>
        <div class="card card2" style="width: 18rem;">
            <img src="../img/triviaTIC.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title">Trivia Tic</h2>
                <p class="card-text">¿Que nivel deseas jugar?</p>
                <form action="" method="POST" id="eleccion">
                    <input type="button" class="botones" id="botonTrivia1" value="Nivel 1"><br>
                    <input type="button" class="botones" id="botonTrivia2" value="Nivel 2"><br>
                    <input type="button" class="botones" id="botonTrivia3" value="Nivel 3"><br>
                </form>
            </div>
        </div>
    </div>
    
    <script src="decision.js"></script>
</body>

</html>