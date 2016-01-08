<!DOCTYPE html>
<html lang="es">
<head>
	<title>Formulario Cliente</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Boostrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<!-- java Script de Bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
	</head>
<body 
<?php 
	if (isset($_COOKIE['color']))
		{ 
			echo " style=\"background:$_COOKIE[color]\"";
			}
	?>
	><!--BODY-->
	<div class="container">
		<nav class="navbar navbar-default">
	        <div class="container-fluid">
	          <div class="navbar-header">
	                     
	          </div>
	          <div id="navbar" class="navbar-collapse collapse">	            
	            <ul class="nav navbar-nav">
              		<li class="active">
              			<a href="#">Home</a>
              		</li>
              		<li role="presentation">
              			<a href="#">Quienes Somos</a>
              		</li>
              		<li role="presentation">
              			<a href="html/galeria.html">Galeria</a>
              		</li>
              	</ul>
              	<ul class="nav navbar-nav navbar-right">
              		<div class="btn-group" role="group">
    					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	     					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
	 						<?php
	 							session_start();
	 							if (isset($_SESSION["usuario"]))
							  {
							    echo "Bienvenido ".$_SESSION["usuario"];
							  }
							  else
							  {
								echo "No tiene permitido visitar esta página.";
							  }
								
							?>
	      					<span class="caret"></span>
    					</button>
					    <ul class="dropdown-menu">
					      <li>
					    	<a href="php/exitSesion.php">Salir</a>
					      </li>
					    </ul>
				  </div>
	             </ul>
	          </div><!--/.nav-collapse -->
	        </div><!--/.container-fluid -->
      	</nav>
      	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="headingOne">
		      <h4 class="panel-title">
		        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          <strong>Compilado de Fotos</strong>
		        </a>
		      </h4>
		    </div>
		    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
		      <div class="panel-body">
		      	<!--Carrosel-->
		        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="img/img_1.jpg" alt="...">
				      <div class="carousel-caption">
				        ...
				      </div>
				    </div>
				    <div class="item">
				      <img src="img/img_2.jpg" alt="...">
				      <div class="carousel-caption">
				        ...
				      </div>
				    </div>
				    <div class="item">
				      <img src="img/img_3.jpg" alt="...">
				      <div class="carousel-caption">
				        ...
				      </div>
				    </div>
				    <div class="item">
				    	<picture>
				    		<img src="img/img_4.jpg" alt="..." sizes="80vw"  
				    			srcset="img/img_4.jpg 160w,
				               	img/img_4.jpg 320w,
				               	img/img_4.jpg 640w,
				               	img/img_4.jpg 1280w">
				    	</picture>
				      	<div class="carousel-caption">
				        	...
				      	</div>
				    </div>
				    <div class="item">
				      <picture>
				      	<img src="img_5.jpg" alt="..." sizes="80vw"
				       srcset="img/img_5.jpg 160w,
				               img/img_5.jpg 320w,
				               img/img_5.jpg 640w,
				               img/img_5.jpg 1280w">
          				
				      </picture>
				      <!--<img src="img/img_5.jpg" alt="...">-->
				      <div class="carousel-caption">
				        ...
				      </div>
				    </div>
				    ...
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
		      </div>
		    </div>
		  </div>
  		</div>
  		<!-- Vamos a realizar el Alta de un Cliente -->
		<div class="form-group col-xs-12">
			<form action="php/formularioCliente.php" method="Post" class="form-horizontal" id="form-alta">
			<div>
				<h2>Formulario Alta Cliente</h2>
			</div>
			<!-- nombre -->
			<div class="form-group" >
				<label for="" class="col-xs-2">Nombre *</label>
				<div class="col-xs-4">
					<input type="text" name="nombre" placeholder="Juan Perez" class="form-control" required >	
				</div>
			</div>
			<!-- direccion -->
			<div class="form-group">
				<label for="" class="col-xs-2">Direccion *</label>
				<div class="col-xs-4">
					<input type="text" name="direccion" placeholder="Av. Ejemplo 1200" class="form-control" required >
				</div>	
			</div>
			<!-- Fecha de Nacimiento -->
			<div class="form-group">
				<label for="" class="col-xs-2">Fecha de Nacimiento *</label>
	            <div class="col-xs-4">
           			<div class="input-group">
                		<input type="date" class="form-control">
	                    <span class="input-group-addon">
	                        <span class="glyphicon glyphicon-calendar"></span>
	                    </span>
            		</div>
         		</div>
            </div>
			<!-- Edad -->
			<div class="form-group">
				<label for="" class="col-sm-2">Edad</label>
				<div class="col-xs-4">
					<input type="number" min="18" max="99"name="edad" placeholder="edad" class="form-control">
				</div>			
			</div>
			<!-- boton submit -->
			<div class="form-group col-xs-8">
				<input type="submit" value="Registrar" class="btn btn-primary">
			</div>
		</form>	
		</div>
		<!-- Formulario para devolver -->
		<form action="php/listarcliente.php" method="get">
			<div class="form-group col-xs-8">
				<h3>Listar Clientes dados de Alta</h3>
			</div>
			<div class="form-group col-sm-8">
				<input type="submit" value="Listar" class="btn btn-primary">
			</div>
		</form>
		<hr>
		<!-- Formulario para Cookies -->
		<form action="php/cookies.php" method="post">
			<div class="form-group col-xs-8">
				<h3>Agregar Color a los titulos</h3>
			</div>
			<div class="form-group col-sm-8">
				<input type="radio" value="Rojo" name="radio"> Rojo <br>
				<input type="radio" value="Verde" name="radio"> Verde <br>
				<input type="radio" value="Azul" name="radio"> Azul <br>
				<input type="radio" value="Gris" name="radio"> Gris <br>
			</div>
			<div class="form-group col-sm-8">
				<input type="submit" value="Crear" class="btn btn-primary">
				<a href="php/deleteCookie.php" class="btn btn-link">Quitar Cookies</a>
				
			</div>
		</form>
		<hr>
	</div><!-- container-->
	
	<footer class="footer">
      <div class="container">
        <p class="text-muted">@lcaraves</p>
      </div>
    </footer>
	<!-- Script de ALTA de Cliente -->
	<script>
		$(document).ready(function() {
			//Alta de Formulario
			$("#form-alta").submit(function(e) {

		   		var url = "php/formularioCliente.php"; // the script where you handle the form input.

			    $.ajax({
			           type: "POST",
			           url: url,
			           data: $("#form-alta").serialize(), // serializes the form's elements.
			           success: function(data)
			           {
			               alert(data); // show response from the php script.
			               $("#form-alta")[0].reset();
			           }
			         });

		    	e.preventDefault(); // avoid to execute the actual submit of the form.
			});

		});
	</script>
   </body>
</html>

