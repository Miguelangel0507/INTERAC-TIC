<?php
if($_POST){
 require('../php/conexion.php');
 $codigo1 = $_POST['codigo'];

         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $query = $pdo->prepare("SELECT id_datos_usuario, codigo, fecha FROM datosusuario where codigo = $codigo1");
         $query->execute();
         $nom = $query->fetch();


         if(isset($nom['codigo'])){
         // tiempo de vida del codigo
         date_default_timezone_set("America/Bogota");
         $fecha = $nom['fecha'];
         $atual = date("y-m-d h:i:s");
         $segundos = strtotime($fecha)- strtotime($atual);
         $minutos = $segundos/60;
         if($minutos < 400){
             echo "todo bn";
              header("location: cambiar.php?id=".$nom['id_datos_usuario']."");
          //echo $nom['codigo'];
          }else{
             echo "codigo vencido";
             
          }
           /**/
         }else{
            echo "codigo erroneo";
         }
         
        }
      
?>