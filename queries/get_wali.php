<?php
    include '../connections/conn.php';
    $query = "SELECT * FROM wali ORDER BY name ASC";

    
    $result = mysqli_query($conn, $query);
?>