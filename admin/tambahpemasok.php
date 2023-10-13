<h2>Tambah Pelanggan</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="namapemasok">
    </div>
    <div class="form-group">
        <label>Email </label>
        <input type="text" class="form-control" name="emailpemasok">
    </div>
    <div class="form-group">
        <label>Alamat </label>
        <input type="text" class="form-control" name="alamatpemasok">
    </div>
    <div class="form-group">
        <label>Kota </label>
        <input type="text" class="form-control" name="kotapemasok">
    </div>
    <div class="form-group">
        <label>no telopon</label>
        <input type="number" class="form-control" name="notelponpemasok">
    </div>

    <button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save'])) {

    $koneksi->query("INSERT INTO pelanggan
    (namapemasok,notelponpemasok,email)
    VALUES('$_POST[namapemasok]',$_POST[alamatpemasok]','$_POST[kotapemasok]''$_POST[notelponpemasok]','$_POST[emailpemasok]')");
    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh'content='1;url=index.php?halaman=pelanggan'>";
}
?>