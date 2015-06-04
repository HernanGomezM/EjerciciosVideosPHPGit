<?php

$agenda[0]['nombre'] = "luis";
$agenda[0]['telefono'] = 3155412;
$agenda[0]['Correo'] = "asdasdsdas.com";

$agenda[1]['nombre'] = "pepe";
$agenda[1]['telefono'] = 318645;
$agenda[1]['Correo'] = "lijkasj.com";

$agenda[2]['nombre'] = "marta";
$agenda[2]['telefono'] = 3748454;
$agenda[2]['Correo'] = "qweqweqwe.com";

echo $agenda[2]['nombre'];
function MiAgenda(){

for ($i=0; $i <=5 ; $i++) { 
	echo "
	<table border=1 width=300px>
		<tr>
			<td>Nombre :</td>
			<td>".$agenda[$i]['nombre']."</td>
		</tr>
		<tr>
			<td>Telefono :</td>
			<td>".$agenda[$i]['telefono']."</td>
		</tr>
		<tr>
			<td>Correo :</td>
			<td>".$agenda[$i]['Correo']."</td>
		</tr>
	</table>
	";

}
}
MiAgenda();
?>