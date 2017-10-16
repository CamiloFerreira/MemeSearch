<?php
session_start();
if ($_SESSION["error"]){
	echo "<script> alert('debe iniciar seccion'); </script>";
	echo "<script> alert('Redireccionando A inicio seccion '); </script>";
	echo "<script>location.href='inicio_seccion.php';</script>";
}
?>
<! DOCTYPE HTML>
	<!DOCTYPE html>
	<html lang="es">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet"> 
	<link href="img\MS.png" rel="shortcut icon" type="image/png">
	<head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
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
		margin-left: 20%;
		font-family: 'Bangers', cursive;
	}
	p
	{
		letter-spacing: 1px;
		margin-right: 40%;
		margin-left: 10%;
		font-family: 'Bangers', cursive;	
	}		
	input
	{
			padding-right: 1%;
		    margin-left: 10%;
			font-family: 'Bangers', cursive;
			font-size: 30px;
	}
	section
	{
		height: 60%;
		border: 1px solid black;
	}
 </style>
	<title>Meme Search</title>
	</head> 
		<body>
			<header id="cabezera">
				<h1> Meme Search</h1>
			</header>
			<section >
			<h2 style="text-align:left;"> Envia Tu Meme</h2>
			<form method="post" action="imagen_guardar.php" enctype="multipart/form-data" >
			 <p> Ingrese Categoria Del Meme:</p><br>
			 <input type="text" REQUIRED name="categoria" >
			 <p> Ingrese Comentario y/o Descripcion</p><br>
			 <input type="text" REQUIRED name="comentario" >
			 <p> Sube Archivo:</p>
			 <input name="imagen" REQUIRED type="file" /><br>
			 <input type="submit" value="Enviar">
			</form>
        
			</section >
		
		</body>
	</html>