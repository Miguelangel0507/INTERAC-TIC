<?php
require ('../php/conexion.php');
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = $pdo->prepare('SELECT id_datos_usuario, nombre, email, username, estado, rol_usuario, puntossopa.puntos_nivel1 AS "s1", puntossopa.puntos_nivel2 AS "s2", puntossopa.puntos_nivel3 "s3", puntostrivia.puntos_nivel1 "t1",puntostrivia.puntos_nivel2 as"t2",puntostrivia.puntos_nivel3 as"t3" FROM datosusuario 
INNER JOIN usuarios On datosusuario.id_datos_usuario=usuarios.id_username
LEFT JOIN puntossopa on datosusuario.id_datos_usuario=puntossopa.id_puntos_sopa
RIGHT JOIN puntostrivia on datosusuario.id_datos_usuario=puntostrivia.id_puntos_trivia WHERE datosusuario.id_datos_usuario BETWEEN 1 AND 9999999999');
 $query->execute();
 $cantidad = array();

//print_r($cantidad);



/*while ($dataCliente =$query->fetch(PDO::FETCH_ASSOC)) { 
 echo  '<tr>
      <td>'. $dataCliente["id_datos_usuario"]. '</td>
      <td>'. $dataCliente["nombre"]. '</td>
      <td>'. $dataCliente["email"]. '</td>
      <td>'. $dataCliente["estado"]. '</td>
      <td>'. $dataCliente["rol_usuario"]. '</td>
      
      <td> 
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteChildresn'.$dataCliente["id_datos_usuario"] .'"">
            Eliminar
        </button>
      
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn '.$dataCliente["id_datos_usuario"] .'"">
            Modificar
        </button>

        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Childresn '. $dataCliente["id_datos_usuario"] .'"">
            Detalles
        </button>
     </td>
    </tr>
    <script src="pasar.js"></script>
    ' ;
   
}*/
?>