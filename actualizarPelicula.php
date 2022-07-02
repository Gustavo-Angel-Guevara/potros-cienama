<?php
	
	$idP = $_POST['idP'];
	$nombreP = $_POST['nombrePelicula'];
	$fecha = $_POST['fecha'];
	$nacionalidad = $_POST['nacionalidad'];
	$idioma = $_POST['idioma'];
	$color = $_POST['color'];
	$clasificacion = $_POST['clasificacion'];
	$sinopsis = $_POST['sinopsis'];
	$band = $_POST["band"];
	//Servidor, usuario, contraseña, BD
	$conexion = new mysqli("localhost","root","", "peliculas");
	$consulta = "UPDATE pelicula SET 
				 nombrePelicula = '$nombreP',
				 fecha = '$fecha',
				 nacionalidad = '$nacionalidad',
				 idioma = '$idioma',
				 ColorPelicula = '$color',
				 Clasificacion = '$clasificacion',
				 sinopsis = '$sinopsis',
				 estatus = 1
				 WHERE idPelicula = $idP
				";
	//echo "Consulta: <br> " . $consulta;

	$conexion->query($consulta);

	if($band == "0"){
		echo "Datos actualizados";
		echo "<a href='peliculas.php'>Volver</a>";
	}else{
		//-----------------------------------------------------
		error_reporting(0);

		//--------------------Respuesta Enviada a la petición FETCH del js/validaciones.js
		if($conexion->query($consulta)){
			$res = [
				"err" => false,
				"message" => "Registro Actualizado con Éxito"
			];
		}else{
			$res = [
				"err" => true,
				"message" => "Error al Actualizar los datos intente más tarde"
			];
		} 

		echo json_encode($res);
		//-----------------------------------------------------
	}
?>