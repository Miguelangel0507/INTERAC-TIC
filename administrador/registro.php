<?php
require('../php/conexion.php');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (empty($_GET['tipo_usuario'])) {
} else {
    $tipo_usuario = $_GET['tipo_usuario'];
    if ($tipo_usuario == "user") {
        $tipo_user = 1;
    } else if ($tipo_usuario == "admin") {
        $tipo_user = 2;
    } else {
        $tipo_user = "todos";
    }
}
if (empty($_GET['busqueda'])) {
} else {
    $busqueda = $_GET['busqueda'];
}

if (empty($_GET['busqueda'])) {
    if (empty($_GET['tipo_usuario'])) {
        $query = $pdo->prepare('SELECT id_datos_usuario, nombre, email, username, estado, rol_usuario, puntossopa.puntos_nivel1 AS "s1", puntossopa.puntos_nivel2 AS "s2", puntossopa.puntos_nivel3 "s3", puntostrivia.puntos_nivel1 "t1",puntostrivia.puntos_nivel2 as"t2",puntostrivia.puntos_nivel3 as"t3" FROM datosusuario 
            INNER JOIN usuarios On datosusuario.id_datos_usuario=usuarios.id_username
            LEFT JOIN puntossopa on datosusuario.id_datos_usuario=puntossopa.id_puntos_sopa
            RIGHT JOIN puntostrivia on datosusuario.id_datos_usuario=puntostrivia.id_puntos_trivia WHERE datosusuario.id_datos_usuario
            ORDER BY datosusuario.id_datos_usuario ASC LIMIT ' . $desde . ',' . $por_pagina . ' ');
    } else {
        #p0-u1;
        if ($tipo_user == "todos") {
            $query = $pdo->prepare('SELECT id_datos_usuario, nombre, email, username, estado, rol_usuario, puntossopa.puntos_nivel1 AS "s1", puntossopa.puntos_nivel2 AS "s2", puntossopa.puntos_nivel3 "s3", puntostrivia.puntos_nivel1 "t1",puntostrivia.puntos_nivel2 as"t2",puntostrivia.puntos_nivel3 as"t3" FROM datosusuario 
                INNER JOIN usuarios On datosusuario.id_datos_usuario=usuarios.id_username
                LEFT JOIN puntossopa on datosusuario.id_datos_usuario=puntossopa.id_puntos_sopa
                RIGHT JOIN puntostrivia on datosusuario.id_datos_usuario=puntostrivia.id_puntos_trivia WHERE datosusuario.id_datos_usuario
                ORDER BY datosusuario.id_datos_usuario ASC LIMIT ' . $desde . ',' . $por_pagina . ' ');
        } else {
            $query = $pdo->prepare('SELECT id_datos_usuario, nombre, email, username, estado, rol_usuario, puntossopa.puntos_nivel1 AS "s1", 
                puntossopa.puntos_nivel2 AS "s2", puntossopa.puntos_nivel3 "s3", puntostrivia.puntos_nivel1 "t1",puntostrivia.puntos_nivel2 as"t2", 
                puntostrivia.puntos_nivel3 as"t3" FROM datosusuario INNER JOIN usuarios On datosusuario.id_datos_usuario=usuarios.id_username LEFT JOIN 
                puntossopa on datosusuario.id_datos_usuario=puntossopa.id_puntos_sopa RIGHT JOIN puntostrivia on 
                datosusuario.id_datos_usuario=puntostrivia.id_puntos_trivia WHERE usuarios.rol_usuario = ' . $tipo_user . ' AND datosusuario.id_datos_usuario 
                ORDER BY datosusuario.id_datos_usuario ASC LIMIT  ' . $desde . ',' . $por_pagina . ' ');
        }
    }
} else {
    if (empty($_GET['tipo_usuario'])) {
        //p1-u0;
        $query = $pdo->prepare('SELECT id_datos_usuario, nombre, email, username, estado, rol_usuario, puntossopa.puntos_nivel1 AS "s1", 
            puntossopa.puntos_nivel2 AS "s2", puntossopa.puntos_nivel3 "s3", puntostrivia.puntos_nivel1 "t1",puntostrivia.puntos_nivel2 as "t2",
            puntostrivia.puntos_nivel3 as"t3" FROM datosusuario 
            INNER JOIN usuarios On datosusuario.id_datos_usuario=usuarios.id_username
            LEFT JOIN puntossopa on datosusuario.id_datos_usuario=puntossopa.id_puntos_sopa
            RIGHT JOIN puntostrivia on datosusuario.id_datos_usuario=puntostrivia.id_puntos_trivia 
            WHERE datosusuario.nombre LIKE "%' . $busqueda . '%" OR datosusuario.email LIKE "%' . $busqueda . '%"  ORDER BY datosusuario.id_datos_usuario ASC LIMIT ' . $desde . ',' . $por_pagina . ' ');
    } else {
        //p1 - u1;
        if($tipo_user == "todos"){
            $query = $pdo->prepare('SELECT id_datos_usuario, nombre, email, username, estado, rol_usuario, puntossopa.puntos_nivel1 AS "s1", 
                puntossopa.puntos_nivel2 AS "s2", puntossopa.puntos_nivel3 "s3", puntostrivia.puntos_nivel1 "t1",puntostrivia.puntos_nivel2 as "t2", 
                puntostrivia.puntos_nivel3 as"t3" FROM datosusuario INNER JOIN usuarios On datosusuario.id_datos_usuario=usuarios.id_username LEFT JOIN
                puntossopa on datosusuario.id_datos_usuario=puntossopa.id_puntos_sopa RIGHT JOIN puntostrivia on
                datosusuario.id_datos_usuario=puntostrivia.id_puntos_trivia WHERE usuarios.id_username IN 
                (SELECT datosusuario.id_datos_usuario FROM datosusuario WHERE datosusuario.nombre LIKE "%' . $busqueda . '%" OR datosusuario.email LIKE "%' . $busqueda . '%")');
        }else{
            $query = $pdo->prepare('SELECT id_datos_usuario, nombre, email, username, estado, rol_usuario, puntossopa.puntos_nivel1 AS "s1", 
                puntossopa.puntos_nivel2 AS "s2", puntossopa.puntos_nivel3 "s3", puntostrivia.puntos_nivel1 "t1",puntostrivia.puntos_nivel2 as "t2", 
                puntostrivia.puntos_nivel3 as"t3" FROM datosusuario INNER JOIN usuarios On datosusuario.id_datos_usuario=usuarios.id_username LEFT JOIN
                puntossopa on datosusuario.id_datos_usuario=puntossopa.id_puntos_sopa RIGHT JOIN puntostrivia on
                datosusuario.id_datos_usuario=puntostrivia.id_puntos_trivia WHERE usuarios.rol_usuario = ' . $tipo_user . ' AND usuarios.id_username IN 
                (SELECT datosusuario.id_datos_usuario FROM datosusuario WHERE datosusuario.nombre LIKE "%' . $busqueda . '%" OR datosusuario.email LIKE "%' . $busqueda . '%")');
        }
    }
}

$query->execute();
$cantidad = array();

/*if (empty($_GET['busqueda'])) {
    $query = $pdo->prepare('SELECT id_datos_usuario, nombre, email, username, estado, rol_usuario, puntossopa.puntos_nivel1 AS "s1", puntossopa.puntos_nivel2 AS "s2", puntossopa.puntos_nivel3 "s3", puntostrivia.puntos_nivel1 "t1",puntostrivia.puntos_nivel2 as"t2",puntostrivia.puntos_nivel3 as"t3" FROM datosusuario 
    INNER JOIN usuarios On datosusuario.id_datos_usuario=usuarios.id_username
    LEFT JOIN puntossopa on datosusuario.id_datos_usuario=puntossopa.id_puntos_sopa
    RIGHT JOIN puntostrivia on datosusuario.id_datos_usuario=puntostrivia.id_puntos_trivia WHERE datosusuario.id_datos_usuario
    ORDER BY datosusuario.id_datos_usuario ASC LIMIT ' . $desde . ',' . $por_pagina . ' ');
} else {
    $query = $pdo->prepare('SELECT id_datos_usuario, nombre, email, username, estado, rol_usuario, puntossopa.puntos_nivel1 AS "s1", 
    puntossopa.puntos_nivel2 AS "s2", puntossopa.puntos_nivel3 "s3", puntostrivia.puntos_nivel1 "t1",puntostrivia.puntos_nivel2 as "t2",
    puntostrivia.puntos_nivel3 as"t3" FROM datosusuario 
    INNER JOIN usuarios On datosusuario.id_datos_usuario=usuarios.id_username
    LEFT JOIN puntossopa on datosusuario.id_datos_usuario=puntossopa.id_puntos_sopa
    RIGHT JOIN puntostrivia on datosusuario.id_datos_usuario=puntostrivia.id_puntos_trivia 
    WHERE datosusuario.nombre LIKE "%' . $busqueda . '%" OR datosusuario.email LIKE "%' . $busqueda . '%"  ORDER BY datosusuario.id_datos_usuario ASC LIMIT ' . $desde . ',' . $por_pagina . ' ');
}
$query->execute();
$cantidad = array();*/
