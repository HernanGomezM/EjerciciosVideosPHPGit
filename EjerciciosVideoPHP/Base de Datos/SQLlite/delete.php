<?php
$conn = new PDO ('sqlite:bibilioteca.db');

	$consulta = "DELETE FROM Discos WHERE Artista='Metallica'";
	
	$resul = $conn->exec($consulta);

$conn = NULL;

?>