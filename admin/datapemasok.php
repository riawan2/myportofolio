<h2>HALAMAN DATA PEMASOK</h2>
<table class="table table-bordered">
    <thead>

        <th>Nama pemasok</th>
        <th>Nama Barang</th>
        <th>Jumlah Barang</th>
    </thead>
    <tbody>
        <?php $ambil = $koneksi->query("SELECT * FROM datapemasok JOIN pemasok ON datapemasok.
        IDPemasok=pemasok.IDPemasok"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>

            <tr>
                <td><?php echo $pecah['namapemasok']; ?></td>
                <td><?php echo $pecah['namaprdk']; ?></td>
                <td><?php echo $pecah['jumlahbarang']; ?></td>
                <td>


                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>