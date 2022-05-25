<?php
session_start();
if($_POST){
        $decision = $_POST["desicion1"];//se recupera la decision (nivel) que tomo el jugador
        require("../../php/conexion.php");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //se hace la consulta a la tabla usuarios mediante el username
        $query = $pdo->prepare("SELECT $decision FROM categoriasopa");
        $query->execute();
        $palabras = array();
        $usuario = $query->fetchAll();
        for ($i = 0; $i < 10; $i++) {
            array_push($palabras, $usuario[$i][$decision]);
        }
        $_SESSION['array'] = $palabras;//las palabras se guardan en un array en la session 
        $_SESSION['decision'] = $decision;//se crea una varibale en la sesion para llevar la desicion de juego que tomo
        echo true;
}
?>