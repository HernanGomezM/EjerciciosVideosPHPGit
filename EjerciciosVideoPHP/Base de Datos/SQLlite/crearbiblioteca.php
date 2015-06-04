<?php
	
	$conn = new PDO ('sqlite:bibilioteca.db');

	$consulta = " CREATE TABLE Discos( 
		Artista Char(20)NOT NULL,
		Disco Char(40),
		Anio Integer
		);";
	$data = $conn->query($consulta);
	foreach ($data as $row) {
	 	 
	 } 
?>