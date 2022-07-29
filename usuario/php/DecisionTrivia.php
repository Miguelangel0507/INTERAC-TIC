<?php
session_start();
if($_POST){
    $decision = $_POST["desicion1"];//se trae la desicion del usuario 
    require("../../php/conexion.php");
    $x = 0;
    $total[$x] =  rand(1, 15);
    for ($x = 1; $x < 10; $x++) {
        $total[$x] = rand(1, 15);
        for ($j = 0; $j < $x; $j++) {
            if ($total[$x] == $total[$j]) {
                $x--;
            }
        }
    };

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //se hace la consulta a la tabla usuarios mediante el username
    $query = $pdo->prepare("SELECT * FROM $decision");//se hace la consulta a la base de datos y se traen los preguntas con las respuestas
    $query->execute();
    $palabras = array();
    while($row = $query->fetch(PDO::FETCH_ASSOC)){
        $palabras["cuestionario"][] = $row;
    }
    $palabras2 = array();
    for($z = 0; $z < 10; $z++){
        $palabras2["cuestionario"][$z] = $palabras["cuestionario"][$total[$z]];
    }
    print_r($palabras2);
    $_SESSION['desiciontrivia'] = $decision;//se guarda la desicion del usuario        
    $_SESSION['resultado'] = json_encode($palabras2);//se guardan en una variable de la session como JSON
}