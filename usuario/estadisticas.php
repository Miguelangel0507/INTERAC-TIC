<?php
session_start();
$id = $_SESSION['id_usuario'];

require("../php/conexion.php");
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //se hace la consulta a la tabla usuarios mediante el username
    $query = $pdo->prepare("SELECT puntossopa.puntos_nivel1 AS 'S1', 
    puntossopa.puntos_nivel2 AS 'S2', 
    puntossopa.puntos_nivel3 AS 'S3', 
    puntostrivia.puntos_nivel1 AS 'T1', 
    puntostrivia.puntos_nivel2 AS 'T2', 
    puntostrivia.puntos_nivel3 AS 'T3'
    FROM usuarios 
    RIGHT JOIN puntossopa ON usuarios.id_username = puntossopa.id_puntos_sopa
    RIGHT JOIN puntostrivia on usuarios.id_username = puntostrivia.id_puntos_trivia 
    where usuarios.id_username=$id");
    $query->execute();
    $estadisticas = $query->fetch(PDO::FETCH_ASSOC);
    //$row = $query->fetch(PDO::FETCH_ASSOC);
        //$estadisticas["resultado"][]= $row;
    
    //$usuario = $query->fetchAll();
    //    for ($i = 0; $i < 10; $i++) {
    //        array_push($estadisticas, $usuario[$i]);
    //    }
    echo (json_encode($estadisticas));

?>