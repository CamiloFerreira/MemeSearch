<?php 
 $conexion = new mysqli("localhost","root","","memes");
 if (!$conexion){
	 
	 echo "Error en conectar";
 }
?>