<?php
$conexion = mysql_connect("localhost","Video2Brain","opeth");
//control para asegurar la conexion
if (!$conexion) {
	die('no e podido conectar:'.mysql_error());
}
//selecciono la base de datos
mysql_select_db("PrimeraBase",$conexion);
//selecciono todos los elementos de la tabla Agenda
$peticion = mysql_query("SELECT * FROM Agenda");
//Enlisto los elementos de mi tabla en la base de datos 
while ($fila = mysql_fetch_array($peticion)) {
	echo $fila['Nombre']." ".$fila['Apellido']." ".$fila['Edad']." ".$fila['Telefono'];
	echo "<br />";
}
//cerrar la conexion
mysql_close($conexion);
?>