<?php

$localhost	= "localhost";
$username	= "root";
$password	= "";
$dbname		= "dbwahyu";

$con = new mysqli($localhost, $username, $password, $dbname);

if($con->connect_error) {
	die("connection failed : " . $conn->connect_error);
}
