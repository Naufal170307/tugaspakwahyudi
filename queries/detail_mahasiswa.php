<?php
include '../connections/conn.php';

// Ambil ID mahasiswa dari URL
$id = $_GET["id"];

// Query untuk mengambil data mahasiswa berdasarkan ID
$query = "SELECT mahasiswa.*, wali.name AS nama_wali
FROM mahasiswa
INNER JOIN wali ON mahasiswa.wali_id = wali.id
WHERE mahasiswa.id = '$id'";

$result = mysqli_query($conn, $query);

$query_wali = "SELECT * FROM wali";
$result_wali = mysqli_query($conn, $query_wali);

if (mysqli_num_rows($result) > 0) {
    $mahasiswa = mysqli_fetch_assoc($result);

    // Isi form dengan data mahasiswa
    $nim = $mahasiswa["nim"];
    $name = $mahasiswa["name"];
    $adress = $mahasiswa["adress"];
    $nama_wali_terpilih = $mahasiswa["nama_wali"];
    $wali_id = $mahasiswa["wali_id"];
} else {
    // Tampilkan pesan error jika data tidak ditemukan
    echo "Mahasiswa tidak ditemukan!";
}
?>