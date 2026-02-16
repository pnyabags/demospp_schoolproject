<?php
include "../../koneksi.php";

$id = htmlspecialchars($_POST['id_kelas']);
$kelas = htmlspecialchars($_POST['kelas']);
$jurusan = htmlspecialchars($_POST['jurusan']);

$query = "UPDATE kelas SET 
id_kelas='$id', kelas='$kelas', jurusan='$jurusan' WHERE id_kelas='$id'";

$hasil = mysqli_query($koneksi, $query);

if (!$hasil) {
    die("Data Gagal" .mysqli_error($koneksi));
} else {
    echo "
    <script>
    alert('Data Berhasil Diubah');window.location='../../login/dashboard.php?page=kelas';
    </script>
    ";
}
?>