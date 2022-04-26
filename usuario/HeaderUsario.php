<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/header.css">
</head>

<body>
    <nav>
        <p class="logo-danicodex">INTERAC-TIC</p>
        <ul class="cont-ul">
            <a href="./index.php">
                <li>Juegos</li>
            </a>
            <li class="develop">
                Estadisticas
                <ul class="ul-second">
                    <li class="back">
                        <div class="estad_sopa">
                            <canvas id="SopaLetras" ></canvas>
                        </div>
                        <br>
                        <div class="estad_trivia">
                            <canvas id="TriviaTic" ></canvas>
                        </div>
                    </li>
                </ul>
            </li>
            <a href="./PerfilUsuario.php">
                <li>Perfil</li>
            </a>
            <a href="../index.php">
                <li>Salir</li>
            </a>
        </ul>
    </nav>
    <script src="HeaderUsuario.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
</body>

</html>