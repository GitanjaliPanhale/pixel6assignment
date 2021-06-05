<?php
session_start();
function connect_to_database ($databaseName)//function for database connection
{
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$con = null;
	$con = mysqli_connect ($hostname, $username, $password, $databaseName);
	// Check connection
	if (mysqli_connect_errno($con))
	die ("Failed to connect to MySQL: ".mysqli_connect_error());
	return $con;
}
function disconnect_from_database ($con)
{        
	mysqli_close($con);
}  

?>