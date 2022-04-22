<?php session_start() ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <script src="https://kit.fontawesome.com/8bac99961f.js" crossorigin="anonymous"></script>
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
        <div class="questions">
            <div class="cabecera">
                <div class="back">
                    <a role="button" class="atras" href="../index.php"><i class="fa-solid fa-arrow-left"></i>Salir</a>
                    
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="quiz.js"></script>
    <script>
        var json = eval(<?php echo $_SESSION["resultado"] ?>)
        displayQuestion2(json)
    </script>
</body>

</html>