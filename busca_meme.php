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
		margin-left: 200px;
		font-family: 'Bangers', cursive;
	}
	p
	{
		letter-spacing: 1px;
		margin-right: 400px;
		margin-left: 10%;
		font-family: 'Bangers', cursive;	
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
			<form action="busca_meme_db.php">
			 <input type="text" name="categoria" ><br>
			<input type="submit" value="Buscar">
			</form>
			<div>
				Todos Los Memes Que Tenemos
			</div>
			</section >
		
		</body>
	</html>