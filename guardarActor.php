<?PHP

	$nombre = $_POST["nombre"];
	$pais = $_POST["pais"];
    $band = $_POST["band"];
	$conexion = new mysqli("localhost","root","","peliculas");
	$consulta = "INSERT INTO actor (idActor, nombre, nacionalidad, estatus) 
	VALUES (null,'$nombre', '$pais', 1)";
	$ejecutar = mysqli_query($conexion,$consulta);

	if($band == "0"){
		echo "Registro correcto <br>";
		echo "<a href='actores.php'>Volver</a>";
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