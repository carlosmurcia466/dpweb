<?php


    $id=$_POST["idCliente"];
		$nom=$_POST["nombres"];
		$apes=$_POST["apellidos"];
		$mail=$_POST["correo"];
    $user=$_POST["user"];
    $ps=$_POST["pass"];
    $tp=$_POST["tipo"];
    $tel=$_POST["tel"];

    mysql_connect("sql212.eshost.com.ar","eshos_19505084","dpweb123");
		mysql_select_db("eshos_19505084_dpweb");
    //mysql_connect("localhost","root","");
    //mysql_select_db("dpweb");
		$sql="update usuarios set user='$user', nombres='$nom', apellidos='$apes', correo='$mail', pass='$ps',telefono='$tel', tipo='$tp' where idUsuario='$id'";
    $resultado=mysql_query($sql)or die('Error en '.mysql_error());
    		if($resultado){
          echo '<script> alert("Registro actualizado con exito!."); </script>';
          echo '<script> window.location="listadoClientes.php"; </script>';
    		}
    		else
    		{
          echo '<script> alert("Ocurrió un error, por favor intente de nuevo."); </script>';
          echo '<script> window.location="listadoClientes.php"; </script>';
    		}


 ?>