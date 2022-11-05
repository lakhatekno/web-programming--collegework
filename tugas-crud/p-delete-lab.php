<?php
	include "koneksi.php";
	
    $id = $_GET['id'];
	
    $query=mysqli_query($connect,"DELETE FROM lab WHERE id_lab='$id'")
    or die(mysqli_error($connect));
    if($query) {
        header("location: lab.php");
    }
    else {
        echo "Hapus data gagal.";
    }
?>