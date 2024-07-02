<?php
include "sqlconnect.php";

    $brand = $_POST['brand'];
    $id = $_POST['id'];
    $nname = $_POST['name'];
    $nvariant = $_POST['variant'];
    $ncolor = $_POST['color'];
    $ndetails = $_POST['details'];
    $npict = $_POST['pict'];
    $nprice = $_POST['price'];
    $query = "UPDATE $brand SET `name`='$nname', variant='$nvariant', color='$ncolor', details='$ndetails', product_pict='$npict', price='$nprice' WHERE id_product=$id";
    $sql = mysqli_query($connect, $query);
    if ($sql) {
        header("location: index.php?b=$brand");
    } else
        print "gagal";
