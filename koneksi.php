<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_transaksi";

// Establish connection to the database
$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
