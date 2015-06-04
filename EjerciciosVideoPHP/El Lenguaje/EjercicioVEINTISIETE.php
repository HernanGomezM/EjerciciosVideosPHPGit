<?php
echo date("d")."<br />";
echo date("j")."<br />";
echo date("D")."<br />";
echo date("l")."<br />";
echo date("N")."<br />";
echo date("w")."<br />";
echo date("z")."<br />";
echo date("W")."<br />";
echo date("F")."<br />";
echo date("m")."<br />";
echo date("M")."<br />";
echo date("n")."<br />";
echo date("t")."<br />";
echo date("Y")."<br />";
echo date("y")."<br />";
echo date("L")."<br />";
echo date("c")."<br />";
echo date("U")."<br />";
echo date("a")."<br />";
echo date("A")."<br />";
echo date("B")."<br />";
echo date("g")."<br />";
echo date("G")."<br />";
echo date("h")."<br />";
echo date("H")."<br />";
echo date("i")."<br />";
echo date("s")."<br />";
echo date("u")."<br />";
echo date("e")."<br />";
echo date("I")."<br />";
echo date("O")."<br />";
	
	echo "hoy es: " .date("l").", ".date("j").", ".date("F").", ".date("Y")."<br />";


function miFecha(){
	switch (date("l")) {
			case "Monday":
			$dia ="lunes";
			break;
			case "Tuesday":
			$dia ="Martes";
			break;
			case "Wednesday":
			$dia ="Miercoles";
			break;
			case "Thursday":
			$dia ="Jueves";
			break;
			case "Friday":
			$dia ="Viernes";
			break;
			case "Saturday":
			$dia ="Sabado";
			break;
			case "Sonday":
			$dia ="Domingo";
			break;
		
		default:
			
			break;
	}
	switch (date("F")) {
			case "January":
			$mes ="Enero";
			break;
			case "February":
			$mes ="Febrero";
			break;
			case "March":
			$mes ="Marzo";
			break;
			case "April":
			$mes ="Abril";
			break;
			case "May":
			$mes ="Mayo";
			break;
			case "June":
			$mes ="Junio";
			break;
			case "July":
			$mes ="Julio";
			break;
			case "August":
			$mes ="Agosto";
			break;
			case "September":
			$mes ="Septiembre";
			break;
			case "Sonday":
			$mes ="Octubre";
			break;
			case "Sonday":
			$mes ="Noviembre";
			break;
			case "Sonday":
			$mes ="Diciembre";
			break;
		default:
			
			break;
	}

	echo "hoy es: " .$dia.", ".date("j").", ".$mes.", ".date("Y");

} 
miFecha();

?>