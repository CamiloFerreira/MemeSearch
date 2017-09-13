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
 $usuario = $_GET['usuarios'];
 $clave   = $_GET['clave'];
 $correo  = $_GET['correo'];
 //Hacer la sentencia de sql
 $sql = "INSERT INTO usuarios (clave,usuario,correo) VALUES ('$clave',
 													  '$usuario',
                                                      '$correo')";
 //Ejecutar sentencia sql
 $ejecutar =mysqli_query($conn,$sql);
 if (!$ejecutar)
 {
	 echo "Se Produjo un error";
 }
 else
 {
	 echo "Datos Guardados Correctamente <br> <a href='inicio_seccion.html'>Volver </a> ";
 }


?>