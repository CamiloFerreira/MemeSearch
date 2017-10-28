<!DOCTYPE html >
<html>
	<head>
		<title> ADMIN</title>
	<style>
img{
 height: 20%;	
	
	
}
table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}	
		
	</style>
	</head>
	<body>
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
			echo "<th><a href='eliminar_admin.php?id=".$row['idusuario']."'> ELIMINAR <a/><th>";
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
			$query2="select * from imagenes";
			$resultado2= $conexion->query($query2);
			while ($row2 = $resultado2 -> fetch_assoc()){
			echo "<tr>";
			echo "<th>".$row2['id_imagen']."</th>";	
			echo "<th>".$row2['aceptado']."</th>";
			echo "<th>".$row2['categoria']."</th>";	
			echo "<th><img src='data:image/jpg;base64,".base64_encode($row2['meme'])."'/></th>";
			echo "<th>".$row2['fecha']."</th>";	
			echo "<th>".$row2['comentario']."</th>";	
			echo "<th><a href='eliminar_admin.php?id_i=".$row2['id_imagen']."'> ELIMINAR <a/><th>";
			echo "<th><a href='sube_meme_admin.php?id_i=".$row2['id_imagen']."'> Subir <a/><th>";
			echo "</tr>";
			}
		?>
		
	</table>
		
	</body>
</html>