<?php
require 'conexion.php';
$cliente = $_REQUEST['idCliente'];
$consulta = "Delete from clientes where id=$cliente";

try {
	mysql_query($conexion, $consulta) or die("Problemas con la consulta".mysql_error($conexion));
} catch (Exception $e) {
	echo "Exception Capturada: ";
}
?>
