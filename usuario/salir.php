<?php
session_start();
if($id != "invitado"){//se valida si el usuario esta y lo envia al index o a la pagina de registro
    session_destroy();
    header("Location: ../index.php");
}else{
    session_destroy();
    header("Location: ../registro.html");
}
?>