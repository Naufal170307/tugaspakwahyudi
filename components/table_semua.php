<div class="col start-0 fs-3">
    Data Mahasiswa
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Alamat</th>
            <th scope="col">Wali</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Memanggil data mahasiswa dari file get_mahasiswa.php
        include "../queries/get_mahasiswa.php";

        $data_mahasiswa = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $no = 1;
        if (is_array($data_mahasiswa)) {
            // Lanjutkan looping
            // Tampilkan data mahasiswa
            foreach ($data_mahasiswa as $mahasiswa) {
                // Tampilkan data mahasiswa
                echo "<tr>";
                echo "<th scope='row'>" . $no . "</th>"; // Ganti 'id' dengan kolom yang sesuai untuk No
                echo "<td>" . $mahasiswa['nim'] . "</td>";
                echo "<td>" . $mahasiswa['name'] . "</td>"; // Ganti dengan kolom yang sesuai untuk Nama Lengkap
                echo "<td>" . $mahasiswa['adress'] . "</td>";
                echo "<td>" . $mahasiswa['nama_wali'] . "</td>";
                echo "</tr>";
                $no++;
            }
        } else {
            echo "Tidak ada data mahasiswa";
        }

        ?>
    </tbody>
</table>
<br>
<br>
<div class="col start-0 fs-3">
    Data Wali
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Lengkap</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Memanggil data wali dari file get_wali.php
        include "../queries/get_wali.php";

        $data_wali = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $no = 1;
        if (is_array($data_wali)) {
            // Lanjutkan looping
            // Tampilkan data wali
            foreach ($data_wali as $wali) {
                // Tampilkan data wali
                echo "<tr>";
                echo "<th scope='row'>" . $no . "</th>"; // Ganti 'id' dengan kolom yang sesuai untuk No
                echo "<td>" . $wali['name'] . "</td>";
                echo "</tr>";
                $no++;
            }
        } else {
            echo "Tidak ada data wali";
        }

        ?>
    </tbody>
</table>