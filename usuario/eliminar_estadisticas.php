<?php
session_start();
$id = $_SESSION['id_usuario'];
if($id != "invitado"){//se valida si es usuario o invitado
    include ("../php/conexion.php");
    $query = $pdo->prepare("UPDATE puntossopa INNER JOIN puntostrivia 
    ON puntossopa.id_puntos_sopa = puntostrivia.id_puntos_trivia
    SET puntossopa.puntos_nivel1 = 0, 
    puntossopa.puntos_nivel2 = 0, 
    puntossopa.puntos_nivel3 = 0, 
    puntostrivia.puntos_nivel1 = 0,
    puntostrivia.puntos_nivel2 = 0,
    puntostrivia.puntos_nivel3 = 0
    WHERE puntossopa.id_puntos_sopa = $id");//se restablecen las estadisticas del jugador
    $query->execute();
    if($query){
        echo true;
    }else{
        echo false;
    }
}else{//jugador invitado y se restablecen las estadisticas del jugador
    $_SESSION['puntos_sopa1']  = 0;
    $_SESSION['puntos_sopa2']  = 0;
    $_SESSION['puntos_sopa3']  = 0;
    $_SESSION['puntos_trivia1']  = 0;
    $_SESSION['puntos_trivia2']  = 0;
    $_SESSION['puntos_trivia3']  = 0;
    echo true;
}


?>