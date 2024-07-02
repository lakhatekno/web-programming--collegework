<?php
    session_start();
    
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

    $query = mysqli_query($conn, $sql);

    $data = mysqli_fetch_array($query);
    $cek = mysqli_num_rows($query);

    if ( $cek > 0 ) {
        $_SESSION['id'] = $data['id_user'];
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['status'] = "login";
        header("location: index.php");
    }
    else {
        header("location: login.php?message=failed");
    }
?>