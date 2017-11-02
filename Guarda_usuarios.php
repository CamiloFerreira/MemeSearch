<?php 
//Conectarse con el servidor
$conn = mysqli_connect('localhost','root','');
$respuesta=$_POST['respuesta'];
$pregunta = $_REQUEST['pregunta'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$clave_en=md5($clave);
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
$sql2="SELECT correo  from usuarios where correo='$correo '";
$sql3="SELECT usuario  from usuarios where usuario='$usuario'";
$sql = "INSERT INTO `usuarios`( `tipo`,`usuario`, `nombre`, `apellido`, `clave`, `correo`,`pregunta`,`respuesta`) VALUES('normal','$usuario','$nombre','$apellido','$clave_en','$correo','$pregunta','$respuesta')";
$sql4="SELECT idusuario from usuario where  correo='$correo' ";
//Ejecutar sentencia sql
$ejecutar2 =mysqli_query($conn,$sql2);
$resultado=mysqli_fetch_array($ejecutar2);
$ejecutar3 =mysqli_query($conn,$sql3);
$resultado2=mysqli_fetch_array($ejecutar3);
if ($resultado[0] == $correo){
	echo "<script>alert('Correo ya existe')</script>";
	echo "<script>alert('Volver a Intentar')</script>";
	echo "<script>location.href='registrarse.php';</script>";
}else if ( $resultado2[0]==$usuario){
	echo "<script>alert('Usuario Ya existe')</script>";
	echo "<script>alert('Volver a Intentar')</script>";
	echo "<script>location.href='registrarse.php';</script>";
}
else{
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
