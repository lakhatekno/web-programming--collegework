<?php
	include "koneksi.php";
	
    $id = $_GET['id'];
	
    $query=mysqli_query($connect,"DELETE FROM waktu WHERE id_waktu='$id'")
    or die(mysqli_error($connect));
    if($query) {
        header("location: waktu.php");
    }
    else {
        echo "Hapus data gagal.";
    }
?>