<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nuevo Director</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/spinkit.css"><!--IMPORTANT-->
	<link rel="stylesheet" type="text/css" href="css/estiloCine1.css">
</head>
<body>
<div id="general" align="center">

	<div class="container centrado" align="center">
		<h2 class="letraBlanca">Agregar nuevo Director</h2>

		<form data-form='true' action="guardarDirector.php" method="POST" data-redirigirURL="directores.php">
			<div class="row">

				<div class="col-lg-12">
					<br>
				</div>

				<div class="col-lg-8">
					<input data-validation='required maxLength-150' class="form-control" name="nombre" type="text" placeholder="Nombre del director">
				</div>

				<div class="col-lg-12">
					<br>
				</div>

				<div class="col-lg-4">
					<input data-validation='required' class="form-control" type="date" name="fecha">		
				</div>

				<div class="col-lg-12">
					<br>
				</div>

				<div class="col-lg-6">
					<input data-validation='required only-words maxLength-30' class="form-control" type="text" name="pais" placeholder="Pais">
				

				<div class="col-lg-12">
					<br>
				</div>

				<div class="col-lg-10" data-warn> <!--Data-warn sirve como referencia para insertar un mensaje al validar los campos-->
					
				</div>

				<div class="col-lg-2">
					<input type="submit" class="btn btn--1" value="Guardar" >
					<input id="band" class="d-none" name="band" type="text" value="0"><!--IMPORTANT-->
				</div>

			</div>
		</div>	
		<a href="directores.php" class="btn btn--4">Volver</a>
	</form>

		<!--Animación de cargando para confirmación de nuevo registro-->
		<div class="loader sk-flow mx-auto d-none">
			<div class="sk-flow-dot"></div>
			<div class="sk-flow-dot"></div>
			<div class="sk-flow-dot"></div>
		</div>
	</div>
	<script src='./js/index.js' type='module'></script> <!--IMPORTANT-->
</body>
</html>