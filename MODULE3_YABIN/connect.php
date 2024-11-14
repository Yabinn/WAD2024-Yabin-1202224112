<?php

$host = "localhost";

$username = "root";

$pass = "";

$db = "u_wibu";

$port = 3306;

$conn = mysqli_connect($host, $username, $pass, $db, $port);

if($conn->connect_error) {
	die("connection Failed: " . $conn->connect_error);
}