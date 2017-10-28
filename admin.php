<!DOCTYPE html >
<html>
	<head>
		<title> ADMIN</title>
	<style>
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
</style>
	</head>

	<body>
		<p><u> Tabla Usuarios</u></p>
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
	
	</body>
</html>