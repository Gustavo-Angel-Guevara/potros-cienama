<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Cine</title>
	<!-- CSS only -->
	<link rel="stylesheet" type="text/css" href="css/estiloLoginRegister.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" charset="utf-8"></script>
</head>
<body>

	<div class="containerLogin">

		<h2 class="letraBlanca">Registrarme</h2>

		<form action="" method="post">
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" data-validation="required only-words maxLength-40" name="nombre" id="nombre" placeholder="Ingrese su nombre" value="" required>
            </div>
            <div>
                <label for="correo">Correo</label>
                <input type="text" data-validation="required maxLength-25 email" name="correo" id="correo" placeholder="Ingrese su correo" value="" required>
            </div>
            <div>
                <label for="user">Usuario</label>
                <input type="text" data-validation="required maxLength-10" name="user" id="user" placeholder="Ingrese su usuario" value="" required>
            </div>
            <div>
                <label for="pass">Contraseña</label>
                <input type="password" data-validation="required maxLength-10" name="pass" id="pass" placeholder="Ingrese su contraseña" value="" required>
            </div>
            <div>
                <label for="pass2">Repita su contraseña</label>
                <input type="password" data-validation="required maxLength-10 samePassword" name="pass2" id="pass2" placeholder="Repita su contraseña" value="" required>
            </div>
            <div>
            <div class="col-lg-9" data-warn></div>
                <input type="submit" name="crear" id="login" value="Registrarme">
            </div>
        </form>

        <div>
            <h4>¿Ya tienes cuenta? <a href="login.php"><strong>Ingresa aqui</strong></a></h4>
        </div>

	</div>

    <script src='./js/index.js' type='module'></script> <!--IMPORTANT-->

</body>

</html>



<?php

if(isset($_POST['crear'])){

	$conn = mysqli_connect("localhost", "root", "", "peliculas");
	if (!$conn)
	{
		die("No hay conexión: ".mysqli_connect_error());
	}

	$nombre=$_POST['nombre'];
	$usuario=$_POST['user'];
	$correo=$_POST['correo'];
	$contraseña=$_POST['pass'];
	$confcontraseña=$_POST['pass2'];

	if($confcontraseña==$contraseña){

		$mysql= "INSERT INTO usuario(nombre,correo,user,pass) values ('$nombre','$correo','$usuario','$contraseña')";

		if (mysqli_query($conn,$mysql)) {
			echo "<script type='text/javascript'>
                    swal('Se ha registrado con exito', 'Sera redireccionado al Login en 5 segundos','success'); 
                    
                    setTimeout( function() { window.location.href = 'login.php'; }, 5000 );
            
                </script>";
            //header("location: login.php");

		}else{
			echo "<script>swal('Error', 'Error en la Base de Datos','error');</script>";
		}
	}else{
		echo "<script>swal('Error', 'Las contraseñas no coinciden','error');</script>";
	}

}
?>