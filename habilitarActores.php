<?php

	$idP = $_GET['id'];

	$conexion = new mysqli("localhost","root","","peliculas");
	$consulta = "UPDATE actor set estatus=1 WHERE idActor=$idP";
	$conexion->query($consulta);

	echo "Actor habilitado correctamente";
	echo "<a href='actores.php'>Volver</a>"
?>