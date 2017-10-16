<?php

session_start();
$_SESSION["error"]=true;

?>
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
		margin-right:40%;
		margin-left: 20%;
		font-family: 'Bangers', cursive;	
	}		
	img{
		margin-left: 20%;
		height: 5%;	
		width: 60%;
		
		}
	#aside_1
		{
	    position:relative	;
	    background-image: url(img/fondoaside.jpg);
		width: 20%;
		height: auto;
		margin-left: 70%;
		margin-top: -5%;
		color: white;
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
	  			<li><a class="activa" href="index.php"> Página Principal</a></li>
	  			<li><a href="gal.php">Galería</a></li>
	  			<li><a href='inicio_seccion.php'> Inicio Sesión </a></li>
			</ul>
			</nav>
			<section >
			<h2 style="text-align:left;">MEJORES MEMES</h2>
			<p> </p>
			</section >
            <aside id="aside_1">
                <h2>TOP 5 Del Dia</h2>
<?php
include ("conexion.php");
$query = "SELECT meme,count(cantidad_v) FROM imagenes INNER JOIN puntuaciones on puntuaciones.id_imagen=imagenes.id_imagen  GROUP by meme order by cantidad_v desc limit 5";
$resultado = $conexion ->query($query);
while($row = $resultado -> fetch_assoc()){
?>
<img src="data:image/jpg;base64,<?php echo base64_encode($row['meme']);?>"/><br>
<hr>
<?php
}				
				
?>
            </aside>
        
		</body>
	</html>