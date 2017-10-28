<?php 
session_start();
$usuario =$_SESSION["usuario"];
date_default_timezone_set('America/Santiago');

$fecha =date("Y-m-d");
$hora = date("H:i:s");
$mes =date("m");
echo $mes

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
		margin-right: 40%;
		margin-left: 20%;
		font-family: 'Bangers', cursive;	
	}
	#img1{
		margin-left: 20%;
		height: 20%;	
		width: 60%;
		
		}
	#img2{
		margin-left: 20%;
		height:50%;	
	
			
		}
	#aside_1
		{
	    position:absolute;
	    background-image: url(img/fondoaside.jpg);
		width: 20%;
		height: auto;
		margin-left: 70%;
		margin-top: 2%;
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
				<li><a> Bienvenido <?php echo $_SESSION["usuario"]; ?> </a></li>
			<?php
				if (!$_SESSION["error"]){
	  			 echo "<li><a id='cierra' href='cierra_sesion.php'> Cerrar Sesion </a></li>";
				 }
				?>
				 
			</ul>
			</nav>
			<section >
			<h2 style="text-align:left;">MEJOR MEMES Del Mes</h2>
<?php
include ("conexion.php");
$query2= "SELECT meme,count(cantidad_v) FROM imagenes INNER JOIN puntuaciones on puntuaciones.id_imagen=imagenes.id_imagen where date_format(puntuaciones.fecha,'%m')='$mes' GROUP by meme order by cantidad_v desc limit 1";
$resultado2 = $conexion ->query($query2);
if (!$resultado2){
	echo " ";
}
else{
while($row2 = $resultado2 -> fetch_assoc()){
?>
<img id="img2" src="data:image/jpg;base64,<?php echo base64_encode($row2['meme']);?>"/><br>
<hr>
<?php
}				
}
?>	
			
			<p> </p>
			</section >
            <aside id="aside_1">
                <h2>TOP 5 Del Dia</h2>
<?php
$query = "SELECT meme,count(cantidad_v) FROM imagenes INNER JOIN puntuaciones on puntuaciones.id_imagen=imagenes.id_imagen where puntuaciones.fecha='$fecha' GROUP by meme order by cantidad_v desc limit 5";
$resultado = $conexion ->query($query);
if (!$resultado){
	echo " ";
}
else{
while($row = $resultado -> fetch_assoc()){
?>
<img id="img1" src="data:image/jpg;base64,<?php echo base64_encode($row['meme']);?>"/><br>
<hr>
<?php
}				
}
?>
            </aside>
		</body>
	</html>