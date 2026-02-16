<?php

include("../koneksi.php");

$id = $_GET['update_siswa'];

$query = "SELECT * FROM siswa JOIN kelas USING (id_kelas) JOIN spp USING (id_spp) WHERE nis='$id'";
$hasil = mysqli_query($koneksi, $query);
while ($data = mysqli_fetch_assoc($hasil)) {


?>
    <main class="input">
        <section class="input-header">
            <h1>Update Data Siswa</h1>
            <span></span>
        </section>
        <form class="form" action="../proses/update/proses_siswa.php" method="post">
            <input hidden type="text" name="nis" value="<?php echo $data['nis']; ?>">
            <section class="select-body">
                <section class="column">
                    <label for="tahun_ajaran">Tahun Ajaran</label>
                    <select name="id_spp">
                        <?php
                        include("../koneksi.php");
                        $id_spp = $data['id_spp'];
                        $query = "SELECT * FROM spp WHERE id_spp = '$id_spp'";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($rowspp = mysqli_fetch_assoc($hasil)) {
                        ?>
                            <option value="<?php echo $rowspp['id_spp']; ?>"><?php echo $rowspp['tahun_ajaran']; ?></option>
                        <?php
                        }
                        ?>
                        <option value="">--------------------</option>
                        <?php
                        include("../koneksi.php");

                        $query = "SELECT * FROM spp ORDER BY tahun_ajaran ASC";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($rowspp2 = mysqli_fetch_assoc($hasil)) {
                        ?>
                            <option value="<?php echo $rowspp2['id_spp']; ?>"><?php echo $rowspp2['tahun_ajaran']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </section>
            </section>

            <section class="select-body">
                <section class="column">
                    <label for="">Kelas</label>
                    <select name="id_kelas">
                        <?php
                        $id_kelas = $data['id_kelas'];
                        $query = "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($rowkelas1 = mysqli_fetch_assoc($hasil)) {
                        ?>
                            <option value="<?php echo $rowkelas1['id_kelas']; ?>"><?php echo $rowkelas1['kelas']; ?></option>
                        <?php
                        }
                        ?>
                        <option value="">-------------------------</option>
                        <?php
                        include("../koneksi.php");

                        $query = "SELECT * FROM kelas ORDER BY kelas desc";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($rowkelas2 = mysqli_fetch_assoc($hasil)) {
                        ?>
                            <option value="<?php echo $rowkelas2['id_kelas']; ?>"><?php echo $rowkelas2['kelas']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </section>
            </section>

            <section class="input-body">
                <label for="nama_siswa">Nama Siswa</label>
                <input type="text" value="<?php echo $data['nama_siswa']; ?>" name="nama_siswa" id="nama_siswa" required autocomplete="off">
            </section>

            <section class="input-body">
                <input type="text" hidden value="<?php echo $data['password']; ?>" name="password" id="password" required>
            </section>

            <section class="select-body">
                <section class="column">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin">
                        <option value="<?php echo $data['jenis_kelamin']; ?>"><?php echo $data['jenis_kelamin']; ?></option>
                        <option value="">============</option>
                        <option value="Laki-laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </section>
            </section>

            <section class="input-body">
                <label for="telepon">Telepon</label>
                <input type="text" value="<?php echo $data['telepon']; ?>" name="telepon" id="telepon" maxlength="15" required>
            </section>

            <section class="input-body">
                <label for="alamat">Alamat</label>
                <input type="text" value="<?php echo $data['alamat']; ?>" name="alamat" id="alamat" required>
            </section>

            <section class="input-body">
                <input type="text" hidden value="<?php echo $data['jatuh_tempo']; ?>" name="jatuh_tempo" id="jatuh_tempo" required>
            </section>
            <button type="submit" name="submit">SIMPAN DATA</button>
        </form>
        <form class="form" action="javascript:history.back()">
            <button type="submit" name="submit">KEMBALI</button>
        </form>
    </main>
<?php
}
?>