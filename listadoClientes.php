
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
        ?>
        <title>Home Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="estilo.css" type="text/css">
    </head>
    <script LANGUAGE="JavaScript">
       function confirmSubmit()
        {
           var agree=confirm("Está seguro de eliminar este registro? Este proceso es irreversible.");
           if (agree)
             return true ;
           else
              return false ;
        }
</script>
    <body background="fotos/fondo2.jpg">

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
                    <li><a href="login.html"> <img src="login.png">&nbsp;Ingresar </a></li>
                    <li><a href="registrarse.html"> <img src="login.png">&nbsp;Registrarse </a></li>
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
                <li><a href="registrarse.html"><img src="contacto.png">&nbsp;Contáctenos</a></li>
            </ul>

            </li><li><a href="equipo.html"><img src="ayuda.png">&nbsp;Equipo</a></li>
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
            </li><li><a href="equipo.html"><img src="ayuda.png">&nbsp;Equipo</a></li>
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
    <table width="80%" border="0" height="70" align="center" class="pro">



                <!--Informacion a mostrar -->


                <h1>Listado de Clientes Registrados</h1>


                <table class="pro">
                    <tr>
                        <td><b>Usuario</b></td>
                        <td><b>Nombres</b></td>
                        <td><b>Apellidos</b></td>
                        <td><b>Correo</b></td>
                        <td><b>Teléfono</b></td>
                        <td></td>
                        <td></td>
                    </tr>


                    <?php
                    if ($_SESSION['sTipo'] == 1)
                    {
                    require ("conexion.php");

                    $resultado = mysqli_query($conexion, "SELECT * FROM usuarios where tipo=2");

                    while ($registro = mysqli_fetch_array($resultado)) {
                        ?>

                        <tr>
                            <td><?php echo $registro['user']; ?></td>
                            <td><?php echo $registro['nombres']; ?></td>
                            <td><?php echo $registro['apellidos']; ?></td>
                            <td><?php echo $registro['correo']; ?></td>
                            <td><?php echo $registro['telefono']; ?></td>
                            <td><a href="mttoClientes.php?id=<?php echo $registro['idUsuario']; ?>&a=m">Modificar</a></td>
                            <td><a onclick="return confirmSubmit()" href="mttoClientes.php?id=<?php echo $registro['idUsuario']; ?>&a=e">Eliminar</a></td>
                        </tr>

                    <?php
                    }

                    }?>

                    <!--Fin de la informacion -->


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
