<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Listar Cliente</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Para agregar JavaScript - Jquery-->
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>
<body>
	<div class="container">
	  <?php 
		require 'conexion.php';
		$consulta = "Select * from clientes";
		$resultados = mysqli_query($conexion, $consulta) or die("Problemas con la consulta".mysqli_error($conexion));
	 ?>
		<!-- Tabla por donde muestro cada elemento de mis Clientes -->
		<div class="panel panel-default">
			<div class="panel-heading"><h3><strong>Listado de Cliente</strong></h3></div>
			<table class="table table-bordered table-hover table-responsive">
			 	<tr>
			 		<th>Nombre</th>
			 		<th>Direccion</th>
			 		<th>Edad</th>
			 		<th colspan=2 class="text-center">Accion</th>
			 	</tr>
			 	<tr>
			 		<?php 
			 		while ($row = mysqli_fetch_array($resultados)) {
			 			# code...
			 			echo "<tr>"
			 					."<td>".$row['nombre']."</td>"
			 					."<td>".$row['direccion']."</td>"
			 					."<td>".$row['edad']."</td>"
			 					."<td><a href='#' class='delete' id='cliente'".$row['idCliente'].">Eliminar</a></td>"
			 					."<td><a href='#' class='click' id='cliente'".$row['idCliente'].">Modificar</a></td>"
			 				."<tr>";
			 			}
			 		mysqli_close($conexion);
			 		?>
			 	</tr>
			</table>
		</div>
	</div>
	<!-- Script de Eliminar de Cliente -->
	<script>
		var idCliente =  $(this).attr('id');
		$(document).ready(function() {
			$.post("delete.php",{ idCliente = idCliente});

		});
	</script>
	<script>
		var idCliente =  $(this).attr('id');
		
		$(".click").click(function() {
			alert(idCliente);
		})
	</script>
</body>
</html>