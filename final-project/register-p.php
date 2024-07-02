<?php
	include 'koneksi.php';

	$user   = $_POST['username'];
	$pass1	= $_POST['password1'];
	$pass2  = $_POST['password2'];
    if ($pass1 !== $pass2) {
        header("location: register.php?m=diff");
        return;
    }

	$sql = "SELECT * FROM user WHERE username='$user'";
    $query = mysqli_query($conn, $sql);
	$cek = mysqli_num_rows($query);
    if ($cek > 0) {
		header("location: register.php?m=booked");
		return;
	}

	$sql	= "INSERT INTO user VALUES('', '$user', '$pass1')";

	$query	= mysqli_query($conn, $sql) or die(mysqli_error($conn));

	if($query) {
		header("location: login.php?message=success");
	} else {
		echo "Pendaftaran User Gagal.";
	}
?>