<?php

include '../connections/conn.php';

$query = "SELECT * FROM wali";
$result_wali = mysqli_query($conn, $query);

// Cek apakah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ambil data dari form
    $nim = $_POST["nim"];
    $name = $_POST["name"];
    $adress = $_POST["adress"];
    $wali_id = $_POST["wali_id"];

    // Query untuk insert data mahasiswa
    $query = "INSERT INTO mahasiswa (nim, name, adress, wali_id) VALUES ('$nim', '$name', '$adress', '$wali_id')";
    
    // Eksekusi query
    if (mysqli_query($conn, $query)) {
        // echo "<div class='alert alert-success' role='alert'>Data mahasiswa berhasil ditambahkan!</div>";
        header("Location: ../layouts/add_mhsw.php"); // Redirect ke halaman add_mahasiswa
    } else {
        echo "Error: " . mysqli_error($conn); // Tampilkan pesan error
    }

    // Tutup koneksi database
    mysqli_close($conn);

}

?>