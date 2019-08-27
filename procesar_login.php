<?php

include("conexion.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = mysqli_real_escape_string($conexion, $_POST['usuario']);
    $password = mysqli_real_escape_string($conexion, $_POST['pass']);

    $sql_query = "SELECT * FROM usuarios WHERE user='$username' and pass='$password'";
    $result = mysqli_query($conexion, $sql_query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);


    if ($count == 1) {
        $_SESSION['login'] = $count;
        $_SESSION['sID'] = $row['idUsuario'];
        $_SESSION['sUsuario'] = $row['user'];
        $_SESSION['sNombre'] = $row['nombres'] . ' ' . $row['apellidos'];
        $_SESSION['sTipo'] = $row['tipo'];

        /* Validacion de tipo de usuario administrador */
      if ($_SESSION['sTipo'] == 1) {
            header("location: indexAdmin.php");
        } else {
            header("location: indexCliente.php");
        }
    } else {
        echo '<script> alert("Usuario o contraseña incorrectos."); </script>';
        echo '<script> window.location="login.php"; </script>';
    }
}
?>
