<?php 

	$servername = "mysql4.000webhost.com";
	$username = "a2868486_admin";
	$password = "aunindo12";
	$db_name = "a2868486_users";

	$conn = new mysqli($servername, $username, $password, $db_name);

	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
?>