<?php 
$server = "localhost";
$username = "root";
$password = "Jerkycat123";

$connection = mysqli_connect("$server", "$username", "$password");

if($connection == false)
{
	die("$my sql is not connected");
}

else
{
	echo("mysql is connected");
	echo("<br>"."Hello World");
}





?>