<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>bienvenido:
        <?php echo $_SESSION['id_usuario'] ?>
    </h2>

    <br>
    <h4>Sopa de letras</h4>
    <form action="" method="POST" id="eleccion">
        <label>¿Que nivel deseas jugar?</label><br>
        <input type="button" id="boton1" value="Nivel 1" >
        <input type="button" id="boton2" value="Nivel 2" >
        <input type="button" id="boton3" value="Nivel 3" >
        
    </form>
    <script src="decision.js"></script>
</body>

</html>