<?php 
session_start();
//Literalmente la destruimos 
session_destroy(); 
//Redireccionamos a index.php (al inicio de sesión) 
header("Location: ../html/login.html"); 
 ?>