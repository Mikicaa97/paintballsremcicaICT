<?php 

session_start();

$_SESSION["id-user"] = null;
$_SESSION["first-name"] = null;
$_SESSION["last-name"] = null;
$_SESSION["email"] = null;

header("Location: http://192.168.0.18:8080/painball-sremcica/");

?>