<?php
session_start();
if($_POST){
        $decision = $_POST["desicion1"];
        require("/xampp/htdocs/INTERAC-TIC/php/conexion.php");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //se hace la consulta a la tabla usuarios mediante el username
        $query = $pdo->prepare("SELECT $decision FROM categoriasopa");
        $query->execute();
        $palabras = array();
        $usuario = $query->fetchAll();
        for ($i = 0; $i < 10; $i++) {
            array_push($palabras, $usuario[$i][$decision]);
        }
        
        $_SESSION['array'] = $palabras;
        $_SESSION['decision'] = $decision;
        echo true;
}
?>