<?php 
require_once("conexion.php");

$id = $_GET['id'];

$seg_id = mysqli_real_escape_string($conexion, $id);
$borrar = "DELETE FROM datos_usuarios WHERE ID={$seg_id}";
$resultado = mysqli_query($conexion, $borrar);
header("location: ../index.php");
?>
