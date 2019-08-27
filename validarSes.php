<?php 
	session_start();
	if (!isset($_SESSION['login'])) 
	{
		echo '<script> alert("Debes iniciar sesión o registrarte para realizar una compra."); </script>';
        echo '<script> window.location="login.php"; </script>';
	}

 ?>