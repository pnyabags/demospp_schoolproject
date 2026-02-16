<?php

include("../koneksi.php");

$id = $_GET['update_kelas'];

$query = "SELECT * FROM kelas WHERE id_kelas='$id'";
$hasil = mysqli_query($koneksi, $query);
while ($data = mysqli_fetch_assoc($hasil)) {


?>
    <main class="input">
        <section class="input-header">
            <h1>Update Data Kelas</h1>
            <span></span>
        </section>
        <form class="form" action="../proses/update/proses_kelas.php" method="post">
            <input hidden type="text" name="id_kelas" value="<?php echo $data['id_kelas']; ?>">
            <section class="input-body">
                <label for="kelas">Kelas</label>
                <input type="text" value="<?php echo $data['kelas']; ?>" name="kelas" id="kelas" autofocus autocomplete="off">
            </section>
            <section class="input-body">
                <label for="jurusan">Jurusan</label>
                <input type="text" value="<?php echo $data['jurusan']; ?>" name="jurusan" id="jurusan">
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