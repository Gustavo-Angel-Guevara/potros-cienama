<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estiloCine1.css">
	<style>
		a{
			color: white;
		}
	</style>
</head>
<body>
	<div class="miniespacio">
		<br><br><br><br>
	</div>
	<div class="container">
		<h2 class="letraBlanca">
			Lista de películas
			<br>
			<a href="index.php" class="btn btn-info">Volver</a>
			<a href="nuevaPelicula.php" class="btn btn-success">+Agregar</a>
			<a href="reportePeliculas.php" class="btn btn-secondary">Generar reporte</a>
			<a href="respaldoGeneral.php" class="btn btn-warning">Respaldo general</a>
            <a href="peliculas.php" class="btn btn-light">Peliculas</a>
		</h2>
		
		<?PHP 
			//variable que conecta con mysql
			//parámetros: servidor, usuario, contraseña, BD
			$conexion = new mysqli("localhost", "root", "", "peliculas");
			//Estructura para obtener todos los registros de la tabla actor
			$consulta = "SELECT * FROM pelicula WHERE estatus=0";
			//Variable que guarda el resultado del query
			$resultado = $conexion->query($consulta);

			require 'phpqrcode/qrlib.php';
			$dir = "temp/";

			if(!file_exists($dir))
				mkdir($dir);
		?>
			
		<table class="table table-dark table-striped table-hover">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Nombre pelicula</th>
		      <th scope="col">Nacionalidad</th>
		      <th scope="col">Detalle</th>
		      <th scope="col">Editar</th>
			  <th scope="col">Habilitar</th>
             <th scope="col">Borrado físico</th>

		    </tr>
		  </thead>
		  <tbody>
		  	<?PHP
		  	//Ciclo para recorrer el objeto y sus datos
			while($row = $resultado->fetch_assoc())
			{
				$filename = $dir.'pelicula_'.$row['idPelicula'].'.png';
				$tam = 10;
				$level = 'M';
				$frameSize = 3;
				$datos = "Pelicula ".$row['idPelicula']."\n".$row['nombrePelicula']."\n".$row['fecha']."\n".$row['nacionalidad']."\n".$row['idioma']."\n".$row['ColorPelicula']."\n".$row['Clasificacion']."\n".$row['sinopsis'];
				$contenido = $datos;

				QRcode::png($contenido, $filename, $level, $tam, $frameSize);

				
			  	?>
			    <tr>
			      <th scope="row">
			      	<?PHP echo $row['idPelicula']; ?>
			      </th>
			      <td>
			      	<?PHP echo $row['nombrePelicula']; ?>

			      </td>
			      <td>
			      	<?PHP echo $row['nacionalidad']; ?>
			      </td>
			      <td>
			      	<a href="detallePelicula.php?id=<?php echo $row['idPelicula'];?>">
			      	  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eyeglasses" viewBox="0 0 16 16">
					  <path d="M4 6a2 2 0 1 1 0 4 2 2 0 0 1 0-4zm2.625.547a3 3 0 0 0-5.584.953H.5a.5.5 0 0 0 0 1h.541A3 3 0 0 0 7 8a1 1 0 0 1 2 0 3 3 0 0 0 5.959.5h.541a.5.5 0 0 0 0-1h-.541a3 3 0 0 0-5.584-.953A1.993 1.993 0 0 0 8 6c-.532 0-1.016.208-1.375.547zM14 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
					</svg>
			      	</a>
			      </td>

			      <td>
			      	<a href="editarPelicula.php?id=<?php echo $row['idPelicula'];?>">
			      		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
						<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
						<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
						</svg>
			      	</a>
			      </td>

			      <td>
			      	<a href="habilitarPeliculas.php?id=<?php echo $row['idPelicula'];?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
  <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
  <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
</svg>
			      	</a>
			      </td>

			      <td>
			      	<a href="borrarFisicoPelicula.php?id=<?php echo $row['idPelicula'];?>">
			      				      		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
						<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
						<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
						</svg>
			      	</a>	
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