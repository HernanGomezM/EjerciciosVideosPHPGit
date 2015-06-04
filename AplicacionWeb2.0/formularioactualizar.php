<?php
session_start();
//recupero las bariables
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$titulo  =  $_GET['titulo'];
$direccion  =  $_GET['direccion'];
$categoria  =  $_GET['categoria'];
$comentario  =  $_GET['comentario'];
$valoracion  =  $_GET['valoracion'];
//conexion
$cone = new PDO('sqlite:favoritos.db') or die('imposible conctarce a la base de datos');
//consulta
$consulta "SELECT *  FROM Favoritos WHERE 
usuario='".$usuario."' AND
contrasena = '".$contrasena."' AND
titulo = '".$titulo."' AND
direccion = '".$direccion."' AND 
categoria = '".$categoria."' AND
comentario = '".$comentario."' AND
valoracion = '".$valoracion."';
"
?>