<?php
 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "Your DB";
$conn = mysqli_connect($server,  $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>