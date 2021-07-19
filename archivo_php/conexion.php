<?php
define('DB_SERVER', 'nombre_del_servidor');
define('DB_USER', 'nombre_del_usuario');
define('DB_PASSWD', 'contraseña_del_usuario');
define('DB_NAME', 'nombre_de_la_base_de_datos');

$conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWD, DB_NAME) or die('No se pudo conectarse con la Base de Datos');
mysqli_set_charset($conexion, "utf8");
?>
