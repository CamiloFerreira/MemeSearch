<?php
session_start();
$clave=$_POST['clave'];
$clave_en=md5($clave);
$nombre=$_GET['nombre'];
$conn = mysqli_connect('localhost','root','');
$base = mysqli_select_db($conn,'memes');
$sql = "UPDATE usuarios SET clave='$clave_en' WHERE nombre='$nombre'";
//Ejecutar sentencia sql
if (strlen($clave)>=8){
	
// Si es Mayor Ejecuta 
 $ejecutar =mysqli_query($conn,$sql);
 if (!$ejecutar)
 {
	 echo "<script>alert('Se produjo un error ')</script>";
	 echo "<script>location.href='index.php';</script>";
 }
 else
 {
	 
	echo "<script>alert('Cambio de Clave Exitoso ')</script>";
	echo "<script>alert('Redireccionado inicio sesion')</script>";
	echo "<script>location.href='inicio_sesion.php';</script>";
 }

}
else{
	echo "<script>alert('Cantidad Minima De carateres 8 ')</script>";
}
