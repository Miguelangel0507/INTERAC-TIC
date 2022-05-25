<?php
session_start();
if($_POST){
        $decision = $_POST["desicion1"];//se trae la desicion del usuario 
        require("../../php/conexion.php");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //se hace la consulta a la tabla usuarios mediante el username
        $query = $pdo->prepare("SELECT * FROM $decision");//se hace la consulta a la base de datos y se traen los preguntas con las respuestas
        $query->execute();
        $palabras = array();
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            $palabras["cuestionario"][] = $row;
        }
        $_SESSION['resultado'] = json_encode($palabras);//se guardan en una variable de la session como JSON
        $_SESSION['desiciontrivia'] = $decision;//se guarda la desicion del usuario 
        echo json_encode($palabras);
}
?>