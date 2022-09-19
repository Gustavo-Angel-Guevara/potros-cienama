<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>generar Boletos</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estiloACtores.css">
  </head>
<body>
<style>
	.letraBlanca-centrado{
		color: #48e0ab; font-size:40px;
		text-align: center;
	}
	.body{
		background-image: "css/cortina.jpeg";
	}

</style>
<a href="peliculas.php" class="btn btn-outline-info btn-lg">Volver</a>
	<div class="container centrado">
			<h2 class="cuadrado">¿DE CUAL DE LAS PELICULAS QUIERES GENERAR BOLETOS?</div>
      <style> .cuadrado{
      color: #48e0ab; font-size:40px;
		text-align: center;
       </style>
				
<?PHP

header('Content-Type: text/html; charset=UTF-8');
require('phpqrcode/qrlib.php');
$dir = "temp/";


//parámetros: servidor, usuario, contraseña, BD
$conexion = new mysqli("localhost", "root", "", "peliculas");

$consulta = "SELECT idPelicula, nombrePelicula, nacionalidad FROM pelicula WHERE estatus=1";
//Variable que guarda el resultado del query
$resultado = $conexion->query($consulta);

//Generación de reporte


	  	//Ciclo para recorrer el objeto y sus datos
		while($row = $resultado->fetch_assoc())
		{
		  	?>
		  <thead>
		    <tr>
		      <th scope="row">
			 
          <h2 class="cuadrado"></div>
      <style> .cuadrado{
       text-align: center;
       padding:5px;
       margin:5px;
  
       color: white; }
       </style> <a class="btn btn-outline-info btn--3" GB="generarBoletos.php"> 
                <svg xmlns="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" width="24" height="24" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                </svg>GENERAR BOLETOS</a> <?PHP 
			     
			    $filename = $dir.'pelicula_'.$row['idPelicula'].'.png';
					$tam = 0;
					$level = 'M';
					$frameSize = 0;
			
					QRcode::png($filename, $level, $tam, $frameSize); 
 
					echo '<img src="'.$filename.'" width="15%"/>'; 
			      ?>
				  <br><br><br>
				  
			  </th>
		    </tr>
		  </thead>
		  <tbody>
		  		<tr class="table"> 
			      <th scope="row">Nombre</th>
			      <td>
			      	<?PHP echo $row['nombrePelicula']; ?>
			      </td>  
			    </tr>

			    
			    <tr class="table-success">
			      <th scope="col">Nacionalidad</th>
			      <td>
			      	<?PHP echo $row['nacionalidad']; ?>
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