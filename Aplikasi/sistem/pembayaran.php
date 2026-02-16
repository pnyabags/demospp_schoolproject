<?php
if (@$_SESSION['level_user'] == 'siswa') {
    echo "<script>alert('Anda Bukan Admin atau Petugas');location.href='dashboard.php?page=histori';</script>";
} else {
?>
    <main class="input">
        <section class="input-header">
            <h1>Pembayaran SPP</h1>
            <span></span>
        </section>
        <form class="form" action="" method="GET">
            <section class="input-body">
                <input type="hidden" name="page" value="pembayaran">
                <label for="nis">NIS</label>
                <input list="cari_nis" name="cari_nis" id="nis" placeholder="Silahkan cari NIS siswa..." required autofocus autocomplete="off">
                <datalist id="cari_nis">
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
            </section>
            <button type="submit" name="cari">CARI SISWA</button>
        </form>

        <?php
        if (isset($_GET['cari'])) {
            include('../koneksi.php');
            $cari = $_GET['cari_nis'];
            if ($cari != '') {
                $select = mysqli_query($koneksi, "SELECT * FROM siswa JOIN kelas USING (id_kelas) JOIN spp USING (id_spp) WHERE nis='$cari'");

                if (mysqli_num_rows($select) > 0) {
                    $siswa = mysqli_fetch_assoc($select);

        ?>
                    <section class="input-header">
                        <h1>Tabel Data Siswa</h1>
                        <span></span>
                    </section>
                    <section class="form">
                        <section class="input-body">
                            <label for="nis">NIS</label>
                            <input type="text" readonly name="nis" id="nis" value="<?= $siswa['nis']; ?>">
                        </section>
                        <section class="input-body">
                            <label for="nama">Nama Siswa </label>
                            <input type="text" readonly name="nama" id="nama" value="<?= $siswa['nama_siswa']; ?>">
                        </section>
                        <section class="input-body">
                            <label for="kelas">Kelas </label>
                            <input type="text" readonly name="kelas" id="kelas" value="<?= $siswa['kelas']; ?>">
                        </section>
                        <section class="input-body">
                            <label for="tahun_ajaran">Tahun Ajaran </label>
                            <input type="text" readonly name="tahun_ajaran" id="tahun_ajaran" value="<?= $siswa['tahun_ajaran']; ?>">
                        </section>
                    </section>

                    <?php
                    if (@$_SESSION['level_user'] == 'admin') {
                    ?>
                        <section class="table-header">
                            <h1>Tabel Tagihan SPP</h1>
                            <p>Terdapat 36 bulan atau 6 Semester yang harus dibayar oleh <?= $siswa['nama_siswa']; ?> di SMK TI BALI GLOBAL DENPASAR</p>
                            <span></span>
                        </section>

                        <section class="table-body">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Bulan</th>
                                        <th>Jatuh Tempo</th>
                                        <th>Tanggal Bayar</th>
                                        <th>Nominal</th>
                                        <th>Keterangan</th>
                                        <th class="print">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = "SELECT * FROM pembayaran WHERE nis = '$cari' ORDER BY jatuh_tempo ASC LIMIT 36";
                                    $hasil = mysqli_query($koneksi, $query);

                                    foreach ($hasil as $row) :
                                    ?>
                                        <tr>
                                            <td data-label=""><?php echo $no ?></td>
                                            <td data-label=""><?php echo $row['bulan']; ?></td>
                                            <td data-label=""><?php echo $row['jatuh_tempo']; ?></td>
                                            <td data-label=""><?php echo $row['tanggal_bayar']; ?></td>
                                            <td data-label="Nominal"><?php echo "Rp. " . number_format($row['nominal'], 2, ',', '.') ?></td>
                                            <td data-label=""><?php echo $row['keterangan']; ?></td>
                                            <td><?php
                                                if ($row['keterangan'] == 'BELUM LUNAS') {
                                                    echo "<a class='bayar' href='../proses/proses_pembayaran.php?nis=$cari&id_bayar=$row[id_bayar]'>Bayar</a>";
                                                } else {
                                                ?>
                                                    Sudah Bayar
                                                <?php
                                                }
                                                ?>

                                            </td>

                                        </tr>
                                    <?php
                                        $no++;
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </section>
                    <?php
                    } else if (@$_SESSION['level_user'] == 'petugas') {
                    ?>
                        <section class="table-header">
                            <h1>Tabel Tagihan SPP</h1>
                            <p>Terdapat 36 bulan atau 6 Semester yang harus dibayar oleh <?= $siswa['nama_siswa']; ?> di SMK TI BALI GLOBAL DENPASAR</p>
                            <span></span>
                        </section>

                        <section class="table-body">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Bulan</th>
                                        <th>Jatuh Tempo</th>
                                        <th>Tanggal Bayar</th>
                                        <th>Nominal</th>
                                        <th>Keterangan</th>
                                        <th class="print">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = "SELECT * FROM pembayaran WHERE nis = '$cari' ORDER BY jatuh_tempo ASC LIMIT 36";
                                    $hasil = mysqli_query($koneksi, $query);

                                    foreach ($hasil as $row) :
                                    ?>
                                        <tr>
                                            <td data-label=""><?php echo $no ?></td>
                                            <td data-label=""><?php echo $row['bulan']; ?></td>
                                            <td data-label=""><?php echo $row['jatuh_tempo']; ?></td>
                                            <td data-label=""><?php echo $row['tanggal_bayar']; ?></td>
                                            <td data-label="Nominal"><?php echo "Rp. " . number_format($row['nominal'], 2, ',', '.') ?></td>
                                            <td data-label=""><?php echo $row['keterangan']; ?></td>
                                            <td><?php
                                                if ($row['keterangan'] == 'BELUM LUNAS') {
                                                    echo "<a class='bayar' href='../proses/proses_pembayaran.php?nis=$cari&id_bayar=$row[id_bayar]'>Bayar</a>";
                                                    return;
                                                } else {
                                                ?>
                                                    Sudah Bayar
                                                <?php
                                                }
                                                ?>

                                            </td>

                                        </tr>
                                    <?php
                                        $no++;
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </section>
    </main>
<?php
                    } else {
                        echo "<script>
                        alert('NIS tidak ditemukan'); 
                        </script>";
                    }
                }
            }
        }
    }
?>