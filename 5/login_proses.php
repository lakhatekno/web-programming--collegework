<?php
    session_start();
    
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

    $query = mysqli_query($connect, $sql);

    $cek = mysqli_num_rows($query);

    if ( $cek>0 ) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location: index.php?message=login");
    }
    else {
        header("location: login.php?message=failed");
    }
?>