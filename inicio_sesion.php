<!DOCTYPE html>
	<html lang="es">
	<meta charset="utf-8">
	<head>
	<link href="https://fonts.googleapis.com/css?family=Slackey" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet"> 
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
		
		letter-spacing: 1px;
		text-decoration: underline;
        margin-left: 100px;
	}
	p
	{
		letter-spacing: 1px;
		margin-right: 40%;
		margin-left: 20%;
		font-style: fantasy;	

	}
        form
		{
			border: 2px solid white;
			padding-bottom: 5%;
			padding-left: 10%;
			padding-right: 10%;
			background-image: url("img/link.jpg");
			color: purple;
			
			font-family: 'Slackey', cursive;
            font-size: 22px;
			
		}
		input
		{
			border-bottom-color: black;
			color: black;
		}
        #p
        {
            color : black;
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
	  			<li><a href="gal.php">Galería</a></li>
	  			<li><a class="activa" href="inicio_sesion.php"> Inicio Sesión </a></li>
			</ul>
			</nav>
			<section >
            <!--- Creacion de El Login -->
                <form action="valida.php" method="post" >
                    <h2>LOGIN</h2>
                    Usuario:<br>
                    <input type="text" REQUIRED id="usuario" name="usuario" /> <br>
                    Clave:<br>
                    <input type="password" REQUIRED id="clave" name="clave" /> <br>
                    <br>
                    <input type="submit" name="Enviar">
                </form><br>
                <p><a id="p" target="blank" href="recuperar_clave.php"> Se Olvido de Su contraseña</a> </p> <br>
                <p ><a id="p" target="_blank" href="registrarse.php" > Registrarse</a> </p>
                <script type="text/javascript" src="js/java2.js"></script>
			</section>
		</body>
	</html>