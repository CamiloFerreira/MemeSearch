<?php

#header('Location: /js/java.js');

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
$clave=$_POST["clave"];
$usuario=$_POST["usuario"];


$sql = "SELECT usuario FROM usuarios WHERE usuario = '$usuario'";
$sql2= "SELECT clave FROM usuarios WHERE clave ='$clave' " ;
$sql3= "SELECT idusuario FROM usuarios WHERE usuario='$usuario' and clave='$clave'";

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
		$ejecutar3 =mysqli_query($conn,$sql3);
	   	$id_u= mysqli_fetch_array($ejecutar3);
	    $_SESSION["id_usuario"]=$id_u[0];
	    $_SESSION["error"]=false;
	    $_SESSION["iniciado"]=true;
	    $_SESSION["usuario"]=$usuario;
	   	header('Location: index_iniciado.php');
	} else
   {
	   header('Location: inicio_sesion.php');
   }
 }
 
?>