<?PHP

$nombre = $_POST["nombre"];   
$pais = $_POST["pais"];   
$fecha = date("fecha");
$band = $_POST["band"];

  
$conexion = new mysqli("localhost","root","","peliculas");
$_GRABAR_SQL = "INSERT INTO director (idDirector,nombreDirector,fechaNacimiento,pais) VALUES (null,'$nombre','$fecha','$pais')";   
 
$ejecutar = mysql_query($_GRABAR_SQL,$conexion);


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
	


		

?>