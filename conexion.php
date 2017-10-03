<?php 
	//Conectarse con el servidor
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
$usuario = $_GET['usuario'];
$clave   = $_GET['clave'];
$correo  = $_GET['correo'];
$nombre  = $_GET['nombre'];
$apellido = $_GET['apellido'];

if ($usuario == null or $clave == null or $correo == null or $nombre== null or $apellido== null )
{
    header('Location: registrarse.html');
}
else{

 
 //Hacer la sentencia de sql
 $sql = "INSERT INTO usuarios (clave,usuario,correo,nombre,apellido) VALUES ('$clave',
 													  '$usuario',
                                                      '$correo',
                                                      '$nombre',
                                                      '$apellido')";
 //Ejecutar sentencia sql
 $ejecutar =mysqli_query($conn,$sql);
 if (!$ejecutar)
 {
	 echo "Se Produjo un error";
 }
 else
 {
	 header('Location: inicio_seccion.html');
 }

}
?>