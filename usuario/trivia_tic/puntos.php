<?php
session_start();
    require("../../php/conexion.php");
    $puntos = $_POST["puntos"];
    $id = $_SESSION['id_usuario'];
    
    if($_SESSION['desiciontrivia'] == "trivia_nivel1"){
        $nivel = 'puntos_nivel1';
    }else if($_SESSION['desiciontrivia'] == "trivia_nivel2"){
        $nivel = 'puntos_nivel2';
    }else if($_SESSION['desiciontrivia'] == "trivia_nivel3"){
        $nivel = 'puntos_nivel3';
    }
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //se hace la consulta a la tabla usuarios mediante el username
    
    $query = $pdo->prepare("SELECT $nivel FROM `puntostrivia` WHERE id_puntos_trivia = $id");
    $query->execute();  
    $puntos_nivel = $query->fetch(PDO::FETCH_ASSOC);
    if($puntos_nivel["$nivel"] < $puntos){
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //se hace la consulta a la tabla usuarios mediante el username
        $query = $pdo->prepare("UPDATE puntostrivia SET $nivel = $puntos WHERE id_puntos_trivia = $id");
        $query->execute();  
    };
    if($puntos < 80){
        echo "perdio";
    }else{
        echo "gano";
    }