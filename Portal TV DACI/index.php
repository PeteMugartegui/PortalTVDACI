<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>.:: Login ::. autenticar usuarios</title>
     
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--<link rel="stylesheet" href="estilos.css" type="text/css">
    <script src="jquery171.js" type="text/javascript"></script> 
    <script src="jquery.validate.js" type="text/javascript"></script>
    <script type="text/javascript" src="jquery.alerts.js"></script>
    <link href="jquery.alerts.css" rel="stylesheet" type="text/css" />-->
     
    <script type="text/javascript">
    <!--
        $().ready(function() {
            $("#frmlogin").validate();
            $("#usuario").focus();
        });
    // -->
    </script>
     <style type="text/css">
   body { background: #f7cb51; /* Old browsers */
background: -moz-linear-gradient(top, #f7cb51 0%, #fefcea 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f7cb51), color-stop(100%,#fefcea)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #f7cb51 0%,#fefcea 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #f7cb51 0%,#fefcea 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, #f7cb51 0%,#fefcea 100%); /* IE10+ */
background: linear-gradient(to bottom, #f7cb51 0%,#fefcea 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7cb51', endColorstr='#fefcea',GradientType=0 ); /* IE6-9 */}

     
      #conten{

        margin-left: 10%; 
         width:  80%;
      height: 80px;
         border-style: solid;*/
      /*border-color: #00ccff;*/
      border-width: 1px;
      border-color: #fff;
     
      }
      #contenedor{
      /*margin-top: 200px;*/
      margin-left: 10%;
      width:  80%;
      height: 400px;
      border-style: solid;*/
      /*border-color: #00ccff;*/
      border-width: 1px;
      border-color: #fff;
    

    }
    #contlet{

      margin-top: 100px;
      margin-left: 30%;
      width:  40%;
      height: 200px;


    }
</style>
</head>
<body>
<div id="conten">
    UNIVERSIDAD AUTONOMA DEL CARMEN
    </div>
<br />
<div id="contenedor">
<form id="frmlogin" name="frmlogin"  method="POST" action="validarUsuario.php">
<table align="center" width="200px">
<tr>
    <td colspan="2" align="center"><h3><font color="black">Iniciar sesi&oacute;n</font></h3></td>
</tr>
<tr>
    <td><font color="black">Usuario</font></td>
    <td>
        <input type="text" name="usuario" id="usuario" class="required" maxlength="50">
    </td>
</tr>
 
<tr>
    <td><font color="black">Password</font></td>
    <td>
        <input type="password" name="password" id="password" class="required"  maxlength="50">
    </td>
</tr>
<tr >
<td colspan="2" align="right">
        <input type="submit" name="enviar" value="Enviar" >
    
        </a>
    </td>
</tr>
 
<tr>
   <td colspan="2"  align="right">
        <a href="recuperarPassword.php">
            <font color="black">Olvide mi contrase&ntilde;a</font>
    </td>
 
</tr>
     
<tr>
    <td colspan="2" align="right" >
        <br/><a href="registro.php"><font color="black">Deseo registrarme</font></a>
    </td>
</tr> 
    <?php
     
    //Mostrar errores de validacion de usuario, en caso de que lleguen
     
        if( isset( $_POST['msg_error'] ) )
        {
            switch( $_POST['msg_error'] )
            {
                case 1:
            ?>
            <?php
echo "<script type=''>
alert('El usuario o password son incorrectos');
</script>"; 

?>
            <script type="text/javascript"> 
                jAlert("El usuario o password son incorrectos.", "Seguridad");
                $("#password").focus();
            </script>
            <?php
                break;          
                case 2:
            ?>
            <script type="text/javascript"> 
                jAlert("La seccion a la que intentaste entrar esta restringida.\n Solo permitida para usuarios registrados.", "Seguridad");
            </script>
            <?php       
                break;
            }       //Fin switch
        }
 
        //Mostrar mensajes del estado del registro
         
        if( isset( $_POST['status_registro'] ) )
        {
            switch( $_POST['status_registro'] )
            {
                case 1:
                if( $_POST['i_EmailEnviado'] ==1) {
                ?>
                    <script type="text/javascript"> 
                        jAlert("Gracias, ha sido registrado exitosamente.\n Se le ha enviado un correo electronico de bienvenida, \npor favor, NO LO CONTESTE pues solo es informativo.", 'Registro');
                    </script>
                    <?php
                } else {
                    ?>
                    <script type="text/javascript"> 
                        jAlert("Gracias, ha sido registrado exitosamente.\n No se le ha podido enviar correo electronico de bienvenida, \nsin embargo, ya puede utilizar sus datos de acceso para iniciar sesion..", 'Registro');
                    </script>
                <?php
                }
 
                    break;          
                 
                default:
            ?>
                <script type="text/javascript"> 
                    jAlert("Temporalmente NO se ha podido registrar, intente de nuevo mas tarde.", "Registro");
                </script>
            <?php       
            }       //Fin switch
        }
    ?>
     
</table>
</form>
</body>
</html>