<?php
	include "koneksi.php";
	
    $id_jadwal = $_GET['id'];
	
    $query=mysqli_query($connect,"DELETE FROM jadwal WHERE id_jadwal='$id_jadwal'")
    or die(mysqli_error($connect));
    if($query) {
        header("location: jadwal.php");
    }
    else {
        echo "Hapus data gagal.";
    }
?>