<?php
	include "koneksi.php";
	
    $id = $_POST['id_lab'];
	$lab = $_POST['lab'];
	
    $query=mysqli_query($connect,"UPDATE lab SET lab='$lab' where id_lab='$id'")
    or die(mysqli_error($connect));
    if($query) {
        header("location: lab.php");
    }
?>