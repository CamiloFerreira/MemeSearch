<!DOCTYPE html>
<html>
<link href="img\MS.png" rel="shortcut icon" type="image/png">
<link href="https://fonts.googleapis.com/css?family=Slackey" rel="stylesheet"> 
    <head>
        <title>Registro</title>
    </head>
    <!---- Estilos de esta pagina --->
    <link rel="stylesheet" type="text/css" href="css/main_registrarse.css">
    <body>
        <form onsubmit="validaForm()" action="Guarda_usuarios.php" method="post">
            <h1> Registrarse </h1>
            Nombre:<br>
            <input type="text"  required id="nombre" name="nombre" /><br>
            Apellido:<br>
            <input type="text" required id="apellido" name="apellido" /><br>
            Usuario: <br>
            <input type="text"  required id="usuario" name="usuario" /><br>
            Clave: <br>
            <input type="password" required id="clave" name="clave" /><br>
            Correo: <br>
            <input type="text" required  id="correo" name="correo" /> <br>
			<select name="pregunta">
			<option > Pregunta De Seguridad</option>
			<option value="1"> ¿Nombre Ciudad ?   </option>
			<option value="2"> ¿Nombre Mascota?   </option>
			<option value="3"> ¿Ciudad de Nacimiento?</option>
			</select><br>
			<input type="text" required name="respuesta" id="respuesta"><br>
            <input type="submit" required name="enviar" onclick="validaForm()"/>  
        </form>
        <script type="text/javascript" src="js/java.js"></script>
    </body>
</html>

