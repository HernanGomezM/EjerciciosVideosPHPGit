<?php 
 function miTabla($numero){
 	for ($multi=0; $multi <=10 ; $multi++) {
 		echo $numero."*".$multi."=".$numero*$multi."<br />";
 	}
 }
 for ($i=0; $i <=10 ; $i++) { 
 echo "Tabla del: ".$i."<br />";
 miTabla($i);
 }
 
?>