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
$clave_en = md5($clave);
$usuario=$_POST["usuario"];


$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";

$ejecutar =mysqli_query($conn,$sql);

if (!$ejecutar)
 {
	 echo "Se Produjo un error";
 }
 else
 {
   $datos = mysqli_fetch_array($ejecutar);
   if ($usuario == $datos[2] )
	{
	   if ($clave_en == $datos[5]){ 
	    $_SESSION["id_usuario"]=$datos[0];
	    $_SESSION["error"]=false;
	    $_SESSION["iniciado"]=true;
	    $_SESSION["usuario"]=$usuario;
	   	header('Location: index_iniciado.php');
		   
	} else
   {
	   echo "<script> alert('Contraseña Incorrecta')</script>;";
	  header('Location: inicio_sesion.php');
   }
 } else
   {
	   echo "<script> alert ('Usuario Incorrecta')</script>;";
	   header('Location: inicio_sesion.php');
   }
	
 }

?>