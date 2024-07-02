<?php
    $hostname	= "localhost";
	$username	= "root";
	$password	= "";
	$database	= "konter_hp";

	$conn	= new mysqli($hostname, $username, $password, $database);

	if($conn->connect_error) {
		die("Error : ".$connect->connect_error);
	}
?>