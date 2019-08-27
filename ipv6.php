<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>


        <title>Home Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="estilo.css" type="text/css">
    </head>
    <body>
        <?php
        session_start();
        ?>
        <table  aling="center" width="100%" border="0" background="fotos/fondo2.jpg">
            <tr>
                <td colspan="6">
            <marquee  width=100%  direction="right"  behavior="alternate" ><img src="fotos/logo.jpg" width="500"></marquee>
        </td>
    </tr>
</table>

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
                    <li><a href="salir.php"> <img src="login.png">&nbsp;Cerrar Sesión </a></li>
                </ul>
            </li>
        </ul>';
        }
    ?>  
    
    
</div>

<center><br><br><br><br>
    <table id="informacion" width="80%" border="0" height="70" align="center" >
        <tr>
            <td colspan="4" whdth="65">


                <!--Informacion a mostrar -->

                <h1>IPV6</h1>

                <br><br>
                <table>
                    <tr>
                        <td> <img src="fotos/ipv6.png"></td>
                        <td> Es  el protocolo de Internet de última generación, está diseñado con el objetivo de permitir que la Internet continúe expandiéndose de manera constante, tanto en términos del número de nodos conectados, así como también, de la cantidad total de tráfico de datos transmitidos. Tal como su abreviatura lo dice “versión 6 del protocolo de Internet”.</td>
                    </tr>    
                </table>

                <br><br>
                Para comunicarse a través de Internet, las computadoras y otros dispositivos deben tener direcciones de remitente y de destinatario. Estas direcciones numéricas se conocen como “direcciones de protocolo de Internet”. A medida que Internet y su cantidad de usuarios crecen exponencialmente, también crece la necesidad de direcciones IP.

                <br><br>
                IPv6 es un estándar desarrollado por el Grupo de trabajo de ingeniería de Internet (IETF), una organización que desarrolla tecnologías de Internet. Anticipándose a la necesidad de un mayor número de direcciones IP, el IETF creó IPv6 para satisfacer la demanda del creciente número de usuarios y de dispositivos que acceden a Internet. 

                <br><br>
                IPv6 permite que un mayor número de usuarios y de dispositivos se comunique a través de Internet por medio del uso de números más grandes para la creación de direcciones IP
                Por lo general las direcciones IPv6 están compuestas por dos partes lógicas: un prefijo de 64 bits y otra parte de 64 bits que corresponde al identificador de interfaz, que casi siempre se genera automáticamente a partir de la dirección MAC (Media Access Control address) de la interfaz a la que está asignada la dirección.

                <br><br>
                El siguiente es un ejemplo de dirección IPv6:

                <br><br>
                <img src="fotos/ej ipv6.png">

                <br><br>
                <h2>CARACTERISTICAS DE IPv6:</h2>

                <br><br>
                Las principales características de la IPv6 se sintetizan en el mayor espacio de direccionamiento, seguridad, autoconfiguración y movilidad. Pero también hay otras que son importantes mencionar:

                <br><br>
                Infraestructura de direcciones y enrutamiento eficaz y jerárquica.<br><br>
                Mejora de compatibilidad para Calidad de Servicio (QoS) y Clase de Servicio (CoS).<br><br>
                Multicast: envío de un mismo paquete a un grupo de receptores.<br><br>
                Anycast: envío de un paquete a un receptor dentro de un grupo.<br><br>
                Movilidad: una de las características obligatorias de IPv6 es la posibilidad de conexión y desconexión de nuestro ordenador de redes IPv6 y, por tanto, el poder viajar con él sin necesitar otra aplicación que nos permita que ese enchufe/desenchufe se pueda hacer directamente.<br><br>
                Seguridad Integrada (IPsec): IPv6 incluye IPsec, que permite autenticación y encriptación del propio protocolo base, de forma que todas las aplicaciones se pueden beneficiar de ello.<br><br>
                Capacidad de ampliación.<br><br>
                Calidad del servicio.<br><br>
                Velocidad.

                <br><br>
                <h2> VENTAJAS Y DESVENTAJAS DE IPv6.</h2>

                <br><br>
                <h3>Ventajas:</h3>

                <br><br>
                Espacio de direcciones más grandes<br><br>
                Nuevo formato de encabezado.<br><br>
                Espacio de direcciones más grande.<br><br>
                Infraestructura de direcciones y enrutamiento eficaz y jerárquica.<br><br>
                Seguridad integrada. <br><br>
                Mejora de la compatibilidad para la calidad de servicio (QoS).<br><br>
                Nuevo protocolo para la interacción de nodos vecinos.<br><br>

                <br><br>
                <h3>Desventajas:</h3>

                <br><br>
                La necesidad de extender un soporte permanente. Necesita una dirección IPv4 o algún tipo de NAT en los routers pasarela.<br><br>
                En la actualidad una gran parte de las redes son ipv4 por lo cual la implementación total de ipv6 sería muy costosa y tardaría mucho tiempo mientras tanto se requieren la implementación de los mecanismos de transición para la interacción de las 2 redes.


                <!--Fin de la informacion -->
            </td>

    </table>
    <br>

<?php
    if (!isset($_SESSION['sTipo'])) {
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





