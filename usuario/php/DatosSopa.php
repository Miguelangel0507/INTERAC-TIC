<?php
session_start();
if($_POST){
        $decision = $_POST["desicion1"];//se recupera la decision (nivel) que tomo el jugador
        if($decision == "tecnologias_tic"){
            $nivel = "sopa_nivel1";
            $total_palabras = 8;
        }else if($decision == "sitios_turisticos"){
            $nivel = "sopa_nivel2";
            $total_palabras = 11;
        }else {
            $nivel = "sopa_nivel3";
            $total_palabras = 14;
        }
        require("../../php/conexion.php");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //se hace la consulta a la tabla usuarios mediante el username
        $query = $pdo->prepare("SELECT palabra FROM $nivel");
        $query->execute();
        $palabras = array();
        $usuario = $query->fetchAll();
        for ($i = 0; $i < $total_palabras; $i++) {
            array_push($palabras, $usuario[$i][0]);
        }
        $_SESSION['array'] = $palabras;//las palabras se guardan en un array en la session 
        $_SESSION['decision'] = $decision;//se crea una varibale en la sesion para llevar la desicion de juego que tomo
        echo true;
}
