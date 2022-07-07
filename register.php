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
                <label for="nombre">Nombre <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                 <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg></label>
                <input class="form-control" type="text" data-validation="required only-words maxLength-40" name="nombre" id="nombre" placeholder="Ingrese su nombre" value="" required>
            </div>
            <div>
                <label for="correo">Correo <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg></label>
                <input class="form-control" type="text" data-validation="required maxLength-25 email" name="correo" id="correo" placeholder="Ingrese su correo" value="" required>
            </div>
            <div>
                <label for="user">Usuario <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                 <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg></label>
                <input class="form-control" type="text" data-validation="required maxLength-10" name="user" id="user" placeholder="Ingrese su usuario" value="" required>
            </div>
            <div>
                <label for="pass">Contraseña <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg></label>
                <input class="form-control" type="password" data-validation="required maxLength-10" name="pass" id="pass" placeholder="Ingrese su contraseña" value="" required>
            </div>
            <div>
                <label for="pass2">Repita su contraseña <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg></label>
                <input class="form-control" type="password" data-validation="required maxLength-10 samePassword" name="pass2" id="pass2" placeholder="Repita su contraseña" value="" required>
            </div>
            <div>
            <div class="col-lg-9" data-warn></div>
                <input class="form-control" type="submit" name="crear" id="login" value="Registrarme">
            </div>
        </form>

        <div ALIGN=center>
            <h5>¿No tienes cuenta? <a class="texto" href="register.php"><strong>Registrate aqui</strong></a></h>
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