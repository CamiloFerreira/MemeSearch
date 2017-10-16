<?php
session_start();
session_destroy();
$_SESSION["error"]=true;
header("location: index.php");