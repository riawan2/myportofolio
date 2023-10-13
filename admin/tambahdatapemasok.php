<h2>Tambah Data Pemasok</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">

        <label>Nama</label>

        <input type="text" class="form-control" name="namapemasok">
    </div>
    <div class="form-group">
        <label>Nama Produk </label>
        <input type="text" class="form-control" name="namaprdk">
    </div>
    <div class="form-group">
        <label>Jumlah Produk</label>
        <input type="number" class="form-control" name="jumlahbarang">
    </div>
    <button class="btn btn-primary" name="save">Simpan</button>
</form>

<?php
if (isset($_POST['save'])) {

    $koneksi->query("INSERT INTO datapemasok
(namapemasok,namaprdk,jumlahbarang)
VALUES('$_POST[namapemasok]','$_POST[namaprdk]','$_POST[jumlahbarang]')");
    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "
<meta http-equiv='refresh' content='1;url=index.php?halaman=datapemasok'>";
}
?>