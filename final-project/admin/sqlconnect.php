<?php
$server = "localhost";
$user   = "root";
$pass   = "";
$dbname = "konter_hp";

$connect = new mysqli($server, $user, $pass, $dbname);

if ($connect->connect_error) {
    die("Error: " . $connect->connect_error);
}
