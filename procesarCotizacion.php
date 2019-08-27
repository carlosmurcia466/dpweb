<?php
session_start();

require("conexion.php");




$codigo= $_SESSION['tipoP'];
$idUs= $_SESSION['sIdUsuario'];
$cant= $_POST['numProd'];
$com= $_POST['coments'];

$query = ("INSERT INTO cotizaciones (idUsuario, idProducto, cantidad, mensaje) VALUES ('$idUs','$codigo', '$cant', '$com');");

$resultado = mysqli_query($conexion, $query);

if($resultado){
  echo '<script> alert("Hemos recibido su cotización con exito!."); </script>';
  echo '<script> window.location="productos.php"; </script>';
}
else
{
  echo '<script> alert("Ocurrió un error, por favor intente de nuevo."); </script>';
  echo '<script> window.location="productos.php"; </script>';
}
mysqli_close($conexion);


?>
