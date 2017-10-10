<?php 
//Conectarse con el servidor
$conn = mysqli_connect('localhost','root','');

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$correo=$_POST['correo'];

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
$sql = "INSERT INTO `usuarios`( `usuario`, `nombre`, `apellido`, `clave`, `correo`) VALUES('$usuario','$nombre','$apellido','$clave','$correo')";
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

}
?>