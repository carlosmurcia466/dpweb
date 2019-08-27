<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php
        session_start();
        if (isset($_GET['id']))
	       $idC = $_GET['id'];
        ?>
        <title>Home Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="estilo.css" type="text/css">
    </head>
    <body>

        <table  aling="center" width="100%" border="0" background="fotos/fondo2.jpg">
            <tr>
                <td colspan="6">
            <marquee  width=100%  direction="right"  behavior="alternate" ><img src="fotos/logo.jpg" width="500"></marquee>
        </td>
    </tr>
</table>

<center>
    <div id="header">

    <?php
    if ($_SESSION['sTipo'] == NULL) {


        echo' <ul class="nav">
            <li><a href="index.php"><img src="home.png">&nbsp;Inicio</a></li>
            <li><a href=""> <img src="usuario.png">&nbsp;Usuarios</a>
                <ul>
                    <li><a href="login.php"> <img src="login.png">&nbsp;Ingresar </a></li>
                    <li><a href="registrarse.php"> <img src="login.png">&nbsp;Registrarse </a></li>
                </ul>
            </li>
            <li>
                <a href=""><img src="producto.png">&nbsp;Catálogo</a>
                <ul>
                    <li>  <a href="productos.php"><img src="producto.png">&nbsp;Tienda</a></li>
                </ul>
            </li>

            <li><a href=""><img src="contenido.png">&nbsp;Contenidos</a>
                <ul>
                    <li><a href="plata.php">Plataforma web</a></li>
                    <li><a href="aplicaciones lado.php">Aplicaciones del lado del servidor y del lado del cliente</a></li>
                    <li><a href="esdweb.php">Estructura web</a></li>
                    <li><a href="maquetacion.php">Maquetación web</a></li>
                    <li><a href="web2dot0.php">web 2.0</a></li>
                    <li><a href="internet cosas.php">Internet de las cosas</a></li>
                    <li><a href="ipv6.php">IPV6</a></li>
                </ul>
             </li>
            <li><a href=""><img src="mision.png">&nbsp;Empresa</a>
            <ul>
                <li><a href="mision.php"><img src="mision.png">&nbsp;Misión</a></li>
                <li><a href="vision.php"><img src="vision.png">&nbsp;Visión</a></li>
                <li><a href="registrarse.php"><img src="contacto.png">&nbsp;Contáctenos</a></li>
            </ul>

            </li><li><a href="equipo.php"><img src="ayuda.png">&nbsp;Equipo</a></li>
            <li><a href="historia.php"><img src="historia.png">&nbsp;Historia</a></li>
            <li><a href="glosario.php"><img src="glosario.png">&nbsp;Glosario</a></li>
        </ul>';
    }
    if ($_SESSION['sTipo'] == 2) {
        echo ' <ul class="nav">
            <li><a href="indexCliente.php"><img src="home.png">&nbsp;Inicio</a>
            </li>

            <li>
                <a href=""><img src="producto.png">&nbsp;Catálogo</a>
                <ul>
                    <li>  <a href="productos.php"><img src="producto.png">&nbsp;Tienda</a></li>
                </ul>
            </li>
            <li><a href=""><img src="contenido.png">&nbsp;Contenidos</a>
                <ul>
                    <li><a href="plata.php">Plataforma web</a></li>
                    <li><a href="aplicaciones lado.php">Aplicaciones del lado del servidor y del lado del cliente</a></li>
                    <li><a href="esdweb.php">Estructura web</a></li>
                    <li><a href="maquetacion.php">Maquetación web</a></li>
                    <li><a href="web2dot0.php">web 2.0</a></li>
                    <li><a href="internet cosas.php">Internet de las cosas</a></li>
                    <li><a href="ipv6.php">IPV6</a></li>
                </ul>
             </li>

            <li><a href=""><img src="mision.png">&nbsp;Empresa</a>
                <ul>
                    <li><a href="mision.php"><img src="mision.png">&nbsp;Misión</a></li>
                    <li><a href="vision.php"><img src="vision.png">&nbsp;Visión</a></li>
                    <li><a href="contacto.php"><img src="contacto.png">&nbsp;Contáctenos</a></li>
                </ul>
            </li><li><a href="equipo.php"><img src="ayuda.png">&nbsp;Equipo</a></li>
            <li><a href="encuesta.php"><img src="encuesta.png">&nbsp;Encuesta</a></li>
            <li><a href="historia.php"><img src="historia.png">&nbsp;Historia</a>
            </li>
            <li><a href="glosario.php"><img src="glosario.png">&nbsp;Glosario</a></li>
            <li><a href=""> <img src="usuario.png">&nbsp;'.$_SESSION['sNombre'].'</a>
                <ul>
                    <li><a href="perfil.php"> <img src="login.png">&nbsp;Perfil </a></li>
                    <li><a href="salir.php"> <img src="login.png">&nbsp;Cerrar Sesión </a></li>
                </ul>
            </li>
        </ul> ';
    }

     if ($_SESSION['sTipo'] == 1) {

            echo ' <ul class="nav">
            <li><a href="indexAdmin.php"><img src="home.png">&nbsp;Inicio</a></li>
            <li><a href=""><img src="inventario.png">&nbsp;Inventario</a>
                <ul>
                    <li>  <a href="administrarProductos.php"><img src="admInv.png">&nbsp;Administrar Productos</a></li>



                    <li>  <a href="nuevoProducto.php"><img src="nuevoP.png">&nbsp;Nuevo Producto</a></li>
                </ul>
            </li>

            <li><a href=""><img src="listaCli.png">&nbsp;Clientes</a>
                <ul>
                    <li><a href="listadoClientes.php"><img src="listaCli.png">&nbsp;Listado de Clientes</a></li>
                </ul>
            </li>

            <li><a href="listadoCotizaciones.php"><img src="cotizar.png">&nbsp;Cotizaciones</a></li>
            <li><a href="encuesta.php"><img src="encuesta.png">&nbsp;Encuestas</a></li>

             <li><a href="diagrama.php"><img src="db.png">&nbsp;Diagrama Base de Datos</a></li>

            <li><a href=""> <img src="usuario.png">&nbsp;Admin: '.$_SESSION['sNombre'].'</a>

                <ul>
                    <li><a href="perfil.php"> <img src="login.png">&nbsp;Perfil </a></li>
                    <li><a href="salir.php"> <img src="login.png">&nbsp;Cerrar Sesión </a></li>
                </ul>
            </li>
        </ul>';
        }
    ?>
    </div>
