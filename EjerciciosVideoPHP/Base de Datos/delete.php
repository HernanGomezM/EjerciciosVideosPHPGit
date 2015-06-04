<?php

$conexion = mysql_connect("localhost","Video2Brain","opeth");

if (!$conexion) {
die('no e podido conectar:'.mysql_error());
}
mysql_select_db("PrimeraBase",$conexion);

mysql_query("DELETE FROM Agenda WHERE Nombre = 'Marta' AND Apellido='Lopez'");

mysql_close($conexion);


?>