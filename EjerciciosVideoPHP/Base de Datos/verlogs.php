<?php

$archivologs = 'logs.dat';
$manejador = fopen($archivologs, "r");

echo "<table width=100% border=1px>";

while ($datos = fgetcsv($manejador, 1000000,"|" )) {
	
	$marcaTiempo =  $datos[0];
	$anyo = $datos[1];
	$mes = $datos[2];
	$dia = $datos[3];
	$hora = $datos[4];
	$minuto = $datos[5];
	$segundo = $datos[6];
	$Navegador = $datos[7];
	$ip = $datos[8];
}	
echo "<tr>

	<td border=1px>'.$marcaTiempo.'</td>
	<td border=1px>'.$anyo.'</td>
	<td border=1px>'.$mes.'</td>
	<td border=1px>'.$dia.'</td>
	<td border=1px>'.$hora.'</td>
	<td border=1px>'.$minuto.'</td>
	<td border=1px>'.$segundo.'</td>
	<td border=1px>'.$Navegador.'</td>
	<td border=1px>'.$ip.'</td>

</tr>";

echo "</table>";
fclose($manejador);
?>