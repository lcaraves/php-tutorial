<?php 
	session_start();
	require 'conexion.php';
	$consulta ="SELECT * FROM user";
	$resultados = mysqli_query($conexion, $consulta) or die("PROBLEMAS CON LA CONSULTA".mysqli_error($conexion));
	$boolean = false;
	while ($row = mysqli_fetch_array($resultados)) {
		
		if ($row['email']== $_REQUEST['email']) {
			# code...
			$boolean = true;
			if ($row['password']== $_REQUEST['password']) {
				# code..
				$_SESSION['usuario'] = $row['nombre'];
				header("Location: ../index.php");
			} else {
				echo "Error de password";
			}
			
		}
	}
	if ($boolean ==false) {
		# code...
		echo "Error de Email";
	}
	
?>