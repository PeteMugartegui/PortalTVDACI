<?php
//Inicializar una sesion de PHP
session_start();
 
//Validar que el usuario este logueado y exista un UID
if ( ! ($_SESSION['autenticado'] == 'SI' && isset($_SESSION['uid'])) )
{
    //En caso de que el usuario no este autenticado, crear un formulario y redireccionar a la 
    //pantalla de login, enviando un codigo de error
?>
        <form name="formulario" method="post" action="index.php">
            <input type="hidden" name="msg_error" value="2">
        </form>
        <script type="text/javascript"> 
            document.formulario.submit();
        </script>
<?php
}
 
    //Conectar BD
    include("conectar_bd.php");  
    conectar_bd();
 
    //Sacar datos del usuario que ha iniciado sesion
    $sql = "SELECT  tx_nombre,tx_apellidoPaterno,tx_TipoUsuario,id_usuario,tx_username
            FROM tbl_users
            LEFT JOIN ctg_tiposusuario
            ON tbl_users.id_TipoUsuario = ctg_tiposusuario.id_TipoUsuario
            WHERE id_usuario = '".$_SESSION['uid']."'";         
    $result     =mysql_query($sql); 
 
    $nombreUsuario = "";
    $nickname = "";
 
    //Formar el nombre completo del usuario
    if( $fila = mysql_fetch_array($result) )
        $nombreUsuario = $fila['tx_nombre']." ".$fila['tx_apellidoPaterno'];
        $nickname = $fila['tx_username'];
     
//Cerrrar conexion a la BD
mysql_close($conexio);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/tablet.css">
    <link rel="stylesheet" type="text/css" href="css/phone.css">
    <link rel="stylesheet" type="text/css" href="css/effeckt.css">
    <link rel="stylesheet" type="text/css" href="css/effeckt.autoprefixed.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/effeckt.js"></script>
    <!--Datepicker-->
    <link rel="stylesheet" type="text/css" href="calendar/calendar.css">
    <script type="text/javascript" src="calendar/calendar.js"></script>
