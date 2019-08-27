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
                <h1>ESTRUCTURA DE UN SITIO WEB </h1>

                <br><br>
                La estructura de un conjunto de páginas web es muy importante, ya que una buena estructura permitirá al lector visualizar todos los contenidos de una manera fácil y clara, mientras que un conjunto de páginas web con una mala estructura producirá en el lector una sensación de estar perdido, no encontrará rápidamente lo que busca y terminará por abandonar nuestro sitio.
                
                <br><br>
                Antes de empezar a diseñar el sitio Web hay que organizarlo y para ello hay que tener claro cuál va a ser el propósito del sitio Web, sus contenidos y la audiencia potencial de la que dispondrá. Lo que va a determinar la estructura de la Web van a ser en gran medida los contenidos; ellos nos deben indicar cuál de los siguientes tipos de estructura es el más adecuado:

                <br><br>
                <h2>Árbol</h2>
                
                <br><br><br>
                <table>
                    <tr>
                        <td><img src="fotos/arbol.png"> </td>
                        <td> En esta estructura existe una página principal que llamaremos index desde la que se puede llegar a otras páginas de la Web. Estas otras páginas a su vez son un nodo para llegar a otro grupo de páginas. De esta manera llegaremos a tener las páginas agrupadas en niveles, de manera que para llegar desde el primero al último se deben atravesar los intermedios. Es una estructura muy jerarquizada y algo compleja y difícil para navegar. Puede ser útil para estructurar nuestro sitio en canales o grupos de páginas independientes. En cualquier caso no conviene que el número de niveles sea excesivo, nunca más de 3. Piensa que si queremos ir de una página a otra en el mismo nivel en otra rama del árbol, debemos retroceder hasta la raíz para luego alcanzar la página de destino. Esta imagen te aclarará la estructura.</td>
                    </tr>
                </table>

                <br><br>
                Esta forma de organizar el sitio es totalmente opuesto al anterior. Realmente no existe una página raíz o principal, lo que tenemos es una especie de lista de páginas donde cada una tiene dos vecinas: una a la izquierda y otra a la derecha, excepto las páginas de los extremos. 

                <br><br>
                <img src="fotos/listas.png">

                <br><br>
                Una variante presentaría las páginas primera y última enlazadas. Esta forma de organizar un sitio es muy parecido a un libro donde cada página sería un capítulo del mismo. Pasamos del primer al último capítulo a través de los intermedios. Es una implementación muy adecuada para manuales o para procesos donde el usuario deba recorrer forzosamente una serie de páginas.

                <br><br>
                <h2>Mixta</h2>

                <br><br>
                Esta estructura aprovecha las ventajas de las dos anteriores. Las páginas están jerarquizadas en niveles, pero dentro de cada nivel se organizan como listas, de forma que podemos recorrer todas las páginas de un mismo nivel sin tener que salir de él. En realidad ni el árbol puro ni las listas puros son del todo eficientes, por lo que es habitual mezclar ambas estructuras.

                <br><br>
                <img src="fotos/mixta.png">

                <br><br>
                <h2>Red</h2>

                <br><br>
                Las páginas del sitio también pueden estar totalmente interconectadas, es decir, desde cada página podemos ir a cualquier otra del sitio. Realmente la interconexión de absolutamente todas las páginas sería un caso extremo. Es una estructura de apariencia algo anárquica en la que hay que cuidar mucho de no dejar enlaces abiertos, es decir, apuntando a una página inexistente. Además debemos evitar que el usuario se pierda en una maraña de enlaces. Por todo esto ello es necesario planificarla muy bien.

                <br><br>
                <img src="fotos/red.png">


                <br><br>
                <h2>¿Qué estructura escoger?</h2>
                
                <br><br>
                Dependerá del sitio, pero esto tampoco quiere decir que tengas que elegir una de estas. Es muy probable que tu sitio presente una mezcla de estas estructuras. Por ejemplo si tienes un sitio donde se publican cursos de programación es probable que cada curso forme una estructura tipo mixto y todos los cursos juntos estén organizados como un árbol (una rama para cada curso). Sin embargo si tienes un sitio dedicado al hardware del ordenador, donde cada página se dedica a un elemento del mismo, lo recomendable podría ser una topología de red de forma que un visitante pueda ir directamente a cualquier elemento del ordenador. Una regla de oro: procura que un visitante nunca esté a más de cuatro click de la página a la que quiera llegar.
                ¿Cómo organizar el sitio Web en nuestro ordenador?
                Veremos como a medida que vayamos generando nuestras páginas Web a su vez deberemos guardar en nuestro ordenador una numerosa cantidad de archivos (imágenes, animaciones, archivos de texto, video, música,.......) por lo que es aconsejable tener un cierta organización con el fin de saber dónde se encuentra cada cosa.

                <br><br>
                Una posible organización sería la siguiente:

                <br><br>
                <img src="fotos/1111.png">

                <br><br>
                La mayoría de los archivos asociados a las páginas son imágenes, por ello hemos creado una carpeta exclusivamente para este tipo de archivos.

                <br><br>
                - En la carpeta "multimedia", podrían ir videos, animaciones flash, música.<br><br>

                - En la carpeta "archivos", todo lo que no se incluya en las carpetas anteriores, por ejemplo documentos *.doc o *.pdf<br><br>

                Si nuestro sitio Web es muy grande, es decir, imagina que tenemos cuatro páginas sobre las fiestas (fiestas patronales, Semana Santa,...) y cinco sobre el entorno, cada una explicando una ruta que se puede hacer desde nuestra población, la estructura se puede complicar un poco mas, pudiendo parecerse a lo siguiente:<br><br>

                <img src="fotos/2222.png">

                <br><br>
                <img src="fotos/3333.png">


                <!--Fin de la informacion -->
            </td>

    </table>
    <br>

<?php
    if (!isset($_SESSION['sTipo']) ) {
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





