<?PHP

$nombre = $_POST["nombre"];   
$pais = $_POST["pais"];   
$fecha = $_POST["fecha"];
$band = $_POST["band"];

if($band != 0){
	error_reporting(0);
}
  
$conexion = new mysqli("localhost","root","","peliculas");
$_GRABAR_SQL = "INSERT INTO director (idDirector,nombreDirector,fechaNacimiento,pais, estatus) 
				VALUES (null,'$nombre','$fecha','$pais', 1)";   

$ejecutar = mysqli_query($conexion, $_GRABAR_SQL);

if($band == "0"){
	echo "Registro guardado con Éxito";
	echo "<a href='directores.php'>Volver</a>";
}else {
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