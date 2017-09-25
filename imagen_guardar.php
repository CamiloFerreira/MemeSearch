<?php
//Conectarse con el servidor 
$conn = mysqli_connect('localhost','root','');
//Valida Conexion
if (!$conn)
{
    die("Conexion Fallida" .mysqli_connect_error() );
}
else 
{
    $base = mysqli_select_db($conn,'memes');
    if (!$base)
    {
        echo "No se encontro la Base de Datos";
    }
}
?>