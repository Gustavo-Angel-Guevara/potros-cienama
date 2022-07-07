<?php
	$idD = $_POST['idD'];
	$nombreD = $_POST['nombreDirector'];
	$fechaNacimiento = $_POST['fechaNacimiento'];
	$pais = $_POST['pais'];
	$band = $_POST["band"];

	if($band != 0){
		error_reporting(0);
	}

	//Servidor, usuario, contraseña, BD
	$conexion = new mysqli("localhost","root","", "peliculas");
	$consulta = "UPDATE director SET 
				 nombreDirector = '$nombreD',
				 fechaNacimiento = '$fechaNacimiento',
				 pais = '$pais',
				 estatus = 1
				 WHERE idDirector = $idD
				";
	//echo "Consulta: <br> " . $consulta;

	$conexion->query($consulta);

	if($band == "0"){
		echo "Datos actualizados";
		echo "<a href='directores.php'>Volver</a>";
	}else{
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