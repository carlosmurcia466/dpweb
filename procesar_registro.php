<?php

require ("conexion.php");

$nombre = $_POST['nombres'];
$apes = $_POST['apellidos'];
$usu = $_POST['usuario'];
$pass = $_POST['psw'];
$corr = $_POST['correo'];
$tele = $_POST['telefono'];
$tip = $_POST['tipo'];

//Comprobar si el usuario ya existe
$query1 = "SELECT user FROM usuarios where user= '$usu'";
$resultado1 = mysqli_query($conexion, $query1);
$existe = mysqli_num_rows($resultado1);
if ($existe > 0)
{
    $cliente = mysqli_fetch_array($resultado1); //Extrae los datos de la consulta
    if ($cliente['user'] == $usu)
    {
       echo '<script> alert("Ya existe ese usuario, elija otro nombre de usuario"); </script>';
       
     

       echo '<script> window.location="Registrarse.html"; </script>';
    }
}
else
{

$query = ("INSERT INTO usuarios(user, nombres, apellidos, correo, pass, telefono, tipo) VALUES ('$usu','$nombre', '$apes','$corr','$pass', '$tele', '$tip');");
  /*  $query = ("INSERT INTO usuarios VALUES ('$usu','$nombre', '$apes','$corr','$pass', '$tele', '$tip');");  */
    /* $query = ("INSERT INTO usuarios (user, nombre, apellidos, correo, pass, telefono, tipo) values ('$usu','$nombre', '$apes','$corr','$pass', '$tele', '$tip');"); */

    $resultado = mysqli_query($conexion, $query);
//validamos que funciono la insercion
    if ($resultado)
    {
        echo '<script> alert("Registro realizado con exito!."); </script>';
        
        echo '<script> window.location="index.php"; </script>';
    } else
    {
        echo '<script> window.location="index.php"; </script>';
       
    }
}



mysqli_close($conexion);
?>


    
  		