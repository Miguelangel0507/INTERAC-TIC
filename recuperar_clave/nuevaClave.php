<?php
echo true;
 require('../php/conexion.php');
 $id= $_POST['id_usuario'];
 //$fecha = $_POST['id_fecha'];
 $pass = $_POST['password2'];
 $contra_fuerte = password_hash($pass,  PASSWORD_BCRYPT,["COST"=>11]);
 
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $query = $pdo->prepare("UPDATE usuarios SET contraseña = '$contra_fuerte' WHERE id_username = $id");

 $query->execute();

 if($query){
    echo true;
}else{
    echo false;
}


/*echo "<script type='text/javascript'>
        window.location='../index.php';
    </script>";
*/
?> 
