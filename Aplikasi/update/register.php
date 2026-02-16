<?php

include("../koneksi.php");

$id = $_GET['update_petugas'];

$query = "SELECT * FROM login WHERE id_petugas='$id'";
$hasil = mysqli_query($koneksi, $query);
while ($data = mysqli_fetch_assoc($hasil)) {


?>
    <main class="input">
        <section class="input-header">
            <h1>Update Data Register Petugas</h1>
            <span></span>
        </section>
        <form class="form" action="../proses/update/proses_petugas.php" method="post">
            <input hidden type="text" name="id_petugas" value="<?php echo $data['id_petugas']; ?>">
            <section class="input-body">
                <label for="username">username</label>
                <input type="text" name="username" id="username" value="<?php echo $data['username']; ?>" required autofocus autocomplete="off">
            </section>
            <section class="input-body">
                <label for="password">Telepon</label>
                <input type="number" name="password" id="password" value="<?php echo $data['password']; ?>" maxlength="15" required autocomplete="off">
            </section>
            <section class="input-body">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" value="<?php echo $data['alamat']; ?>" required autocomplete="off">
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