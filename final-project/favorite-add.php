<?php
    session_start();
    if (empty($_SESSION['username'])) {
		header("location: login.php?message=belum_login");
	}
    else {

    include 'koneksi.php';
    $id = $_SESSION['id'];
    $brand = $_GET['b'];
    $product_id = $_GET['p'];
    if (isset($_GET['i'])) {
        if ($_GET['i'] == 'i')
            $head_back = "index.php";
        else if ($_GET['i'] == 's') {
            $head_back = 'favorite.php';
        }
    }
    else {
        $head_back = "product.php?b=$brand&p=$product_id";
    }

    $sql	= "INSERT INTO favorite VALUES('', '$id', '$brand', '$product_id')";

	$query	= mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if ($query) {
        // echo $_SESSION['username'];
        header("location: $head_back");
    }
    else {
        echo "gagal";
    }
    }

?>