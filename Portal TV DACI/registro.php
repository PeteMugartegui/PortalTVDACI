<?php

 
$str_nombre         = "";
$str_apPaterno  = "";
$str_apMaterno  = "";
$str_correo         = "";
$str_username   = "";
$str_password   = "";
$str_password2  = "";
$str_matricula ="";
 
if( isset($_POST['str_nombre']) )       
    $str_nombre         = trim($_POST['str_nombre']);
if( isset($_POST['str_apPaterno']) ) 
    $str_apPaterno  = trim($_POST['str_apPaterno']);
if( isset($_POST['str_apMaterno']) ) 
    $str_apMaterno  = trim($_POST['str_apMaterno']);
if( isset($_POST['str_correo']) ) 
    $str_correo     = trim($_POST['str_correo']);
if( isset($_POST['str_username']) ) 
    $str_username   = trim($_POST['str_username']);
if( isset($_POST['str_password']) ) 
    $str_password   = trim($_POST['str_password']);
if( isset($_POST['str_password2']) ) 
    $str_password2  = trim($_POST['str_password2']);
if( isset($_POST['str_matricula']) )       
    $str_matricula  = trim($_POST['str_matricula']);
 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>.:: Registrar Usuario ::. </title>
 
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <!--<link rel="stylesheet" href="estilos.css" type="text/css">
    <script src="jquery171.js" type="text/javascript"></script>
    <script src="jquery.validate.js" type="text/javascript"></script>
    <script type="text/javascript" src="jquery.alerts.js"></script>
    <link href="jquery.alerts.css" rel="stylesheet" type="text/css" />-->
 
    <script type="text/javascript">
    <!--
        $().ready(function() {
        $("#registrar_usuario").validate({
        rules: {
        /*A continuacion los nombres de los campos y sus reglas a cumplir */
            tx_nombre: {
                required: true, minlength: 3
            },
            tx_apPaterno: {
                required: true, minlength: 3
            },
            tx_apMaterno: {
                required: true, minlength: 3
            },
            tx_matricula: {
                required: true, minlength: 6
            },
            tx_correo: {
                required: true, minlength: 5, email: true
            },
            tx_username: {
                required: true, minlength: 5
            },
            tx_password: {
                required: true, minlength: 5
            },
            tx_password2: {
                required: true, minlength: 5,   equalTo: "#tx_password"
            }
 
        },
        /*A continuacion los campos y los mensajes en caso de que no se cumplan las reglas */
        messages: {
            tx_nombre: {
                required: "Por favor, escriba su Nombre.",
                minlength: jQuery.format("Su Nombre como minimo debe tener {0} caracteres.")
            },
            tx_matricula: {
                required: "Por favor, escriba su Matricula.",
                minlength: jQuery.format("Su Nombre como minimo debe tener {0} caracteres.")
            },
            tx_apPaterno: {
                required: "Por favor, escriba su Apellido Paterno.",
                minlength: jQuery.format("Su Apellido Paterno como minimo debe tener {0} caracteres.")
            },
            tx_apMaterno: {
                required: "Por favor, escriba su Apellido Materno.",
                minlength: jQuery.format("Su Apellido Materno como minimo debe tener {0} caracteres.")
            },
            tx_correo: {
                required: "Por favor, escriba una direccion de correo electronico valida.",
                minlength: jQuery.format("Por favor, escriba una direccion de correo electronico valida.")
            },
            tx_username: {
                required: "Por favor, escriba un nombre de usuario. Este dato le servira para iniciar sesion y ver el contenido.",
                minlength: jQuery.format("Su nombre de usuario como minimo debe tener {0} caracteres.")
            },
            tx_password: {
                required: "Por favor, escriba una contraseña.",
                minlength: jQuery.format("Su contraseña como minimo debe tener {0} caracteres.")
            },
            tx_password2: {
                required: "Por favor, repita la contraseña anterior.",
                minlength: jQuery.format("Su contraseña como minimo debe tener {0} caracteres."),
                equalTo: "Por favor, repita la contraseña anterior.",
            }
 
        }
 
        });
        $("#tx_nombre").focus();
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
    universidad
        </div>
<br />
 
 <div id="contenedor">
<form id="registrar_usuario" name="registrar_usuario"  method="POST" action="guardarRegistro.php">
 
<table align="center" width="600px">
 
<tr>
    <td colspan="2" align="center"><h3><b><font color="black">Registrar usuario</font></b></h3></td>
</tr>
 

     
    <?php
        //Si llega el parametro error y no viene vacio
        if( isset( $_POST['error'] ) && $_POST['error'] != '' ) {
    ?>
        <tr>
            <td colspan="2" >
                <font color="red">
                <ul>
                    <?php
                        echo $_POST['msgs_error'];
                    ?>
                </ul>
                </font>
            </td>
        </tr>
    <?php
        }
    ?>
 
     
    <tr>
        <td><label for="tx_nombre"><font color="black">Nombre(s)</font></label></td>
        <td>
            <input type="text" name="tx_nombre" id="tx_nombre" value='<?php echo $str_nombre ?>' size="30"  maxlength="30" />
        </td>
    </tr>
    <tr>
        <td><label for="tx_apPaterno"><font color="black">Apellido paterno</font></label></td>
        <td>
            <input type="text" name="tx_apPaterno" id="tx_apPaterno" value='<?php echo $str_apPaterno ?>' size="30"  maxlength="30" />
        </td>
    </tr>

    <tr>
        <td><label for="tx_apMaterno"><font color="black">Apellido materno</font></label></td>
        <td>
            <input type="text" name="tx_apMaterno" id="tx_apMaterno"  value='<?php echo $str_apMaterno ?>' size="30"  maxlength="30" />
        </td>
    </tr>
    <tr>
        <td><label for="tx_matricula"><font color="black">Matricula</font></label></td>
        <td>
            <input type="text" name="tx_matricula" id="tx_matricula" value='<?php echo $str_matricula ?>' size="30"  maxlength="30" />
        </td>
    </tr>
    <tr>
        <td><label for="tx_correo"><font color="black">Correo electronico</font></label></td>
        <td>
            <input type="text" name="tx_correo" id="tx_correo"  value='<?php echo $str_correo ?>' size="30"  maxlength="30" />
        </td>
    </tr>
    <tr>
        <td><label for="tx_username"><font color="black">Nombre de usuario</font></label></td>
        <td>
            <input type="text" name="tx_username" id="tx_username"  value='<?php echo $str_username ?>' size="25"  maxlength="25"  />
        </td>
    </tr>
    <tr>
        <td><label for="tx_password"><font color="black">Contrase&ntilde;a</font></label></td>
        <td>
            <input type="password" name="tx_password" id="tx_password"  value='<?php echo $str_password ?>'  size="25"  maxlength="25" />
        </td>
    </tr>
    <tr>
        <td><label for="tx_password2"><font color="black">Confirme la contrase&ntilde;a</font></label></td>
        <td>
            <input type="password" name="tx_password2" id="tx_password2"  value='<?php echo $str_password2 ?>'  size="25"  maxlength="25" />
        </td>
    </tr>
    <tr>
        <!---<td>Tipo de usuario</td>-->
        <td>
            <input type="hidden" name="i_tipoUsuario" id="i_tipoUsuario" value="2"   />
            <!--<input type="radio" name="rad_TipoUsuario" id="rad_TipoUsuario" disabled value="2" checked="checked"  />--> <!--Usuario normal--> &nbsp;&nbsp;&nbsp;
            <!--<input type="radio" name="rad_TipoUsuario" id="rad_TipoUsuario" disabled value="1"  /> --><!--Administrador-->
        </td>
    </tr>
 
<tr>
 
    <td align="center" colspan="2">
        <br /><br />
        <input type="button" onClick="javascript: location.href='index.php'" name="cancelar" value="Cancelar" >
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="registrarme" value="Registrarme" >
    </td>
</tr>
 
</table>
</form>
</body>
</html>