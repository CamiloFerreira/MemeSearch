<?php 
	//Conectarse con el servidor
 $conn = mysqli_connect('localhost','root','');

$categoria=$_POST['categoria'];
$imagen =addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

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
$sql = "INSERT INTO imagenes (categoria,meme) VALUES ('$categoria','$imagen')";
 //Ejecutar sentencia sql
 $ejecutar =mysqli_query($conn,$sql);
 if (!$ejecutar)
 {
	 echo "Se Produjo un error";
 }
 else
 {
	header('Location: index.php');
 }


?>