<?php
$host = "weeeebsiteq.infinityfreeapp.com";
$user = "if0_40802564";
$password = "gPLxruECRmeZ";
$database = "if0_40802564_db_website"; // Ganti dengan nama database Anda

$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>