<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "reg";

$conn = mysqli_connect($server, $username, $password, $db);

//Check Connection
if($conn->connect_error) {
	die("Connection Failed: ". $conn->connect_error);
}
?>