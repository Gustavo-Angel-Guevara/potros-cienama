<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar pelicula</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/spinkit.css"><!--IMPORTANT-->
	<link rel="stylesheet" type="text/css" href="css/estiloDirectores.css">
</head>
<body>
	<div class="container centrado">
		<?php
			$idPelicula = $_GET['id'];

			$conexion = new mysqli("localhost","root","","peliculas");
			$consulta = "Select * from pelicula where idPelicula=".$idPelicula;

			$resultado = $conexion->query($consulta);
		?>
		<?php 
			while($row = $resultado->fetch_assoc())
			{			
		?>
		<div class="container">
          <hr>
        <div class="cuadrado"><h1><center>Editar pelicula: <?php echo $row['nombrePelicula'];?></center> </h1></div>
           <style> .cuadrado{       
           color: #48e0ab; font-size:40px}
           </style>
		      	<br>

		<form action="actualizarPelicula.php" method="POST" data-form='true' data-redirigirURL="peliculas.php">
			<div class="row">

				<div class="col-lg-12">
					<br>
				</div>

				<div class="col-lg-8">
					<input data-validation='required maxLength-150' class="form-control" name="nombrePelicula" type="text" placeholder="Nombre de la pelicula" value="<?php echo $row['nombrePelicula'];?>">
				</div>
				<div class="col-lg-4">
					<input data-validation='required' class="form-control" type="date" name="fecha" id="fecha" value="<?php echo $row['fecha'];?>">		
				</div>

				<div class="col-lg-12">
					<br>
				</div>

				<div class="col-lg-6">
					<input data-validation='required only-words maxLength-30' class="form-control" type="text" name="nacionalidad" placeholder="Nacionalidad" value="<?php echo $row['nacionalidad'];?>">
				</div>
				<div class="col-lg-3">
					<input data-validation='required only-words maxLength-15' class="form-control" type="text" name="idioma" placeholder="Idioma" value="<?php echo $row['idioma'];?>">
				</div>
				<div class="col-lg-3">
					<input data-validation='required only-words maxLength-20' class="form-control" type="text" name="color" placeholder="Color" value="<?php echo $row['ColorPelicula'];?>">
				</div>

				<div class="col-lg-12">
					<br>
				</div>

				<div class="col-lg-4">
					<input data-validation='required maxLength-30' type="text" class="form-control" name="clasificacion" placeholder="Clasificacion" value="<?php echo $row['Clasificacion'];?>">
				</div>

				<div class="col-lg-8">
					<textarea data-validation='required' class="form-control" name="sinopsis" placeholder="Sinopsis" rows="3" ><?php echo $row['sinopsis'];?>
					</textarea>
				</div>

				<div class="col-lg-12">
					<br>
				</div>

				<div class="col-lg-9" data-warn>  <!--Data-warn sirve como referencia para insertar un mensaje al validar los campos-->
					<br>
				</div>
					
				<div class="col-lg-7">
					<a href="peliculas.php" class="btn btn--1"">Volver</a>
				</div>

				<div class="col-lg-5">
					<input type="hidden" name="idP" value="<?php echo $row['idPelicula'];?>">
					<input id="band" class="d-none" name="band" type="text" value="0"><!--IMPORTANT-->
					<input type="submit" class="btn btn--3" value="Actualizar">

				</div>
				<br><br>

			</div>
			
			
		</form>
		<!--Animación de cargando para confirmación de actualización del registro-->
		<div class="loader sk-flow mx-auto d-none">
			<div class="sk-flow-dot"></div>
			<div class="sk-flow-dot"></div>
			<div class="sk-flow-dot"></div>
		</div>
	</div>
	<?php }?>
	<script src='./js/index.js' type='module'></script> <!--IMPORTANT-->
</body>
</html>