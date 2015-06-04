<?php

$archivologs = "logs.dat";

@$ip = getenv(REMOTEA_DDR);
$Navegador = $_SERVER['HTTP_USER_AGENT'];

$Contenido = date('U')."|".date("Y" ."|". "m" ."|". "d" ."|". "h" ."|". "i"."|"."s")."|".
$Navegador."|".$ip."\n";

$manejador =  fopen($archivologs, 'a+');
fwrite($manejador, $Contenido);

?>