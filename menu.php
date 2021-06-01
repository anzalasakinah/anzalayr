<?php
require_once "../model/class.menu.php";
$menu = new Menu();
?>
<div class ="container">
<div class = "col-md-6">
<form action = "../controller/proses.menu.php?aksi=simpan" method="POST">
  <div class="form-group">
    <label><font color="ffffff">Id Menu</label>
    <input type="textbox" readonly name ="id_menu"  value="<?php echo $menu->idauto('nextID'); ?>"  class="form-control">
  </div>

  <div class="form-group">
    <label><font color="ffffff">Nama Menu</label>
    <input type="textbox" name = "nama_menu" class="form-control" placeholder="Nama Menu">
  </div>

  <div class="form-group">
    <label><font color="ffffff">Harga</label>
    <input type="textbox" name = "harga" class="form-control" placeholder="Harga">
  </div>

  <div class="form-group">
    <label>Kategori</label>
   <select class="form-control" name="kategori">
   <option value="makanan"> Makanan </option>
   <option value="minuman"> Minuman </option>
   </select>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
<div class ="col-md-12">
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Kategori</th>
      <th> Aksi </th>
    </tr>
  </thead>
  <?php
      require_once "../model/class.menu.php";
      $menu = new Menu();
      $no = 1;
      $select = $menu->tampil();
      foreach ($select as $data){
  ?>
  <tbody>
    <tr>
      <td><font color="ffffff"><?php echo $no++;?> </td>
      <td><font color="ffffff"><?php echo $data['nama_menu'] ?></td>
      <td><font color="ffffff"><?php echo $data['harga'] ?></td>
      <td><font color="ffffff"><?php echo $data['kategori'] ?></td>
      <td> 
      <a href="../view/admin.php?view=editmenu&id_menu=<?php echo $data['id_menu'];?>"> Edit </a> |
      <a href="../controller/proses.menu.php?id_menu=<?php echo $data['id_menu']?>&aksi=hapus"> Hapus </a>
      </td>
    </tr>
      <?php } ?>
  </tbody>
</table>
</div>
</div>