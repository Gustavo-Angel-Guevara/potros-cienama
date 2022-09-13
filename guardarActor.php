   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/estiloActores.css">






<?PHP

	$nombre = $_POST["nombre"];
	$pais = $_POST["pais"];
    $band = $_POST["band"];
	$conexion = new mysqli("localhost","root","","peliculas");
	$consulta = "INSERT INTO actor (idActor, nombre, nacionalidad, estatus) 
	VALUES (null,'$nombre', '$pais', 1)";
	$ejecutar = mysqli_query($conexion,$consulta);




	if($band == "0"){
		echo"<br><br>";
		echo "<center>  <h1 style='color:#02F3FF'> Registro correcto </h1> </center> <br> ";
		echo "<center> <a href='actores.php' class='btn btn--1'>Volver</a></center>";
	}else{
		//-----------------------------------------------------
		error_reporting(0);

		//--------------------Respuesta Enviada a la petición FETCH del js/validaciones.js
		if($ejecutar){
			$res = [
				"err" => false,
				"message" => "Registro guardado con Éxito"
			];
		}else{
			$res = [
				"err" => true,
				"message" => "Error al guardar los datos intente más tarde"
			];
		} 

		echo json_encode($res);
		//-----------------------------------------------------
	}


 
?>