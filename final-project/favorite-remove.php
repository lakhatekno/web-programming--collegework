<?php
    session_start();
    $id = $_GET['id'];
    if (isset($_GET['s'])) {
        $head_back = "index.php";
    }
    else {
        $head_back = "favorite.php";
    }

    include 'koneksi.php';
    $sql = "DELETE FROM favorite WHERE id_favorite=$id";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header("location: $head_back");
    }

?>