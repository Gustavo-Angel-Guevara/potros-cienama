<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar Directores</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/spinkit.css"><!--IMPORTANT-->
	<link rel="stylesheet" type="text/css" href="css/estiloCine1.css">
</head>
<body>
	<div class="container centrado">
		<?php
			$idDirector = $_GET['id'];

			$conexion = new mysqli("localhost","root","","peliculas");
			$consulta = "Select * from director where idDirector=".$idDirector;

			$resultado = $conexion->query($consulta);
		?>
		<?php 
			while($row = $resultado->fetch_assoc()){			
		?>
		<h2 class="letraBlanca">Director: <?php echo $row['nombreDirector'];?></h2>

		<form action="actualizarDirector.php" method="POST" data-form='true' data-rederigirURL="directores.php">
			<div class="row">

				<div class="col-lg-12">
					<br>
				</div>

				<div class="col-lg-8">
					<input data-validation='required maxLength-150' class="form-control" name="nombreDirector" type="text" placeholder="Nombre del Directo" value="<?php echo $row['nombreDirector'];?>">
				</div>
				<div class="col-lg-4">
					<input data-validation='required' class="form-control" type="date" name="fechaNacimiento" id="fechaNacimiento" value="<?php echo $row['fechaNacimiento'];?>">		
				</div>

				<div class="col-lg-12">
					<br>
				</div>

				<div class="col-lg-6">
					<input data-validation='required only-words maxLength-30' class="form-control" type="text" name="pais" placeholder="Nacionalidad" value="<?php echo $row['pais'];?>">
				</div>
				

				<div class="col-lg-12">
					<br>
				</div>

				<div class="col-lg-9" data-warn>  
					<!--Data-warn sirve como referencia para insertar un mensaje al validar los campos-->
					
				</div>

				<div class="col-lg-3">

					<input type="hidden" name="idD" value="<?php echo $row['idDirector'];?>">
					<input id="band" class="d-none" name="band" type="text" value="0"><!--IMPORTANT-->
					<input type="submit" class="btn btn-warning" value="Actualizar">
				</div>


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