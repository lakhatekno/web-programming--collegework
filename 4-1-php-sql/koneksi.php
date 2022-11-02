<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db_name = "mhs";

    $konek = new mysqli($hostname, $username, $password, $db_name);
    if ($konek->connect_error) {
        die('Koneksi database gagal: '.$konek->connect_error);
    }
?>