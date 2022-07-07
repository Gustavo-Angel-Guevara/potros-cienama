<?php

	$idP = $_GET['id'];

	$conexion = new mysqli("localhost","root","","peliculas");
	$consulta = "UPDATE pelicula set estatus=1 WHERE idPelicula=$idP";
	$conexion->query($consulta);

	echo "Pelicula habilitada correctamente";
	echo "<a href='peliculas.php'>Volver</a>"
?>