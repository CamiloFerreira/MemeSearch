<?php

session_start();
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
			padding-right: 30%;
		    margin-left: 10%;
			font-family: 'Bangers', cursive;
			font-size: 50px;
	}
	section
	{
		height: 50%;
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
			<h2 style="text-align:left;">Buscador Memes</h2>
			<p> Ingrese Categoria:</p><br>
			<form method="post" onsubmit="valor()" >
			 <input type="text" name="categoria" id="categoria"  ><br>
			<input type="submit" value="Buscar">
			</form>
			</section >
			<div>	

 <?php
error_reporting (0); // Oculta Error de Categoria 
//Muestra Imagen 
include ("conexion.php");
$categoria=$_REQUEST['categoria'];

$query = "select meme from imagenes where categoria='$categoria' and aceptado='si'";
$query2 = "select categoria from images where categoria='$categoria' and aceptado='si'";
$resultado2 = $conexion ->query($query2);
$resultado = $conexion ->query($query);
if(strlen($categoria)<1){
	echo "<p>No Se Encontro Ninguna Concidencia ....</p>";
}else{
if (!$resultado)
{
	echo "<p>No Se Encontro Ninguna Concidencia ....</p>";
}
else{
echo "<p> Todos Los Memes Relacionados....</p>";
while($row = $resultado -> fetch_assoc()){
 ?>		
<img src='data:image/jpg;base64,<?php echo base64_encode($row['meme']);?>'/><br>
 <hr>
<?php
}}}
?>			
			</div>
		</body>
	</html>