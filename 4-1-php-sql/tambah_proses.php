<?php
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $angkatan = $_POST['angkatan'];
    $sks = $_POST['sks'];

    $sql = "INSERT INTO data_mhs VALUES('$nim', '$nama', '$angkatan', '$sks')";

    include 'koneksi.php';

    $query = mysqli_query($konek, $sql) or die(
        mysqli_error($konek)
    );

    if ($query) {
        echo "Input data  berhasil yey";
    }
    else {
        echo "Input data gagal";
    }
?>