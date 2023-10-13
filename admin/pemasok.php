<h2>HALAMAN PEMASOK</h2>
<table class="table table-bordered">
    <thead>
        <th>no</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>Notelpon</th>
        <th>Email</th>
    </thead>
    <tbody>
        <?php $ambil = $koneksi->query("SELECT * FROM pemasok"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $pecah['IDPemasok']; ?></td>
                <td><?php echo $pecah['namapemasok']; ?></td>
                <td><?php echo $pecah['alamatpemasok']; ?></td>
                <td><?php echo $pecah['kotapemasok']; ?></td>
                <td><?php echo $pecah['notelponpemasok']; ?></td>
                <td><?php echo $pecah['emailpemasok']; ?></td>
                <td>
                    <a href="index.php?halaman=tambahdatapemasok&id=<?php echo $pecah['IDPemasok']; ?>" class="btn btn-info">Lihat Data</a>

                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<a href="index.php?halaman=tambahpemasok" class="btn btn-primary">tambah data</a>