<?php
require 'conexion.php';
$cliente = $_REQUEST['idCliente'];
$consulta = "Delete from clientes where id=$cliente";
mysql_query($conexion, $consulta) or die("Problemas con la consulta".mysql_error($conexion));
?>
