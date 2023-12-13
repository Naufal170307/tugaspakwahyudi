<?php

// Deklarasi variabel
$servername = "localhost";
$username = "root";
$password = "123";
$database = "crud";

// Koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

?>
