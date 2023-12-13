<?php
  include '../queries/detail_mahasiswa.php';
?>
<form action="../queries/edit_mahasiswa.php" method="post">
    <input type="text" hidden class="form-control" name="id" value="<?php echo $id?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIM</label>
    <input type="text" class="form-control" name="nim" value="<?php echo $nim?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Mahasiswa</label>
    <input type="text" class="form-control" name="name" value="<?php echo $name?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <textarea class="form-control" aria-label="With textarea" name="adress"><?php echo $adress?></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Wali</label>
    <div class="form-floating">
      <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="wali_id">
        <option selected value='wali_id'><?php echo $nama_wali_terpilih?></option>
        <option>Belum ada yang dipilih</option>
          <?php
            include '../queries/detail_mahasiswa.php';

            $data_wali = mysqli_fetch_all($result_wali, MYSQLI_ASSOC);
            foreach ($data_wali as $wali) {
              $id_wali = $wali['id'];
              $nama_wali = $wali['name'];

              if ($nama_wali != $nama_wali_terpilih) {
                echo "<option value='$id_wali'>$nama_wali</option>";
              }
            }
          ?>
      </select>
      <label for="floatingSelect">Pilih data wali</label>
    </div>
  </div>
  <button type="submit" class="btn btn-success">Perbarui</button>
  <a href="../layouts/list_mahasiswa.php" type="submit" class="btn btn-danger">Batal</a>
</form>