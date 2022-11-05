<?php
	include "koneksi.php";
	
    $id = $_POST['id_jadwal'];
	$mk = $_POST['mk'];
	$jurusan= $_POST['jurusan'];
	$lab	= $_POST['lab'];
	$waktu	= $_POST['time'];
	
    $query=mysqli_query($connect,"UPDATE jadwal SET mk='$mk', jurusan='$jurusan', id_lab='$lab', id_waktu='$waktu' where jadwal.id_jadwal='$id'")
    or die(mysqli_error($connect));
    if($query) {
        header("location: jadwal.php");
    }
?>