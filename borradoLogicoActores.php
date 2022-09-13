<?php

	$idActor = $_GET['id'];

	$conexion = new mysqli("localhost","root","","peliculas");
	$consulta = "UPDATE actor set estatus=0 WHERE idActor=$idActor";
	$conexion->query($consulta);

	echo "Actor Deshabilitado";
	echo "<a href='actores.php'>Volver</a>"
?>