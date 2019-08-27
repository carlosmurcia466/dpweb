<?php
	//Hosting
	//$conexion = mysqli_connect("sql212.eshost.com.ar", "eshos_19505084", "dpweb123", "eshos_19505084_dpweb");
	//Local
	$conexion = mysqli_connect("localhost", "root", "", "dpweb");
	
	if (!$conexion)
    {
  			$mensaje = 'Error al conectar a la base de datos';
  	}
		  else
        {
    			$mensaje = 'Conexion exitosa';
    		}
 ?>






