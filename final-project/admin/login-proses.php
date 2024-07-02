<?php
session_start();

include "sqlconnect.php";

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$sql = mysqli_query($connect, $query);

$check = mysqli_num_rows($sql);

if ($check > 0) {
    $_SESSION['admin'] = $username;
    $_SESSION['status'] = "login";
    header("location: index.php");
} else
    header("location: login.php?pesan=gagal");

?>
