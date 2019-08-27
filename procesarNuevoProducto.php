<?php

require ("conexion.php");

$nom = $_POST["nombre"];
$tip = $_POST["tipo"];
$pre = $_POST["precio"];
$desc = $_POST["descripcion"];
$exist= $_POST["existencias"];

$foto = $_FILES["foto"]["name"];

$ruta = $_FILES["foto"]["tmp_name"];

$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="fotos/".$foto;
copy($ruta,$destino);

$direccion= "fotos/".$foto;

$query = ("INSERT INTO productos(nombre, tipo, precio, descripcion, existencias, foto) VALUES ('$nom', '$tip','$pre','$desc','$exist' ,'$direccion');");
/* $query = ("INSERT INTO usuarios (user, nombre, apellidos, correo, pass, telefono, tipo) values ('$usu','$nombre', '$apes','$corr','$pass', '$tele', '$tip');"); */

$resultado = mysqli_query($conexion, $query);
if($resultado){
  echo '<script> alert("Registro guardado con exito!."); </script>';
  echo '<script> window.location="administrarProductos.php"; </script>';
}
else
{
  echo '<script> alert("Ocurrió un error, por favor intente de nuevo."); </script>';
  echo '<script> window.location="administrarProductos.php"; </script>';
}
mysqli_close($conexion);






///htdocs/home/vol6_8/eshost.com.ar/eshos_19611460/fotos/
?>
