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

<center><br><br><br><br>
    <table id="informacion" width="80%" border="0" height="70" align="center" >
        <tr>
            <td colspan="4" whdth="65">


                <!--Informacion a mostrar -->

                <h1>WEB 2.0</h1>

                <br><br>
                Web 2.0 es un concepto que se acuñó en 2003 y que se refiere al fenómeno social surgido a partir del desarrollo de diversas aplicaciones en Internet. El término establece una distinción entre la primera época de la Web (donde el usuario era básicamente un sujeto pasivo que recibía la información o la publicaba, sin que existieran demasiadas posibilidades para que se generara la interacción) y la revolución que supuso el auge de los blogs, las redes sociales y otras herramientas relacionadas.

                <br><br>
                <table>
                    <tr>
                        <td> La Web 2.0, por lo tanto, está formada por las plataformas para la publicación de contenidos, como Blogger, las redes sociales, como Facebook, los servicios conocidos como wikis (Wikipedia) y los portales de alojamiento de fotos, audio o vídeos (Flickr, YouTube)</td>

                        <td> <img src="fotos/web2.png"> </td>
                    </tr>
                </table>

                La esencia de estas herramientas es la posibilidad de interactuar con el resto de los usuarios o aportar contenido que enriquezca la experiencia de navegación.

                <br><br>
                Es importante tener en cuenta que no existe una definición precisa de Web 2.0, aunque es posible aproximarse a ella estableciendo ciertos parámetros. Una página web que se limita a mostrar información y que ni siquiera se actualiza, forma parte de la generación 1.0. En cambio, cuando las páginas ofrecen un nivel considerable de interacción y se actualizan con los aportes de los usuarios, se habla de Web 2.0.

                <br><br>
                Cabe mencionar que las diferencias entre la primera y la segunda era de la Web no se basan en un cambio a nivel tecnológico en los servidores, aunque naturalmente se ha dado un considerable avance en el hardware; es el enfoque de la Red, los objetivos y la forma en la que los usuarios comenzaron a percibir la información en línea lo que caracteriza este renacer, que tuvo lugar silenciosa pero velozmente, a comienzos del nuevo milenio.

                <br><br>
                Hasta entonces, Internet era un universo de datos mayoritariamente estáticos, una fuente de consulta revolucionaria que atraía a millones de personas a contemplarla pasivamente. Si bien los foros y el chat datan de la Web 1.0, éstos se encontraban bien diferenciados de los sitios tradicionales (tal y como ocurre en la actualidad); navegar era similar a visitar un gran centro comercial, con infinidad de tiendas, en las cuales era posible comprar productos, pero no alterar sus vidrieras.

                <br><br>
                <img src="fotos/web20www.png">

                <br><br>
                Con la llegada de la Web 2.0, se produjo un fenómeno social que cambió para siempre nuestra relación con la información, principalmente porque nos hizo parte de ella: en la actualidad, una noticia acerca de una manifestación en contra del maltrato animal no está completa sin mostrar cuántos usuarios de Facebook leyeron y disfrutaron de la misma, qué porcentaje de lectores está a favor del movimiento, y los comentarios, que muchas veces aportan datos importantes o señalan errores.

                <br><br>
                Como ocurre con cualquier hito en la historia de la humanidad, la democracia asociada a la Web 2.0 ha impactado seriamente en los medios de comunicación tradicionales, principalmente en aquéllos que no supieron adaptarse a esta nueva ola de libertades. La última década ha visto el nacimiento de diversos periódicos y revistas independientes que han sabido establecerse y conseguir un gran éxito a nivel mundial, opuesto al decaimiento de antiguos colosos.

                <br><br>
                No es fácil para los periodistas aceptar que bajo un artículo que les tomó días de investigación y elaboración los usuarios tengan el derecho a insultarlos y despreciarlos, a amenazar a sus familias o a colgar fotomontajes con su cara; pero éstas son algunas de las consecuencias negativas de la Web 2.0, y solamente aceptándolas y evitando astutamente los abusos es posible alcanzar el éxito sin morir en el intento.

                <br><br>
                Algunos expertos asocian la Web 3.0 a la Web semántica, que consiste en la inclusión de metadatos semánticos u ontológicos (que describen los contenidos y las relaciones entre los datos) para que puedan ser rastreados por sistemas de procesamiento.


                <br><br>
                <h2>CARACTERISTICAS</h2>
                
                <br><br>
                	Etapa que ha definido nuevos proyectos en internet y se preocupa por brindarle mejores soluciones a un usuario final.<br><br>
                	Es tradicional hacia aplicaciones web enfocadas al usuario final<br><br>
                	Es la presentación de la evolución de las aplicaciones.<br><br>
                	Es una actitud y no precisamente una tecnología.<br><br>


                <br><br>
                <h3>VENTAJAS:</h3>
                
                <br><br>
                	Acceso más fácil a contenidos<br><br>
                	Capaz de crear mapas mentales en línea para después imprimirlos y o insertarlos en una web.<br><br>
                	Permite a los usuarios a conectarse y participar como creadores de contenidos  generados como usuarios en una comunidad virtual.<br><br>
                	Espacio para crear y publicar.<br><br>
                	Entorno para compartir recursos.<br><br>
                	Redes sociales.<br><br>
                	YouTube.<br><br>
                	Google.<br><br>
                	Individualizar la enseñanza.<br><br>
                	Facilita la retroalimentación entre alumno y profesor.<br><br>

                <br><br>
                <h3>DESVENTAJAS:</h3>
                
                <br><br>
                	Genera desconfianza a la hora de establecer una conexión entre un usuario y otro<br><br>
                	Mas comodidad menos intimidad<br><br>
                	La intelectualidad de muchos usuarios implica bajos niveles de calidad de muchos sitios web.<br><br>
                	Los archivos se dejan guardados con herramientas ofimáticas quedando vulnerables a los usuarios.<br><br>


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





