<?php
  include '../queries/detail_wali.php';
?>
<form action="../queries/edit_wali.php" method="post">
    <input type="text" hidden class="form-control" name="id" value="<?php echo $id?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Wali</label>
    <input type="text" class="form-control" name="name" value="<?php echo $name?>">
  </div>
  <button type="submit" class="btn btn-success">Simpan</button>
  <a href="../layouts/list_wali.php" type="submit" class="btn btn-danger">Batal</a>
</form>