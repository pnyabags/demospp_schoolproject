<?php

include("../koneksi.php");

$id = $_GET['update_spp'];

$query = "SELECT * FROM spp WHERE id_spp='$id'";
$hasil = mysqli_query($koneksi, $query);
while ($data = mysqli_fetch_assoc($hasil)) {


?>
    <main class="input">
        <section class="input-header">
            <h1>Update Data SPP</h1>
            <span></span>
        </section>
        <form class="form" action="../proses/update/proses_spp.php" method="post">
            <input hidden type="text" name="id_spp" value="<?php echo $data['id_spp']; ?>">
            <section class="input-body">
                <label for="kelas">Tahun Ajaran</label>
                <input type="number" value="<?php echo $data['tahun_ajaran']; ?>" name="tahun_ajaran" id="tahun_ajaran" required autofocus autocomplete="off">
            </section>
            <section class="input-body">
                <label for="jurusan">Nominal Pembayaran</label>
                <input type="number" value="<?php echo $data['nominal']; ?>" name="nominal" id="nominal" required>
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