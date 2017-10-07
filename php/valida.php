<?php

header('Location: /js/java.js');

$conn = mysqli_connect('localhost','root','');
 if (!$conn)
 {
	 die("Conexion Fallada" . mysqli_connect_error());
 }
 else
 {
	 $base = mysqli_select_db($conn,'memes');
	 if (!$base)
	 {
		 echo "No se Encontro la Base De datos";
		 
	 }
 }

//Secciones en PHP
session_start();
$clave=$_GET["clave"];
$usuario=$_GET["usuario"];

if ($usuario == null or $clave == null)
{
    
   header('Location: inicio_seccion.php'); 
}
else
{

$sql = "SELECT usuario FROM usuarios WHERE usuario = '$usuario' ";
$sql2= "SELECT usuario FROM usuarios WHERE clave ='$clave' " ;

$ejecutar =mysqli_query($conn,$sql);
$ejecutar2  =mysqli_query($conn,$sql2);

if (!$ejecutar)
 {
	 echo "Se Produjo un error";
 }
 else
 {
   $usuarioC = mysqli_fetch_array($ejecutar);
   $claveC= mysqli_fetch_array($ejecutar2);
   if ($usuario == $usuarioC[0] and $clave == $claveC[0])
	{
		$_SESSION["estado"]=1;
        header('Location: index_iniciado.php');
	}      
 }
 }
?>