<?php
	include "koneksi.php";
	
    $id = $_POST['id'];
	$mulai = $_POST['mulai'];
	$selesai = $_POST['selesai'];
	
    $query=mysqli_query($connect,"UPDATE waktu SET waktu_mulai='$mulai', waktu_selesai='$selesai' where id_waktu='$id'")
    or die(mysqli_error($connect));
    if($query) {
        header("location: waktu.php");
    }
?>