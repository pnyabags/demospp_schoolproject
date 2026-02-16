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
            <h1>Tabel Data Petugas</h1>
            <input type="text" name="cari" id="searchpetugas" placeholder="Search petugass...">
            <section class="content-header">
                <a href="dashboard.php?page=insertpetugas" class="tombol-header">Tambah Data</a>
                <!-- <a href="../login/register.php" class="tombol-header">Tambah User Login</a> -->
            </section>
        </section>

        <section class="table-body">
            <table id="tablepetugas">
                <thead>
                    <tr>
                        <th>ID Petugas</th>
                        <th>Petugas</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th>Level User</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $id_petugas = $_SESSION['id_petugas'];
                    $batas = 4;
                    $halaman = isset($_GET['hal']) ? (int)$_GET['hal'] : 1;
                    $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                    $previous = $halaman - 1;
                    $next = $halaman + 1;

                    $data = mysqli_query($koneksi, "SELECT * FROM petugas");
                    $jumlah_data = mysqli_num_rows($data);
                    $total_halaman = ceil($jumlah_data / $batas);
                    $query = "SELECT * FROM petugas ORDER BY id_petugas DESC LIMIT $halaman_awal, $batas";
                    $hasil = mysqli_query($koneksi, $query);

                    foreach ($hasil as $row) :
                    ?>
                    <tr>
                        <td data-label="ID Petugas"><?php echo $row['id_petugas']; ?></td>
                        <td data-label="Nama Petugas"><?php echo $row['nama_petugas']; ?></td>
                        <td data-label="Telepon"><?php echo number_format($row['telepon'], 0, ',', '-'); ?></td>
                        <td data-label="Nama Petugas"><?php echo $row['alamat']; ?></td>
                        <td data-label="Nama Petugas"><?php echo $row['level_user']; ?></td>
                        <?php
                            if ($row['id_petugas'] == $id_petugas) {
                            ?>
                        <td>
                            <a href="dashboard.php?update_petugas=<?php echo $row['id_petugas']; ?>"
                                onclick="return confirm('Yakin mau update <?= $row['nama_petugas']; ?>?')"><img
                                    src="../images/pen-to-square-solid.svg" alt="Edit Button"></a>
                        </td>
                        <?php
                            } else {
                            ?>
                        <td>
                            <a href="dashboard.php?update_petugas=<?php echo $row['id_petugas']; ?>"
                                onclick="return confirm('Yakin mau update <?= $row['nama_petugas']; ?>?')"><img
                                    src="../images/pen-to-square-solid.svg" alt="Edit Button"></a>
                            <a href="dashboard.php?delete_petugas=<?php echo $row['id_petugas']; ?>"
                                onclick="return confirm('Yakin mau delete <?= $row['nama_petugas']; ?>?')"><img
                                    src="../images/trash-solid.svg" alt="Edit Button"></a>
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
    </form>
    <center>
        <div class="paging">
            <a <?php if ($halaman > 1) {
                        echo "href='?page=petugas&hal=$previous'";
                    } ?>>Previous</a>
            <?php
                for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
            <a href="?page=petugas&hal=<?php echo $x ?>"><?php echo $x; ?></a>
            <?php
                }
                ?>
            <a <?php if ($halaman < $total_halaman) {
                        echo "href='?page=petugas&hal=$next'";
                    } ?>>Next</a>
        </div>
    </center>
</main>
<?php
}
?>