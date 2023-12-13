<?php

include '../connections/conn.php';

// Cek apakah ada ID mahasiswa yang dikirim
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']); // Amankan input

    // Query untuk menghapus data mahasiswa
    $query = "DELETE FROM mahasiswa WHERE id = '$id'";

    // Eksekusi query
    if (mysqli_query($conn, $query)) {
        echo "Data mahasiswa berhasil dihapus!";
        // Redirect ke halaman daftar mahasiswa (sesuaikan)
        header("Location: ../layouts/list_mahasiswa.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Tutup koneksi database
    mysqli_close($conn);
} else {
    echo "ID mahasiswa tidak ditemukan";
}

?>