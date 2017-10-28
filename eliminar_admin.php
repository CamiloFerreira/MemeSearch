<?php

include("conexion.php");
$id=$_REQUEST['id'];
$query= "DELETE FROM `usuarios` WHERE idusuario=$id";
$resultado=$conexion ->query($query);
if ($resultado){
	header('Location: admin.php');
}else
{
	echo "Error";
}