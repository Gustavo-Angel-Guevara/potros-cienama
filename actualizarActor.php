<?php
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$pais = $_POST['pais'];
	$band = $_POST["band"];
	//Servidor, usuario, contraseña, BD
	$conexion = new mysqli("localhost","root","", "peliculas");
	$consulta = "UPDATE actor SET 
				 nombre = '$nombre',
				 nacionalidad = '$pais',
				 estatus = 1
				 WHERE idActor = $id
				";
	//echo "Consulta: <br> " . $consulta;

	$conexion->query($consulta);

	if($band == "0"){
		echo "Datos actualizados";
		echo "<a href='actores.php'>Volver</a>";
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