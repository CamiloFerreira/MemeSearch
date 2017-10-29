<?php

session_start();

$id_imagen=$_REQUEST['id'];

if ($_SESSION["error"]){
	echo "<script> alert('debe iniciar sesion'); </script>";
	echo "<script> alert('Redireccionando A inicio sesion '); </script>";
	echo "<script>location.href='inicio_sesion.php';</script>";
}
?> 
<! DOCTYPE HTML>
	<!DOCTYPE html>
	<html lang="es">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet"> 
	<link href="img\MS.png" rel="shortcut icon" type="image/png">
	<head>
	<link rel="stylesheet" type="text/css" href="css/busca_meme.css">
	<style type="text/css">
	@font-face
	{
		font-family: 'Bangers', cursive;
	}
	h1
	{
		font-size: 80px;
		color: transparent;
		font-family: 'Bangers', cursive;
	}
	h2
	{
		
		letter-spacing: 1px;
		text-decoration: underline;
		margin-left: 200px;
		font-family: 'Bangers', cursive;
	}
	p
	{
		letter-spacing: 1px;
		margin-right: 400px;
		margin-left: 10%;
		font-family: 'Bangers', cursive;	
		font-size: 40px;
	}		
	input
	{
			
			font-family: 'Bangers', cursive;
			font-size: 20px;
	}
	section
	{
		height: auto;
		border: 1px solid black;
	}
    textarea,input
    {
            margin-left: 20%;
    }
    h5,h3
    {
     margin-left: 20%;        
    }


	</style> 
	<title>Meme Search</title>
	</head> 
		<body>
			<header id="cabezera">
				<h1> Meme Search</h1>
			</header>
			<section >
			<h2 style="text-align:left;">Comentarios Memes </h2>
<?php
include ("conexion.php");
$query = "SELECT usuario , comentario from usuarios INNER JOIN comentarios on comentarios.idusuario = usuarios.idusuario where id_imagen=$id_imagen";
$resultado = $conexion ->query($query);
while($row = $resultado -> fetch_assoc()){
?>
<?php

echo "<h3> Usuario :".$row['usuario']."</h3><br>";
echo "<h5>".$row['comentario']."</h5><br>";
?>
<hr>
<?php
}
?>
			<form method="post" action="guarda_comentario.php?id=<?php echo $id_imagen; ?>" >
			 <textarea rows="8" cols="50" name="comentario" id="comentario" maxlength="300" style="resize:none;" >
            </textarea><br>
			<input type="submit" value="enviar">
			</form>
			</section >	
		
				
		</body>