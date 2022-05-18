<?php
session_start();
$id = $_SESSION['id_usuario'];
include ("../php/conexion.php");

$query = $pdo->prepare("UPDATE puntossopa INNER JOIN puntostrivia 
ON puntossopa.id_puntos_sopa = puntostrivia.id_puntos_trivia
SET puntossopa.puntos_nivel1 = 0, 
puntossopa.puntos_nivel2 = 0, 
puntossopa.puntos_nivel3 = 0, 
puntostrivia.puntos_nivel1 = 0,
puntostrivia.puntos_nivel2 = 0,
puntostrivia.puntos_nivel3 = 0
WHERE puntossopa.id_puntos_sopa = $id");
$query->execute();

if($query){
    echo true;
}else{
    echo false;
}


?>