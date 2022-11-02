<?php
	include "koneksi.php";
	
    $nim = $_GET['id'];
	
    $query=mysqli_query($connect,"DELETE FROM data_mhs WHERE nim='$nim'")
    or die(mysqli_error($connect));
    if($query) {
        header("location: index.php");
    }
?>
