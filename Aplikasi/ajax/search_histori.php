<?php
include('../koneksi.php');
$search = $_GET['cari'];
$query = mysqli_query($koneksi, "SELECT * FROM pembayaran JOIN petugas USING (id_petugas) JOIN siswa USING (nis) WHERE bulan LIKE '%$search%' OR nama_petugas LIKE '%$search%' OR nis LIKE '%$search%' OR nama_siswa LIKE '%$search%' OR tanggal_bayar LIKE '%$search%' OR nominal LIKE '%$search%' ORDER BY id_bayar DESC");

$no = 1;
?>
<section class="table-body" id="table-siswa">
    <table>
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Bulan</th>
                <th>Nama Petugas</th>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Tanggal Bayar</th>
                <th>Jumlah Bayar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($search_row = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <td data-label=""><?php echo $no ?></td>
                    <td><?php echo $search_row['bulan']; ?></td>
                    <td><?php echo $search_row['nama_petugas']; ?></td>
                    <td><?php echo $search_row['nis']; ?></td>
                    <td><?php echo $search_row['nama_siswa']; ?></td>
                    <td><?php echo $search_row['tanggal_bayar']; ?></td>
                    <td><?php echo $search_row['nominal']; ?></td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
</section>