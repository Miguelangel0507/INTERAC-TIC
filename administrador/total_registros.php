<?php
require('../php/conexion.php');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(empty($_GET['tipo_usuario'])){}else{
    $tipo_usuario = $_GET['tipo_usuario'];
    if($tipo_usuario == "user"){
        $tipo_user = 1;
    }else if($tipo_usuario == "admin"){
        $tipo_user = 2;
    }else{
        $tipo_user = "todos";
    }
}
if(empty($_GET['busqueda'])){}else{
    $busqueda = $_GET['busqueda'];
}

if (empty($_GET['busqueda'])) {
    if (empty($_GET['tipo_usuario'])) {
        $query = $pdo->prepare('SELECT COUNT(*) AS total_usuarios from datosusuario');
        $query->execute();
        $total_datos = $query->fetch(PDO::FETCH_ASSOC);
        $total_registro = $total_datos['total_usuarios'];
        
    } else {
        #p0-u1;
        if($tipo_user == "todos"){
            $query = $pdo->prepare('SELECT COUNT(*) AS total_usuarios from datosusuario');
        }else{
        $query = $pdo->prepare('SELECT COUNT(*) AS total_usuarios FROM usuarios WHERE rol_usuario = '. $tipo_user.'');
        }
        $query->execute();
        $total_datos = $query->fetch(PDO::FETCH_ASSOC);
        $total_registro = $total_datos['total_usuarios'];
    }
} else {
    if (empty($_GET['tipo_usuario'])) {
        //p1-u0;
        $query = $pdo->prepare('SELECT COUNT(*) AS total_usuarios from datosusuario where nombre like "%' . $busqueda . '%" OR datosusuario.email LIKE "%' . $busqueda . '%"');
        $query->execute();
        $total_datos = $query->fetch(PDO::FETCH_ASSOC);
        $total_registro = $total_datos['total_usuarios'];
    } else {
        //p1 - u1;
        if($tipo_user == "todos"){
            $query = $pdo->prepare('SELECT COUNT(*) AS total_usuarios from datosusuario where nombre like "%' . $busqueda . '%" OR datosusuario.email LIKE "%' . $busqueda . '%"');
        }else{
            $query = $pdo->prepare('SELECT count(*) AS total_usuarios FROM usuarios WHERE usuarios.rol_usuario = '. $tipo_user.' AND usuarios.id_username IN (SELECT datosusuario.id_datos_usuario FROM datosusuario WHERE datosusuario.nombre LIKE "%' . $busqueda . '%" OR datosusuario.email LIKE "%' . $busqueda . '%")');
        }
        $query->execute();
        $total_datos = $query->fetch(PDO::FETCH_ASSOC);
        $total_registro = $total_datos['total_usuarios'];
    }
}



/*
if($tipo_usuario == "user"){
    $tipo_user = 1;
}else if($tipo_usuario == "admin"){
    $tipo_user = 2;
}else{
    $tipo_user = "todos";
}/*


if (empty($_GET['busqueda'])  || $tipo_user = "todos") {
    $query = $pdo->prepare('SELECT COUNT(*) AS total_usuarios from datosusuario');
    $query->execute();
    $total_datos = $query->fetch(PDO::FETCH_ASSOC);
    $total_registro = $total_datos['total_usuarios'];
} else if(empty($_GET['tipo_usuario'])) {
    $busqueda = $_GET['busqueda'];
    $query = $pdo->prepare('SELECT COUNT(*) AS total_usuarios from datosusuario where nombre like "%' . $busqueda . '%" OR datosusuario.email LIKE "%' . $busqueda . '%"');
    $query->execute();
    $total_datos = $query->fetch(PDO::FETCH_ASSOC);
    $total_registro = $total_datos['total_usuarios'];
}else{

}

if(empty($_GET['tipo_usuario'])){
    echo $_GET['tipo_usuario'];
}else{
    echo $_GET['tipo_usuario'];
}



1-                                                              busqueda en General  YAA
2-                                                              busqueda con palabra especificacion
3- busqueda con palabra especifica y usuario especificacion
4- busqueda usuario especifico
*/