<body >
<div class="container">
        <div class="row-fluid">
            <div class="pan12">
                    <div id="barra-blanca">
                        <div class="span6">
                            <div style="height: 32px; border-bottom-style:solid; border-bottom-width:1px; margin-top:10px;"><p style="font-weight:300; font-size:28px;  text-align:center;">Universidad Autonoma del Carmen<br></p></div>
                            <p style="font-weight:700; font-size:28px;  text-align:center; margin-top:10px;">DES DACI</p>
                        </div>
                        <div class="span6">
                            <p   text align="right">Bienvenido <b><?php echo $nombreUsuario ?></b><a href="cerrarSesion.php">Cerrar sesi&oacute;n</a></p>
                        </div>
                    </div>
                </div>
        </div>
        <div class="row-fluid" id="primero">
                <div class="span12">
                        <nav id="barra">
                            <ul>
                                <li class="lista"><a href="acercade.php">Acerca de</a></li>
                                <li class="lista"><a href="servicios.php">Servicios</a></li>
                                <li class="lista"><a href="verperfil.php">Perfil</a></li>
                                <li class="lista"><a href="cursos.php">Cursos</a></li>
                                <li class="lista"><a href="#">Campus</a></li>
                                <li class="lista"><a href="#">Ayuda</a></li>
                                <li class="lista">
                                    <div id="buscador">
                                        <input class="todo-search-field" type="search" value="" placeholder="Search">
                                    </div>
                                </li>
                            </ul>
                            
                        </nav>
                </div>
        </div>
        <div id="virtual" class="row-fluid" style="margin-top:25px;">
            <div class="span12" id="contmapa">
                <div id="mapa">
                    <div class="span4"id="cajatexto">
                        <h2 class="titulo" id="recorrido-virtual" style="color:#fff;">RECORRIDO <br> VIRTUAL</h2>
                        <div class="span4" id="rectangulo-amarillo">
                            <i class="icon-chevron-right" id="flecha"></i>
                        </div>
                        <div class="span8" id="rectangulo-azul">
                            <p class="parrafo" id="entrar">Entrar Ahora</p>
                        </div>
                    </div>
                    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=Carmen,+Campeche,+M%C3%A9xico&amp;aq=0&amp;oq=carmen,+campeche+&amp;sll=40.396764,-3.713379&amp;sspn=14.996283,33.815918&amp;ie=UTF8&amp;hq=&amp;hnear=Carmen,+Campeche,+M%C3%A9xico&amp;ll=18.266667,-91.8&amp;spn=0.000989,0.004128&amp;t=m&amp;z=14&amp;layer=c&amp;cbll=18.645413,-91.817406&amp;panoid=6XfMldCDEd8Hw31uQM_LHQ&amp;cbp=12,188.29,,0,12.81&amp;output=svembed"></iframe><br/>
                </div>
            </div>
        </div>
        
        <div class="row-fluid" id="tercero">
            <div class="span12">
                <div class="span4 cuadros-cuad" id="cont-portal">
                    <figure class="mitad effeckt-caption linea-med" id="not" data-effeckt-type="cover-slide-top">
                        <div id="portal"><h2 class="titulo alin-altura" style="color:#fff;"> Noticias </h2></div>
                        <figcaption>
                            <div class="effeckt-figcaption-wrap">
                                <h3></h3>
                                <p>Entra y lee las ùltimas noticias</p>
                                <p><a href="#"><strong>Entra ahora>> </strong> </a></p>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="mitad effeckt-caption" id="eve" data-effeckt-type="cover-slide-top">
                        <div class="mitad" id="agenda"><h2 class="titulo alin-altura" style="color:#fff;"> Agenda Virtual </h2></div>
                        <figcaption>
                            <div class="effeckt-figcaption-wrap">
                                <h3>Agenda</h3>
                                <p>Checa la agenda de actividades próximas.</p>
                                <p><a href="#"><strong>Entra ahora>> </strong></a></p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="span4">
                    <div class="cuadros-cuad" id="campus-virtual">
                        <h2 class="titulo"> Campus Virtual </h2>
                        <img class="imgcenter" id="monitor" src="img/croquis.png" style="margin-left:125px; width:150px; height:120px;" /> 
                    </div>
                </div>
                <div class="span4 cuadros-cuad" id="chat">
                        <div class="span4">
                            <h2 class="titulo"> Chat</h2>
                            <figure class="effeckt-caption centrar" data-effeckt-type="revolving-door-right">
                                <img class="imgchat" style="height:auto; width:auto; margin: auto; max-width:100px; max-height:100px;" src="img/usuario.png" />
                                <figcaption>
                                  <div class="effeckt-figcaption-wrap">
                                    <?php echo $nickname ?>
                                    <p>Disponible</p>
                                  </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="span4">
                            <h2 class="titulo izq-align" style="margin-top: 5px;">Conectados:</h2>
                            <p class="parrafo izq-align" >Jperez</p>
                            <p class="parrafo izq-align">Fgonzale</p>
                            <p class="parrafo izq-align">Ddominguez</p>
                        </div>              
                </div>
            </div>

        <div class="row-fluid">
                <div class="span12 main-top" style="position:relative; margin-top: 25px;">
                        <section class="pages" id="divisor-cti" data-type="background" data-speed="10">
                            <div class=" black-opacity">
                                <div id="cont-blue">
                                    <article>
                                        <p id="titulo-blue" style="text-align:center;">Dependencia del Área de Ciencias <br><br> y la Información.</p>
                                        <p class="parrafo"style="margin-top:15px; text-align:center;">Ingenierìa en Sistemas, Diseño Multimedia y Computación.</p>
                                    </article>
                                </div>
                            </div>
                        </section>
                </div>
        </div>
    <div class="container">
        <div class="row-fluid" id="noticias-eventos">
            <div class="span12">
                <div class="span6 noti-even" id="noticias"><h2 class="tituloazul">Noticias</h2><br>
                    <div class="noticias-texto">
                        <p class="fecha">22 de Octubre 2013</p>
                        <p class="resumen-noticia">Concurso se programación, ¡Todo un éxito!. El primer lugar se llevo una tableta a casa</p>
                    </div>
                    <div class="noticias-texto">
                        <p class="fecha">12 de Octubre 2013</p>
                        <p class="resumen-noticia">Concurso se programación, ¡Todo un éxito!. El primer lugar se llevo una tableta a casa</p>
                    </div>
                    <div class="noticias-texto">
                        <p class="fecha">02 de Octubre 2013</p>
                        <p class="resumen-noticia">Concurso se programación, ¡Todo un éxito!. El primer lugar se llevo una tableta a casa</p>
                    </div>
                </div>
                <div class="span6 noti-even" id="eventos"><h2 class="tituloazul">Eventos</h2>
                    <div class="calendar calendario" data-color="red" ></div>
                </div>
            </div>
        </div>
    </div> <!-- Fin Container-->
    <div class="row-fluid">
            <footer class="span12 pie">
                <p class="span4 textopie">daci.edu.tv</p>
                <p class="span4 textopie">Universidad Autónoma del Carmen</p>
                <p class="span4 textopie">Todos los derechos reservados 2013 ©</p>
            </footer>
    </div>
    <div class="row-fluid">
        <footer class="span12 pie-negro">
            <div class="span12" id="daci">
                <p style="margin-bottom:25px;">DES DACI</p>
            </div>
                <div class="span8" id="info-contacto">
                    <ul style="text-align:center; margin-left:40%;">
                        <li class="lista"><a href="">Información</a></li>
                        <li class="lista"><a href="">Contacto</a></li>
                        <li class="lista"><a href="">Directorio</a></li>
                    </ul>
                </div>
                <div class="span12 seccion-logos">
                    <div class="span4" style="margin-left:30%;">
                    <ul>
                        <li class="lista"><img class="logos" src="img/facebook-logo.png" ></li>
                        <li class="lista"><img class="logos" src="img/twitter-logo.png"></li>
                    </ul>
                    </div>
                </div>
        </footer>
    </div>
</div>
<body>
</html>