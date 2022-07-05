<?php
session_start();
$puntos = $_POST["puntos"];
$id = $_SESSION['id_usuario'];
if($id != "invitado"){
    require("../../php/conexion.php");
    if($_SESSION['decision'] == "tecnologias_tic"){
        $nivel = 'puntos_nivel1';
        $puntaje_minimo = 60;
    }else if($_SESSION['decision'] == "sitios_turisticos"){
        $nivel = 'puntos_nivel2';
        $puntaje_minimo = 90;
    }else if($_SESSION['decision'] == "municipios_risaralda"){
        $nivel = 'puntos_nivel3';
        $puntaje_minimo = 120;
    }
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //se hace la consulta a la tabla usuarios mediante el username
    $query = $pdo->prepare("SELECT $nivel FROM `puntossopa` WHERE id_puntos_sopa = $id");
    $query->execute();  
    $puntos_nivel = $query->fetch(PDO::FETCH_ASSOC);
    if($puntos_nivel["$nivel"] < $puntos){
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //se hace la consulta a la tabla usuarios mediante el username
        $query = $pdo->prepare("UPDATE puntossopa SET $nivel = $puntos WHERE id_puntos_sopa = $id");
        $query->execute();  
    };
}else{
    if($_SESSION['decision'] == "tecnologias_tic"){
        $_SESSION['puntos_sopa1']  = $puntos;
        $puntaje_minimo = 60;
    }else if($_SESSION['decision'] == "sitios_turisticos"){
        $_SESSION['puntos_sopa2']  = $puntos;
        $puntaje_minimo = 90;
    }else if($_SESSION['decision'] == "municipios_risaralda"){
        $_SESSION['puntos_sopa3']  = $puntos;
        $puntaje_minimo = 120;
    }
}

if($puntos < $puntaje_minimo){
    echo "perdio";
}else{
    echo "gano";
}

    