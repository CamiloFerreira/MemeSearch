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
        <form onsubmit="validaForm()" action="php/conexion.php" method="get">
            <h1> Registrarse </h1>
            Nombre:<br>
            <input type="text" id="nombre" name="nombre" /><br>
            Apellido:<br>
            <input type="text" id="apellido" name="apellido" /><br>
            Usuario: <br>
            <input type="text" id="usuario" name="usuario" /><br>
            Clave: <br>
            <input type="password" id="clave" name="clave" /><br>
            Correo: <br>
            <input type="text" id="correo" name="correo" /> <br>
            <br>
            <input type="submit" name="enviar" onclick="validaForm()"/>  
        </form>
        <script type="text/javascript" src="js/java.js"></script>
    </body>
</html>