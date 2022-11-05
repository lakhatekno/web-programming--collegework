<?php
	include 'koneksi.php';
	$lab	= $_POST['lab'];

	$sql	= "INSERT INTO lab VALUES('','$lab')";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
		header("location: lab.php");
	} else {
		echo "Penambahan Lab Gagal.";
	}
?>