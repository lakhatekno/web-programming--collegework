<?php
	include "koneksi.php";
	
    $nim_lama = $_POST['nim_lama'];
	$nim=$_POST['nim'];
	$nama	=$_POST['nama'];
	$angkatan	=$_POST['angkatan'];
	$sks	=$_POST['sks'];
	
    $query=mysqli_query($connect,"UPDATE data_mhs SET nim='$nim', nama='$nama',
    angkatan='$angkatan', sks='$sks' where nim='$nim_lama'")
    or die(mysqli_error($connect));
    if($query) {
        header("location: index.php");
    }
?>
