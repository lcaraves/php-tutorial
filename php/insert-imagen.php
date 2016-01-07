<?php 
$imagen = $_REQUEST['imagen'];
$descripcion = $_REQUEST['descripcion'];

if (is_uploaded_file($_FILES["$imagen"]["$descripcion"])) {
	# code...
	echo "true";
} else {
	# code...
	echo "false";
}

 ?>
