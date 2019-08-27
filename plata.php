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

                <h1>Plataforma WEB</h1>
                <p><br><br>
                    Una plataforma web es más que una página web. Una plataforma incluye elementos adicionales a la página web tales como aplicaciones,
                    carritos de compras, formularios, convertidores, instancias de aprobación y alguna otra solución específica para la necesidad del cliente
                    y el mercado. Estos elementos pueden ser públicos o privados, tales como sistemas de comunicación interna o inventarios.

                    <br><br>

                <br> <h2>¿Qué es una aplicación web?</h2><br><br>

                Desde la perspectiva de un usuario, puede ser difícil percibir la diferencia entre un sitio web y una aplicación web. Según el Diccionario Oxford en línea, nos enteramos que una aplicación es "un programa o conjunto de programas para ayudar al usuario de un ordenador para procesar una tarea específica". Una aplicación web es básicamente una manera de facilitar el logro de una tarea específica... en la Web, a diferencia de un sitio web estático que es más bien una herramienta, no menos importante, para la comunicación. El término más decisivo de esta definición es "tarea específica". La aplicación web por lo tanto permite al usuario interactuar directamente contigo y tus datos, todo en forma personalizada, para llevar a cabo esa tarea específica! Déjame explicar...

                <br><br>
                Si ya has puesto en marcha una búsqueda en Google, has usado una aplicación web. En primer lugar, se accedió al sitio web de Google con la intención: "una tarea específica" la consulta/búsqueda. En primer lugar, introducir los datos (las palabras clave de la búsqueda, por ejemplo: "magufos en la Universidad de Tecnologica"). Luego, pulsando el botón "Buscar en Google", la aplicación web que, el buscador Google, accedió a una base de datos de acuerdo a tus palabras clave y los resultados aparece en la página web.
                Esto se aplica incluso si: lees el correo desde el correo electrónico de Gmail, pagas tus cuentas en línea, compras en la Web, te estás comunicando con tus amigos y, por último, mantienes tu jardín virtual. El denominador común sigue siendo el mismo: el uso de una aplicación web para llevar a cabo todas estas tareas específicas.

                <br><br><b>¿Qué son?</b>
                <br><br>
                Una plataforma web es el entorno de desarrollo de software empleado para diseñar y ejecutar un sitio web, especialmente por una y/o más bases de datos provisto de interacción a través del uso de lenguajes interpretados.


                <br><br><br>
                <h2>4 componentes básicos de una plataforma web</h2><br><br>
                •	El sistema operativo, bajo el cual representa la base del funcionamiento de la computadora<br>
                •	El servidor web, es el software que maneja desde equipos remotos a través del internet. Su función diferente es un sitio estático o dinámico.<br>
                •	El sistema manejador de datos se encarga de almacenar el conjunto de registros de datos relacionados para ser utilizados después.<br>
                •	Un lenguaje de programación interpretado que controla  las aplicaciones de software que corren el sitio web.

                <br><br><br>
                No existe un consenso preciso pero una de las principales plataformas web son:
                <br><br>
                •	La plataforma LAMP con componentes de software libres y no están sujetas a restricciones de los softwares que los integran: Linux(sistema operativo), apache(servidor web),<br>
                •	MySQL(manejador de la base de datos)  y PHP(lenguaje interpretado)<br>
                •	La plataforma WISA está basada en las tecnologi8as de la campaña de MICROSFT.

                <br><br><br>
                <h2>LAMP:</h2>

                <br><br>
                El conjunto de software LAMP. Una solución de gran rendimiento y disponibilidad para un entorno hostil
                LAMP es el acrónimo usado para describir un sistema de infraestructura de internet que usa las siguientes herramientas:
                <br><br>

                •	Linux, el sistema operativo; En algunos casos también se refiere a LDAP.<br>
                •	Apache, el servidor web;<br>
                •	MySQL/MariaDB, el gestor de bases de datos;<br>
                •	Perl, PHP, o Python, los lenguajes de programación.<br>
                •	La combinación de estas tecnologías es usada principalmente para definir la infraestructura de un servidor web, utilizando un paradigma de programación para el desarrollo.

                <br><br>A pesar de que el origen de estos programas de código abierto no ha sido específicamente diseñado para trabajar entre sí, la combinación se popularizó debido a su bajo coste de adquisición y ubicuidad de sus componentes (ya que vienen pre-instalados en la mayoría de las distribuciones linux). Cuando son combinados, representan un conjunto de soluciones que soportan servidores de aplicaciones.
                Ampliamente promocionado por el editor de la editorial O'Reilly, Dale Dougherty, a sugerencia de David Axmark y Monty Widenius desarrolladores de MySQL, la influencia de la editorial O'Reilly en el mundo del software libre hizo que el término se popularizara rápidamente en todo el mundo.

                <br><br><b>Comúnmente son utilizdas por Redes sociales alrededor del mundo tales como:</b>
                <br><br>
                •	twitter y Facebook con más de 100 millones de usuarios.<br>
                •	Google plus con más de 500 millones de usuarios<br>
                •	Instagram y YouTube son los más conocidos en el mundo

                <br><br><br><br>
                <br><br><h2>Historia de Aplicaciones Web</h2>

                <br><br>
                Las aplicaciones Web interactivas poco a poco han revolucionado la forma de utilizar internet, aumentando el contenido de las páginas con texto estático (texto que no evoluciona, sino que permanecen como es) a un contenido rico e interactivo, por lo tanto escalable.

                <br><br>
                El concepto de la aplicación web no es nuevo. De hecho, uno del primer lenguaje de programación para el desarrollo de aplicaciones web es el "Perl". Fue inventado por Larry Wall en 1987 antes de que internet se convirtiera en accesible para el público en general. Pero fue en 1995 cuando el programador Rasmus Lerdorf puso a disposición el lenguaje PHP con lo que todo el desarrollo de aplicaciones web realmente despegó. Hoy en día, incluso muchas de estas aplicaciones se han desarrollado en PHP, como Google, Facebook y Wikipedia.

                <br><br>
                Unos meses más tarde, Netscape, el navegador web más antiguo y popular, anunció una nueva tecnología, JavaScript, lo que permite a los programadores cambiar de forma dinámica el contenido de una página Web que había sido hasta el momento texto estático. Esta tecnología permite un nuevo enfoque para el desarrollo de aplicaciones Web, que eran, y aún hoy, mucho más interactivas para los usuarios. Por ejemplo, la instantánea de Google, que muestra los resultados de búsqueda en un momento en que la palabra se escribe, hace un uso intensivo de JavaScript. Las actualizaciones del sitio web de productos de Microsoft también utiliza esta tecnología.

                <br><br>
                Al año siguiente, en 1996, dos desarrolladores, Sabeer Bhatia y Jack Smith lanzaron Hotmail (no fue un desarrollo original de microsoft), un servicio de correo en línea que permite (por primera vez) para el público en generalpara acceder y consultar el correo electrónico siempre que sea los usuarios pudieran estar en cualquier sitio lejos de su ordenador.
                Luego vino la famosa plataforma Flash utiliza para añadir contenido interactivo para sitios Web. Flash hizo su aparición en 1997, conocido como Shockwave Flash. Más tarde, después de ser adquirido por Macromedia y Adobe, Flash se convirtió en una plataforma para desarrollar aplicaciones web interactivas.
                El año siguiente marcó un punto de inflexión para los medios de comunicación en línea. De hecho, el 17 de enero de 1998, el sitio web The Drudge Report anunció por primera vez un informe de noticias antes de que se difundiera en los medios de televisión y la prensa tradicional. Se informó el escándalo Clinton/Lewinsky. Este evento fue el detonante del periodismo en línea tal como lo conocemos hoy en día. Antes de esa fecha, internet nunca había sido considerado un medio de comunicación más importante.
                El mismo año, la compañía Google desarrolló su primer motor de búsqueda en línea que, por su nueva forma de indexar páginas web, facilita enormemente la búsqueda de información en internet. Google sigue innovando y se convirtió en uno de los más prolíficos en cuanto a las aplicaciones Web, con indicación del muy popular Google Maps, Google Docs, Gmail y en aumento.
                A principios de 2001, poco después de la explosión de la burbuja de internet, Wikipedia se lanzó como un sub-proyecto de Nupedia, una enciclopedia en línea tradicional. Para desarrollar su plataforma, se utiliza un tipo de Wikipedia de la aplicación web denominada "wiki", que permite a cualquier usuario agregar contenido. Las contribuciones no se hicieron esperar, y al final del primer año de funcionamiento, Wikipedia ya contaba con 20000 páginas en 18 idiomas. Hoy en día, casi 21 millones de artículos en 285 idiomas conforman el sexto sitio más visitado en el mundo, siendo el primero Google.
                En 2003, MySpace fue fundado y más tarde, de 2005 a 2008, el sitio se convirtió en el medio de comunicación social más visitado. MySpace fue una plataforma de lanzamiento para otras aplicaciones web conocidos como YouTube, y Slide.com! RockYou, todos los cuales comenzaron como módulos adicionales para los usuarios de MySpace antes de convertirse en sus propios sitios web en su propio derecho.

                <br><br>
                Entonces, tres acontecimientos muy importantes ocurrieron en 2004. En primer lugar, en una conferencia de la Web 2.0 a cargo de John Battelle y Tim O'Reilly, el concepto de "web como plataforma" fue mencionado por primera vez. Esta innovación allanó el camino para futuras aplicaciones web, es decir, un software que aprovecha las ventajas de la conexión a internet y que se desvían del uso tradicional del escritorio. En segundo lugar, el sitio interactivo de Digg se puso en marcha. Propuso una forma innovadora de crear y encontrar contenido en internet mediante la promoción de noticias y enlaces democráticamente votado por los usuarios. Y, por último, el tercer gran evento, pero no menos importante, fue el lanzamiento de Facebook, que estaba entonces en su infancia, abierto sólo a los estudiantes. Con un millón de suscriptores a finales de 2004, Facebook se ha convertido en el medio de comunicación ial socmás utilizado con más de 900 millones de usuarios. Este es el segundo sitio más visitado en el planeta y tiene la mayor cantidad de fotos compartidas por los usuarios con un total de casi 500000 millones de fotos subidas a la plataforma. Facebook ha revolucionado la miríada de aspectos relacionados con la vida social la comercialización, y la política en la Web.

                <br><br>
                En 2005, YouTube fue lanzado oficialmente, permite a los usuarios compartir vídeos en línea. De simple sitio para compartir vídeos en internet a una plataforma madura que se conoce hoy en día, YouTube ahora ofrece cerca de 4000 millones de videos al día, además de un servicio de alquiler de películas en línea, y, finalmente, episodios de emisión para las empresas o las películas de MGM, Lions Gate Entertainment y CBS.
                Twitter, por su parte, se puso en marcha en 2006. Con los años, la popularidad de Twitter ha aumentado de 1,6 millones de 'tweets' en 2007 con la impresionante cifra de 340 millones de dólares por día en marzo de 2012 (equivalente a casi 4000 'tweets' por segundo).
                El año 2007 estuvo marcado por la aparición del iPhone, que fue sin duda responsable de la llegada de la nueva moda para las plataformas móviles y aplicaciones web. Ahora son accesibles por teléfono inteligente.
                A principios de 2011, la empresa Kickstarter, que facilita la financiación de proyectos en línea de forma participativa, ha llegado a los 4000 proyectos con más de 30 millones de dólares en donaciones. Por otra parte, casi el 44% de los proyectos se han iniciado con éxito desde esta plataforma.
                El futuro de las aplicaciones Web

                <br><br>
                Puesto que en los 43 años de la historia de internet, los programadores han tratado de hacer estallar las barreras entre las aplicaciones tradicionales y aplicaciones web. El progreso de los últimos años en tecnología, velocidad de descarga, así como herramientas de desarrollo (incluyendo la plataforma. Net de Microsoft) aborda algunas deficiencias.
                Poco a poco, las aplicaciones Web se están convirtiendo en una funcionalidad más completa, mientras que están siendo fáciles de usar. Podemos tomar por ejemplo de Google Docs, Office Web Apps, BitDefender QuickScan, Last.fm, y en línea UFile QuickTax, lo que sea.
                Como hemos visto, el impacto de las aplicaciones Web sobre cómo operar un negocio, transmitir y recibir información, e incluso en la vida de las personas es considerable. Las aplicaciones Web ofrecen la oportunidad de conectar a los usuarios entre sí y las empresas con sus clientes. En resumen, los desarrolladores de aplicaciones web de hoy están dando forma a su futuro digital del futuro.

                <br><br><h2>Tipos de plataformas:</h2>

                <br><br>
                En informática existen básicamente dos tipos de plataformas:
                <br><br>
                •	Arquitectura de hardware (la arquitectura de una computadora).<br>
                •	Framework de software (El sistema operativo, interfaz de usuario, lenguaje de programación).<br>
                •	Internet Explorer<br>
                •	Firefox<br>
                •	Navegador<br>
                •	Google Chrome<br>
                •	Opera<br>
                •	Etc…<br>

                <br><br><br>
                <h3>Ejemplos de plataformas como sistemas operativos:</h3>
                <br><br>
                •	Windows<br>
                •	Linux<br>
                •	AmigaOS<br>
                •	Solaris<br>
                •	Mac OS
                <br><br><br>

                <h2>Caracteristicas</h2>
                <br><br>

                <h3>Ventajas:</h3>
                <br><br>
                •	Disponibilidad y bajos costos.<br>
                •	Velocidad y mejor tiempo de actividad.<br>
                •	 Los sitios web basados en Linux eran más rápidos que los basados en Windows.<br>
                •	Es muy fácil colocar instrucciones tanto en nuestro código para activar nuevas funcionalidades del servidor.<br>
                •	 Es la mejor para la implementación y manejo de rescritura e URL.<br>
                •	Servidor de bases de datos relacional MySQL muy rápido para consultas de lectura y sitios no demasiado grandes.

                <br><br>
                <h3>Desventajas:</h3>
                <br><br>
                •	No muy buen rendimiento de MySQL para sitios web demasiado grandes.<br>
                •	Es muy distinto de Windows, lo que dificulta el trabajo.

                <br><br><br>

                <h2>WAMP (Windows, apache, maysql, php ǀ perL l Python)</h2>
                <br><br>
                Este tipo de plataforma web suele usarse como herramienta de desarrollo por la mayoría de los programadores que tenemos Windows como SO principal y tenemos que desarrollar aplicaciones web en PHP. Es decir, probamos nuestra aplicación PHP en el servidor de desarrollo WAMP y luego subimos la aplicación al servidor LAMP. Existe un software llamado WAMP5 que instala de forma compacta y configura fácilmente toda la plataforma WAMP.

                <br><br>
                <h3>Ventajas:</h3>
                <br><br>

                •	Ideal para utilizar como servidor de desarrollo.<br>
                •	 Fácil instalación con el software WAMP5.

                <br><br>
                Desventajas:
                <br><br>
                •	Puedes tener alguna dificultad a la hora de instalar los subsistemas por separado.<br>
                •	 Puede que siempre se te dificulte la instalación de PHP en IIS (Internet Information Server).

                <br><br>
                <h2>MAMP (MAC OS X, APACHE, MYSQL, [PERL ǀ PYTHON ǀ  PHP])</h2>

                <br><br>
                El acrónimo MAMP se refiere al conjunto de programas software comúnmente usados para desarrollar sitios web dinámicos sobre sistemas operativos Apple Macintosh, MAC OS X.

                <br><br>
                - Mac OS X: Sistema operativo.<br>
                - Apache: Servidor Web.<br>
                - MySQL: Sistema Gestor de Bases de Datos.<br>
                - PHP, Perl ó Python, lenguajes de programación usados para la creación de sitios web.


                <br><br>
                <h3>Ventajas:</h3>

                <br><br>
                •	Puedes hacerlo andar y apagarlo con un sólo click para que deje de consumir recursos de tu sistema.<br>
                •	Además puedes borrarlo completamente sólo arrastrándolo a la papelera.

                <br><br>
                <h3>Desventajas:</h3>

                <br><br>
                •	Mayor coste al usuario por parte del equipo de trabajo.

                <br><br><br>
                <h2>WIMA (WINDOWS, IIS, MS SQL SERVER, ASP.NET)</h2>

                <br><br>
                Este sistema junto a LAMP es de los más utilizados para desarrollar aplicaciones web basadas en ASP clásico y ASP.NET.  También se puede instalar PHP o Perl bajo IIS, y es la forma en la que los proveedores de hosting ofrecen ASP y PHP en el mismo servidor.

                <br><br><br>
                <h3>Ventajas:</h3>

                <br><br>
                •	MS SQL Server tiene un potente entorno gráfico de administración y ofrece a múltiples usuarios grandes cantidades de datos de manera simultánea ASP.NET, a partir de la versión 2.0 es una gran ventaja.  Es la mejor opción para crear aplicaciones web hoy en día.

                <br><br>
                <h3>Desventajas:</h3>

                <br><br>
                •	El servidor IIS y MySQL no es multiplataforma, sólo funciona bajo Windows.<br>
                •	Limitaciones en IIS en las versiones que no son de la familia “Server”.<br>
                •	Es muy vulnerable.



                
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





