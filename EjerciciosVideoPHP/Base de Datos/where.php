<?php
$conexion = mysql_connect("localhost","Video2Brain","opeth");

if (!$conexion) {
	die('no e podido conectar:'.mysql_error());
}
mysql_select_db("PrimeraBase",$conexion);

$peticion = mysql_query("SELECT * FROM Agenda WHERE Nombre='Miguel'");

while ($fila = mysql_fetch_array($peticion)) {
	echo $fila['Nombre']." ".$fila['Apellido']." ".$fila['Edad']." ".$fila['Telefono'];
	echo "<br />";
}

mysql_close($conexion);
?>