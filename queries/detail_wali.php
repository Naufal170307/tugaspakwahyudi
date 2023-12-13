<?php
include '../connections/conn.php';

// Ambil ID mahasiswa dari URL
$id = $_GET["id"];

// Query untuk mengambil data mahasiswa berdasarkan ID
$query = "SELECT * FROM wali WHERE id='$id'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $mahasiswa = mysqli_fetch_assoc($result);

    // Isi form dengan data mahasiswa
    $name = $mahasiswa["name"];
} else {
    // Tampilkan pesan error jika data tidak ditemukan
    echo "Mahasiswa tidak ditemukan!";
}
?>