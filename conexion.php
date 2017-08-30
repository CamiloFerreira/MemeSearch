<<?php  
 define ("DB_SERVER","localhost");
 define ("DB_NAME","usuarios");
 define ("DB_USER","usuario");
 define ("DB_PASS","clave")
 $con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
 mysql_select_db(usuarios,$con)
?>