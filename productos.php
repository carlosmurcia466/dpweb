<?php
ob_start("ob_gzhandler");
session_start();
mysql_connect('localhost','root','')or die('Error: '.mysql_error());
//mysql_connect('sql211.260mb.net','n260m_15879355','huawei')or die('Error: '.mysql_error());
//Seleccionamos la BD
//mysql_select_db('n260m_15879355_nueva')or die('Error: '.mysql_error());
mysql_select_db('dpweb')or die('Error: '.mysql_error());

if(isset($_SESSION['carro']))
$carro=$_SESSION['carro'];
else $carro=false;
$qry=mysql_query("select * from productos order by idProducto asc");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php
       
        ?>
        <title>Home Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="estilo.css" type="text/css">
    </head>
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
    if (!isset($_SESSION['sTipo'])) {


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
    if (isset($_SESSION['sTipo']) && $_SESSION['sTipo'] == 2) {
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

     if (isset($_SESSION['sTipo']) && $_SESSION['sTipo'] == 1) {

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
    <table width="80%" border="0" height="70" align="center" >
        <tr>
            <td colspan="4" whdth="65">


                <!--Informacion a mostrar -->

                <h1>Productos</h1><br>

<center>
  <div class="prod">
    
   <table width="272" align="center" cellpadding="0" style="border:1px solid #000000;">
        <tr valing="middle" bordercolor="#FFFFF" bgcolor="DFDFDF" class="catalogo">
            <td width="170"><strong>Producto</strong></td>
            <td><b>Descripcion:</b></td>
            <td><b>Foto:</b></td>
            <td width="77"><strong>Precio</strong></td>
            <td width="25" aling="right"><a href=vercarrito.php?<?php echo SID ?> title="Ver el contenido del carrito">
            <img src="vercarrito.gif" width="25" height="21" border="0"></a></td>
        </tr>
        <?php
            while($row=mysql_fetch_assoc($qry)){
        ?>
        <tr valing="middle" class="catalogo">
            <td><?php echo $row['nombre']?></td>
            
            <td><?php echo $row['descripcion']; ?></td>
            <td><?php echo '<img src= "'.$row['foto'].'" width=100 height=100>'; ?></td>
            <td><?php echo $row['precio']?></td>
            <td align="center">
        <?php
        if(!$carro || !isset($carro[md5($row['idProducto'])]['identificador']) || $carro[md5($row['idProducto'])]['identificador']!=md5($row['idProducto'])){
        ?>
            <a href="agrecar.php?<?php echo SID ?>&id=<?php echo $row['idProducto'];?>">
            <img src="productonoagregado.gif" border="0" title="Agregar al acrrito"></a>
        <?php
        }
        else
        {
            ?>
            <a href="borrarcar.php?<?php echo SID?>&id=<?php echo $row['idProducto'];?>">
            <img src="productoagregado.gif" border="0" title="Quitar del carrito"></a>
        <?php
        }
        ?>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
<?php
ob_end_flush();

?>
  </div>


                <br>
</center>
<?php
    if (!isset($_SESSION['sTipo'])) {
     $oc='hidden';
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
    if (isset($_SESSION['sTipo']) && $_SESSION['sTipo'] == 1) {
    echo '<center>
            <table width="60%" border="0" height="70" align="center" >
        <tr>
                <td align="center" height="60" ><a href="indexAdmin.php">Inicio</a></td>
                <td align="center" height="60" ><a href="listadoClientes.php">Clientes</a></td>
                <td align="center" height="60" ><a href="cotizaciones.php">Cotizaciones</a></td>
                 <td align="center" height="60" ><a href="encuesta.php">Encuestas</a></td>
    </table>
    </center>
    ';
}
    if (isset($_SESSION['sTipo']) && $_SESSION['sTipo'] == 2) {
    echo '<center>
            <table width="60%" border="0" height="70" align="center" >
        <tr>
                <td align="center" height="60" ><a href="indexCliente.php">Inicio</a></td>
                <td align="center"><a  href="web2dot0.php">Web 2.0</a></td>
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
				