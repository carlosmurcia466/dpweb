<?php 
	
	if (isset($_GET['id'])) 
		{

			$idCl=$_GET['id'];
			$action=$_GET['a'];

			if ($action == 'm') 
				{
					include('frmModificar.php');
				}
				elseif ($action == 'e') 
					{
						include('conexion.php');
						$query="DELETE FROM usuarios WHERE idUsuario = '$idCl';";
			            mysqli_query($conexion, $query);
			            echo '<script> window.location="listadoClientes.php"; </script>';			
					}
					
		}
	else
		{
			echo '<script> alert("No puedes visualizar este contenido..."); </script>';
            echo '<script> window.location="listadoClientes.php"; </script>';
		}

 ?>