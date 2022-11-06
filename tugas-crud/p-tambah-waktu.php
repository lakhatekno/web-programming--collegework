<?php
	include 'koneksi.php';
	$mulai	= $_POST['mulai'];
	$selesai= $_POST['selesai'];

	$sql	= "INSERT INTO waktu VALUES('', '$mulai', '$selesai')";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
		header("location: waktu.php");
	} else {
		echo "Penambahan Lab Gagal.";
	}
?>