<?php
require("/xampp/htdocs/INTERAC-TIC/php/conexion.php");
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//se hace la consulta a la tabla usuarios mediante el username
$query = $pdo->prepare("SELECT municipios_risaralda FROM categoriasopa");
$query->execute();
$palabras = array();
$usuario = $query->fetchAll();
for($i = 0; $i < 10; $i++) {
print_r($usuario[$i]["municipios_risaralda"]);
echo "<br>";
array_push($palabras, $usuario[$i]["municipios_risaralda"]);
}
echo "<br>";
echo "<br>";
print_r($palabras);


?>