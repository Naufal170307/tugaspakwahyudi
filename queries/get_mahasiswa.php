<?php
  include '../connections/conn.php';

  $query = "SELECT mahasiswa.*, 
            (SELECT name FROM wali WHERE id = mahasiswa.wali_id) AS nama_wali
            FROM mahasiswa 
            ORDER BY mahasiswa.nim ASC";

  $result = mysqli_query($conn, $query);
  mysqli_close($conn);
?>
