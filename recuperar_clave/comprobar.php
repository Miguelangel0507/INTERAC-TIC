<?php
if ($_POST) {
   require('../php/conexion.php');
   $codigo1 = $_POST['codigo'];
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $query = $pdo->prepare("SELECT id_datos_usuario, codigo, fecha FROM datosusuario where codigo = $codigo1");
   $query->execute();
   $nom = $query->fetch();
   if (isset($nom['codigo'])) {
      // tiempo de vida del codigo)
      date_default_timezone_set("America/Bogota");
      $fecha = $nom['fecha'];
      $atual = date("Y-m-d H:i:s");
      $segundos = strtotime($atual) - strtotime($fecha);
      $minutos = $segundos / 60;
      // echo $segundos;
      if ($minutos < 100) {
         echo $nom['id_datos_usuario'];
      } else {
         echo "v";
      }
      /**/
   } else {
      echo "m";
   }
}
