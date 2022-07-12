<?php
require("../php/conexion.php");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//se hace la consulta a la tabla usuarios mediante el username
$query = $pdo->prepare("SELECT id_datos_usuario FROM datosusuario where email = '$email'");
$query->execute();
$datos = array();
$datos = $query->fetch();

if ($datos) {
    $codigo = rand(1000, 9999);
   $men1 = '<!DOCTYPE html>
   <html>
     <head>
       <meta charset="UTF-8" />
       <meta http-equiv="X-UA-Compatible" content="IE=edge" />
       <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       <link rel="stylesheet" href="mensaje.css" />
     </head>';
     $men2 = " <body>
        
     <div class='link'>
         <h1 class='tittlo' style='text-align: center'>Reuperar Clave</h1>
       <a
         href='http://localhost/interac-tic/recuperar_clave/codigo.php'> CLick aqui para cambiar contraseña </a>
       <p>este es su codigo: .'$codigo'</p>
     </div>
   </body>
 </html>";
    $para = $email;
    $titulo = "Recuperar clave";
    $micorreo = "From: tictrivia993@gmail.com";
    $mensaje = ".$men1+ .$men2";
    

    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    if (mail($para, $titulo, $mensaje, $micorreo, $cabeceras)) {
        echo "Verifica tu correo para restablecer contraseña";
        $query = $pdo->prepare("UPDATE datosusuario SET codigo = $codigo  WHERE id_datos_usuario = $datos[id_datos_usuario] ");
        $query->execute();
    } else
        echo "Fallo la prueba";
} else
    echo "Gmail no registrado";