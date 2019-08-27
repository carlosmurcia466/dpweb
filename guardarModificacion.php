<?php



    $id=$_POST["idPro"];
		$nom=$_POST["nombrep"];
		$tipo=$_POST["tipop"];
		$precio=$_POST["preciop"];
	  $desp=$_POST["descripcionp"];
    $exis=$_POST["exp"];
		//$fot=$_POST["archivo"];
		//$fot=$_FILES['archivo']['name'];
    mysql_connect("sql212.eshost.com.ar","eshos_19505084","dpweb123");
		mysql_select_db("eshos_19505084_dpweb");
    //mysql_connect("localhost","root","");
    //mysql_select_db("dpweb");
		$sql="update productos set nombre='$nom', tipo='$tipo', precio='$precio', descripcion='$desp', existencias= '$exis' where idProducto='$id'";
    $resultado=mysql_query($sql)or die('Error en '.mysql_error());
    		if($resultado){
          echo '<script> alert("Registro actualizado con exito!."); </script>';
          echo '<script> window.location="administrarProductos.php"; </script>';
    		}
    		else
    		{
          echo '<script> alert("Ocurrió un error, por favor intente de nuevo."); </script>';
          echo '<script> window.location="administrarProductos.php"; </script>';
    		}


 ?>
