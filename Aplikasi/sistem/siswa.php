<?php
if (@$_SESSION['level_user'] == 'petugas') {
    echo "<script>alert('Anda Bukan Admin');location.href='dashboard.php?page=pembayaran';</script>";
} else if (@$_SESSION['level_user'] == 'siswa') {
    echo "<script>alert('Anda Bukan Admin atau Petugas');location.href='dashboard.php?page=histori';</script>";
} else if (@$_SESSION['level_user'] == 'admin') {
?>
    <main class="table">
        <section class="table-header">
            <h1>Tabel Data Siswa</h1>
            <input type="text" name="cari" id="searchsiswa" placeholder="Search siswa...">
            <section class="content-header">
                <a href="dashboard.php?page=insertsiswa" class="tombol-header">Tambah Data</a>
                <a href="" class="tombol-header">Print Data</a>
            </section>
            <!--
            <form action="dashboard.php?page=insertsiswa" method="post">
                <section class="tambah">
                    <input class="tambah" type="submit" name="go" value="Tambah Data">
                </section>
            </form>
            <form action="" method="post">
                <section class="tambah">
                    <input class="tambah" type="submit" name="go" value="Print">
                </section>
            </form>
-->
        </section>

        <section class="table-body" >
            <table id="tablesiswa">
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Tahun Ajaran</th>
                        <th>Kelas</th>
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Nomor Telepon</th>
                        <th>Alamat</th>
                        <th class="print">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $batas = 7;
                    $halaman = isset($_GET['hal']) ? (int)$_GET['hal'] : 1;
                    $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                    $previous = $halaman - 1;
                    $next = $halaman + 1;

                    $data = mysqli_query($koneksi, "SELECT * FROM siswa");
                    $jumlah_data = mysqli_num_rows($data);
                    $total_halaman = ceil($jumlah_data / $batas);
                    $query = "SELECT * FROM siswa JOIN kelas USING (id_kelas) JOIN spp USING (id_spp) ORDER BY nis DESC LIMIT $halaman_awal, $batas";
                    $hasil = mysqli_query($koneksi, $query);

                    foreach ($hasil as $row) :
                    ?>
                        <tr>
                            <td data-label="ID Kelas"><?php echo $row['nis']; ?></td>
                            <td data-label="ID SPP"><?php echo $row['tahun_ajaran']; ?></td>
                            <td data-label="ID Kelas"><?php echo $row['kelas']; ?></td>
                            <td data-label="Nama Siswa"><?php echo $row['nama_siswa']; ?></td>
                            <td data-label="jenis_kelamin"><?php echo $row['jenis_kelamin']; ?></td>
                            <td data-label="telepon"><?php echo $row['telepon']; ?></td>
                            <td data-label="alamat"><?php echo $row['alamat']; ?></td>
                            <td data-label="Actions" class="print">
                                <a href="dashboard.php?update_siswa=<?php echo $row['nis']; ?>" onclick="return confirm('Yakin mau update <?= $row['nama_siswa']; ?>?')"><img src="../images/pen-to-square-solid.svg" alt="Edit Button"></a>
                                <a href="dashboard.php?delete_bayar=<?php echo $row['nis']; ?>" onclick="return confirm('Yakin mau hapus <?= $row['nama_siswa']; ?>?')"><img src="../images/trash-solid.svg" alt="Delete Button"></a>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </section>
        </form>
        <center>
            <div class="paging">
                <a <?php if ($halaman > 1) {
                        echo "href='?page=siswa&hal=$previous'";
                    } ?>>Previous</a>
                <?php
                for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
                    <a href="?page=siswa&hal=<?php echo $x ?>"><?php echo $x; ?></a>
                <?php
                }
                ?>
                <a <?php if ($halaman < $total_halaman) {
                        echo "href='?page=siswa&hal=$next'";
                    } ?>>Next</a>
            </div>
        </center>
    </main>
<?php
}
?>