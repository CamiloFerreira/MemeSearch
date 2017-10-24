<?php
session_start();
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$conn = mysqli_connect('localhost','root','');
$base = mysqli_select_db($conn,'memes');
$query = "select * from usuarios where nombre='$nombre';";
$ejecutar = mysqli_query($conn,$query);
$resultado=mysqli_fetch_array($ejecutar);
if (strlen($resultado[2]) > 1){
	if  ($resultado[2] == $nombre and $resultado[4]=$correo)
	{
		echo "<script>location.href='cambia_clave.php?nombre=$nombre';</script>";
	}
	else
	{
		echo "<script>alert('Nombre y/o Correo no existe')</script>";
		echo "<script>location.href='recuperar_clave.php';</script>";
	}
}
else
{
	echo "<script>alert('Nombre y/o Correo No existe')</script>";
	echo "<script>alert('Vuelve a intentar ...')</script>";
	echo "<script>location.href='recuperar_clave.php';</script>";
}