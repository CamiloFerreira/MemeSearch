<?php
session_start();
if ($_SESSION["error"]){
	echo "<script> alert('debe iniciar seccion'); </script>";
	echo "<script> alert('Redireccionando A inicio seccion '); </script>";
	echo "<script>location.href='inicio_seccion.php';</script>";
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

//Ejecutar sentencia sql
 $ejecutar =mysqli_query($conn,$sql);
 if (!$ejecutar)
 {
	 echo "Se Produjo un error";
 }
 else
 {
	 echo "Correcto";
	 $ejecutar2 =mysqli_query($conn,$sql2);
	 if (!$ejecutar2){
		 echo "Se Encontro un error en la segunda Consulta";
	 }
	 else{
		 $ejecutar4=mysqli_query($conn,$sql4);
		 header('Location: index_iniciado.php');
	 }
 }
}
?>