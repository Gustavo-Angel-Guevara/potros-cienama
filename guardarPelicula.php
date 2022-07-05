<?PHP

	$nombreP = $_POST["nombrePelicula"];
	$fecha = $_POST["fecha"];
	$nac = $_POST["nacionalidad"];
	$idioma = $_POST["idioma"];
	$color = $_POST["color"];
	$clasi = $_POST["clasificacion"];
	$estrenoDate = $_POST["fecha_estreno"];
	$sin = $_POST["sinopsis"];
	$band = $_POST["band"];
	if($band != 0){
		error_reporting(0);
	}
	/*echo "La pelicula se llama ".$nombreP."<br>";
	echo "La fecha es ".$fecha."<br>";
	echo "Nacionalidad: ".$nac."<br>Idioma: ".$idioma."<br>";
	echo "Color: ".$color."<br>Clasificacion: ".$clasi."<br>";
	echo "Sinopsis: ".$sin;*/
	//4 parámetros: servidor, usuario, contraseña y BD
	$conexion = new mysqli("localhost","root","","peliculas");
	$consulta = "INSERT INTO pelicula (idPelicula, nombrePelicula, fecha, nacionalidad, idioma, ColorPelicula, Clasificacion, fecha_estreno, sinopsis, estatus) 
	VALUES (null,'$nombreP', '$fecha', '$nac', '$idioma', '$color', '$clasi', '$entrenoDate', '$sin', 1)";
	$ejecutar = mysqli_query($conexion,$consulta);

	if($band == "0"){
		echo "Registro correcto <br>";
		echo "<a href='peliculas.php'>Volver</a>";
	}else{
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