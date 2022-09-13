<?php

	$idD = $_GET['id'];

	$conexion = new mysqli("localhost","root","","peliculas");
	$consulta = "UPDATE director set estatus=0 WHERE idDirector=$idD";
	$conexion->query($consulta);

	echo "Director Eliminado";
	echo "<a href='directores.php'>Volver</a>"
?>