<?php
session_start(); 

?>
<!DOCTYPE html>
<html>
<link href="img\MS.png" rel="shortcut icon" type="image/png">
<script src='https://www.google.com/recaptcha/api.js'></script>
    <head>
        <title>Recuperar Clave</title>
    </head>
    <!---- Estilos de esta pagina --->
    <link rel="stylesheet" type="text/css" href="css/main_registrarse.css">
    <body>
        <form action="recupera_clave.php" method="post">
		<h1> Recuperar Clave </h1>
            Nombre:<br>
            <input type='text'  required id='nombre' name='nombre' /><br>
  			Correo:<br>
			<input type='text'  required id='correo' name='correo' /><br>
			<select name="pregunta">
			<option> Pregunta De Seguridad</option>
			<option value="1"> ¿Nombre Ciudad ? </option>
			<option value="2"> ¿Nombre Mascota? </option>
			<option value="3"> ¿Ciudad de Nacimiento?</option>
			</select><br>
			<input type="text" required id="respuesta" name="respuesta"  /> <br>
			<input type='submit' required />
			<br>
		</form>
        <script type="text/javascript" src="js/java.js"></script>
    </body>
</html>

