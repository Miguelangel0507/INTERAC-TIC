<?php
if(isset($_POST)){
    session_start();
    $username = $_POST['username'];
    $contraseña = $_POST['contraseña'];
    require("conexion.php");
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->prepare("SELECT * FROM usuarios WHERE username='$username'");
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    echo $usuario["contraseña"];
    echo "<br>";
    echo $contraseña;
    echo "<br>";
    $passwordHas = $usuario["contraseña"];
    echo $passwordHas;
    echo "<br>";
    if(password_verify( $contraseña, $passwordHas)){
        echo "entro";
    }

    
    //$resultado= password_verify( $contraseña, $usuario["contraseña"] );
    //echo'<script type="text/javascript">
      //  alert("'.$resultado.'");
        //</script>';
    

    //$query= $pdo->prepare("SELECT * FROM usuarios WHERE username='$username' AND contraseña='$contraseña'");
    //$busqueda = $query->FETCH(PDO::FETCH_ASSOC);
    //echo'<script type="text/javascript">
        //alert("'.$usuario["username"]. $usuario["contraseña"].'");
        //</script>';

    //$query_login=$conexion->query("SELECT * FROM usuarios WHERE username='$username' AND contraseña='$contraseña'");
    
    /*if(password_verify($contraseña, $usuario["contraseña"])){
        if($usuario["estado"] == 1 ){
            if($usuario["rol_usuario"]  == 1){
                header("location: usuario/usuario.html");
            }else{
                header("location: administrador/administrador.html");
            }
        }else{
            header("location: index.html");
        }
    }else{
        header("location: index.html");
    } */ 

    //$datos_usuario =  $query_login->fetch_array(MYSQLI_BOTH);
      //  if($datos_usuario['estado'] == 1 && $datos_usuario['rol_usuario'] == 1){
        //    header("location: usuario.php");
        //}

    //}else{
        //header("location: index.html");
        //echo '<script> alert("usuario/contraseña incorrecta"</script>)';
    //}

    //if($usuario){
      //  if($usuario["estados"] == 1 ){
        //    if($usuario["rol_usuario"]  == 1){
          //      header("location: usuario/usuario.html");
            //}else{
              //  header("location: administrador/administrador.html");
            //}
        //}else{
            //header("location: index.html");
        //}       
    //}else{
        //header("location: index.html");
    //}
    
}




?>