
<?php
require ('../php/conexion.php');
$idRegistros = $_REQUEST['id'];
$estado     = $_REQUEST['estado'];
$rol	 = $_REQUEST['rol'];
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$update = $pdo->prepare("UPDATE usuarios SET estado  = $estado, rol_usuario = $rol  WHERE id_username = $idRegistros
");
$update->execute();
$result_update =$update->fetch(PDO::FETCH_ASSOC);

echo "<script type='text/javascript'>
        window.location='index.php';
    </script>";

?>
