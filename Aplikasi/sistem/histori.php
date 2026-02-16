<?php
if (@$_SESSION['level_user'] == 'petugas' || @$_SESSION['level_user'] == 'admin') {
?>
    <main class="table">
        <form action="" method="post">
            <form action="" method="post">
                <section class="table-header">
                    <h1>Tabel Data Histori</h1>
                    <input type="text" name="cari" id="searchhistori" placeholder="Search siswa...">
                <section class="content-header">
                    <a href="dashboard.php?page=pembayaran" class="tombol-header">Pembayaran</a>
                </section>
            </section>

            <section class="table-body">
                <table id="tablehistori">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Bulan</th>
                            <th>Nama Petugas</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Tanggal Bayar</th>
                            <th>Jumlah Bayar</th>
                            <!--0th class="print">Actions</th>-->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $batas = 6;
                        $halaman = isset($_GET['hal']) ? (int)$_GET['hal'] : 1;
                        $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                        $previous = $halaman - 1;
                        $next = $halaman + 1;

                        $data = mysqli_query($koneksi, "SELECT * FROM pembayaran JOIN petugas USING (id_petugas)");
                        $jumlah_data = mysqli_num_rows($data);
                        $total_halaman = ceil($jumlah_data / $batas);

                        $query = "SELECT * FROM pembayaran JOIN siswa USING (nis) JOIN petugas USING (id_petugas) ORDER BY tanggal_bayar DESC LIMIT $halaman_awal, $batas";
                        $hasil = mysqli_query($koneksi, $query);    

                        $no = 1;
                        foreach ($hasil as $row) :
                        ?>
                            <tr>
                                <td data-label=""><?php echo $no ?></td>
                                <td data-label=""><?php echo $row['bulan']; ?></td>
                                <td data-label=""><?php echo $row['nama_petugas']; ?></td>
                                <td data-label=""><?php echo $row['nis']; ?></td>
                                <td data-label=""><?php echo $row['nama_siswa']; ?></td>
                                <td data-label=""><?php echo $row['tanggal_bayar']; ?></td>
                                <td data-label=""><?php echo rupiah($row['nominal'], 2, ',', '.') ?></td>
                                <!--<td data-label="" class="print">
                            <a href="" class="print"><img src="../../images/plus-solid.svg" alt="Insert Button"></a>
                            <a href=""><img src="../../images/pen-to-square-solid.svg" alt="Edit Button"></a>
                            <a href=""><img src="../../images/trash-solid.svg" alt="Delete Button"></a>
                        </td> -->
                            </tr>
                        <?php
                            $no++;
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </section>
        </form>
        <center>
            <div class="paging">
                <a <?php if ($halaman > 1) {
                        echo "href='?page=histori&hal=$previous'";
                    } ?>>Previous</a>
                <?php
                for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
                    <a href="?page=histori&hal=<?php echo $x ?>"><?php echo $x; ?></a>
                <?php
                }
                ?>
                <a <?php if ($halaman < $total_halaman) {
                        echo "href='?page=histori&hal=$next'";
                    } ?>>Next</a>
            </div>
        </center>
    </main>
<?php
} else if (@$_SESSION['level_user'] == 'siswa') {
?>
    <main class="table">
        <form action="" method="post">
            <form action="" method="post">
                <section class="table-header">
                    <h1>Tabel Data Histori Siswa <?= $_SESSION['nama_siswa'];?></h1>
                    <input type="text" name="cari" placeholder="Search histori...">
                    <span></span>
            </form>
                </section>

            <section class="table-body">
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
                            <!--0th class="print">Actions</th>-->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nis = $_SESSION['username'];
                        $batas = 6;
                        $halaman = isset($_GET['semester']) ? (int)$_GET['semester'] : 1;
                        $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                        $previous = $halaman - 1;
                        $next = $halaman + 1;

                        $data = mysqli_query($koneksi, "SELECT * FROM pembayaran JOIN petugas USING (id_petugas) WHERE nis='$nis'");
                        $jumlah_data = mysqli_num_rows($data);
                        $total_halaman = ceil($jumlah_data / $batas);

                        $query = "SELECT * FROM pembayaran JOIN siswa USING (nis) JOIN petugas USING (id_petugas) WHERE nis='$nis' ORDER BY keterangan ASC LIMIT $halaman_awal, $batas";
                        $hasil = mysqli_query($koneksi, $query);

                        $no = 1;
                        foreach ($hasil as $row) :
                        ?>
                            <tr>
                                <td data-label=""><?php echo $no ?></td>
                                <td data-label=""><?php echo $row['bulan']; ?></td>
                                <td data-label=""><?php echo $row['nama_petugas']; ?></td>
                                <td data-label=""><?php echo $row['nis']; ?></td>
                                <td data-label=""><?php echo $row['nama_siswa']; ?></td>
                                <td data-label=""><?php echo $row['tanggal_bayar']; ?></td>
                                <td data-label=""><?php echo rupiah($row['nominal']) ?></td>
                                <!--<td data-label="" class="print">
                            <a href="" class="print"><img src="../../images/plus-solid.svg" alt="Insert Button"></a>
                            <a href=""><img src="../../images/pen-to-square-solid.svg" alt="Edit Button"></a>
                            <a href=""><img src="../../images/trash-solid.svg" alt="Delete Button"></a>
                        </td> -->
                            </tr>
                        <?php
                            $no++;
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </section>
        </form>
        <center>
            <div class="paging">
                <a <?php if ($halaman > 1) {
                        echo "href='?page=histori&semester=$previous'";
                    } ?>>Previous</a>
                <?php
                for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
                    <a href="?page=histori&semester=<?php echo $x ?>"><?php echo $x; ?></a>
                <?php
                }
                ?>
                <a <?php if ($halaman < $total_halaman) {
                        echo "href='?page=histori&semester=$next'";
                    } ?>>Next</a>
            </div>
        </center>
    </main>

    <?php
    ?>

<?php
}
?>