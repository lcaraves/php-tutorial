<?php 
require 'conexion.php';
$Consulta = "Insert Into clientes (nombre,direccion,edad) values('$_REQUEST[nombre]','$_REQUEST[direccion]','$_REQUEST[edad]')";

mysqli_query($conexion,$Consulta) or die("Problemas con la consulta");
mysqli_close($conexion);

echo "EL ALTA DE CLIENTE SE HIZO PERFECTA";
 ?>