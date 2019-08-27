<?php

  session_start();
  if (isset($_GET['id']))
  $idP = $_GET['id'];

  //mysql_connect("localhost","root","");
  //mysql_select_db("eshos_19611460_dpweb");
  mysql_connect("sql212.eshost.com.ar","eshos_19505084","dpweb123");
  mysql_select_db("eshos_19505084_dpweb");

  echo '<script> alert("¿En realidad desea eliminar este producto?."); </script>';

  $sqlDel="delete from productos where idProducto='$idP'";

  $resultado=mysql_query($sqlDel)or die('Error en '.mysql_error());
      if($resultado){
        echo '<script> alert("Registro eliminado con exito!."); </script>';
        echo '<script> window.location="administrarProductos.php"; </script>';
      }
      else
      {
        echo '<script> alert("Ocurrió un error, por favor intente de nuevo."); </script>';
        echo '<script> window.location="administrarProductos.php"; </script>';
      }

 ?>
