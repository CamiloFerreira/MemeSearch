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
		height: 50%;
		border: 1px solid black;
	}
    textarea,input
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
			<form method="post" action="guarda_comentario.php" >
			 <textarea rows="10" cols="60" name="comentario" id="comentario">
                
            </textarea><br>
			<input type="submit" value="enviar">
			</form>
			</section >	
		
				
		</body>