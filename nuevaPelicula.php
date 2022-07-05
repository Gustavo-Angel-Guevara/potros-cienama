<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nueva pelicula</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/spinkit.css"><!--IMPORTANT-->
	<link rel="stylesheet" type="text/css" href="css/estiloCine1.css">
</head>
<body>
	<div class="container centrado">
		<h2 class="letraBlanca">Agregar nueva pelicula</h2>

		<form data-form='true' action="guardarPelicula.php" method="POST" data-redirigirURL="peliculas.php">
			<div class="row">

				<div class="col-lg-12">
					<br>
				</div>

				<div class="col-lg-8">
					<input data-validation='required maxLength-150' class="form-control" name="nombrePelicula" type="text" placeholder="Nombre de la pelicula">
				</div>
				<div class="col-lg-4">
					<input data-validation='required' class="form-control" type="date" name="fecha">		
				</div>

				<div class="col-lg-12">
					<br>
				</div>

				<div class="col-lg-6">
					<input data-validation='required only-words maxLength-30' class="form-control" type="text" name="nacionalidad" placeholder="Nacionalidad">
				</div>
				<div class="col-lg-3">
					<input data-validation='required only-words maxLength-15' class="form-control" type="text" name="idioma" placeholder="Idioma">
				</div>
				<div class="col-lg-3">
					<!--<input data-validation='required only-words maxLength-20' class="form-control" type="text" name="color" placeholder="Color">-->
				<select name= "color">
					<option value ="color">color</option>
					<option value ="Blanco y Negro">Blanco y Negro</option>
				 </select>
				</div>

				<div class="col-lg-12">
					<br>
				</div>

				<div class="col-lg-4">
					<input data-validation='required maxLength-30' type="text" class="form-control" name="clasificacion" placeholder="Clasificacion">
				</div>

				<div class="col-lg-8">
					<textarea data-validation='required' class="form-control" name="sinopsis" placeholder="Sinopsis" rows="3"></textarea>
				</div>

				<div class="col-lg-12">
					<br>
				</div>

				<div class="col-lg-10" data-warn> <!--Data-warn sirve como referencia para insertar un mensaje al validar los campos-->
					
				</div>

				<div class="col-lg-2">
					<input type="submit" class="btn btn-primary" value="Guardar">
					<input id="band" class="d-none" name="band" type="text" value="0"><!--IMPORTANT-->
				</div>


			</div>
			
			
		</form>

		<!--Animación de cargando para confirmación de nuevo registro-->
		<div class="loader sk-flow mx-auto d-none">
			<div class="sk-flow-dot"></div>
			<div class="sk-flow-dot"></div>
			<div class="sk-flow-dot"></div>
		</div>
	</div>
	<script src='./js/index.js' type='module'></script> <!--IMPORTANT--> <!--Este index no me direcciona a ningun liugar, me da error 404-->
</body>
</html>