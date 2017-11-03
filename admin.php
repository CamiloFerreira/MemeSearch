<?php
session_start();
if ($_SESSION["error"]){
	header('Location: index.php');
}
?>
<!DOCTYPE html >
<html>
	<head>
		<title> ADMIN</title>
	<style>
img{
 height: 20%;	
	
	
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 10%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
ul{
	list-style: none;
	float:left;
}
li{
	background-color: aqua;		
	}
li:hover{
	background-color: lawngreen;		
}
#bien{
	font-size: 60px;
	color: dodgerblue;
	margin-left: 5%;	
		}
	</style>
	</head>
	<body>
		<nav>
		<ul>
			<li><a href="index_iniciado.php"> Volver a Menu Principal</a></li>	
		</ul>
		</nav><br>
		<h1 id="bien"><u> Bienvenido Admin <?php echo $_SESSION["usuario"]; ?> </u></h1>
		<h1><u> Tabla Usuarios</u></h1>
		<table border="2">
			<tr>
				<th> idusuario</th>
				<th> tipo</th>
				<th>usuario</th>
				<th>nombre</th>
				<th>apellido</th>
				<th>clave</th>
				<th>pregunta</th>
				<th>respuesta</th>
				<th> Operaciones</th>
			</tr>
			<?php
			include("conexion.php");
			$query="select * from usuarios";
			$resultado= $conexion->query($query);
			while ($row = $resultado -> fetch_assoc()){
			echo "<tr>";
			echo "<th>".$row['idusuario']."</th>";	
			echo "<th>".$row['tipo']."</th>";	
			echo "<th>".$row['usuario']."</th>";	
			echo "<th>".$row['nombre']."</th>";	
			echo "<th>".$row['apellido']."</th>";	
			echo "<th>".$row['clave']."</th>";	
			echo "<th>".$row['pregunta']."</th>";	
			echo "<th>".$row['respuesta']."</th>";	
			$_SESSION['admi']=$row['idusuario'];
			echo "<th><a href='eliminar_admin.php?accion=1&id=".$row['idusuario']."'> ELIMINAR <a/><th>";
			echo "</tr>";
			}
			?>
		</table>
	<hr>
	<h1><u> Tabla Imagenes </u></h1>
	<table border="2">
		<tr>
			<th> id_imagen</th>
			<th> Aceptado</th>
			<th> Categoria</th>
			<th> Meme</th>
			<th> Fecha</th>
			<th> Comentario</th>
			<th colspan="3" > Operacion</th>
		</tr>
		<?php
			$query2="select * from imagenes order by id_imagen desc";
			$resultado2= $conexion->query($query2);
			while ($row2 = $resultado2 -> fetch_assoc()){
			echo "<tr>";
			echo "<th>".$row2['id_imagen']."</th>";	
			echo "<th>".$row2['aceptado']."</th>";
			echo "<th>".$row2['categoria']."</th>";	
			echo "<th><img src='data:image/jpg;base64,".base64_encode($row2['meme'])."'/></th>";
			echo "<th>".$row2['fecha']."</th>";	
			echo "<th>".$row2['comentario']."</th>";
			$_SESSION['admi']=$row2['id_imagen'];
			echo "<th><a href='eliminar_admin.php?accion=2&id=".$row2['id_imagen']."'> ELIMINAR <a/><th>";
			echo "<th><a href='sube_meme_admin.php?id_i=".$row2['id_imagen']."'> Subir <a/><th>";
			echo "</tr>";
			}
		?>
		
	</table>
		<hr>
	<h1><u> Tabla Comentarios </u></h1>
	<table border="2">
		<tr>
			<th> id_Comentario</th>
			<th> id_imagen</th>
			<th> id_Usuario</th>
			<th> comentario</th>
			<th> Fecha</th>
			<th colspan="3" > Operacion</th>
		</tr>
		<?php
			$query3="select * from comentarios order by id_comentario desc";
			$resultado3= $conexion->query($query3);
			while ($row3 = $resultado3 -> fetch_assoc()){
			echo "<tr>";
			echo "<th>".$row3['id_comentario']."</th>";	
			echo "<th>".$row3['id_imagen']."</th>";
			echo "<th>".$row3['idusuario']."</th>";	
			echo "<th>".$row3['comentario']."</th>";
			echo "<th>".$row3['fecha']."</th>";		
			$_SESSION['admi']=$row3['id_comentario'];
			echo "<th><a href='eliminar_admin.php?accion=3&id=".$row3['id_comentario']."'> ELIMINAR <a/><th>";
			}
		?>
		
	</table>
		
	</body>
</html>