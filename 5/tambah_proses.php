<?php
	include 'koneksi.php';

	$nim		= $_POST['nim'];
	$nama		= $_POST['nama'];
	$angkatan	= $_POST['angkatan'];
	$sks		= $_POST['sks'];

	$sql	= "INSERT INTO data_mhs VALUES('$nim', '$nama', '$angkatan', '$sks')";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
		header("location: index.php");
	} else {
		echo "Input Data Gagal.";
	}
?>