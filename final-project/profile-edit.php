<?php
    session_start();
    
    include 'koneksi.php';

    $id     = $_POST['id'];
    $user   = $_POST['username'];
	$pass1	= $_POST['password'];
	$pass2  = $_POST['password2'];
    if ($pass1 !== $pass2) {
        header("location: profile.php?m=diff");
        return;
    }

	$sql = "SELECT * FROM user WHERE id_user='$id'";
    $query = mysqli_query($conn, $sql);
	$cek = mysqli_num_rows($query);
    if ($cek == 0) {
        $sql = "SELECT * FROM user WHERE username='$user'";
        $query = mysqli_query($conn, $sql);
        $cek2 = mysqli_num_rows($query);
        if ($cek2 > 0)
		    header("location: profile.php?m=booked");
	}

	$sql	= "UPDATE user SET `username`='$user', `password`='$pass1' WHERE id_user='$id'";

	$query	= mysqli_query($conn, $sql) or die(mysqli_error($conn));

	if($query) {
		$_SESSION['id'] = $id;
		$_SESSION['username'] = $user;
		$_SESSION['password'] = $pass1;
        header("location: profile.php?m=success");

	} else {
		header("location: profile.php?m=failed");
	}
?>