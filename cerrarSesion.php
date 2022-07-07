<?php

	if(isset($_POST['close'])){
		session_unset();
		session_destroy();

		echo '<script>
			swal("Sesion cerrada", "Rederigiendo al login en 3 segunods","info");
            setTimeout( function() { window.location.href = "login.php"; }, 3000 );
			</script>';
		
   	} 
?>