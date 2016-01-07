<?php 
// Crear Conexion.
// La idea, sería crear la conexion con un a clase.-
$localhost = "localhost";
$user = "root";
$password = "";
$Bd = "prueba1"; 
$conexion = mysqli_connect($localhost,$user,$password,$Bd) or die("Problema con la Conexion");

 ?>