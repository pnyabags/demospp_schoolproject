<main class="input">
    <section class="input-header">
        <h1>Insert Data Siswa</h1>
        <span></span>
    </section>
    <form class="form" action="../proses/insert/proses_siswa.php" method="post">
        <section class="select-body">
            <section class="column">
                <label for="tahun_ajaran">Tahun Ajaran</label>
                <select name="id_spp">
                    <?php
                include("../koneksi.php");

                $query = "SELECT * FROM spp ORDER BY tahun_ajaran ASC";
                $hasil = mysqli_query($koneksi, $query);
                while ($row = mysqli_fetch_assoc($hasil)) {
                ?>
                    <option value="<?php echo $row['id_spp']; ?>"><?php echo $row['tahun_ajaran']; ?></option>
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
                include("../koneksi.php");

                $query = "SELECT * FROM kelas ORDER BY kelas ASC";
                $hasil = mysqli_query($koneksi, $query);
                while ($row = mysqli_fetch_assoc($hasil)) {
                ?>
                    <option value="<?php echo $row['id_kelas']; ?>"><?php echo $row['kelas']; ?></option>
                    <?php
                }
                ?>
                </select>
            </section>
        </section>

        <section class="input-body">
            <label for="nama_siswa">Nama Siswa</label>
            <input type="text" name="nama_siswa" id="nama_siswa" required autocomplete="off">
        </section>

        <section class="input-body">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" required>
        </section>
        
        <section class="select-body">
            <section class="column">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin">
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </section>
        </section>

        <section class="input-body">
            <label for="telepon">Nomor Telepon</label>
            <input type="number" name="telepon" id="telepon" maxlength="15" required>
        </section>

        <section class="input-body">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" required>
        </section>

        <section class="input-body">
            <label for="jatuh_tempo">Jatuh Tempo Pembayaran</label>
            <input type="date" name="jatuh_tempo" id="jatuh_tempo" required>
            <p>*SETIAP JATUH TEMPO ADALAH TANGGAL 10</p>
        </section>
        <button type="submit" name="submit">SIMPAN DATA</button>
    </form>
    <form class="form" action="javascript:history.back()">
        <button type="submit" name="submit">KEMBALI</button>
    </form>
</main>