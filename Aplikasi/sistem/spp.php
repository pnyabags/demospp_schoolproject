<?php
if (@$_SESSION['level_user'] == 'petugas') {
    echo "<script>alert('Anda Bukan Admin');location.href='dashboard.php?page=pembayaran';</script>";
} else if (@$_SESSION['level_user'] == 'siswa') {
    echo "<script>alert('Anda Bukan Admin atau Petugas');location.href='dashboard.php?page=histori';</script>";
} else if (@$_SESSION['level_user'] == 'admin') {
?>
    <main class="table">
        <form action="" method="post">
            <section class="table-header">
                <h1>Tabel Data SPP</h1>
                <input type="text" name="cari" id="searchspp" placeholder="Search siswa...">
                <section class="content-header">
                    <a href="dashboard.php?page=insertspp" class="tombol-header">Tambah Data</a>
                    <a href="" class="tombol-header">Print Data</a>
                </section>
            </section>

            <section class="table-body">
                <table id="tablespp">
                    <thead>
                        <tr>
                            <th>ID Kelas</th>
                            <th>Tahun Ajaran</th>
                            <th>Nominal Bayar</th>
                            <th class="print">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $batas = 7;
                        $halaman = isset($_GET['hal']) ? (int)$_GET['hal'] : 1;
                        $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                        $previous = $halaman - 1;
                        $next = $halaman + 1;

                        $data = mysqli_query($koneksi, "SELECT * FROM spp");
                        $jumlah_data = mysqli_num_rows($data);
                        $total_halaman = ceil($jumlah_data / $batas);
                        $query = "SELECT * FROM spp ORDER BY id_spp DESC LIMIT $halaman_awal, $batas";
                        $hasil = mysqli_query($koneksi, $query);

                        foreach ($hasil as $row) :
                        ?>
                            <tr>
                                <td data-label="ID Kelas"><?php echo $row['id_spp']; ?></td>
                                <td data-label="Kelas"><?php echo $row['tahun_ajaran']; ?></td>
                                <td data-label="Jurusan"><?php echo "Rp. " . number_format($row['nominal'], 2, ',', '.') ?></td>
                                <?php
                                $id_button = $row['id_spp'];
                                $query_button = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id_spp = '$id_button'");
                                $spp_button = mysqli_fetch_assoc($query_button);
                                if ($spp_button) {
                                ?>
                                    <td data-label="Actions" class="print">
                                        <a href="dashboard.php?update_spp=<?php echo $row['id_spp']; ?>" onclick="return confirm('Yakin mau update <?= $row['tahun_ajaran']; ?>?')"><img src="../images/pen-to-square-solid.svg" alt="Edit Button"></a>
                                    </td>
                                <?php
                                } else {
                                ?>
                                    <td>
                                        <a href="dashboard.php?delete_spp=<?php echo $row['id_spp']; ?>" onclick="return confirm('Yakin mau hapus <?= $row['tahun_ajaran']; ?>?')"><img src="../images/trash-solid.svg" alt="Delete Button"></a>
                                        <a href="dashboard.php?update_spp=<?php echo $row['id_spp']; ?>" onclick="return confirm('Yakin mau update <?= $row['tahun_ajaran']; ?>?')"><img src="../images/pen-to-square-solid.svg" alt="Edit Button"></a>
                                    </td>
                                <?php
                                }
                                ?>

                            </tr>
                        <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </section>
            <center>
                <div class="paging">
                    <a <?php if ($halaman > 1) {
                            echo "href='?page=spp&hal=$previous'";
                        } ?>>Previous</a>
                    <?php
                    for ($x = 1; $x <= $total_halaman; $x++) {
                    ?>
                        <a href="?page=spp&hal=<?php echo $x ?>"><?php echo $x; ?></a>
                    <?php
                    }
                    ?>
                    <a <?php if ($halaman < $total_halaman) {
                            echo "href='?page=spp&hal=$next'";
                        } ?>>Next</a>
                </div>
            </center>
    </main>
<?php
}
?>