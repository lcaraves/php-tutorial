<?php 
// Crear Conexion.
// La idea, sería crear la conexion con un a clase.-
try {
	$localhost = "localhost";
	$user = "root";
	$password = "";
	$Bd = "prueba1"; 
	$conexion = mysqli_connect($localhost,$user,$password,$Bd) or die("Problema con la Conexion".mysql_error($conexion));
} catch (Exception $e) {
	 echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}
 ?>