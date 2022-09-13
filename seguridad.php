<?php
if (!isset($_SESSION['usuario'])){
    echo "<script>
    swal('Inicia sesion para continuar', 'Redirigiendo al login...','info');
    setTimeout( function() { window.location.href = 'login.php'; }, 3000 ); 
    </script>";
}

?>