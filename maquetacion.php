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
<p>
                <h1>Maquetación Web</h1>

                <br><br>
                <h2>Maquetación </h2>

                <br><br>
                La maquetación, también llamada a veces diagramación, es un oficio del diseño “editorial” que se encarga de organizar en un espacio, contenidos escritos, visuales y en algunos casos audiovisuales (multimedia) en medios impresos y electrónicos, como libros, diarios y revistas. Estrictamente, el acto de maquetar tan solo se relaciona con la distribución de los elementos en un espacio determinado de la página 920pxs.
                La maquetación web se sabe dónde empieza; en la combinación de HTML (estructura del código) y CSS (estilos aplicados al código HTML), pero donde acaba ya no está tan claro. Según a quien preguntes, algunos te dirán que termina ahí, y otros te dirán que el Javascript (comportamientos) también forma parte del “pack”. Yo no tengo ninguna duda de que él no se puede separar Javascript y maquetación, y que un maquetador que no sabe aplicar Javascript en sus aplicaciones web, no es un buen maquetador.

                <br><br>
                Antiguamente las tres patas del “pack” se agrupaban en un fichero HTML, pero es una buena práctica el desacoplar estructura (HMTL), de estilos (CSS) y de comportamientos (Javascript). Esto hace que el código esté mejor estructurado, sea más limpio, y sea más sencillo trabajar en equipo.
                El proceso de maquetación web es la transformación del diseño de un producto web en un conjunto de archivos (html, css, js) capaces de ser reproducidos por los navegadores web.

                <br><br>
                La maquetación web es el proceso en el que el prototipo gráfico también denominado «layout»  (con los requisitos estructurales y estéticos definidos y aprobados en un análisis inicial) pasa a transformase en código html, css y js (estándares web) para que los navegadores puedan interpretarlo correctamente.

                <br><br><br>
                <h2>Cómo podemos editar los archivos web</h2>

                <br><br>
                La edición de los archivos web y su base de html se realiza mediante el uso de editores de texto básico como: Notepad++ o UltraEdit, que nos permiten escribir código sobre un documento en blanco.

                <br><br>
                Para poder maquetar un documento web con este tipo de editores necesitaremos tener amplios conocimientos en html y ciertas nociones de programación. Para facilitar este proceso existen los denominados editores gráficos de html, que nos permiten maquetar un documento web basado en estándares sin necesidad de teclear ni una línea de código mediante el uso de un entrono gráfico de trabajo.
                Uno de los editores gráficos html más utilizado a nivel profesional es: Adobe Dreamweaver.
                La maquetación web se basa en conceptos mucho más cercanos al diseño que a la programación, por lo que con este curso aprenderás los fundamentos del HTML5 y de CSS3 y verás con ejemplos prácticos cómo se maqueta una web, descubriendo las mecánicas principales que llevan a cabo los maquetadores, los profesionales encargados de convertir diseños web en sitios funcionales.

                <br><br><br>
                <h2>Maquetación Web, Ventajas y Desventajas</h2>

                <br><br>
                <table>
                    <tr>
                        <td><img src="fotos/maquetacion.png" /> </td>
                        <td>Maquetar una página web, no es más que pasar el diseño hecho en papel a código HTML, poniendo cada cosa en su lugar EJ: una cabecera, un menú, etc.

                            Hasta hace unos años la única manera de maquetar una página web era mediante tablas HTML, pero esto tiene muchas desventajas y limitaciones, por eso la técnica de maquetación fue evolucionando con los años hasta llegar al punto donde no se usan tablas, si no capas (los famosos DIVs) a las que se le dan formato mediante CSS. 
                        </td>
                    </tr>
                </table>

                <br><br>
                <h2>¿Qué es un div?</h2>

                <br><br>
                Son contenedores o bloques donde podemos meter lo que queramos dentro (imágenes, texto, animaciones, otro bloque, o todo al mismo tiempo) a los que se le asigna un ancho, alto y posición, de esta manera se van a ir posicionando consiguiendo la estructura que queremos.

                <br><br>
                Como podemos ver, tenemos 3 capas estructuradas de la siguiente manera:

                <br><br>

                <table>
                    <tr> 
                        <td>Capa 1: es la capa principal y contenedora<br><br>
                            Capa 2: capa dentro de la capa contenedora 1 y alineada a la izquierda (float:left;)<br><br>
                            Capa 3: igual que la capa 2, solo que tiene un margen con respecto a esta última (float:left; margin: 10px; ya veremos esto más en detalle).<br><br>
                        </td>
                        <td> <img src="fotos/capas.png" /> </td>
                    </tr>
                </table>


                <br><br><br>
                <h2>Ventajas e inconvenientes de la maquetación CSS</h2>

                <br><br>
                La maquetación por capas, también llamada maquetación CSS, es una forma de crear webs más evolucionada y que mejora en mucho a la maquetación tradicional (que antes se hacía por tablas), aunque también tiene sus inconvenientes.

                <br><br>
                <h3>Ventajas</h3>

                <br><br>
                <b>La separación del contenido de la página y del estilo o aspecto con el que se deben mostrar</b>. Tener en cuenta que, cuanto más separemos estos dos elementos, más sencillo será el mantenimiento de las páginas y el procesamiento de la información. Con ello también podremos obtener páginas más limpias y claras.<br><br>
                <b>Ahorro en la transferencia.</b> Si todos los estilos y posiciones de los elementos se introducen en un documento externo, liberaremos el código de la página y ocupará mucho menos. Como la declaración de estilos se almacena en la caché del navegador, sólo se transfiere en la primera página que se visita del sitio, con lo que la segunda y posteriores páginas que se soliciten se cargarán mucho más rápido. <br><br>
                <b>Facilidad para alterar el aspecto de la página sin tocar el código HTML.</b> Como toda la información de los estilos y el posicionamiento de las capas se encuentran en un mismo archivo, si deseamos cambiar cualquier elemento de la página -ya sea su posición o su aspecto-, sólo tenemos que actualizar la hoja de estilos y los cambios se verán automáticamente en todo el web.<br><br>
                <b>Se obtiene un mayor control de la presentación del sitio al poder tener todo el código CSS reunido en uno</b>, lo que facilita su modificación.<br><br>
                Al poder elegir el archivo CSS que deseamos mostrar, puede <b>aumentar la accesibilidad</b> ya que podemos asignarles un código CSS concreto a personas con deficiencias visuales, por ejemplo. Esto lo detecta el navegador web.<br><br>
                <b>Conseguimos hacer mucho más legible el código HTML</b> al tener el código CSS aparte (Siempre que no usemos estilos en línea, claro está).<br><br>
                <b>Pueden mostrarse distintas hojas de estilo según el dispositivo que estemos utilizando</b> (versión impresa, versión móvil, leída por un sintetizador de voz…) o dejar que el usuario elija.<br><br>
                <b>Gracias a la técnica CSS Sprites podemos aligerar la carga de nuestro sitio al juntar todas las imágenes en una</b>.<br><br>
                <b>Las novedades de CSS3 nos permiten ahorrarnos tiempo y trabajo</b> al poder seguir varias técnicas (bordes redondeados, sombra en el texto, sombra en las cajas, etc) sin necesidad de usar un editor gráfico.<br><br>

                <br><br>
                <h3>Desventajas </h3>

                <br><br>
                <b>Diferencias entre navegadores.</b> Dependiendo del navegador también cambian las etiquetas de estilos soportadas, por lo que las páginas puede que no se vean exactamente igual en unos clientes que en otros. También, al igual que ocurre con HTML, hay atributos no estándar o que tienen valores por defecto diferentes. Cuando se empieza con la maquetación en CSS, puede resultar un tema bastante complicado y crearnos bastantes dolores de cabeza, no obstante, se trata de, poco a poco, ir aprendiendo todos los atributos y los navegadores donde se visualizan o no. <br><br>
                <b>Actualizado:</b> Las diferencias entre navegadores en la actualidad se han minimizado bastante y lo cierto es que con unas pocas técnicas podremos diseñar páginas que se vean exactamente igual en cualquier navegador.<br><br>
                <b>Dificultad.</b> Sin duda, si estamos acostumbrados al HTML, pasar a CSS resulta más complicado y requiere un estudio más profundo. Sin embargo, este paso nos brindará un mayor control de los elementos de la página y ampliará nuestras fronteras a la hora de maquetar.<br><br>




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





