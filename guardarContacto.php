<?php
session_start();

require("conexion.php");

$nombres=$_POST['nombre'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];

$query = ("INSERT INTO contactos (nombreSolicitante, correoSolicitante, mensaje) VALUES ('$nombres','$correo', '$mensaje');");

$resultado = mysqli_query($conexion, $query);

if($resultado){
  echo '<script> alert("Hemos recibido su mensaje con exito!."); </script>';
  echo '<script> window.location="contacto.php"; </script>';
}
else
{
  echo '<script> alert("Ocurrió un error, por favor intente de nuevo."); </script>';
  //echo '<script> window.location="contacto.php"; </script>';
echo $query;
}
mysqli_close($conexion);


?>
