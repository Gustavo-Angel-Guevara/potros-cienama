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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

	<div class="containerLogin">
        

		<h2 class="letraBlanca">Bienvenido a cinema UPP</h2>

		<form action="" method="post" data-form='true'>
            <div >
                <label for="user">Usuario
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                 <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
                </label>
                <input class="form-control" data-validation="required maxLength-10" type="text"  name="user" id="user" placeholder="Escriba su usuario" value="" required>
            </div>
            <div>
                <label for="pass">Contraseña  
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                 <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
                </label>
                <input class="form-control" data-validation="required maxLength-10" type="password"  name="pass" id="pass" placeholder="Escriba su contraseña" value="" >
            </div>
            <div>
                <div class="col-lg-9" data-warn></div>
                <input class="form-control" type="submit" name="login" id="login" value="Login">
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
session_start();
$estado="No";  
   if( isset($_POST["login"]) ){
    
        if($estado=="No"){
            
            $user=$_POST['user'];
            $pass=$_POST['pass'];

            $_SESSION['usuario'] =$user;

            $conexion=mysqli_connect("localhost","root","","peliculas");

            $consulta="SELECT*FROM usuario where user='$user' and pass='$pass'";
            $resultado=mysqli_query($conexion,$consulta);

            $filas=mysqli_num_rows($resultado);

            if($filas){
                $estado="Si";
                //header("location: index.php");
                echo "<script type='text/javascript'>
                    swal('Bienvenido', '".$_SESSION['usuario']."','success'); 
                    
                    setTimeout( function() { window.location.href = 'index.php'; }, 3000 );
            
                </script>";
            }else{
                $estado="No";
                echo "<script>swal('Usuario o Contraseña incorrectos', 'Vuelva a intertarlo','error');</script>";
            }   
            mysqli_free_result($resultado);
            mysqli_close($conexion);
        }else{
            session_unset();
		    session_destroy();
                
            /*echo "<script>
                    swal('Ojito', 'Ya estas logeado','info');
                    setTimeout( function() { window.location.href = 'index.php'; }, 5000 );
                </script>";*/
            }
   }
?>