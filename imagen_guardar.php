<?php 
session_start();
	//Conectarse con el servidor
$conn = mysqli_connect('localhost','root','');
$id =$_SESSION["id_usuario"];
$categoria=$_POST['categoria'];
$comentario=$_POST['comentario'];
$imagen =addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$hoy= getdate();
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
$sql = "INSERT INTO imagenes (idusuario,aceptado,categoria,meme,comentario,fecha) VALUES ('$id','no','$categoria','$imagen','$comentario','$fecha')";
 //Ejecutar sentencia sql
 $ejecutar =mysqli_query($conn,$sql);
 if (!$ejecutar)
 {
	 echo "Se Produjo un error";
 }
 else
 {
	header('Location: index_iniciado.php');
 }


?>