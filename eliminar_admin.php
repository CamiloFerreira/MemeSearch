<?php
session_start();


$id = $_REQUEST['id'];
$accion = $_REQUEST['accion'];

function borrar_usuario($arg){
	include("conexion.php");
	$query= "DELETE FROM `usuarios` WHERE idusuario=$arg";
	$resultado=$conexion ->query($query);
	if ($resultado){
		header('Location: admin.php');
	}else
	{
	echo "Error";
	}		
}
function borra_imagen($arg){
	include("conexion.php");
	$query="DELETE FROM imagenes where id_imagen=$arg";
	$resultado=$conexion -> query($query);
	if ($resultado){
	header('Location: admin.php');
	}else
	{
	echo "Error";
	}
	
}
function borrar_comentario($arg){
	include("conexion.php");
	$query="DELETE FROM comentarios where id_comentario=$arg";
	$resultado=$conexion -> query($query);
	if ($resultado){
	header('Location: admin.php');
	}else
	{
	echo "Error";
	}
}

if ($accion == 1){
	borrar_usuario($id);
}else if ($accion == 2){
	borra_imagen($id);
}else{
	borrar_comentario($id);
}



