<?php
include "sqlconnect.php";

$menu = $_POST['menu'];

if ($menu == "brand") {
    $nbrand = $_POST['brand_name'];
    $query = "INSERT INTO brand VALUES (NULL, '$nbrand')";
    $table_query = "CREATE TABLE `$nbrand` ( `id_product` int(11) NOT NULL, `name` varchar(20) NOT NULL, `variant` varchar(20) NOT NULL, `color` varchar(20) NOT NULL, `details` text NOT NULL, `product_pict` text NOT NULL, `price` varchar(20) NOT NULL )";
    $table_query2 = "ALTER TABLE `$nbrand` CHANGE `id_product` `id_product` INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`id_product`)";
    $sql = mysqli_query($connect, $query);
    $add = mysqli_query($connect, $table_query);
    $edit = mysqli_query($connect, $table_query2);
    
    if ($sql&&$add&&$edit) {
        header("location: index.php");
    } else
        print "gagal";
} else if ($menu == "xiaomi") {
    $brand = $_POST['brand'];
    $nname = $_POST['name'];
    $nvariant = $_POST['variant'];
    $ncolor = $_POST['color'];
    $ndetails = $_POST['details'];
    $nproduct_pict = $_POST['pict'];
    $nprice = $_POST['price'];
    $query = "INSERT INTO $brand VALUES ('', '$nname', '$nvariant', '$ncolor', '$ndetails', '$nproduct_pict', '$nprice')";
    $sql = mysqli_query($connect, $query);
    if ($sql) {
        header("location: index.php");
    } else
        print mysqli_error($connect);
}
