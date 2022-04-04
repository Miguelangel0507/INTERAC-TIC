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
        <?php echo $_SESSION['id_usuario']?>
    </h2>

    <br>
    <a href="./sopadeletras/ensayo.php">sopa de letras</a>

</body>

</html>