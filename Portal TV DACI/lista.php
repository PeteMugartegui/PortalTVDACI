<?php
$conexion = mysql_connect('localhost', 'root', ''); // se conecta con el servidor

mysql_select_db('prueba', $conexion); // selecciona la base de datos

$tabla = mysql_query("SELECT id_usuario, tx_nombre, tx_apellidoPaterno, tx_apellidoMaterno, tx_correo, tx_username, tx_password, id_TipoUsuario, dt_registro FROM tbl_users ORDER BY id_usuario ASC"); // selecciono todos los registros de la tabla usuarios, ordenado por nombre

while ($registro = mysql_fetch_array($tabla)) { // comienza un bucle que leera todos los registros y ejecutara las ordenes que siguen

    echo 'Numero de Usuario: ' . $registro['id_usuario'] . ' '; // imprime el texto, el valor del numero del campo id y hace un salto de línea

    echo 'nombre: ' . $registro['tx_nombre'] . ' '; // imprime el nombre

    echo 'apellido paterno: ' . $registro['tx_apellidoPaterno'] . ' '; // imprime el email
    echo 'apellido materno: ' . $registro['tx_apellidoMaterno'] . ' ';
    echo 'correo: ' . $registro['tx_correo'] . ' ';
    echo 'nombre de usuario: ' . $registro['tx_username'] . ' ';
    echo 'password: ' . $registro['tx_password'] . ' ';
    echo 'nivel de usuario: ' . $registro['id_TipoUsuario'] . ' ';
    echo 'datos de registro: ' . $registro['dt_registro'] . ' ';
    echo '<br>';

} // fin del bucle de ordenes

mysql_free_result($tabla); // libera los registros de la tabla

mysql_close($conexion); // cierra la conexion con la base de datos


?>