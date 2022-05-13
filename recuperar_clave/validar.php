<?php

 require("../php/conexion.php");
 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //se hace la consulta a la tabla usuarios mediante el username
    $query = $pdo->prepare("SELECT id_datos_usuario FROM datosusuario where email = '$email'");
    $query->execute();
    $datos = array();
    $datos = $query->fetch();

   if($datos){
  //  header("location: ../codigo.php");
       $query = $pdo->prepare("SELECT contraseña FROM usuarios where id_username= $datos[id_datos_usuario] ");
        $query->execute();
        $pass = array();
        $pass = $query->fetch();
         
        
        $codigo = rand(1000,9999);


        $query = $pdo->prepare("UPDATE datosusuario SET codigo = $codigo  WHERE id_datos_usuario = $datos[id_datos_usuario] ");
        $query->execute();

  
        
        $para = $email;
        $titulo = "Recuperar clave";
        $micorreo = "From: tictrivia993@gmail.com";
        $mensaje = "
        <html>
        <head>

        </head>
        <body>
        <a href='http://localhost/interac-tic/recuperar_clave/codigo.php'>precione aqui para cambiar contraseña</a>
        <p>este es su codigo:.'$codigo'</p>
       </body>
        </html>> 
       ";
        
          // Para enviar un correo HTML, debe establecerse la cabecera Content-type
  $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  

      if(mail($para, $titulo, $mensaje, $micorreo,$cabeceras)){
            echo "verifica tu correo para restablecer contraseña";
            
        }else
            echo "fallo la prueba";
      }else       
         echo "gmail no registrado"; 
?>



   
