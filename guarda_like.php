<?php
session_start();
date_default_timezone_set('America/Santiago');

$fecha =date("Y-m-d");
if ($_SESSION["error"]){
	
	echo"<script>alert('No Has Iniciado Sesion ....')</script>";
	echo "<script>location.href='gal.php';</script>";
}else{
$id_usuario=$_SESSION["id_usuario"];
$id=$_GET['id'];
date_default_timezone_set('America/Santiago');

$fecha =date("Y-m-d");
$hora = date("H:i:s");


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
//Hacer la sentencia de sql
$sql = " INSERT INTO puntuaciones(idusuario,id_imagen,cantidad_v,hora,fecha) values ($id_usuario,$id,0,'$hora','$fecha');";
$sql2 = "UPDATE puntuaciones set cantidad_v=cantidad_v+1 where id_imagen=$id and idusuario=$id_usuario";
$sql3 = "select * from puntuaciones where idusuario=$id_usuario ";

//Ejecutar sentencia sql
 //$ejecutar =mysqli_query($conn,$sql);
 $ejecutar5=mysqli_query($conn,$sql3);
 if ($ejecutar5){
	 $respuesta=mysqli_fetch_array($ejecutar5);
	 if (strlen($respuesta[2]) >0 and $respuesta[2] !=0 ){
		echo "<script> alert('Usted ya dio su like espere 24 hrs para volver a votar')</script>";
		echo "<script>location.href='gal.php';</script>";
	 }
	 else{
		if($respuesta[3] != $fecha){
		$ejecutar =mysqli_query($conn,$sql);
		$ejecutar2 =mysqli_query($conn,$sql2);
		echo "<script>location.href='gal.php';</script>";
	 }else{
		echo "<script> alert('Usted ya dio su like espere 24 hrs para volver a votar')</script>";
		echo "<script>location.href='gal.php';</script>";	
		
		}
 }		
}
}