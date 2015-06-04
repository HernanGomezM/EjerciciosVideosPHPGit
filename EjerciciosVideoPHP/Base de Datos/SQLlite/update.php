<?php
$conn = new PDO ('sqlite:bibilioteca.db');

	$consulta = "UPDATE Discos SET Artista ='Metallica' WHERE Artista ='Motorhead'";
	
	$resul = $conn->exec($consulta);

$conn = NULL;

?>