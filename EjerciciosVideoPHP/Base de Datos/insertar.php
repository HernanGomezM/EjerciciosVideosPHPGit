<?php
$conexion = mysql_connect("localhost","Video2Brain","opeth");
if (!$conexion) {
	die('no e podido conectar:'.mysql_error());
}
mysql_select_db("PrimeraBase",$conexion);
mysql_query("INSERT INTO Agenda (Nombre,Apellido,Edad,Telefono)VALUES('Marta','Lopez',54,354234)");
mysql_query("INSERT INTO Agenda (Nombre,Apellido,Edad,Telefono)VALUES('Miguel','Sanchez',32,352423)");
mysql_close($conexion);
?>