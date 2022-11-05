<?php
	include 'koneksi.php';

	$user		    = $_POST['username'];
	$pass1	= $_POST['password1'];
	$pass2	    = $_POST['password2'];
    if ($pass1 !== $pass2) {
        header("location: register.php?message=diff");
        return;
    }

	$sql	= "INSERT INTO user VALUES('','$user', '$pass1')";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
		header("location: login.php?message=success");
	} else {
		echo "Pendaftaran User Gagal.";
	}
?>