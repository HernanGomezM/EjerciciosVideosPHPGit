<?php

$conexion = mysql_connect("localhost","Video2Brain","opeth");

if (!$conexion) {
	die('no e podido conectar:'.mysql_error());
}
mysql_select_db("PrimeraBase",$conexion);

mysql_query("UPDATE Agenda SET Edad='24' WHERE Nombre='Marta' AND Apellido='Lopez'");

mysql_close($conexion);

?>