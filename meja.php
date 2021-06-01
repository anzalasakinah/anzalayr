<?php
require_once "../model/class.meja.php";
$meja = new Meja();
?>
<div class ="container">
<div class = "col-md-6">
<form action = "../controller/proses.meja.php?aksi=simpan" method="POST">
  <div class="form-group">
    <label><font color="ffffff">Id Meja</label>
    <input type="textbox" readonly name ="id_meja"  value="<?php echo $meja->idauto('nextID'); ?>"  class="form-control">
  </div>
  <div class="form-group">
    <label><font color="ffffff">Nama Meja</label>
    <input type="textbox" name = "nama_meja" class="form-control" placeholder="Nama Meja">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
<div class ="col-md-12">
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id Meja</th>
      <th scope="col">Nama Meja</th>
      <th> Aksi </th>
    </tr>
  </thead>
  <?php
      require_once "../model/class.meja.php";
      $meja = new Meja();
      $no = 1;
      $select = $meja->tampil();
      foreach ($select as $data){
  ?>
  <tbody>
    <tr>
      <td><font color="ffffff"><?php echo $no++;?> </td>
      <td><font color="ffffff"><?php echo $data['id_meja'] ?></td>
      <td><font color="ffffff"><?php echo $data['nama_meja'] ?></td>
      <td> 
      <a href="../view/admin.php?view=editmeja&id_meja=<?php echo $data['id_meja'];?>"> Edit </a> |
      <a href="../controller/proses.meja.php?id_meja=<?php echo $data['id_meja']?>&aksi=hapus"> Hapus </a>
      </td>
    </tr>
      <?php } ?>
  </tbody>
</table>
</div>
</div>
