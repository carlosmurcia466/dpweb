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
                    <li><a href="salir.php"> <img src="login.png">&nbsp;Cerrar Sesión </a></li>
                    <li><a href="perfil.php"> <img src="login.png">&nbsp;Perfil </a></li>
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

               
                <h1>GLOSARIO</h1><br>



                <a href="#A">A</a> 
                <a href="#B">B</a> 
                <a href="#C">C</a> 
                <a href="#D">D</a> 
                <a href="#E">E</a>
                <a href="#F">F</a>
                <a href="#G">G</a>
                <a href="#H">H</a>
                <a href="#I">I</a>
                <a href="#J">J</a>
                <a href="#K">K</a>
                <a href="#L">L</a>
                <a href="#M">M</a>
                <a href="#N">N</a>
                <a href="#O">O</a>
                <a href="#P">P</a>
                <a href="#Q">Q</a>
                <a href="#R">R</a>
                <a href="#S">S</a>
                <a href="#T">T</a>
                <a href="#U">U</a>
                <a href="#V">V</a>
                <a href="#W">W</a>
                <a href="#X">X</a>
                <a href="#Y">Y</a>
                <a href="#Z">Z</a>

                <br>

            </td>


    </table>

    <table width="80%" border="0" height="70" align="center">
        <tr>
            <td colspan="6"><br>
                <h1><a name= "A">&nbsp;&nbsp;A</a></h1>
                <hr><br>
                <b>Accesorios:</b>&nbsp;.Los accesorios son todos aquellos elementos que no forman parte del hardware, pero que se requieren para su interconexión, alimentación de señales y/o alimentación de energía eléctrica, están sujetos pero no fijados permanentemente al equipo, su vida útil es prolongada, de hecho no se consumen, pero ocasionalmente pueden dañarse por el uso, pocas veces hay necesidad de reemplazarlos por uno nuevo. Entre ellos se encuentran Cables de alimentación, Cables para puesto serial, Cables para puerto paralelo, Cables RCA, Cables USB, eliminadores de corriente, bancos de baterías, reguladores de voltaje, fuentes alimentación alterna (No Break).
                <br><br>
                <b>Acceso:</b>&nbsp;Cada una de las veces que alguien entra a una página de la Web; los accesos son una buena medida de la popularidad de una página.
                <br><br>
                <b>Ancho de banda:</b>&nbsp;Es como el ancho de la tubería por la que pasa la información: a mayor ancho de banda en nuestra línea de conexión, mayor rapidez de transmisión.	
            </td>

        </tr>


        <tr>
            <td colspan="6"><br>
                <h1><a name= "B">&nbsp;&nbsp;B</a></h1>
                <hr><br>
                <b>Backup</b>&nbsp;Copia de Respaldo o Seguridad. Acción de copiar archivos o datos de forma que estén disponibles en caso de que
                un fallo produzca la perdida de los originales. Esta sencilla acción evita numerosos, y a veces irremediables, problemas si se realiza 
                de forma habitual y periódica. <br><br>
                <b>Bases de datos:</b>&nbsp;Una base de datos o banco de datos es un conjunto de datos pertenecientes a un mismo contexto y almacenados sistemáticamente para su posterior uso. En este sentido; una biblioteca puede considerarse una base de datos compuesta en su mayoría por documentos y textos impresos en papel e indexados para su consulta. Actualmente, y debido al desarrollo tecnológico de campos como la informática y la electrónica, la mayoría de las bases de datos están en formato digital, siendo este un componente electrónico, por tanto se ha desarrollado y se ofrece un amplio rango de soluciones al problema del almacenamiento de datos.
                Existen programas denominados sistemas gestores de bases de datos, abreviado SGBD (del inglés database management system o DBMS), que permiten almacenar y posteriormente acceder a los datos de forma rápida y estructurada. Las propiedades de estos DBMS, así como su utilización y administración, se estudian dentro del ámbito de la informática.
                Las aplicaciones más usuales son para la gestión de empresas e instituciones públicas; También son ampliamente utilizadas en entornos científicos con el objeto de almacenar la información experimental.
                <br><br>
                <b>Búsqueda:</b>&nbsp;Hace referencia a varios artículos:
                •   El motor de búsqueda, sistema informático que indexa archivos almacenados en servidores web gracias a su «spider» (o araña web).
                •   El algoritmo de búsqueda, algoritmo diseñado para localizar un elemento concreto dentro de alguna estructura de datos. 
                o   La búsqueda binaria, algoritmo diseñado para buscar un elemento en un conjunto ordenado.

            </td> 
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>

        <tr>
            <td>
                <br><br>
                <h1><a name= "C">&nbsp;&nbsp;C</a></h1>
                <hr><br>
                <b>Cliente:</b>&nbsp;El término cliente puede referirse:
                •	al cliente, aquella persona natural o jurídica que realiza la transacción comercial denominada compra;
                •	al cliente de videojuego, un programa para jugar a un videojuego en línea

                <br><br>
                <b>Capacidad:</b>&nbsp;se refiere a los recursos y actitudes que tiene un individuo, entidad o institución, para desempeñar una determinada tarea o cometido.
                En contextos más concretos, la capacidad se puede referir a los siguientes conceptos:
                •	Volumen que ocupan los líquidos y áridos dentro de un recipiente. Véase también Unidades de capacidad.
                •	Capacidad analítica: es una función matemática o geométrica.
                •	Capacidad calorífica: también llamada capacidad termal, es la capacidad de la materia de almacenar calor.
                •	Capacidad craneal: es la medida del volumen del interior del cráneo.
                •	Capacidad de absorción: es la capacidad de los países que reciben inversiones internacionales y, en particular, ayuda oficial al desarrollo, para utilizarlas de forma eficiente.
                •	Capacidad de almacenamiento: se refiere a la cantidad de datos que pueden almacenarse en un dispositivo de almacenamiento.
                •	Una cantidad es la asignación, usualmente numérica, de una magnitud matemática a una propiedad medible que admite grados de comparación y representa o bien un contaje del número de elementos de un conjunto, o bien el resultado de una medición física de una magnitud. Así las cantidades pueden ser comparadas en términos de "más", "menos" o "igual" (o no ser comparables), y generalmente pueden ser representadas por diferentes sistemas de unidades (la masa se puede medir en kilogramos o en onzas).
                •	Un gran número de propiedades pueden ser representadas por cantidades escalares, aunque algunas magnitudes físicas requieren el uso de cantidades vectoriales más complejas. 
                <br><br>

                <b>CSS:</b>&nbsp;La sigla CSS corresponde a la expresión inglesa Cascading StyleSheets, que puede traducirse como “Hojas de estilo en cascada”. El concepto se utiliza en el ámbito de la informática para referirse a un lenguaje empleado en el diseño gráfico. El lenguaje CSS permite presentar, de manera estructurada, 
                un documento que fue escrito en un lenguaje 
            </td>   
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>


        <tr>
            <td>   
                <br><br>
                <h1><a name= "D">&nbsp;&nbsp;D</a></h1>
                <hr><br>
                <b>Dato:</b>&nbsp;Un dato es una representación simbólica (numérica, alfabética, algorítmica, espacial, etc.) de un atributo o variable cuantitativa o cualitativa. Los datos describen hechos empíricos, sucesos y entidades. Es un valor o referente que recibe el computador por diferentes medios, los datos representan la información que el programador manipula en la construcción de una solución o en el desarrollo de un algoritmo.
                Los datos aisladamente pueden no contener información humanamente relevante. Solo cuando un conjunto de datos se examina conjuntamente a la luz de un enfoque, hipótesis o teoría se puede apreciar la información contenida en dichos datos. Los datos pueden consistir en números, estadísticas o proposiciones descriptivas. Los conceptos de datos, información, conocimientos y sabiduría están inter-relacionados. Los datos convenientemente agrupados, estructurados e interpretados se consideran que son la base de la información humanamente relevante que se pueden utilizar en la toma de decisiones, la reducción de la incertidumbre o la realización de cálculos. Es de empleo muy común en el ámbito informático y, en general, prácticamente en cualquier investigación científica. En programación, un dato es la expresión general que describe las características de las entidades sobre las cuales opera un algoritmo. En estructura de datos, es la parte mínima de la información. Se ha dicho que datos son el nuevo petróleo de la economía digital.

                <br><br>
                <b>Divulgacion:</b>&nbsp;Del latín divulgatio, divulgación es la acción y efecto de divulgar (difundir, promover o publicar algo para ponerlo al alcance del público). Por ejemplo: “El científico alemán realizó una tarea incansable para la divulgación de este descubrimiento”, “Teníamos un buen producto, pero fallamos en su divulgación”, “El presidente se indignó por la divulgación de los temas tratados en su última reunión con los ministros”. 
                <br><br>

                <b>Dispositivo:</b>&nbsp;Del latín disposĭtus (“dispuesto”), un dispositivo es un aparato o mecanismo que desarrolla determinadas acciones. Su nombre está vinculado a que dicho artificio está dispuesto para cumplir con su objetivo. Por ejemplo: “Me regalaron una cafetera espresso, pero aún no entiendo cómo funciona el dispositivo”, “Un especialista me recomendó instalar un dispositivo que regula la intensidad de la luz”, “Esta estufa tiene un dispositivo que permite programar el horario de encendido y apagado”.
            </td>    
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>



        <tr>
            <td>

                <br><br>

                <h1><a name= "E">&nbsp;&nbsp;E</a></h1>
                <hr><br>
                <b>Edicion:</b>&nbsp;En el latín es donde se encuentra el origen etimológico del término edición que ahora nos ocupa. En concreto, procede de la palabra latina “editio”, que puede traducirse como “la acción y el efecto de producir ejemplares de un documento” y que se encuentra conformada por los siguientes elementos:
                • El verbo “edere”, que es sinónimo de “publicar”.
                • El sufijo “-ción”, que es equivalente a “acción y efecto”.
                acterísticas de las entidades sobre las cuales opera un algoritmo. En estructura de datos, es la parte mínima de la información. Se ha dicho que datos son el nuevo petróleo de la economía digital.
                <br><br>
                <b>Ejecutar:</b>&nbsp;Es la acción de iniciar la carga de un programa o de un archivo ejecutable. Ejecutar un programa, quiere decir, que el mismo estará en estado de ejecución y, en memoria hasta que finalice su uso y, es por ello, que no se puede añadir a este término los archivos que no son ejecutables, como por ejemplo: una imagen en JPG. 

                <br><br>
                <b>Espacio:</b>&nbsp;Espacio es un término que procede del latín spatium y que tiene muchas acepciones según el diccionario de la Real Academia Española (RAE). La primera de ellas tiene que ver con la extensión que contiene la materia existente.
            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>


        <tr>
            <td>

                <br><br>
                <h1><a name= "F">&nbsp;&nbsp;F</a></h1>
                <hr><br>
                <b>Funcion:</b>&nbsp;El concepto de función tiene su origen en el término latino functĭo. La palabra puede ser utilizada en diversos ámbitos y con distintos significados.
                <br><br>
                <b>Falla:</b>&nbsp;El significado del término falla varía de acuerdo a su origen etimológico. Cuando la palabra proviene del latín falla, hace referencia a un defecto, falta o incumplimiento: “El pantalón que compre tiene una falla”, “El gol llegó tras una falla del arquero”, “La falla estuvo en la falta de firma del documento”.
                <br><br>
                <b>Gestion:</b>&nbsp;Del latín gestĭo, el concepto de gestión hace referencia a la acción y a la consecuencia de administrar o gestionar algo. Al respecto, hay que decir que gestionar es llevar a cabo diligencias que hacen posible la realización de una operación comercial o de un anhelo cualquiera. Administrar, por otra parte, abarca las ideas de gobernar, disponer dirigir, ordenar u organizar una determinada cosa o situación.
            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>


        <tr>

            <td>

                <br><br>
                <h1><a name= "G">&nbsp;&nbsp;G</a></h1>
                <hr><br>
                <b>Gestión:</b>&nbsp;Del latín gestĭo, el concepto de gestión hace referencia a la acción y a la consecuencia de administrar o gestionar algo. Al respecto, hay que decir que gestionar es llevar a cabo diligencias que hacen posible la realización de una operación comercial o de un anhelo cualquiera. Administrar, por otra parte, abarca las ideas de gobernar, disponer dirigir, ordenar u organizar una determinada cosa o situación.
                <br><br>
                <b>Gráfico:</b>&nbsp;Un gráfico es una representación por medio de líneas y aquello perteneciente o relativo a la escritura y a la imprenta. Un periódico y una revista son medios gráficos, por ejemplo..
                <br><br>
                <b>Glosario:</b>&nbsp;Del latín glossarium, el glosario es un catálogo de palabras de una misma disciplina o de un campo de estudio, que aparece definidas, explicadas o comentadas. También se trata de un catálogo de palabras desusadas o del conjunto de comentarios y glosas sobre los textos de un autor
            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>

        <tr>
            <td>
                <br><br>
                <h1><a name= "H">&nbsp;&nbsp;H</a></h1>
                <hr><br>
                <b>Host:</b>&nbsp;El término host ("anfitrión", en español) es usado en informática para referirse a las computadoras conectadas a una red, que proveen y utilizan servicios de ella. Los usuarios deben utilizar anfitriones para tener acceso a la red.
                <br><br>
                <b>Hosting:</b>&nbsp;El hosting es un servicio al que puedes asociar tu dominio. Si tienes un dominio, lo más probable es que lo quieras para tener una página web, o para tener cuentas de correo bajo tu propio dominio. El hosting es exactamente eso, son esos servicios que vas a necesitar si quieres tener tu web y tu correo.
                <br><br>
                <b>Historia:</b>&nbsp;Disciplina que estudia y expone, de acuerdo con determinados principios y métodos, los acontecimientos y hechos que pertenecen al tiempo pasado y que constituyen el desarrollo de la humanidad desde sus orígenes hasta el momento presente.
                Conjunto de estos acontecimientos y hechos, especialmente los vividos por una persona, por un grupo o por los miembros de una comunidad social.
            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>

        <tr>
            <td>
                <br><br>
                <h1><a name= "I">&nbsp;&nbsp;I</a></h1>
                <hr><br>
                <b>IP:</b>&nbsp;Una dirección IP es un número que identifica, de manera lógica y jerárquica, a una Interfaz en red (elemento de comunicación/conexión) de un dispositivo (computadora, tableta, portátil, smartphone) que utilice el protocolo IP (Internet Protocol), que corresponde al nivel de red del modelo TCP/IP.
                <br><br>
                <b>IPV6:</b>&nbsp;El Protocolo de Internet versión 6, en inglés: Internet Protocol version 6 (IPv6), es una versión del Internet Protocol (IP), definida en el RFC 2460 y diseñada para reemplazar a Internet Protocol version 4 (IPv4) RFC 791, que a 2016 se está implementado en la gran mayoría de dispositivos que acceden a Internet.
                Diseñado por Steve Deering de Xerox PARC y Craig Mudge, IPv6 sujeto a todas las normativas que fuera configurado –está destinado a sustituir a IPv4, cuyo límite en el número de direcciones de red admisibles está empezando a restringir el crecimiento de Internet y su uso, especialmente en China, India, y otros países asiáticos densamente poblados–. El nuevo estándar mejorará el servicio globalmente; por ejemplo, proporcionará a futuras celdas telefónicas y dispositivos móviles sus direcciones propias y permanentes.
                <br><br>
                <b>Internet:</b>&nbsp;El internet (o, también, la internet)3 es un conjunto descentralizado de redes de comunicación interconectadas que utilizan la familia de protocolos TCP/IP, lo cual garantiza que las redes físicas heterogéneas que la componen formen una red lógica única de alcance mundial. Sus orígenes se remontan a 1969, cuando se estableció la primera conexión de computadoras, conocida como ARPANET, entre tres universidades en California (Estados Unidos).
                Uno de los servicios que más éxito ha tenido en internet ha sido la World Wide Web (WWW o la Web), hasta tal punto que es habitual la confusión entre ambos términos. La WWW es un conjunto de protocolos que permite, de forma sencilla, la consulta remota de archivos de hipertexto. Esta fue un desarrollo posterior (1990) y utiliza internet como medio de transmisión.

            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>


        <tr>
            <td>
                <br><br>
                <h1><a name= "J">&nbsp;&nbsp;J</a></h1>
                <hr><br>
                <b>Java:</b>&nbsp;lenguaje de programación originalmente desarrollado por Sun Microsystems, adquirida por Oracle, para aplicaciones software independiente de la plataforma, que engloba:
                <br><br>
                <b>JavaScript:</b>&nbsp;JavaScript (abreviado comúnmente JS) es un lenguaje de programación interpretado, dialecto del estándar ECMAScript. Se define como orientado a objetos
                <br><br>
                <b>Jerarquia:</b>&nbsp;La jerarquía es una estructura que se establece en orden a su criterio de subordinación entre personas, animales, valores y dignidades. Tal criterio puede ser superioridad, inferioridad, anterioridad, posterioridad, etc; es decir, cualquier cualidad categórica de gradación agente que caracterice su interdependencia. Tiene un uso frecuente en las clasificaciones mitológicas y teológicas; y se aplica a todo tipo de ámbitos (físicos, morales, empresariales, etc.). Cuando existe una jerarquía se dice, por extensión, que hay una organización jerárquica.1 Como concepto infraestructural, define el modo de formación entre los diversos rangos atribuibles a un determinado sistema en el que cada elemento esté supeditado gradualmente al elemento inmediatamente previo. Un ejemplo clásico es la jerarquía de un programa la cual se establece entre pasos en orden a su ordinograma.
            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>

        <tr>
            <td>
                <br><br>
                <h1><a name= "K">&nbsp;&nbsp;K</a></h1>
                <hr><br>

                <b>Kilo</b>&nbsp;prefijo del Sistema Internacional que indica un factor de 103 (1000). Se usa fecuentemente en el ámbito de la informática
                para denominar unidades de medida como kilohertz, kilobits, kilobyte, etc.
                <br><br>
                <b>Kaspersky:</b>&nbsp;compañía de procedencia rusa que se especializa en seguridad informática, distribuye un antivirus con el
                mismo nombre (Kaspersky Antivirus)
                <br><br>
                <b>Kernel:</b>&nbsp;el kernel (en inglés) es el centro esencial de un sistema operativo, el nucleo que proporciona servicios basicos para todas las partes del sistema operativo. El kernel contrasta con el "shell", la parte exterior del sistema operativo que interactúa con el usuario por medio de comandos.

            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>

        <tr>
            <td>
                <br><br>
                <h1><a name= "L">&nbsp;&nbsp;L</a></h1>
                <hr><br>
                <b>Lenguaje:</b>&nbsp;Un ejemplo de código fuente escrito en el lenguaje de programación Java, que imprimirá el mensaje "Hello World!" a la salida estándar cuando es compilado y ejecutado
                Un lenguaje de programación es un lenguaje formal diseñado para realizar procesos que pueden ser llevados a cabo por máquinas como las computadoras.
                Pueden usarse para crear programas que controlen el comportamiento físico y lógico de una máquina, para expresar algoritmos con precisión, o como modo de comunicación humana.1
                Está formado por un conjunto de símbolos y reglas sintácticas y semánticas que definen su estructura y el significado de sus elementos y expresiones. Al proceso por el cual se escribe, se prueba, se depura, se compila (de ser necesario) y se mantiene el código fuente de un programa informático se le llama programación.
                También la palabra programación se define como el proceso de creación de un programa de computadora, mediante la aplicación de procedimientos lógicos, a través de los siguientes pasos:
                •	El desarrollo lógico del programa para resolver un problema en particular.
                •	Escritura de la lógica del programa empleando un lenguaje de programación específico (codificación del programa).
                •	Ensamblaje o compilación del programa hasta convertirlo en lenguaje de máquina.
                •	Prueba y depuración del programa.
                •	Desarrollo de la documentación.

                <br><br>
                <b>Lamp:</b>&nbsp;El conjunto de software LAMP (aquí con Squid). Una solución de gran rendimiento y disponibilidad para un entorno hostil...
                LAMP es el acrónimo usado para describir un sistema de infraestructura de internet que usa las siguientes herramientas

            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>

        <tr>
            <td>
                <br><br>
                <h1><a name= "M">&nbsp;&nbsp;M</a></h1>
                <hr><br>
                <b>MAC:</b>&nbsp;MAC, sigla en inglés de Media Access Control, traducido como Control de Acceso al Medio, subcapa inferior de la capa de enlace de datos.
                <br><br>
                <b>Maquetacion:</b>&nbsp;La maquetación, también llamada a veces diagramación, es un oficio del diseño “editorial” que se encarga de organizar en un espacio, contenidos escritos, visuales y en algunos casos audiovisuales (multimedia) en medios impresos y electrónicos, como libros, diarios y revistas. Estrictamente, el acto de maquetar tan solo se relaciona con la distribución de los elementos en un espacio determinado de la página 920pxs. La maquetación web se sabe dónde empieza; en la combinación de HTML (estructura del código) y CSS (estilos aplicados al código HTML), pero donde acaba ya no está tan claro. Según a quien preguntes, algunos te dirán que termina ahí, y otros te dirán que el Javascript (comportamientos) también forma parte del “pack”. Yo no tengo ninguna duda de que él no se puede separar Javascript y maquetación, y que un maquetador que no sabe aplicar Javascript en sus aplicaciones web, no es un buen maquetador. 

                <br><br>
                <b>Microsoft:</b>&nbsp;Microsoft (NASDAQ: MSFT) es una empresa multinacional de origen estadounidense, fundada el 4 de abril de 1975 por Bill Gates y Paul Allen. Dedicada al sector del software y el hardware, tiene su sede en Redmond, Washington, Estados Unidos. Microsoft desarrolla, fabrica, licencia y produce software y equipos electrónicos, siendo sus productos más usados el sistema operativo Microsoft Windows y la suite Microsoft Office, los cuales tienen una importante posición entre las computadoras personales. Con una cuota de mercado cercana al 90.5 % para Office en 2003 y para Windows en 2006, siguiendo la estrategia de Bill Gates de «tener una estación de trabajo que funcione con nuestro software en cada escritorio y en cada hogar»
            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>

        <tr>
            <td>
                <br><br>
                <h1><a name= "N">&nbsp;&nbsp;N</a></h1>
                <hr><br>
                <b>NotePad++:</b>&nbsp;Es un editor de texto y editor de código fuente para su uso con Microsoft Windows. Es compatible con la edición por pestañas, que permite trabajar con múltiples archivos abiertos en una sola ventana. El nombre del proyecto proviene del operador de incremento C
                <br><br>
                <b>NAT:</b>&nbsp;La traducción de direcciones de red o NAT (del inglés Network Address Translation) es un mecanismo utilizado por routers IP para intercambiar paquetes entre dos redes que asignan mutuamente direcciones incompatibles. Consiste en convertir, en tiempo real, las direcciones utilizadas en los paquetes transportados. También es necesario editar los paquetes para permitir la operación de protocolos que incluyen información de direcciones dentro de la conversación del protocolo.
                El tipo más simple de NAT proporciona una traducción una-a-una de las direcciones IP. La RFC 2663 se refiere a este tipo de NAT como NAT Básico, también se le conoce como NAT una-a-una. En este tipo de NAT únicamente, las direcciones IP, las sumas de comprobación (checksums) de la cabecera IP, y las sumas de comprobación de nivel superior, que se incluyen en la dirección IP necesitan ser cambiadas. El resto del paquete se puede quedar sin tocar (al menos para la funcionalidad básica del TCP/UDP, algunos protocolos de nivel superior pueden necesitar otra forma de traducción). Es corriente ocultar un espacio completo de direcciones IP, normalmente son direcciones IP privadas, detrás de una única dirección IP (o pequeño grupo de direcciones IP) en otro espacio de direcciones (normalmente público).


                <br><br>
                <b>Navegador:</b>&nbsp;Un navegador web, aplicación que opera a través de Internet, interpretando la información de archivos y sitios web para que éstos puedan ser vistos.
            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>

        </tr>

        <tr>
            <td>
                <br><br>
                <h1><a name= "O">&nbsp;&nbsp;O</a></h1>
                <hr><br>
                <b>Operador:</b>&nbsp;Para otros usos de este término, véase Operador (desambiguación).
                Operadores suma,resta, multiplicación y división
                En matemáticas, en lógica, física el término operador puede ser usado con diversas acepciones .
                En alguna versión, un operador es un símbolo matemático que indica que debe ser llevada a cabo una operación especificada1 sobre un cierto número de operandos (número, función, vector, etc.).
                Los operadores suelen interpretarse como funciones, mejor aún como aplicaciones, por ejemplo la adición, la multiplicación, etc., pueden ser entendidas como funciones de dos argumentos. O una aplicación de SxS en S, o simplemente de D en F, caso de integral indefinida o derivada que son operadores lineales

                <br><br>
                <b>Organizacion:</b>&nbsp;Metas u objetivos por medio de los organismos humanos o de la gestión del talento humano y de otro tipo. Están compuestas por sistemas de interrelaciones que cumplen funciones especializadas. También es un convenio sistemático entre personas para lograr algún propósito específico.
                Las organizaciones son el objeto de estudio de la Ciencia de la Administración, a su vez de otras disciplinas tales como la Comunicación, la Sociología, la Economía y la Psicología.

                <br><br>
                <b>Optimización:</b>&nbsp;Optimización es la acción y efecto de optimizar. Este verbo hace referencia a buscar la mejor manera de realizar una actividad. El término se utiliza mucho en el ámbito de la informática.s.
            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>

        <tr>
            <td>

                <br><br>
                <h1><a name= "P">&nbsp;&nbsp;P</a></h1>
                <hr><br>
                <b>PHP:</b>&nbsp;La sigla PHP identifica a un lenguaje de programación que nació como Personal Home Page (PHP) Tools. Fue desarrollado por el programador de origen danés Rasmus Lerdorf en 1994 con el propósito de facilitar el diseño de páginas web de carácter dinámico.
                <br><br>
                <b>PDF:</b>&nbsp;PDF es el acrónimo de Portable Document Format (una frase que se traduce al español como Formato de Documento Portátil). El término, que no está incluido en el diccionario de la Real Academia Española (RAE) pero es muy utilizado en el ámbito de la informática, identifica a una modalidad que surgió para el almacenamiento de archivos digitales.

                <br><br>
                <b>Password:</b>&nbsp;La Real Academia Española (RAE) no incluye la palabra password en su diccionario. El término,
                sin embargo, es muy popular en nuestra lengua, aunque puede reemplazarse por contraseña o clave, nociones que sí son
                aceptadas por la RAE.
            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>

        </tr>




        <tr>
            <td>
                <br><br>
                <h1><a name= "Q">&nbsp;&nbsp;Q</a></h1>
                <hr><br>

                <b>Query:</b>&nbsp;Forma usual de llamar a las consultas sql en un programa.
                <br><br>
                <b>QR:</b>&nbsp;El código QR (Quick Response) fue diseñado para ser decodificado a alta velocidad. Es un código de barra de
                2 dimensiones (2D) que consiste de módulos negros en forma de cuadrados, en un fondo blanco. La data codificada en el QR puede
                ser de cualquier tipo,como por ejemplo data binaria y alfanumerica.
                <b>Queque:</b>&nbsp;es "una fila" de paquetes en espera de ser procesados.
            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>


        <tr>
            <td>
                <br><br>
                <h1><a name= "R">&nbsp;&nbsp;R</a></h1>
                <hr><br>
                <b>Roaming:</b>&nbsp;La Real Academia Española (RAE) no reconoce el término roaming. Se trata de una palabra inglesa que puede reemplazarse por itinerancia, una palabra que, si bien tampoco forma parte del diccionario de la RAE, es sugerida por la Fundación del Español Urgente (Fundéu BBVA).
                <br><br>
                <b>Respaldo de información:</b>&nbsp;Respaldo es el sector de una silla que permite apoyar la espalda o, en sentido simbólico, aquello que brinda sostén, amparo o apoyo. Una información, por su parte, es un conocimiento o un saber.

                <br><br>
                <b>Reset:</b>&nbsp;Reset es un término inglés que no forma parte del diccionario de la Real Academia Española (RAE). En nuestra lengua, el concepto puede reemplazarse por reiniciar (empezar nuevamente).

            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>

        </tr>


        <tr>
            <td>
                <br><br>
                <h1><a name= "S">&nbsp;&nbsp;S</a></h1>
                <hr><br>
                <b>Sistema administrativo:</b>&nbsp;El conjunto de componentes que interactúan entre sí y se encuentran interrelacionados recibe el nombre de sistema. Administrativo, por su parte, es aquello vinculado a la administración (el acto de administrar: organizar o gestionar recursos). 
                <br><br>
                <b>Software propietario:</b>&nbsp;Un software es un programa informático que, gracias a sus diversas aplicaciones, posibilita la ejecución de distintas tareas en una computadora (ordenador). 

                <br><br>
                <b>software libre:</b>&nbsp;Software es un término de la lengua inglesa que forma parte del diccionario de la Real Academia Española (RAE). Se trata del programa informático que permite la ejecución de diversas tareas en un ordenador (computadora).
            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>

        <tr>
            <td>
                <br><br>
                <h1><a name= "T">&nbsp;&nbsp;T</a></h1>
                <hr><br>
                <b>Tarjeta de memoria:</b>&nbsp;El concepto de tarjeta de memoria se emplea en el ámbito de la tecnología. La noción se forma a partir de las ideas de tarjeta (un objeto que lleva registrada cierta información) y memoria (la capacidad de almacenar informaciones). 
                <br><br>
                <b>TDA:</b>&nbsp;TDA es una sigla con varios usos. Por lo general se vincula a la expresión que refiere a Televisión Digital Abierta, un sistema de transmisión de televisión que también se denomina Televisión Digital Terrestre (TDT). .

                <br><br>
                <b>Tecnofilia:</b>&nbsp;Tecnofilia es un concepto formado por dos términos: tecnología (las técnicas y los conocimientos que posibilitan la utilización práctica de los conocimientos de la ciencia) y filia (el apego, la simpatía o el interés por algo).
            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>

        <tr>
            <td>
                <br><br>
                <h1><a name= "U">&nbsp;&nbsp;U</a></h1>
                <hr><br>
                <b>Usabilidad:</b>&nbsp;Usabilidad es un vocablo que no integra el diccionario oficial de la Real Academia Española (RAE). Sin embargo, es muy frecuente dentro del campo de la informática tanto como de la tecnología. El concepto proviene del inglés usability y hace referencia a la facilidad con que un usuario puede utilizar una herramienta fabricada por otras personas con el fin de alcanzar un cierto objetivo.
                <br><br>
                <b>Usuario:</b>&nbsp;El diccionario de la Real Academia Española (RAE) define el concepto de usuario con simpleza y precisión: un usuario es quien usa ordinariamente algo. El término, que procede del latín usuarius, hace mención a la persona que utiliza algún tipo de objeto o que es destinataria de un servicio, ya sea privado o público

                <br><br>
                <b>UBUNTO:</b>&nbsp;En este sentido, Ubuntu es un sistema operativo enfocado a la facilidad de uso e instalación, pensado para el usuario promedio. Por eso su lema es “Ubuntu: Linux para seres humanos”.
                Ubuntu está compuesto por diversos paquetes de software que, en su mayoría, son distribuidos bajo código abierto y licencia 
                libre. Este sistema operativo no tiene fines lucrativos (se consigue de manera gratuita) y aprovecha las capacidades de los 
                desarrolladores de la comunidad para mejorar sus prestaciones
            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>

        <tr>
            <td>
                <br><br>
                <h1><a name= "V">&nbsp;&nbsp;V</a></h1>
                <hr><br>
                <b>VINCULOS:</b>&nbsp;En Internet, la noción de vinculación está referida a la posibilidad de navegar entre distintos documentos digitales mediante la utilización de vínculos (también conocidos como hipervínculos, enlaces, hiperenlaces o links). Gracias a la vinculación, los documentos están unidos y el internauta puede pasar de uno a otro con sólo clickear en los vínculos.
                <br><br>
                <b>VGA:</b>&nbsp;VGA es la sigla que corresponde a la expresión inglesa Video Graphics Array. Se trata de un sistema gráfico que presentó la empresa estadounidense International Business Machines (IBM) a fines de la década de 1980 y que se convirtió, por su popularidad, en una especie de estándar para las computadoras (ordenadores) personales.
                <br><br>
                <b>VPN:</b>&nbsp;VPN es una sigla que puede hacer mención a diferentes cuestiones de acuerdo al contexto. Uno de sus usos más frecuentes se encuentra en la tecnología, donde VPN alude a la expresión del idioma inglés Virtual Private Network, que puede traducirse como Red Virtual Privada
            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>

        <tr>
            <td>
                <br><br>
                <h1><a name= "W">&nbsp;&nbsp;W</a></h1>
                <hr><br>
                <b>WAMP:</b>&nbsp;WAMP es el acrónimo usado para describir un sistema de infraestructura de internet que usa las siguientes herramientas:
                •	Windows, como sistema operativo;
                •	Apache, como servidor web;
                •	MySQL, como gestor de bases de datos;
                •	PHP 
                )
                <br><br>
                <b>WordPad:</b>&nbsp;WordPad
                Los procesadores de texto son programas informáticos que permiten la creación y edición de documentos de texto en una computadora. Este tipo de software ofrece una gran cantidad de funcionalidades para las tareas de redacción, que hacen el trabajo más fácil y potencian la creatividad de sus usuarios, liberándolos de presiones tales como la que supone la maquetación a mano.

                <br><br>
                <b>WAN:</b>&nbsp;WAN es la sigla de Wide Area Network (“Red de Área Amplia”). El concepto se utiliza para nombrar a la red de computadoras que se extiende en una gran franja de territorio, ya sea a través de una ciudad, un país o, incluso, a nivel mundial. Un ejemplo de red WAN es la propia Internet.
            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>

        <tr>
            <td>
                <br><br>
                <h1><a name= "X">&nbsp;&nbsp;X</a></h1>
                <hr><br>
                <b>XAMPP:</b>&nbsp;XAMPP es un paquete de instalación independiente de plataforma, software libre, que consiste principalmente en el sistema de gestión de bases de datos MySQL, el servidor web Apache y los intérpretes para lenguajes de script: PHP y Perl. El nombre proviene del acrónimo de X (para cualquiera de los diferentes sistemas operativos), Apache, MariaDB, PHP, Perl. Desde la versión "5.6.15", XAMPP cambió la base de datos de MySQL a MariaDB. El cual es un fork de MySQL con licencia GPL.
                El programa se distribuye bajo la licencia GNU y actúa como un servidor web libre, fácil de usar y capaz de interpretar páginas dinámicas. Actualmente XAMPP está disponible para Microsoft Windows, GNU/Linux, Solaris y Mac OS X.

                <br><br>
                <b>XHTML:</b>&nbsp;XHTML es una sigla de la lengua inglesa que procede de la expresión Extensible Hypertext Markup Language. En nuestro idioma, dicha frase puede traducirse como Lenguaje de Marcado de Hipertexto Entendido.

                <br><br>
                <b>XML:</b>&nbsp;XML proviene de eXtensible Markup Language (“Lenguaje de Marcas Extensible”). Se trata de un metalenguaje (un lenguaje que se utiliza para decir algo acerca de otro) extensible de etiquetas que fue desarrollado por el Word Wide Web Consortium (W3C), una sociedad mercantil internacional que elabora recomendaciones para la World Wide Web.).
            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>

        <tr>
            <td>
                <br><br>
                <h1><a name= "Y">&nbsp;&nbsp;Y</a></h1>
                <hr><br>
                <b>Yahoo:</b>&nbsp;Yahoo! Inc., también conocida simplemente como Yahoo, es una compañía norteamericana focalizada en brindar prestaciones relacionadas con Internet. Esta empresa posee un directorio, un buscador, tiendas virtuales y diversas aplicaciones, entre las cuales aparece un sistema de correo electrónico muy utilizado a nivel mundial.
                <br><br>
                <b>Ymodem:</b>&nbsp;Es un protocolo de transferencia de archivos para PC. Utiliza el método de detección de errores por CRC, bloques de 1024 bytes y un bloque extra al principio de la transferencia que incluye el nombre del archivo, el tamaño y la fecha.
                <br><br>
                <b>Yottabyte:</b>&nbsp;Unidad de información que equivale a 1000 zettabytes o 10^24 bytes (1,208,925,819,614,629,174,706,176 bytes). Símbolo YB.
            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>

        <tr>
            <td>

                <br><br>


                <h1><a name= "Z">&nbsp;&nbsp;Z </a></h1>  
                <hr><br>
                <b>Zettabyte:</b>&nbsp;un zettabyte es 2 a la 70 potencia, o 1,180,591,620,717,411,303,424 bytes. Un zettabyte son 1,024 exabytes y precede al yottabyte. Ya que un zettabyte
                es un tamaño tan enorme, esta unidad de medida se usa muy poco. Su símbolo es ZB.
                <br><br>
                <b>ZIP:</b>&nbsp;Zip es un concepto que se utiliza en la informática para nombrar a ciertos formatos de almacenamiento,
                ya sean físicos o virtuales. A nivel de software, el zip se utiliza para la comprensión de datos (documentos de texto,
                imágenes, programas, etc.) sin pérdida de calidad


                <br><br>
                <b>Zmodem:</b>&nbsp;

                Protocolo utilizado para transferir archivos de un servidor a una computadora conectada vía modem, el cual es principalmente 
                usado para extraer archivos de un BBS. Más rápido que Xmodem.
            </td>
            <td><a href="#inicio"><img src="arriba.png"></a> </td>
        </tr>  


    </table>


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





