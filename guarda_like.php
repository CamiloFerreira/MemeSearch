<?php

include ("conexion.php");
$query = " * from imagenes order by id_imagen desc;";
$resultado = $conexion ->query($query);