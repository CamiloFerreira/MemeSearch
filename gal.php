<?php

session_start();

?>
<!DOCTYPE html>
	<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
	<link href="img\MS.png" rel="shortcut icon" type="image/png">
	<style type="text/css">
	@font-face
			{
				font-family: "hola";
				src:url("fuente/hola.ttf");
			}
	h1
	{
		font-family: hola;
		font-size: 80px;
		color: transparent;
	}


	h2
	{
		margin-left: 20%;
		font-size: 60px;
		font-family: fantasy;
	}
	button
		{
			margin-left: 20%;
			border-left-style: groove;
			font-family: fantasy;
			font-size: 30px;
			
		}
	div
		{
			margin-left: 70%;
			position: fixed;
			background-color: #736C6D;
			margin-top: 2%;
			border : 1px solid black;
			width: 20%;
		}
	p
		{
			margin-left: 10%;
			color: black;
		}
	h3
		{
			margin-left: 10%;
			font-family: Bangers;
			font-size: 30px;
		}
	img
		{
			margin-left: 20%;
			border: 5px solid black;
			line-height: 20%;
			width: 60%;
		}
	td
		{
			border:  1px solid black;
		}

	</style>
	<title>Meme Search</title>
	</head> 
		<body>
			<header id="cabezera">
				<h1> Meme Search</h1>
			</header>
			<nav>
			<ul>
	  			<li><a  href="index.php"> Página Principal</a></li>
	  			<li><a class="activa" href="gal.php">Galería</a></li>
	  			<li><a href="inicio_seccion.php"> Inicio Sesión </a></li>
			</ul>
			</nav>
			
			<div>
				<h3> ¿ Buscas un Meme ? </h3>
				<p><u><a href="busca_meme.php"> Para Buscar Meme Presion Aqui</a></u></p>
				<hr>
				<h3> ¿ Quieres Subir Tu Meme?</h3>
				<p><u><a href="sube_meme.php"> Para Buscar Meme Presion Aqui</a></u></p>
			</div>
			
			<section >
			<h2 style="text-align:left;">Ultimos Subidos</h2>
			<table >
<?php
include ("conexion.php");
$query = "select * from imagenes order by id_imagen desc;";
$resultado = $conexion ->query($query);
while($row = $resultado -> fetch_assoc()){				
		?>
				<tr>
					<td  ><img src="data:image/jpg;base64,<?php echo base64_encode($row['meme']);?>"/></td>
				</tr>
				<tr>
					<td><h3><?php echo $row['comentario']; ?></h3></td>
				</tr>
		<?php
}
	   ?>
			</table>
			</section>

		</body>
	</html>