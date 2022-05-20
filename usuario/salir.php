<?php

session_start();
if($id != "invitado"){
    session_destroy();
    header("Location: ../index.php");
}else{
    session_destroy();
    header("Location: ../registro.html");
}
?>