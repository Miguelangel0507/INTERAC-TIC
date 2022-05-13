<?php

require("../../../php/conexion.php");
$id =$_POST['id'];
$pre =$_POST['pre'];
$a =$_POST['a'];
$b =$_POST['b'];
$c =$_POST['c'];
$d = $_POST['d'];
$res = $_POST['res'];


$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$update = $pdo->prepare("UPDATE trivia_nivel1 SET pregunta ='$pre', respuesta1='$a', respuesta2='$b', respuesta3='$c', respuesta4='$d', respuesta_correcta ='$res' WHERE id_pregunta=$id");
$update->execute();

echo "<script type='text/javascript'>
        window.location='../trivia.php';
    </script>";
?>