<?php
session_start();
if($_POST){
        $decision = $_POST["desicion1"];
        require("/xampp/htdocs/INTERAC-TIC/php/conexion.php");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //se hace la consulta a la tabla usuarios mediante el username
        $query = $pdo->prepare("SELECT * FROM $decision");
        $query->execute();
        $palabras = array();
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            $palabras["cuestionario"][] = $row;
        }
        $_SESSION['resultado'] = json_encode($palabras);
        echo json_encode($palabras);
        //$resultado = $query->fetchAll();
        //for ($i = 0; $i < 10; $i++) {
        //    array_push($palabras, $usuario[$i][$decision]);
        //}
        
        //$_SESSION['resultado'] = $resultado;
        //$_SESSION['decision'] = $decision;
        //echo true;
}
?>