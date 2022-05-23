<?php
session_start();
$id = $_SESSION['id_usuario'];
if($id != "invitado"){//se valida si es usuario o invitado
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
    where usuarios.id_username=$id");//se traen las estadisticas del jugador
    $query->execute();
    $estadisticas = $query->fetch(PDO::FETCH_ASSOC);
    echo (json_encode($estadisticas));//se devuelven con JSON
}else{//usuario invitado
    $estadisticas = [
        "S1" => $_SESSION['puntos_sopa1'],
        "S2" => $_SESSION['puntos_sopa2'],
        "S3" => $_SESSION['puntos_sopa3'],
        "T1" => $_SESSION['puntos_trivia1'],
        "T2" => $_SESSION['puntos_trivia2'],
        "T3" => $_SESSION['puntos_trivia3']
    ];//agregan las variables del jugador invitado a un array para devolver como JSON
    echo (json_encode($estadisticas));

}

?>