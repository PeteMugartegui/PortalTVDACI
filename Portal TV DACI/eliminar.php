<?php
$bdhost = "localhost"; 
$bdtabla = "tbl_users";
$bdusuario = "root"; 
$bdclave = "";
$bdname = "prueba"; 
if(isset($_POST['accion'])){$accion=$_POST['accion'];}
if(isset($_POST['id_usuario'])){$id=$_POST['id_usuario'];}
//$id = $_POST['idusuario'];
$db = mysql_connect($bdhost,$bdusuario,$bdclave); 
mysql_select_db($bdname) or die(mysql_error());
if($accion == "eliminar" && $id)  {
    mysql_query("DELETE FROM tbl_users WHERE id_usuario='$id'");
    die("Usuario Eliminado Exitosamente");
}

$query = "SELECT * FROM tbl_users ORDER BY id_usuario DESC"; 
$resultado = mysql_query($query);
while($r = mysql_fetch_array($resultado)) {
    $id = $r['id_usuario'];
    $usuario = $r['tx_username'];
    echo "<form method='post'><b>$usuario</b> - 
        <input type=hidden name='id_usuario' value=$id>
        <input type=hidden name='accion' value='eliminar'>
        <input type=submit name='submit' value='ELIMINAR'>
        </form>";
}
mysql_close($db);
?>