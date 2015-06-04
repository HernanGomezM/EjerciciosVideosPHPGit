<?php
echo "<table border=1>
<tr>
	<td>Artista</td>
	<td>Disco</td>
	<td>Anio</td>
</tr>";
$conn = new PDO ('sqlite:bibilioteca.db');

	$consulta = "SELECT *  FROM Discos WHERE Artista ='Metallica'";
	$resul = $conn->query($consulta);

	foreach ($resul as $row) {
	 	echo "<tr><td>".$row['Artista']."</td><td>".$row['Disco']."</td><td>".$row['Anio']."</td></tr>";
	 } 
echo "</table>";
$conn = NULL;
?>