<?php session_start();
include("../../php/validacion.php")?>
<!DOCTYPE html>
<html lang="es">

<head>
    <script src="https://kit.fontawesome.com/8bac99961f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" conte pregnt="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego Trivia</title>
    <link rel="stylesheet" href="../../css/quiz.css">
</head>

<body>
    <h1 id="title">Trivia TIC</h1>
    <!-- quiz-container -->
    <div id="quiz-container">
        <!-- question container -->
        <div id="instrucciones">
            <ol>
                <li>Trivia tic es un juego de preguntas, dondes se te van a dar 4 posibles respuestas, y tu debes elegir la correcta.</li>
                <li>Se te va a dar un limite de tiempo para que respondas la respuesta correcta, si no respondes te va salir un error y no se te van a dar puntos.</li>
                <li>Al final del juego para poder ganar debes de tener como minimo 80 puntos.</li>
                <div id="container_btnos">
                    <a role="button" href="../index.php">
                        <button type="submit" class="btn btn-danger btn_eliminar" ><i class="fa-solid fa-arrow-left"></i> Salir</button>
                    </a>
                    <input id="mk" type="button" class="btn btn-success" name="comenzar" value="Comenzar juego" onclick="displayQuestion2(json)" />
                </div>
            </ol>
        </div>
        <div>
            <div class="questions" id="questions">
                <div class="cabecera">
                    <div class="back">
                    <a role="button" href="../index.php">
                        <button type="submit" class="btn btn-danger btn_eliminar" ><i class="fa-solid fa-arrow-left"></i> Salir</button>
                    </a>
                        <h4 id="puntos">Puntos: 0 </h4>
                    </div>
                    <div class="tiempo">
                        <h4>Tiempo:</h4>
                        <h4 id="cuenta">000</h4>
                    </div>
                </div>
                <h2 id="question"></h2>
                <div id="container_question">
                    <div class="preguntas">
                        <div class="pregunta preg1" class="A" value="A" onclick="calcScore(A)"><b><span id="A">A</span>.<label id="option0">.</label></b></div>
                        <div class="pregunta preg2" class="B" value="B" onclick="calcScore(B)"><b><span id="B">B</span>.<label id="option1">.</label></b></div>
                    </div>
                    <div class="preguntas">
                        <div class="pregunta preg3" class="C" value="C" onclick="calcScore(C)"><b><span id="C">C</span>.<label id="option2">.</label></b></div>
                        <div class="pregunta preg4" class="D" value="D" onclick="calcScore(D)"><b><span id="D">D</span>.<label id="option3">.</label></b></div>
                    </div>
                </div>
                <h4 id="stat"></h4>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF " crossorigin="anonymous "></script>
    <script src="quiz.js"></script>

    <script>
        var json = eval(<?php echo $_SESSION["resultado"] ?>)
    </script>
</body>

</html>