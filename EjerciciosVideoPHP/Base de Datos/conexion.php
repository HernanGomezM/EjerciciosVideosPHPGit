<?php
$conexion = mysql_connect("localhost","Video2Brain","opeth");

if (!$conexion) {
	die('no e podido conectar:'.mysql_error());
}
/*
if (mysql_query("CREATE DATABASE PrimeraBase",$conexion)) {
	echo "se a creado la base de datos";
}else{
echo "no se a podido crear la base de datos por el siguiente error: ".mysql_error();
}
*/

//Preparao esta peticion

mysql_select_db("PrimeraBase",$conexion);
$sql = "CREATE TABLE Agenda 
(
	IdPersona int NOT  NULL AUTO_INCREMENT,
	PRIMARY KEY(IdPersona),
	Nombre varchar(15),
	Apellido varchar(15),
	Edad int,
	Telefono int
)";

//ejecuto esta pteticion
mysql_query($sql, $conexion);
//cerrar la conecxion
mysql_close($conexion);
?>