</center><br><br>


<center><br><br><br><br>


    <table id="informacion" width="80%" border="0" height="70" align="center" >
        <tr>
            <td colspan="4" whdth="65">

              <h1>Modificar Cliente</h1><br><br>



                <form class="" action="guardarModificacionC.php" method="post">
                  <table id="">

                    <?php
                    if ($_SESSION['sTipo'] == 1)
                    {
                    require ("conexion.php");

                    $resultado = mysqli_query($conexion, "SELECT * FROM usuarios where idUsuario = '$idC'");

                    while ($registro = mysqli_fetch_array($resultado)) {
                        ?>

                        <tr>
                          <input type="hidden" name="idCliente" value="<?php echo $idC ?>">
                          <td><b>Nombres: </b></td>
                          <td><input type="text" name="nombres" value="<?php echo $registro['nombres']; ?>"></td>
                        </tr>
                        <tr>
                          <td><b>Apellidos: </b></td>
                          <td><input type="text" name="apellidos" value="<?php echo $registro['apellidos']; ?>"></td>
                        </tr>
                        <tr>
                          <td><b>Correo: </b></td>
                          <td><input type="text" name="correo" value="<?php echo $registro['correo']; ?>"></td>
                        </tr>
                        <tr>
                          <td><b>Usuario: </b></td>
                          <td><input type="text" name="user" value="<?php echo $registro['user']; ?>"></td>
                        </tr>
                        <tr>
                          <td><b>Contraseña: </b></td>
                          <td><input type="text" name="pass" value="<?php echo $registro['pass']; ?>"></td>
                        </tr>
                        <tr>
                          <td><b>Teléfono: </b></td>
                          <td><input type="text" name="tel" value="<?php echo $registro['telefono']; ?>"></td>
                        </tr>
                        <tr>
                          <td><b>Tipo:</b></td>
                          <td>
                          <?php 

                            if($registro['tipo'] == 1)
                                {
                                    $tp = 'Administrador';
                                }
                                    else
                                        {
                                            $tp= 'Cliente';
                                        }

                           ?>
                            <select name="tipo" id="">
                              <option  selected value="<?php echo $registro['tipo']; ?>"><?php echo $tp; ?></option>
                              <option value="2">Cliente</option>
                              <option value="1">Administrador</option>
                              
                            </select>
                        </td>
                        </tr>
                        <tr>
                          <td><button type="submit" name="Enviar">Actualizar</button></td>
                          <td><a href="listadoClientes.php"><button type="button" name="Cancelar">Cancelar</button></a></td>
                        </tr>
                    <?php
                    }

                    }?>
                  </table>
                </form>
              </center>
                <!--Fin de la informacion -->
            </td>

    </table>
    <br>



   <?php
if ($_SESSION['sTipo'] == NULL) {
    echo'<center>
            <table width="60%" border="0" height="70" align="center" >
            <tr>
                <td align="center" height="60" ><a href="index.php">Inicio</a></td>
                <td align="center"><a  href="web2dot0.php">Web 2.0</a></td>
                <td align="center"><a href="plata.php">Plataformas Web</a></td>
                <td align="center"><a href="esdweb.php">Estructuras Web</a></td>
                <td align="center"><a href="equipo.php">Informacion</a></td>
                <td align="center"><a href="glosario.php">Glosario</a></td>
    </table>
    </center>';
}

if ($_SESSION['sTipo'] == 1) {
    echo '<center>
            <table width="60%" border="0" height="70" align="center" >
        <tr>
                <td align="center" height="60" ><a href="indexAdmin.php">Inicio</a></td>
                <td align="center" height="60" ><a href="listadoClientes.php">Clientes</a></td>
                <td align="center" height="60" ><a href="listadoCotizaciones.php">Cotizaciones</a></td>
                 <td align="center" height="60" ><a href="encuesta.php">Encuestas</a></td>
    </table>
    </center>
    ';
}


if ($_SESSION['sTipo'] == 2) {
    echo '<center>
            <table width="60%" border="0" height="70" align="center" >
        <tr>
                <td align="center" height="60" ><a href="indexCliente.php">Inicio</a></td>
                <td align="center"><a  href="web2dot0.html">Web 2.0</a></td>
                <td align="center"><a href="plata.php">Plataformas Web</a></td>
                <td align="center"><a href="esdweb.php">Estructuras Web</a></td>
                <td align="center"><a href="equipo.php">Informacion</a></td>
                <td align="center"><a href="glosario.php">Glosario</a></td>
    </table>
    </center>
    ';
}
?>


<center>

                <table width="80%" border="0" height="70" align="center">
                    <td colspan="6">
                        <hr>
                    <center>
                        <font size="2" color="grey">
                        Derechos Reservados 2017, Home Store
                        </font>
                    </center>

            </td>
    </table>
</center>
</body>
</html>
