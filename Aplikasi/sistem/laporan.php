<?php
if (@$_SESSION['level_user'] == 'petugas') {
    echo "<script>alert('Anda Bukan Admin');location.href='dashboard.php?page=pembayaran';</script>";
} else if (@$_SESSION['level_user'] == 'siswa') {
    echo "<script>alert('Anda Bukan Admin atau Petugas');location.href='dashboard.php?page=histori';</script>";
} else if (@$_SESSION['level_user'] == 'admin') {
?>
<main class="input">
    <section class="tab-layout">
        <input type="radio" name="tab-input" class="tab-radio" id="konten1" checked />
        <label for="konten1" class="tab-label">TANGGAL PEMBAYARAN</label>
        <section class="tab-konten">
            <section class="input-body">
                <form action="../proses/cetak_laporan/laporan-bulanan.php" method="get" class="form" target="_blank">
                    <label for="awal">Tanggal Awal</label>
                    <input type="date" name="awal">
                    <label for="akhir">Tanggal Akhir</label>
                    <input type="date" name="akhir">
                    <button type="submit">Cetak</button>
                </form>
            </section>
        </section>

        <input type="radio" name="tab-input" class="tab-radio" id="konten2" checked />
        <label for="konten2" class="tab-label">CARI SISWA</label>
        <section class="tab-konten">
            <section class="input-body">
                <form action="../proses/cetak_laporan/laporan-siswa.php" method="get" class="form" target="_blank">
                    <label for="nis-label">PILIH NIS</label>
                    <input list="nis" name="nis" id="nis-label" placeholder="Silahkan cari NIS siswa..." required
                        autofocus autocomplete="off">
                    <datalist id="nis">
                        <?php
                            include('../koneksi.php');
                            $query = "SELECT nis, nama_siswa FROM siswa ORDER BY nis DESC";
                            $result = mysqli_query($koneksi, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                        <option value="<?= $row['nis']; ?>"><?= $row['nama_siswa']; ?></option>
                        <?php
                            }
                            ?>
                    </datalist>
                    <button type="submit" name="cari">CARI SISWA</button>
                </form>
            </section>
        </section>

        <input type="radio" name="tab-input" class="tab-radio" id="konten3" checked />
        <label for="konten3" class="tab-label">CARI KELAS</label>
        <section class="tab-konten">
            <section class="input-body">
                <form action="../proses/cetak_laporan/laporan-kelas.php" method="get" class="form" target="_blank">
                    <label for="kelas-label">PILIH KELAS</label>
                    <input list="kelas" name="kelas" id="kelas-label" placeholder="Silahkan cari KELAS..." required
                        autofocus autocomplete="off">
                    <datalist id="kelas">
                        <?php
                            include('../koneksi.php');
                            $query = "SELECT id_kelas, kelas FROM kelas ORDER BY id_kelas DESC";
                            $result = mysqli_query($koneksi, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                        <option value="<?= $row['id_kelas']; ?>"><?= $row['kelas']; ?></option>
                        <?php
                            }
                            ?>
                    </datalist>
                    <button type="submit">CARI KELAS</button>
                </form>
            </section>
        </section>
    </section>
</main>
<?php
}