<h2>Tambah Pelanggan</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label>Email </label>
        <input type="text" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label>no telopon</label>
        <input type="number" class="form-control" name="telepon">
    </div>

    <button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save'])) {

    $koneksi->query("INSERT INTO pelanggan
    (nama,telepon,email)
    VALUES('$_POST[nama]','$_POST[telepon]','$_POST[email]')");
    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh'content='1;url=index.php?halaman=pelanggan'>";
}
?>