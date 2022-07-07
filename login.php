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

		<h2 class="letraBlanca">Bienvenido a cinema CUH</h2>

		<form action="" method="post" data-form='true'>
            <div>
                <label for="user">Usuario</label>
                <input data-validation="required maxLength-10" type="text"  name="user" id="user" placeholder="Escriba su usuario" value="" required>
            </div>
            <div>
                <label for="pass">Contraseña</label>
                <input data-validation="required maxLength-10" type="password"  name="pass" id="pass" placeholder="Escriba su contraseña" value="" >
            </div>
            <div>
                <div class="col-lg-9" data-warn></div>
                <input type="submit" name="login" id="login" value="Login">
            </div>
       
        </form> 
        
        <div>
            <h4>¿No tienes cuenta? <a href="register.php"><strong>Registrate aqui</strong></a></h4>
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