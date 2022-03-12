<?php 
$db['db_host'] = "localhost";
$db['db_user'] = "root"; //dulezare89
$db['db_password'] = ""; //GDJoy44kANTwSJec
$db['db_name'] = "paintball2";

foreach($db as $key => $value)
{
	define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(!$connection)
{
	die("Database connected failed: " . mysqli_connect_error($connection));
}

?>