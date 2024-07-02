<?php
include "sqlconnect.php";

if (isset($_GET['eproduct'])) {
    $eproduct = $_GET['eproduct'];
    $brand = $_GET['b'];
    $query = "DELETE FROM $brand WHERE id_product = $eproduct";
    $sql = mysqli_query($connect, $query);
    if ($sql) {
        header("location: index.php?b=$brand");
    } else
        print "gagal";
}
