<?php

include("../koneksi.php");

$id = $_GET['update_petugas'];

$id_petugas = $_SESSION['id_petugas'];
$query = "SELECT * FROM petugas WHERE id_petugas='$id'";
$hasil = mysqli_query($koneksi, $query);
while ($data = mysqli_fetch_assoc($hasil)) {


?>
    <main class="input">
        <section class="input-header">
            <h1>Update Data Petugas</h1>
            <span></span>
        </section>
        <form class="form" action="../proses/update/proses_petugas.php" method="post">
            <input hidden type="text" name="id_petugas" value="<?php echo $data['id_petugas']; ?>">
            <section class="input-body">
                <label for="nama_petugas">Nama Petugas</label>
                <input type="text" name="nama_petugas" id="nama_petugas" value="<?php echo $data['nama_petugas']; ?>" required autofocus autocomplete="off">
            </section>
            <section class="input-body">
                <label for="telepon">Telepon</label>
                <input type="number" name="telepon" id="telepon" value="<?php echo $data['telepon']; ?>" maxlength="15" required autocomplete="off">
            </section>
            <section class="input-body">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" value="<?php echo $data['alamat']; ?>" required autocomplete="off">
            </section>
            <section class="input-body">
            <input type="text" hidden name="password" id="password" value="<?php echo $data['password']; ?>" required>
        </section>
        <?php
        $query1 = "SELECT * FROM petugas";
        $hasil1 = mysqli_query($koneksi, $query);
        foreach ($hasil1 as $row) :
        endforeach;
        if ($row['id_petugas'] == $id_petugas) {
            ?>  
            <section class="input-body">
                    <label for="level_user">Level User</label>
                    <input type="text" readonly name="level_user" id="password" value="<?php echo $data['level_user']; ?>" required> 
            </section>
            <?php
        } else {
            ?>
            <section class="select-body">
                <section class="column">
                    <label for="level_user">Level User</label>
                    <select name="level_user" id="level_user">
                        <option value="<?php echo $data['level_user']; ?>"><?php echo $data['level_user']; ?></option>
                        <option value="">============</option>
                        <option value="admin">Admin</option>
                        <option value="petugas">Petugas</option>
                    </select>
                </section>
            </section>
        <?php
        }
        ?>
            <button type="submit" name="submit">SIMPAN DATA</button>
        </form>
        <form class="form" action="javascript:history.back()">
            <button type="submit" name="submit">KEMBALI</button>
        </form>
    </main>
<?php
}
?>