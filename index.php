<!DOCTYPE html>
<html>
    <head>
	      <meta charset="utf-8">
        <title> Cine</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" >
        <link href="style.css" rel="stylesheet" >
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" charset="utf-8"></script>
    </head>
    <h2 style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size: 50px; color: white; text-shadow: 5px 5px 5px black; width:100wv; text-align:center">Bienvenido a cinema CUH</h2>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center align-items-center flex-column a">
            <ul class="nav">
                    <a class="btn btn-outline-dark m-2 d-flex justify-content-center align-items-center" href="index.php"> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                      </svg> Home</a>


                <a class="btn btn-outline-dark m-2 d-flex justify-content-center align-items-center" href="directores.php"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-camera-reels-fill" viewBox="0 0 16 16">
                    <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z"/>
                  </svg>Directores </a>

                <a class="btn btn-outline-dark m-2 d-flex justify-content-center align-items-center" href="acerca.php"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>Acerca </a>

                  <form action="" method="post">
                  <button type="submit"  name="close" id="close" class="btn btn-outline-dark m-2 d-flex justify-content-center align-items-center p-2" > 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                      <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                    </svg>Exit </button></form>
            </ul>
          </nav>
    </header>
    
    <body>
<?php  
  session_start();
  //echo"<script>alert('".$_SESSION['usuario']."');</script>";
  include("seguridad.php");
	if(isset($_POST['close'])){
		  include("cerrarSesion.php");
  }  
?>

      <a href="acerca.html" >
        <div class = " seccioncinema mt-3">
            <div class="box">
                <div class="hover">
                        <h1>Cinema UPP</h1>
                </div>
            </div>
          
        </div> 
      </a>
        
      <a href="peliculas.php" >
        <div class = " seccionpeliculas mt-3">
            <div class="box">
                <div class="hover">
                        <h1>Peliculas</h1>
                </div>
            </div>
          
        </div> 
      </a>
      
      <a href="actores.php" >
        <div class = " seccionactores mt-3">
            <div class="box">
                <div class="hover">
                        <h1>Actores</h1>
                </div>
            </div>
          
        </div> 
      </a>

      <a href="directores.php" >
        <div class = " secciondirect mt-3">
            <div class="box">
                <div class="hover">
                        <h1>Directores</h1>
                </div>
            </div>
          
        </div> 
      </a>

    </body>
</html>