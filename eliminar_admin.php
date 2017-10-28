<?php

include("conexion.php");
$id=$_REQUEST['id'];
if (strlen($id)== null){
	$id_i=$_REQUEST['id_i'];
	$query="DELETE FROM imagenes where id_imagen=$id_i";
	$resultado=$conexion -> query($query);
	if ($resultado){
	header('Location: admin.php');
	}else
	{
	echo "Error";
	}
}else{
$query= "DELETE FROM `usuarios` WHERE idusuario=$id";
$resultado=$conexion ->query($query);
if ($resultado){
	header('Location: admin.php');
}else
{
	echo "Error";
}
}