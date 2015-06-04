<?php

	$archivo = "text.txt";
	$contenido = "Este es mi contenido";

	$manejador = fopen($archivo, 'a+');//coloca el cursor al final de lo que ya se tiene escrito para seguir escribiendo
	/*$manejador = fopen($archivo, 'w+');*/ //sobre escribe el contenido
	fwrite($manejador, $contenido);


?>