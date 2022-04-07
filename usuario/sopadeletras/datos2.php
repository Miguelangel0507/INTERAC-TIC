<?php
session_start();
if($_POST){
        if(isset($_POST["boton1"])){
            echo "<script> alert('Boton1')</script>";
        }
        if(isset($_POST["boton2"])){
            echo "<script> alert('Boton')</script>";
        }
        if(isset($_POST["boton3"])){
            echo "<script> alert('Boton2')</script>";
        }

        $decision = $_POST["boton2"];
        $decision = $_POST["boton3"];
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
    echo $palabras;
}
?>
    