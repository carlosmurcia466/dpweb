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

                <!--Informacion a mostrar -->

                
                
                <?php
                if ($_SESSION['sTipo'] == 2) {
                    
                    echo '<h1>Encuesta</h1>';
                
                    
                    echo ' <form  id="encuesta" action="guardarEncuesta.php" method="post">

        <table>
        
        <tr>
    		<td>
			Por favor, dedique un momento a completar esta pequeña encuesta, la información que nos proporcione será utilizada para mejorar nuestro servicio. <br><br>
			Sus respuestas serán tratadas de forma confidencial y no serán utilizadas para ningún propósito distinto a la investigación llevada a cabo por Home Store, para verificar el nivel de
			satisfación que el cliente tiene con nuestros servivios. <br><br>
			Esta encuesta dura aproximadamente 5 minutos. <br><br><br>
			</td>
			<td>
			</td>
		</tr>
		<tr>
			<td >
			<b>1. ¿Es primera vez que visita nuestro  sitio? </b><br><br>
    			<input name="opcion"type="radio" value="si" required placeholder="opcion">&#09;</pre>Si</pre><br><br>
				<input name="opcion"type="radio" value="no">&#09;</pre>No</pre><br><br>
				<br>
                
                <b>2. ¿Cual es el PRINCIPAL motivo por el que visito el sitio?</b><br><br>
    			<input name="2"type="radio" value="recomendacion" required placeholder="2">Me lo recomendo un amigo</pre><br><br>
				<input name="2"type="radio" value="precios">&#09;</pre>Tienen buenos Precio/Calidad</pre><br><br>
				<input name="2"type="radio" value="sus productos">&#09;</pre>Tiene los productos que se adaptan mis necesidad</pre><br><br>
            <br>
            
				<b>3. ¿Cuantas veces a visitado el sitio de Home Store en los ultimos 30 dias?</b><br><br>
				<input name="3"type="radio" value="1-3" required placeholder="3">1-3&#09;</pre><br><br>
				<input name="3"type="radio" value="4-5">&#09;</pre>4-5</pre><br><br>
				<input name="3"type="radio" value="6 o mas veces">&#09;</pre>6 o mas veces</pre><br><br>
				<br>

				<b>4. ¿Te resulto facil registrarte a Home Store?</b><br><br>
				<input type="checkbox" value="Facil" name="4">&#09;</pre>Me resulto sencillo</pre><br><br>
				<input type="checkbox" value="Complicado" name="4">&#09;</pre>Es Demasiado complicado</pre><br><br>
				<input type="checkbox" value="no lo hizo" name="4">&#09;</pre>Mi pedido lo hize por correo/telefono</pre><br><br>
				<br>

				<b>5. ¿Encontro los productos  que necesitaba?</b><br><br>
				<input type="checkbox" value="Si, todo" name="5">&#09;</pre>Si,todo</pre><br><br>
				<input type="checkbox" value="Si, en parte" name="5">&#09;</pre>Si,en parte</pre><br><br>
				<input type="checkbox" value="No, nada" name="5">&#09;</pre>No,nada</pre><br><br>
				<br>

				<b>6. ¿Que pruductos le interesa comprar?</b ><br><br>
				<input type="checkbox" value="Muebles" name="6" >&#09;</pre>Muebles</pre><br><br>
				<input type="checkbox" value="Electrodomésticos" name="6">&#09;</pre>Electrodomésticos</pre><br><br>
				<input type="checkbox" value="Decoración" name="6">&#09;</pre>Decoración</pre><br><br>
				<input type="checkbox" value="Otros" name="6">&#09;</pre>Otros</pre>
			    <br>
				<br>

				<b>7. ¿Qué opinas del CONTENIDO de nuestra web?</b><br><br>
				<input type="checkbox" value="facil" name="7">&#09;</pre>Me resulta fácil encontrar lo productos que necesito</pre><br><br>
				<input type="checkbox" value="complicado" name="7">&#09;</pre>Me resulta complicado encontrar lo que busco.</pre><br><br>
				<input type="checkbox" value="indiferencia" name="7">&#09;</pre>Me es indiferente el contenido del sitio.</pre><br><br>
				<br>

				<b>8. ¿Le resultó fácil y dinámica la navegación o rutas de acceso a la información?</b><br><br>
				<input type="radio" value="si" name="8" required placeholder="">&#09;</pre>Si</pre><br><br>
				<input type="radio" value="no" name="8">&#09;</pre>No</pre><br><br>
				<br>


				<b>9. ¿Cómo define a este sitio web?:</b><br><br>
				<input type="checkbox" value="exelente" name="9">&#09;</pre>Excelente</pre><br><br>
				<input type="checkbox" value="bueno" name="9">&#09;</pre>Bueno</pre><br><br>
				<input type="checkbox" value="malo" name="9">&#09;</pre>Malo</pre><br><br>
				<br>

				<b>10. ¿Ha realizado compras en linea en nuestro sitio?</b><br><br>
				<input type="radio"  name="10" required placeholder="">&#09;</pre>Si</pre><br><br>
				<input type="radio"  name="10">&#09;</pre>No</pre><br><br>
				<br>

				<b>11. ¿A podido visualizar todos los contenidos?</b><br><br>
				<input type="radio" name="11" value="Si" required placeholder="">&#09;</pre>Si</pre><br><br>
				<input type="radio" name="11" value="No" required>&#09;</pre>No</pre><br><br>
				
				<br>

				<b>12. ¿Despues que se registro pudo accesar sin dificultad?</b><br><br>
				<input type="radio" value="Si" name="12"></pre>Si<br><br>
				<input type="radio" value="No" name="12">&#09;</pre>No<br><br>
				<br>

				<b>13. ¿Como considera el catalogo de productos?</b><br><br>
				<select id ="Opciones" name="13" >
				<option value="buena">Buena</option>
				<option value="completo">Muy completo</option>
				<option value="falta">No hay mucha productos</option>
				<option value="deficiente">Muy deficiente</option>
				</select><br><br>
				<br>

				<b>14. ¿Recomendarias el sitio de Home Store a tus Amigos?</b><br><br>
				<input type="radio" value="si" name="14">
			&#09;</pre>Si</pre><br><br>
				<input type="radio" value="No" name="14">&#09;</pre>No</pre><br><br>
				<br>
	


    	
           <b>15. ¿Tiene usted algún comentario adicional o alguna sugerencia que nos ayude a mejorar la web o algún aspecto del servicio?</b><br><br>
    			<input name="15" type="text" size="100" maxlength="300" id="" required placeholder="Su Comentario">
                
                
    
        
			
				 <input type="submit"name="Enviar" value="Enviar">
				</td>
			</tr>
	</table>

            </form>';
                 
            
                 
               
                 
                 }
                  if ($_SESSION['sTipo'] == 1)
                 {
                     echo '<h1>Listado de Encuestas</h1>';
                     
                    require("conexion.php");
                    
                     
                     
                     $sql="SELECT * FROM encuesta";

                     $resultado=mysqli_query($conexion, $sql);   
                     
                     
                     echo'<table border=1><tr><td><b>Numero<b></td>'
                        . '<td><b>Preg1<b></td>'
                             . '<td><b>Preg2<b></td>'
                             . '<td><b>Preg3<b></td>'
                             . '<td><b>Preg4<b></td>'
                             . '<td><b>Preg5<b></td>'
                             . '<td><b>Preg6<b></td>'
                             . '<td><b>Preg7<b></td>'
                             . '<td><b>Preg8<b></td>'
                             . '<td><b>Preg9<b></td>'
                             . '<td><b>Preg10<b></td>'
                             . '<td><b>Preg11<b></td>'
                             . '<td><b>Preg12<b></td>'
                             . '<td><b>Preg13<b></td>'
                             . '<td><b>Preg14<b></td>'
                             
                             . '<td><b>Id Cliente</td><b></tr>'; 
                     
                     while ($registro = mysqli_fetch_array($resultado))
                     {
                         echo'<tr><td>'. $registro['codigo_encuesta'].'</td>';
                         echo'<td>'.$registro['pregun1'].'</td>';
                         echo'<td>'.$registro['pregun2'].'</td>';
                         echo'<td>'.$registro['pregun3'].'</td>';
                         echo'<td>'.$registro['pregun4'].'</td>';
                         echo'<td>'.$registro['pregun5'].'</td>';
                         echo'<td>'.$registro['pregun6'].'</td>';
                         echo'<td>'.$registro['pregun7'].'</td>';
                         echo'<td>'.$registro['pregun8'].'</td>';
                         echo'<td>'.$registro['pregun9'].'</td>';
                         echo'<td>'.$registro['pregun10'].'</td>';
                         echo'<td>'.$registro['pregun11'].'</td>';
                         echo'<td>'.$registro['pregun12'].'</td>';
                         echo'<td>'.$registro['pregun13'].'</td>';
                         echo'<td>'.$registro['pregun14'].'</td>';
                         
                         echo'<td>'.$registro['idUsuario'].'</td></tr>';
                     }
                     
                     
                     
                      '</table>';
                     
                 }
                 
                 
                 ?>
                 
              
                 


            

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
                <td align="center" height="60" ><a href="listadoCotizaciones.php">Cotizaciones</a></td>
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
