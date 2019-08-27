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
        <script>
            function limpia(elemento)
              {
                elemento.value = "";
              }
          </script>
    </head>
    <body>

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



<center><br><br><br><br>
    <table id="informacion" width="80%" border="0" height="70" align="center" >
        <tr>
            <td colspan="4" whdth="65">


                <!--Informacion a mostrar -->

                <h1 class="titulo">Contactenos</h1>

                <br>



<center>
                <form action="guardarContacto.php" method="POST">
                    <table class="tablaFormularios">

                        <tr class="filaFormulario">
                            <td>Nombre:</td>
                            <td><input type="text" name="nombre" onload="javascript: limpia(this);" class="campo" placeholder="Ingrese su nombre" required=""></td>
                        </tr>

                        <tr class="filaFormulario">
                            <td>Su correo:</td>
                            <td><input type="email" name="correo" onload="javascript: limpia(this);" class="campo" placeholder="Ingrese sus correo" required=""></td>
                        </tr>

                        <tr class="filaFormulario">
                            <td>Mensaje:</td>
                            <td><input type="text-area" name="mensaje" onload="javascript: limpia(this);" class="campo" placeholder="Ingrese mensaje" required=""></td>
                        </tr>
                        <tr class="filaBotones">
                            <td><button type="submit">Enviar Mensaje</button></td>

                        </tr>

                    </table>
                </form>
                <h3>Facebook</h3><a target="_blank" href="https://www.facebook.com/"><img width="120" src="fotos/fb.png"></a>
                <br><br>
                <h3>Twitter</h3><a target="_blank" href="https://twitter.com/?lang=es"><img width="150" src="fotos/tw.png"></a>
                <br><br>
                <h3>Instagram</h3><a target="_blank" href="https://www.instagram.com/?hl=es"><img width="100" src="fotos/in.png"></a>
                <br><br>
                <h3>Teléfono</h3><img width="100" src="fotos/phone.png"><p>2222-2222</p>
                <br><br>
</center>
                <!--Fin de la informacion -->
            </td>


<center>
            <table width="60%" border="0" height="70" align="center" >
            <tr>
                <td align="center" height="60" ><a href="index.php">Inicio</a></td>
                <td align="center"><a  href="web2dot0.php">Web 2.0</a></td>
                <td align="center"><a href="plata.php">Plataformas Web</a></td>
                <td align="center"><a href="esdweb.php">Estructuras Web</a></td>
                <td align="center"><a href="equipo.php">Informacion</a></td>
                <td align="center"><a href="glosario.php">Glosario</a></td>
    </table>
    </center>

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
