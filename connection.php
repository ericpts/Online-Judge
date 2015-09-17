<?php

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "users";

$conn = mysqli_connect ($servername, $username, $password)
	or die ("Could not connect to MySQL server");

$selected = mysqli_select_db ($conn, $dbname)
	or die ("Could not select users database");

?>
