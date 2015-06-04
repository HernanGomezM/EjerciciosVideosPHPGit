<?php

session_start();

$PrimeVariable = "Hola";

$_SESSION['SegundaVariable']="Adios";
echo $PrimeVariable;
echo "<a href='destino.php'> Voy al destino</a>";
?>