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
	</style>
	<title>Meme Search</title>
	</head> 
		<body>
			<header id="cabezera">
				<h1> Meme Search</h1>
			</header>
			<nav>
			<ul>
				<?php
				 if ($_SESSION["error"]){
	  			 echo "<li><a  href='index.php'> Página Principal</a></li>";
				 }
				 else
				 {
				  echo "<li><a  href='index_iniciado.php'> Página Principal</a></li>"; 
				 }
				?>
	  			<li><a class="activa" href="gal.php">Galería</a></li>
	  			<?php
				if ($_SESSION["error"]){
	  			 echo "<li><a href='inicio_seccion.php'> Inicio Sesión </a></li>";
				}else
				{
				 echo "<li><a>Bienvenido</a></li>";	
	  			 echo "<li><a  href='cierra_sesion.php'> Cerrar Sesion </a></li>";
				 
				}
				?>
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
			
<?php
include ("conexion.php");
$query = "select * from imagenes order by id_imagen desc;";
$resultado = $conexion ->query($query);
while($row = $resultado -> fetch_assoc()){

?>
<img src="data:image/jpg;base64,<?php echo base64_encode($row['meme']);?>"/><br>
<?php


$_SESSION['id']=$row['id_imagen'];
echo $row['id_imagen'];
echo "<h3>".$row['comentario']."</h3><br>";
?>
<a href="guarda_like.php?id=<?php echo $row['id_imagen'];?>" ><button>Like</button></a>
<a href="comentarios.php?id=<?php echo $row['id_imagen'];?>" ><button>Comentar</button></a>
<hr>
<?php
}
?>
			</section>
<script>
function muestra_id(){
	var id_imagen="<?php echo $id_imagen ?>";
	alert(id_imagen);
	
	
}			
			
</script>
		</body>
	</html>