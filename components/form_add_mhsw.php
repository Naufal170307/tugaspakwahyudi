<form action="../queries/add_mahasiswa.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIM</label>
    <input type="text" class="form-control" name="nim">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Mahasiswa</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <textarea class="form-control" aria-label="With textarea" name="adress"></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Wali</label>
    <div class="form-floating">
      <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="wali_id">
        <option selected>Belum ada yang dipilih</option>
        <?php
        include '../queries/add_mahasiswa.php';

        $data_wali = mysqli_fetch_all($result_wali, MYSQLI_ASSOC);
        foreach ($data_wali as $wali) {
          $id_wali = $wali['id'];
          $nama_wali = $wali['name'];

          echo "<option value='$id_wali'>$nama_wali</option>";
        }
        ?>
      </select>
      <label for="floatingSelect">Pilih data wali</label>
    </div>
  </div>
  <button type="submit" class="btn btn-success">Simpan</button>
  <a href="../layouts/list_mahasiswa.php" type="submit" class="btn btn-danger">Batal</a>
</form>