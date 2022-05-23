<?php 
if(!isset($_SESSION['id_usuario'])){// si el id en la session esta vacio y se envia al index
 header("Location: ../index.php");
}
?>