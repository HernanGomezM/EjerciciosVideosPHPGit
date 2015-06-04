<?php
	@$tuip = getenv(REMOTE_ADDR);
	echo 'tu IP es: '.$tuip;
	echo "<br />";
	$tunavegador = $_SERVER['HTTP_USER_AGENT'];
	echo 'tu navegador es: '.$tunavegador; 
?>