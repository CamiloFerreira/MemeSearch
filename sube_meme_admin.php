<?php
include("conexion.php");
$id_i=$_REQUEST['id_i'];

$query="UPDATE imagenes set aceptado='si' where id_imagen=$id_i";
$resultado=$conexion -> query($query);
if ($resultado){
	header('Location: admin.php');
}else
{
echo "Error";
}

