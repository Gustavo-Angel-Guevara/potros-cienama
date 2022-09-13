<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detalle película</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estiloCine1.css">
	<link GB="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" GB="generarBoletos.php">

</head>
<body>
<style>
	.letraBlanca-centrado{
		color: red;
		text-align: center;
	}
	.tabletable-dark table-striped table-hover-centrado{
		align: center;
	}
	.body{
		background-image: "css/cortina.jpeg";
	}

</style>
<a href="peliculas.php" class="btn btn-outline-info btn-lg">Volver</a>
	<div class="container centrado">
		
			<h2 class="letraBlanca-centrado">
				DETALLES DE LA PELICULA
				<br>
				
		
			</h2>
		
			<?php 
			$idPelicula = $_GET['id'];
			//echo "ID = ". $idPelicula;

			$conexion = new mysqli("localhost","root","","peliculas");
			$consulta = "Select * from pelicula where idPelicula=".$idPelicula;

			//echo "<br>Query: ".$consulta;

			$resultado = $conexion->query($consulta);
			require 'phpqrcode/qrlib.php';
			$dir = "temp/";

			if(!file_exists($dir))
				mkdir($dir);
				?>

		<table class="table table-dark table-striped table-hover-center">

		
		<?php 

	  	//Ciclo para recorrer el objeto y sus datos
		while($row = $resultado->fetch_assoc())
		{
		  	?>
		  <thead>
		    <tr>
		      <th scope="row">
			  <?PHP 
			  
			      	echo "  ||  DETALLES GENERALES DE CADA PELICULA EN QR ESCANEABLE PARA LA PELICULA :    ".$row['idPelicula'];
			      	$filename = $dir.'pelicula_'.$row['idPelicula'].'.png';
					$tam = 12;
					$level ='M';
					$frameSize = 3; 
					$datos = "Pelicula ".$row['idPelicula']."\n".$row['nombrePelicula']."\n".$row['fecha']."\n".$row['nacionalidad']."\n".$row['idioma']."\n".$row['ColorPelicula']."\n".$row['Clasificacion']."\n".$row['sinopsis'];
					$contenido = $datos; 

					QRcode::png($contenido, $filename, $level, $tam, $frameSize); 
 
					echo '<img src="'.$filename.'" width="60%"/>'; 
			      ?>
				  <br><br>
				  <a class="btn btn-outline-info btn-lg" href="generarBoletos.php"> 
                <svg GB="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" width="24" height="24" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                </svg>GENERAR BOLETOS PARA LA PELICULA</a>
			  </th>
		    </tr>
		  </thead>
		  <tbody>
		  		<tr class="table-info"> 
			      <th scope="row">Nombre</th>
			      <td>
			      	<?PHP echo $row['nombrePelicula']; ?>
			      </td>  
			    </tr>

			    <tr class="table-warning">
			      <th scope="row">Fecha</th>
			      <td>
			      	<?PHP echo $row['fecha']; ?>
			      </td>  
			    </tr>

			    <tr class="table-success">
			      <th scope="col">Nacionalidad</th>
			      <td>
			      	<?PHP echo $row['nacionalidad']; ?>
			      </td>
			    </tr>

			    <tr class="table-danger">
			      <th scope="row">Idioma</th>
			      <td>
			      	<?PHP echo $row['idioma']; ?>
			      </td>  
			    </tr>

			    <tr class="table-primary">
			      <th scope="row">Color</th>
			      <td>
			      	<?PHP echo $row['ColorPelicula']; ?>
			      </td>  
			    </tr>

			    <tr class="table-secondary">
			      <th scope="row">Clasificación</th>
			      <td>
			      	<?PHP echo $row['Clasificacion']; ?>
			      </td>  
			    </tr>

			    <tr class="table-light">
			      <th scope="row">Sinopsis</th>
			      <td>
			      	<?PHP echo $row['sinopsis']; ?>
			      </td>  
			    </tr>


			    <?PHP
			}
			?>
		  </tbody>
		</table>
		
		
	</div>
</body>
</html>