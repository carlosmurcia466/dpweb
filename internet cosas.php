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

               <h1>Internet de las cosas</h1>

                <br><br>
                En el presente Al igual que con varios conceptos novedosos, las raíces de IdC se pueden remontar al Instituto de Tecnología de Massachusetts (MIT), hasta llegar al trabajo del Auto-ID Center. Este grupo, fundado en 1999, realizaba investigaciones en el campo de la identificación por radiofrecuencia en red (RFID) y las tecnologías de sensores emergentes. 
                Los laboratorios de investigación estaban conformados por siete universidades ubicadas en cuatro continentes, seleccionadas por Auto-ID Center para diseñar la arquitectura de IdC.1 Antes de analizar el estado actual de IdC, es importante ponerse de acuerdo en una definición. Según el Grupo de soluciones empresariales basadas en Internet (IBSG, Internet Business Solutions Group) de Cisco, IdC es sencillamente el punto en el tiempo en el que se conectaron a Internet más “cosas u objetos” que personas.2 En 2003, había aproximadamente 6,3 mil millones de personas en el planeta, y había 500 millones de dispositivos conectados a Internet.
                Si dividimos la cantidad de dispositivos conectados por la población mundial, el resultado indica que había menos de un dispositivo (0,08) por persona. De acuerdo con la definición de Cisco IBSG, IdC aún no existía en 2003.

                <br><br>
                Informe técnico porque la cantidad de cosas conectadas era relativamente escasa, dado que apenas comenzada la invasión de los dispositivos omnipresentes, como los smartphones. Por ejemplo, el Director General de Apple, Steve Jobs, no presentó el iPhone sino hasta el 9 de enero de 2007 en la conferencia Macworld.4 El crecimiento explosivo de los smartphones y las tablet PC elevó a 12,5 mil millones en 2010 la cantidad de dispositivos conectados a Internet, en tanto que la población mundial aumentó a 6,8 mil millones, por lo que el número de dispositivos conectados por persona es superior a 1 (1,84 para ser exactos) por primera vez en la historia.

                <br><br>
                IdC: la primera evolución de Internet Por comparación, Internet ha seguido una ruta sostenida de desarrollo y mejora, pero podría decirse que no ha cambiado mucho. Básicamente sigue conservando el propósito para el que fue diseñada durante la era de ARPANET. Por ejemplo, en los comienzos había varios protocolos de comunicación como AppleTalk, Token Ring e IP. En la actualidad, Internet está estandarizada en gran medida en IP.

                <br><br>
                En este contexto, IdC adquiere gran importancia porque se trata de la primera evolución real de Internet (un salto que conducirá a aplicaciones revolucionarias con el potencial de mejorar drásticamente la manera en que las personas viven, aprenden, trabajan y se entretienen). IdC ya ha logrado que Internet sea sensorial (temperatura, presión, vibración, luz, humedad, estrés), lo que nos permite ser más proactivos y menos reactivos. Además, Internet se expande hacia lugares que, hasta el momento, eran inalcanzables. Los pacientes ingieren dispositivos de Internet que ingresan a su cuerpo para ayudar a los médicos a diagnosticar y determinar las causas de ciertas enfermedades.
                10 Es posible colocar sensores pequeñísimos en plantas, animales y fenómenos geológicos y conectarlos a Internet.
                11 En el otro extremo del espectro, Internet viaja al espacio por medio del programa Internet Routing in Space (IRIS) de Cisco.
                12 Si evolucionamos es porque nos comunicamos Los seres humanos evolucionan porque se comunican. Por ejemplo, después de haber descubierto el fuego y de haberlo compartido, ya no hacía falta redescubrirlo: solo había que comunicarlo. Un ejemplo más moderno sería el descubrimiento de la estructura helicoidal del ADN, moléculas que transportan información genética de una generación a la siguiente. Una vez que el artículo de James Watson y Francis Crick apareció en una publicación científica en abril de 1953, las disciplinas de la medicina y la genética pudieron tomar esta información y avanzar desde allí a pasos agigantados.
                13 Este principio de compartir información y aprovechar los descubrimientos se puede comprender mejor si se analiza la manera en que los seres humanos procesan los datos (ver Figura 3). Desde la base hasta la cúspide, las capas de la pirámide incluyen datos, información, conocimiento y sabiduría. Los datos representan la materia prima que se procesa para obtener información. Los datos individuales por sí mismos no son muy útiles, pero en volúmenes permiten identificar tendencias y patrones. Esta y otras fuentes de información se unen para conformar el conocimiento. En su sentido más básico, el conocimiento es la información de la que alguien es consciente. Luego, la sabiduría nace de 

                <br><br>
                Informe técnico la combinación de conocimiento y experiencia. En tanto que el conocimiento cambia con el tiempo, la sabiduría es atemporal, y todo comienza con la adquisición de datos.
                Los seres humanos convierten los datos en sabiduría También resulta importante destacar que existe una correlación directa entre la entrada (datos) y la salida (sabiduría). Cuántos más datos se generan, más conocimiento y sabiduría pueden obtener las personas. IdC aumenta drásticamente la cantidad de datos que están disponibles para que los procesemos. Este aumento, combinado con la capacidad de Internet de comunicar estos datos, hará posible que las personas avancen aún más. IdC: imprescindible para el progreso de los seres humanos A medida que sigue aumentando la población del planeta, se torna cada vez más importante que las personas se conviertan en guardianes de la Tierra y sus recursos. Además, las personas desean vidas saludables, plenas y confortables para sí mismas, sus familias y las personas que quieren. Si se combina la capacidad de la próxima evolución de Internet (IdC) para percibir, recolectar, transmitir, analizar y distribuir datos a escala masiva con la manera en que las personas procesan la información, la humanidad tendrá el conocimiento y la sabiduría necesarios no solo para sobrevivir sino para mejorar y prosperar en los próximos meses, años, décadas y siglos.

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





