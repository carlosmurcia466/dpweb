<?php 
	
	if (isset($_GET['id'])) 
		{

			$idC=$_GET['id'];
			$action=$_GET['a'];

			if ($action == 'm') 
				{
					include('frmModificarC.php');
				}
				elseif ($action == 'e') 
					{
						include('conexion.php');
						$query="DELETE FROM `cotizaciones` WHERE `idCotizacion`  = '$idC';";
			            mysqli_query($conexion, $query);
			            echo '<script> window.location="listadoCotizaciones.php"; </script>';			
					}
					
		}
	else
		{
			echo '<script> alert("No puedes visualizar este contenido..."); </script>';
            echo '<script> window.location="listadoCotizaciones.php"; </script>';
		}

 ?>