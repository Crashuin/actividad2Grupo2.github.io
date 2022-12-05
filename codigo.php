<?php

$host='localhost';
$bd='registro';
$user='postgres';
$pass='1234';

$conexion=pg_connect("host=$host dbname=$bd user=$user password=$pass");

$query=("INSERT INTO persona(primerNombre,segundoNombre,primerApellido,segundoApellido,ciudad,correo)
	VALUES('$_REQUEST[primer_nombre]','$_REQUEST[segundo_nombre]', '$_REQUEST[primer_apellido]','$_REQUEST[segundo_apellido]','$_REQUEST[ciudad]','$_REQUEST[edad]')");

$consulta=pg_query($conexion,$query);
pg_close();



?>