
<?php
include('config.php');
$idRegistros = $_REQUEST['id'];
$estado     = $_REQUEST['estado'];
$rol	 = $_REQUEST['rol'];
echo $estado;
$update = ("UPDATE usuarios SET estado  = $estado, rol_usuario = $rol  WHERE id_username = $idRegistros
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'>
        window.location='index.php';
    </script>";

?>
