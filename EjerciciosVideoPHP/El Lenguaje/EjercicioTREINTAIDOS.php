<?php
class saluda{

	function saludo (){
		echo "yo te saludo <br />";
	}
	function adios(){
		echo "yo te digo adios <br />";
	}

}

class subSaluda extends saluda
{
	var $atributos;
	function holados(){

	}
	
}
$instancia =  new saluda();
$ins = $instancia->saludo();
$ins = $instancia->adios();

$herencia =  new subsaluda();
$her = $herencia->saludo();
?>