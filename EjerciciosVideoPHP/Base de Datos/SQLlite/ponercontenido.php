<?php
$conn = new PDO ('sqlite:bibilioteca.db');

$inser = 'INSERT INTO Discos VALUES("Queen","Queen",1973);
	INSERT INTO Discos VALUES("Queen","QueenII",1974);
	INSERT INTO Discos VALUES("Metallica","and Justice for all",1989);';
$result = $conn -> exec($inser);
ECHO "No es lo mismo";
$conn = NULL;

?>