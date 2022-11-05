<?php
    session_start();
	include 'koneksi.php';

	$mk		    = $_POST['mk'];
	$jurusan	= $_POST['jurusan'];
	$lab	    = $_POST['lab'];
	$waktu		= $_POST['waktu'];

	$sql	= "INSERT INTO jadwal VALUES('','$mk', '$jurusan', '$lab', '$waktu')";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
		header("location: jadwal.php");
	} else {
		echo "Input Data Gagal.";
	}
?>