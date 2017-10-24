<?php
session_start(); 
$nombre = $_GET['nombre'];
?>
<!DOCTYPE html>
<html>
<link href="img\MS.png" rel="shortcut icon" type="image/png">
<script src='https://www.google.com/recaptcha/api.js'></script>
    <head>
        <title>Cambiar Clave</title>
    </head>
    <!---- Estilos de esta pagina --->
    <link rel="stylesheet" type="text/css" href="css/main_registrarse.css">
    <body>
        <form action="clave.php?nombre=<?php echo $nombre ?>" method="post">
		<h1> Cambiar Clave</h1>
            Clave:<br>
            <input type='text'  required id='clave' name='clave' /><br>
			<input type='submit' required />
			<br>
		</form>
        <script type="text/javascript" src="js/java.js"></script>
    </body>
</html>

