<?php 
//Conectarse con el servidor
session_start();
$conn = mysqli_connect('localhost','root','');
$idusuario=$_SESSION["id_usuario"];
$comentario = $_POST['comentario'];
$id_imagen=$_REQUEST['id'];
$fecha = date("Y-m-d");


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
$sql = "INSERT INTO comentarios(id_imagen, idusuario,comentario, fecha) VALUES ($id_imagen,$idusuario,'$comentario','$fecha')";
//Ejecutar sentencia sql
 $ejecutar =mysqli_query($conn,$sql);
 if (!$ejecutar)
 {
	 echo "Se Produjo un error";
 }
 else
 {
	 
	header('Location: gal.php');
 }


?>